<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PayementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('pages.ventes.panier.payement');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function ProcessPayement(String $id){

        $order  = new Order();
        $order->invoice_id = null;
        $order->status = 'initialised';
        $order->identifier = uniqid();
        $order->payment_reference = null; //aucune confirmation du payement pour l'instant
        $order->save();

        $apiToken = env('API_KEY');
        $amount = Session::get('totalAmount');
        $description = "produit encours de payement";
        $returnURL = env('NGROK_URL');

        $orderId = Order::findOrFail($id);

        Session::put($orderId, $order->getKey());

        $paygatePortail = "https://paygateglobal.com/v1/page".
        "?token=$apiToken" .
        "&amount=$amount" .
        "&description=$description" .
        "&identifier=$order->identifier" .
        "&url=$returnURL" ;

        return redirect($paygatePortail);
    }

    public function PayementConfirmation(){
        $order = Order::where('identifier', request()->identifier)->first();
        $order->payment_reference = request()->payment_reference;
        $order->status = 'Payer';
        $order->save();

        return response()->json();
    }
}
