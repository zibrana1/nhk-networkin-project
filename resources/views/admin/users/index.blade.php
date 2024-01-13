@extends('admin.layouts.app', ['activePage' => 'Gestion employé', 'title' => 'NHK networking', 'navName' =>'Employers', 'activeButton' => 'laravel'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card data-tables">

                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h3 class="mb-0">Utilisateurs</h3>
                                </div>
                                <div class="col-4 text-right">
                                    <a href="{{ route('users.create') }}"
                                        class="btn btn-success shadow p-2 m-2 bg-green">Nouveau utilisateur</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 mt-2">
                        </div>

                        <div class="toolbar">
                            <!--        Here you can write extra buttons/actions for the toolbar              -->
                        </div>
                        <div class="card-body table-full-width table-responsive">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Nom</th>
                                        <th>E-mail</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <!--tfoot>
                                    <tr>
                                        <th>Nom</th>
                                        <th>Prénom</th>
                                        <th>Adresse</th>
                                        <th>Status</th>
                                        <th>Contact</th>
                                        <th>Actions</th>
                                    </tr>
                                </!tfoot-->
                                <tbody>
                                    @forelse ($liste_employers as $employer)
                                        <tr>
                                            <td>{{ $employer->name }} </td>
                                            <td>{{ $employer->email }} </td>
                                            <td>{{ $employer->status}} </td>
                                            <td class="d-flex justify-content-center">
                                                <a href="{{ route('users.edit', $employer)}} "><i class="fa fa-edit"></i></a>
                                                <form action="{{ route('users.destroy', $employer)}} " method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="no_propas"
                                                        style="border: 0; background-color: transparent">
                                                        <i class=" cusrsor-pointer fa fa-trash" style="color: red"></i>
                                                    </button>

                                            </td>
                                        </tr>
                                    @empty
                                        Aucun employer n'est Enregistrer
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
