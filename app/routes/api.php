<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TerminController;
use App\Http\Controllers\TretmanController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

 
Route::group(['middleware' => ['auth:sanctum']], function () {//ako je korisnik ulogovan moze da vrsi operacije dodavanja, azuriranja i brisanja
    Route::get('/profiles', function (Request $request) { //ovo nam omogucava da prikazemo ulogovanog korisnika
        return auth()->user();
    });
 
    Route::resource('termini', TerminController::class)->only(['update', 'store', 'destroy']);
    
   

    Route::post('/logout', [AuthController::class, 'logout']); //ako je korisnik ulogovan moze da se odjavi
});
//ovo mogu da vide svi korisnici ( i ulogovani i neulogovani)
Route::get('users',[UserController::class,'index']);
Route::get('users/{id}',[UserController::class,'show']);

Route::get('termini',[TerminController::class,'index']);
Route::get('termini/{id}',[TerminController::class,'show']);


Route::get('tretmani',[TretmanController::class,'index']);
Route::get('tretmani/{id}',[TretmanController::class,'show']);