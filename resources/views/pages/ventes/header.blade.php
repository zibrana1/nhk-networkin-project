<header class="top-navbar">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('acceuil')}} ">
                <img src="{{ asset('images/logo1_nhknetworking.jpeg') }}" alt="NHK networking" width="80px" />
            </a>
            {{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host"
                aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button> --}}
            {{-- <form class="form-inline">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Rechercher...">
                    <div class="input-group-append">
                        <button class="btn btn-outline-success" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </form> --}}
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <form id="logout-form" action="{{route('logout')}}" method="POST">
                        @csrf<link rel="icon" type="image/jpeg" href="{{  asset('images/logo1_nhknetworking.jpeg')  }}">
                        <a class="text-danger" href="{{route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> {{ __('Se déconnecter') }} </a>
                    </form>

                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    {{--<button onclick="openModal()" style="background-color:transparent; border:none;"> <i class="fa fa-shopping-cart  text-white-50 " id="cart-icon" style="font-size: 25px;"></i><span id="card-count " style="color: red; font-size: 20px;">0</span></a></button>--}}
                    <a href="{{ route('cart.index')}}" target="_self"><i class="fa fa-shopping-cart  text-white-50 " id="cart-icon"></i></a>
                </li>
            </ul>

        </div>
    </nav>
</header>
{{--<script>
    function openNewTab() {
        // Ouvre un nouvel onglet avec les dimensions spécifiées
        window.open('panier', '_blank', 'width=500,height=800');
    }
</script>--}}

{{--<div id="myModal" class="modal">
    <div class="modal-content">
        <span onclick="closeModal()" style="float: right; cursor: pointer;">&times;</span>
            <h2>Votre panier d'achat</h2>
            <!-- Contenu du panier d'achat -->
            <p>Contenu du panier d'achat...</p>
    </div>
</div>
<script>

    function openModal() {
        const modal = document.getElementById('myModal');
        modal.style.display = 'block';
    }

    function closeModal() {
        const modal = document.getElementById('myModal');
        modal.style.display = 'none';
    }

    window.onclick = function(event) {
        const modal = document.getElementById('myModal');
        if (event.target == modal) {
            modal.style.display = 'none';
        }
    }
</script>

<style>
    /* Styles pour la fenêtre modale */
    .modal {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgb(0, 0, 0);
        background-color: rgba(0, 0, 0, 0.4);
        padding-top: 60px;
    }

    .modal-content {
        background-color: #fefefe;
        margin: 5% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 50%;
    }
    h2{
        text-align: center;
    }
</style>--}}
