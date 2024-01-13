<!DOCTYPE html>
<html>
<head>
    <!-- Liens vers les fichiers CSS Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                    <h1 class="display-4">Bienvenue sur NHK networking</h1>
                    <p class="lead">Nous sommes ravis de vous avoir parmi nous ! Voici vos identifiants :</p>
                    <ul>
                        <li><strong>Nom d'utilisateur:</strong> {{ $user->name }}</li>
                        <li><strong>Mot de passe:</strong> {{ $password }}</li>
                    </ul>

                    <a href="http://192.168.60.155:8000/authentification" target="_blank">Se connecter</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
