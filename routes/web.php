<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListBarangController;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', [HomeController::class, 'contact']);

Route::get('/user/{id}', function ($id) {
    return 'User dengan ID' . $id;
});

Route::prefix('admin')->group(function () {
    route::get('/dashboard', function () {
        return 'admin dashboard';
    });

    Route::get('/users', function () {
        return 'admin users';
    });
});

/*Route::get('/listbarang/{id}/{nama}', function($id, $nama){
    return view('list_barang', compact('id','nama'));
});
*/
route::get('/listbarang/{id}/{nama}', [ListBarangController::class,'tampilkan']);
