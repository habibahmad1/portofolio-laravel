<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Models\Contact;

Route::get('/', function () {
    return view('homepage.index', [
        "contact" => Contact::all()
    ]);
});

Route::post('/contact', [ContactController::class, 'store'])->name('contact.submit');

Route::delete('/contact/{contact}', [ContactController::class, 'destroy'])->name('contact.destroy');

Route::get('/contact/{name}/edit', [ContactController::class, 'edit'])->name('contact.edit');

Route::put('/contact/{contact}', [ContactController::class, 'update'])->name('contact.update');

Route::get('/contact/{name}', [ContactController::class, 'show'])->name('contact.show');
