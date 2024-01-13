@extends('admin.layouts.app' ,['activePage' => 'Clients', 'title' => ' NHK networking', 'navName' =>'Page client', 'activeButton' => 'laravel'])
@section('content')


    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card data-tables">

                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h2 class="mb-0">Clients</h2>
                                </div>
                                <div class="col-4 text-right">
                                    <a href="{{ route('clients.create') }}"
                                        class="btn btn-success shadow p-2 m-2 bg-green">Nouveau client</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 mt-2">
                        </div>

                        <div class="toolbar">
                            <!--        Here you can write extra buttons/actions for the toolbar              -->
                            <h4 class="mb-0">Vous pouvez enregistrer, supprimer ou mettre à jour un client</h4>
                        </div>
                        <div class="card-body table-full-width table-responsive">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th><strong>Nom</strong></th>
                                        <th>E-mail</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($liste_clients as $clt)
                                        <tr>

                                            {{-- @dd($liste_clients) --}}
                                            <td></td>
                                            <td>{{ $clt->name }} </td>
                                            <td>{{ $clt->email }} </td>
                                            <td>{{ $clt->status }}</td>
                                            <td class="d-flex justify-content-center">
                                                <a href="{{ route('users.edit', $clt)}}"><i class="fa fa-edit"></i></a>
                                                <form action="{{ route('users.destroy', $clt) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="no_propas"
                                                        style="border: 0;
                                        background-color: transparent">
                                                        <i class=" cusrsor-pointer fa fa-trash"
                                                            style="color:
                                        red"></i>
                                                    </button>

                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                    <script>
                                        alert("Aucun client n'est Enregistrer")
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
@endsection
