@extends('admin.layouts.app' ,['activePage' => 'Produits', 'title' => ' NHK networking', 'navName' 
=>'Page Produit', 'activeButton' => 'laravel'])
@section('content')

<script src="{{ asset('DataTables/datatables.js')}}"></script>
<script src="{{ asset('DataTables/moncss.js')}}"></script>

    {{--<form class="form-inline">
        <div class="input-group">
            <input type="search" class="form-control" 
    placeholder="Rechercher..." style="height:40px; margin-top: 16px; width:30rem; 
margin-left:1rem; border-bottom:solid 1px black; border-left: solid 4px gray">
        </div>
    </form>--}}
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card data-tables">

                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">La liste de Produits</h3>
                            </div>
                            <div class="col-4 text-right">
                                @can('create produit')
                                <a href="{{ route('produits.create')}}" class="btn btn-success 
                                shadow p-2 m-3 bg-green">Ajouter un produit</a>
                                @endcan    
                            </div>
                        </div>
                    </div>

                    <div class="col-12 mt-2">
                    </div>

                    <div class="toolbar">
                        <!--        Here you can write extra buttons/actions for the toolbar              -->
                    </div>
                    <div class="card-body table-full-width table-responsive">
                        <table class="table table-hover table-striped" id="tble">
                            <thead style="background-color:green; ">
                            
                                <tr>
                                    <th style="color:white; font-weight:500;">Nom du produit</th>
                                    <th style="color: white; font-weight:500">Quantité</th>
                                    <th style="color:white; font-weight:500;">photo</th>
                                    <th style="color:white; font-weight:500;">Date  Enregistrement</th>
                                    <th style="color:white; font-weight:500;">Prix Unitaire</th>
                                    <th style="color:white; font-weight:500;">Etat</th>
                                    <th style="color:white; font-weight:500;">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($liste_produits as $produit)
                                <tr>
                                    {{--@dd($liste_produits)--}}
                                    <td>{{ $produit->NomProduit}} </td>
                                    <td>{{ $produit->quantiteStock}} </td>
                                    <td > <img src="images/{{$produit->image}}" alt="Image du produit" width="50px" height="50px"> </td> 
                                    <td> {{$produit->created_at}} </td>
                                    <td>{{ $produit->PrixUnitaire}} </td>
                                    <td style="color: green"><input type="checkbox" name="etat" id="etat" checked>Disponible </td>
                                    <td class="d-flex justify-content-end">
                                        @can('edit produit')
                                        <a href="{{ route('produits.edit', $produit)}}"><i class="fa 
                                            fa-edit"></i></a>
                                        @endcan
                                        @can('delete produit')
                                        <form action="{{ route('produits.destroy',$produit)}}" 
                                        method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="no_propas" style="border: 0; 
                                        background-color: transparent">
                                            <i class=" cusrsor-pointer fa fa-trash" style="color: 
                                        red"></i>
                                        </button>
                                                                                
                                        </form>
                                        @endcan
                                    </td>
                                </tr>
                                @empty
                                <script>
                                     alert("Aucun produit n'est Enregistrer");
                                </script>

                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    new DataTables(#tble, {
        info : false,
        paging: false,
    });
</script>
<script>
    document.getElementById("etat").checked = true;
</script>


@endsection