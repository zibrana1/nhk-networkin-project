<?php

namespace App\Http\Controllers;

use App\Mail\NotificationsMail;
use App\Models\User;
use App\Models\Employe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $liste_employers =User::whereNot('status' ,'client')->get();
        //dd($liste_employers);
        return view('admin.users.index', compact('liste_employers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.users.create_or_edite');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $user = User::create($request->all());

        // Envoyer un email à l'utilisateur avec ses identifiants

        //Mail::to($user->email)->send(new NotificationsMail($user));


        return redirect()->route('users.index' );

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
