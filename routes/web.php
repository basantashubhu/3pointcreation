<?php

use App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => 'admin',
    'middleware' => 'auth',
], function () {

    Route::get('', [Admin\DashboardController::class, 'index']);

    Route::post('menu-item', [Admin\MenuItemController::class, 'store']);
    Route::post('menu-item/{menuItem}/update', [Admin\MenuItemController::class, 'update']);
    Route::post('menu-item/{menuItem}/delete', [Admin\MenuItemController::class, 'destroy']);

    Route::post('menu-item/{menuItem}', [Admin\MenuItemController::class, 'storePost']);
    Route::post('menu-post/{post}/update', [Admin\MenuItemController::class, 'updatePost']);
    Route::post('menu-post/{post}/delete', [Admin\MenuItemController::class, 'destroyPost']);

});

Route::get('login', function () {
    return view('login');
})->name('login');

Route::post('login', function () {
    $user = \App\Models\User::where('email', request('email'))->first();
    if ($user && Hash::check(request('password'), $user->password)) {
        auth()->login($user);
        return redirect('/admin');
    }

    return back();
});

Route::get('/', function () {
    $menus = \App\Models\MenuItem::all();
    return view('welcome', compact('menus'));
});

Route::get('{slug}', function ($slug) {
    $menu = \App\Models\MenuItem::where('slug', $slug)->with('posts')->first();
    $menus = \App\Models\MenuItem::all();
    return view('page', compact('menu', 'menus'));
});
