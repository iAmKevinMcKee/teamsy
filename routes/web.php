<?php

use App\Http\Controllers\DocumentController;
use App\Http\Controllers\HomeController;
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

Route::get('/load-logins', function() {
    $users = App\User::withoutGlobalScopes()->whereNotNull('tenant_id')->get();
    foreach($users as $user) {
        factory(App\Login::class, 1)->create([
            'user_id' => $user->id,
            'tenant_id' => $user->tenant_id,
            'created_at' => now(),
        ]);
    }
    return 'loaded';
});

Route::get('/', [HomeController::class, 'show'])->name('home');

Route::middleware('guest')->group(function () {
    Route::view('login', 'auth.login')->name('login');
    Route::view('register', 'auth.register')->name('register');
});

Route::view('password/reset', 'auth.passwords.email')->name('password.request');
Route::get('password/reset/{token}', 'Auth\PasswordResetController')->name('password.reset');

Route::middleware('auth')->group(function () {
    Route::get('/leave-impersonation', [\App\Http\Controllers\ImpersonationController::class, 'leave'])->name('leave-impersonation');

    Route::view('/team', 'team')->name('team.index');
    Route::view('/team/add-user', 'users.create')->name('users.create');

    Route::view('email/verify', 'auth.verify')->middleware('throttle:6,1')->name('verification.notice');
    Route::get('email/verify/{id}/{hash}', 'Auth\EmailVerificationController')->middleware('signed')->name('verification.verify');

    Route::get('logout', 'Auth\LogoutController')->name('logout');

    Route::view('password/confirm', 'auth.passwords.confirm')->name('password.confirm');
    Route::get('/documents/{user}/{filename}', [DocumentController::class, 'show']);
});
