<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Produit;
use App\Models\Commande;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\LigneCommande;
use Illuminate\Support\Carbon;
use function Laravel\Prompts\alert;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

use Illuminate\Support\Facades\Session;
use Srmklive\PayPal\Services\PayPal as PayPalClient;

class PaypalController extends Controller
{
    //
    public function payment(Request $request)
    {
        //dd(Session::get('totalAmount'));
        $nomclient = $request->input('nom');
        $prenomClient = $request->input('prenom');
        $adresseClient = $request->input('adresse');
        $telephoneClient = $request->input('telephone');

        $client = Session::get('client', []);

        $client = [
            'nom' => $nomclient,
            'prenom' => $prenomClient,
            'adresse' => $adresseClient,
            'telephone' => $telephoneClient,
        ];

        Session::put('client', $client);

        $provider = new PayPalClient;
        $provider->setApiCredentials((config('paypal')));
        $paypalToken = $provider->getAccessToken();

        $response = $provider->createOrder([
            "intent" => "CAPTURE",
            "application_context" => [
                "return_url" => route('paypal_sucess'),
                "cancel_url" => route('paypal_cancel')
            ],
            "purchase_units" => [
                [
                    "amount" => [
                        "currency_code" => "USD",
                        "value" => Session::get('totalAmount')
                    ]
                ]
            ]
        ]);
        // dd($response);
        if (isset($response['id']) & $response['id'] != null) {
            foreach ($response['links'] as $link) {
                if ($link['rel'] === 'approve') {
                    return redirect()->away($link['href']);
                }
            }
        } else {
            return redirect()->route('payapl_cancel');
        }
    }

    public function success(Request $request, Client $id)
    {

        $provider = new PayPalClient;
        $provider->setApiCredentials((config('paypal')));
        $paypalToken = $provider->getAccessToken();

        $response = $provider->capturePaymentOrder($request->token);

        //dd($response);
        if (isset($response['status']) & $response['status'] === 'COMPLETED') {

            $cart = Session::get('cart', []);

            foreach($cart as $produitId=>$item){
            $ligneCommande = new LigneCommande();
            $ligneCommande->NomProduit =$item['NomProduit'];
            $ligneCommande->Qte =$item['quantiteStock'];
            $ligneCommande->PrixVenteUnitaire =$item['PrixUnitaire'];
            $ligneCommande->DateVente = Carbon::now();
            $ligneCommande->id_produit = $produitId;
            $ligneCommande->save();

            $produit = Produit::findOrFail($produitId);
            $produit->decrement('quantiteStock', $item['quantiteStock']);
            }

            $id_client = Client::where('user_id', '=', Auth::user()->id)->first();

            //dd($id_client);

            $commande = new Commande();
            $commande->DateCmde = Carbon::now();
            $commande->status = "En cours de livraison";
            $commande->montant = Session::get('totalAmount');
            $commande->methodeDePayement = "paypal";
            $commande->id_clients = $id_client->id;
            $commande->save();


            return "Payment is successful!";
        } else {
            return redirect()->route('paypal_cancel');
        }
    }

    public function cancel()
    {

        return redirect()->route('cart.index');
    }

    public function TmoneyOrFlooz()
    {
        $url = "https://paygateglobal.com/v1/page";

        $params = [
            'token' => 'dd56cdd8-0e93-4426-8f9b-fad71b84bcb7',
            'amount' => Session::get('totalAmount'),
            'identifier' => Str::random(64),
            'url' => route('paypal_sucess'),
        ];
        $response = Http::get($url, $params);
        $token = 'dd56cdd8-0e93-4426-8f9b-fad71b84bcb7';
        $totalAmount = Session::get('totalAmount');

        $returnUrl = $url . "?token=$token"
            . "&amount=$totalAmount"
            . "&identifier=papa"
            . "&url=" . $params["url"];

        return redirect($returnUrl);
    }
}
