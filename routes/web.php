<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact', function (Request $request) {
    $request->validate([
        'nama'  => 'required|string|max:100',
        'email' => 'required|email',
        'pesan' => 'required|string',
    ]);

    return back()->with('success', 'Terima kasih, ' . $request->nama . '! Pesan Anda telah berhasil dikirim.');
})->name('contact.send');