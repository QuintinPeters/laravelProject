<?php
use App\Http\Controllers\productController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('/products',[productController::class, 'index'])->name('product.index');
Route::get('/addProduct',[productController::class, 'create'])->name('product.create');
route::post('/addproducts',[productController::class,'store'])->name('product.store');
route::get('/products/{product}/editProduct',[productController::class,'edit'])->name('product.edit');
route::put('/products/{product}/updateProduct',[productController::class,'update'])->name('product.update');
