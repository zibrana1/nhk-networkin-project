@extends('admin.layouts.app', ['activePage' => 'commandes', 'title' => 'NHK networking', 'navName' => 'Page Commande', 'activeButton' => 'laravel'])

@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card data-tables">

                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">Liste des Commandes</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="#" class="btn btn-success shadow p-2 m-2 bg-green">Passer une commande</a>
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
                                    <th>Nom du Produit</th>
                                    <th>Montant</th>
                                    <th>Date Enregistrement</th>
                                    <th>Nom du client</th>
                                    <th>Adresse</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Nom du Produit</th>
                                    <th>Montant</th>
                                    <th>Date Enregistrement</th>
                                    <th>Nom du client</th>
                                    <th>Adresse</th>
                                    <th>Actions</th>
                                </tr>
                            </tfoot>
                            <tbody>

                                <!--tr>
                                    <td>Admin Admin</td>
                                    <td>admin@lightbp.com</td>
                                    <td>2020-02-25 12:37:04</td>
                                    <td class="d-flex justify-content-end">

                                        <a href="#"><i class="fa fa-edit"></i></a>
                                    </td>
                                </!--tr-->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection