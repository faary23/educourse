<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BimbelController;

Route::get('/', function () {
    $ctrl = new BimbelController();
    $data = $ctrl->getBimbel()->toArray();
    return view('dashboard', ['data' => $data]);
})->name('home');

Route::get('/online', function () {
    $ctrl = new BimbelController();
    $data = $ctrl->getOnlineBimbel()->toArray();
    return view('onlinepage', ['data' => $data]);
})->name('online');

Route::get('/offline', function () {
    $ctrl = new BimbelController();
    $data = $ctrl->getOfflineBimbel()->toArray();
    return view('offlinepage', ['data' => $data]);
})->name('offline');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/detail/{id?}', function ($id) {
    $ctrl = new BimbelController();
    $data = $ctrl->getDetail($id);
    return view('detail', ['data' => $data]);
})->name('detail');

Route::get('/search', [BimbelController::class, 'search'])->name('search');

Route::get('/bimbel', [BimbelController::class, 'getBimbel']);
