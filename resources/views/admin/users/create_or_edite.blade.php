@extends('admin.layouts.app', ['activePage' => 'Gestion employé', 'title' => 'NHK networking', 'navName' => 'Employers/create', 'activeButton' => 'laravel'])
@section('content')
    <div class="container">
        <h2 class="mt-5">Enregistrer un utilisateur</h2>
        <form action="{{ route('users.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nom">Nom :</label>
                <input type="text" class="form-control" @error('name') is-invalid @enderror id="nom" name="name"
                    required>
            </div>
            @error('name')
                <div class="alert alert-danger">{{ $message }} </div>
            @enderror

            <div class="form-group">
                <label for="prenom">E-mail :</label>
                <input type="email" class="form-control  @error('email')
                    is-invalid
                @enderror" id="prenom" name="email" required>
            </div>
            @error('email')
                <div class="alert alert-danger">{{ $message }} </div>
            @enderror
            <div class="form-group">
                <label for="status">Status :</label>
                <input type="text" class="form-control @error('status')
                    is-invalid
                @enderror"  name="status" id="status" required>
            </div>
            @error('status')
                <div class="alert alert-danger">{{ $message }} </div>
            @enderror
            <div class="form-group">
                <label for="status">PassWord :</label>
                <input type="password" class="form-control @error('password')
                    is-invalid
                @enderror"  name="password" id="password" required>
            </div>
            @error('password')
                <div class="alert alert-danger">{{ $message }} </div>
            @enderror

            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </form>
    </div>
@endsection
