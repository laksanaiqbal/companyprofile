<?php

use App\Models\logo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('user.home', [
        'kelolalogo' => logo::where('status', '1')->get(),
    ]);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware('role:admin')->get('/homeadmin', [App\Http\Controllers\Admin\homeadmincontroller::class, 'index'])->name('homeadmin');
Route::middleware('role:admin')->get('/kelolalogo', [App\Http\Controllers\Admin\KelolaLogoController::class, 'index'])->name('kelolalogo');
Route::middleware('role:admin')->post('/simpanlogo', [App\Http\Controllers\Admin\KelolaLogoController::class, 'store'])->name('simpanlogo');
Route::middleware('role:admin')->post('/updatelogo/{id}', [App\Http\Controllers\admin\KelolaLogoController::class, 'update'])->name('updateLogo');

Route::middleware('role:admin')->get('/kelolaslider', [App\Http\Controllers\Admin\KelolaSliderController::class, 'index'])->name('kelolaslider');
Route::middleware('role:admin')->post('/tambahslider', [App\Http\Controllers\admin\KelolaSliderController::class, 'store'])->name('tambahslider');
Route::middleware('role:admin')->get('/hapusslider/{id}', [App\Http\Controllers\admin\KelolaSliderController::class, 'destroy'])->name('hapusslider');

Route::middleware('role:admin')->get('/kelolaabout', [App\Http\Controllers\admin\KelolaAboutController::class, 'index'])->name('kelolaabout');

Route::middleware('role:admin')->get('/kelolapesan', [App\Http\Controllers\admin\KelolaPesanController::class, 'index'])->name('kelolapesan');

Route::middleware('role:admin')->get('/kelolalayanan', [App\Http\Controllers\admin\KelolaLayananController::class, 'index'])->name('kelolalayanan');
Route::middleware('role:admin')->post('/tambahlayanan', [App\Http\Controllers\admin\KelolaLayananController::class, 'store'])->name('tambahlayanan');

Route::middleware('role:admin')->get('/kelolakontak', [App\Http\Controllers\admin\KelolaKontakController::class, 'index'])->name('kelolakontak');

Route::middleware('role:admin')->get('/kelolaabout', [App\Http\Controllers\admin\KelolaAboutController::class, 'index'])->name('kelolaabout');

Route::get('/login', [App\Http\Controllers\UserHomeController::class, 'login'])->name('login');
Route::get('/register', [App\Http\Controllers\UserHomeController::class, 'register'])->name('register');
