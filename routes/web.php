<?php

use App\Http\Controllers\CardController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\PanierController;
use App\Http\Controllers\PayementController;
use App\Http\Controllers\PaypalController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VenteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function(){
    return view('pages.home');
})->name('acceuil');

Route::get('/vente', function(){
    return view('pages.ventes.vente');
})->name('vente');

Route::get('/about', function(){
    return view('pages.nhk_networking.about');
})->name('A propos');
/*
Route::get('/laptop', function(){
    return view('pages.ventes.ordinateurs.index');
})->name('laptop');
*/
Route::get('/administrateur', function(){
    return view('admin.dash');
})->name('administrateur');

/*Route::get('/user-index', function(){
    return view('admin.users.index');
})->name('gestion utilisateur');*/

Route::get('/contact', function () {
    return view('pages.nhk_networking.contact');
})->name('contact');

Route::get('/authentification', function(){
    return view('admin.auth.login');
})->name('authentification');

Route::get('/register', function(){
    return view('admin.auth.register');
})->name('register');

Route::get('/produits', function(){
    return view('admin.produits.index');
});

Route::get('/commandes', function(){
        return view('admin.commandes.index');
});

Route::post('paypal/payment', [PaypalController::class, 'payment'])->name('paypal');
Route::get('paypal/success', [PaypalController::class, 'success'])->name('paypal_sucess');
Route::get('paypal/cancel', [PaypalController::class, 'cancel'])->name('paypal_cancel');

Route::post('payment/tmoneyorflooz', [PaypalController::class, 'TmoneyOrFlooz'])->name('paiement');





// Route::get('Paygate/payment', [PayementController::class, 'ProcessPayement'])->name('paiement');
// Route::post('confirmation', 'PayementController@payementConfirmation')->name('paiement.confirmation');
// routes/web.php

//Route::post('/cart/add/{produit}', 'CartController@addToCart')->name('cart.add');

//Route::get('/panier', [PanierController::class, 'afficherContenuPanier'])->name('panier.contenu');


Route::resources([
'users'=>UserController::class,
'clients'=>ClientController::class,
'commandes'=>CommandeController::class,
'produits'=>ProduitController::class,
'ventes'=>VenteController::class,
'cart'=>CardController::class,
'panier'=>PanierController::class,
'paiement'=>PayementController::class,
]);

Route::get('/create-user', function(){
return view('admin.users.create_or_edite');
});

Route::get('/dashboard', function () {
    return view('admin.dash');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
