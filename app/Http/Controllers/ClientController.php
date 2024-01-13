<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Client;
use App\Models\Employe;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Mail\NotificationsMail;
use Illuminate\Support\Facades\Mail;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $liste_clients =User::where('status' ,'client')->get();
        //dd($liste_employers);
        return view('admin.clients.index', compact('liste_clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.clients.create_or_edite');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $password = Str::password(8, true, true, true, false);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' =>$password,
            'status' => 'client',
        ]);

        Client::create([
            'user_id' => $user->id,
         ]);

        // Envoyer un email à l'utilisateur avec ses identifiants

        //$user = User::all()->first();
        Mail::to($user->email)->send(new NotificationsMail($user,$password));


        return redirect()->route('clients.index' );

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
    public function destroy(User $user)
    {
        //
        $user->delete();

        return redirect()->back();
    }
}
