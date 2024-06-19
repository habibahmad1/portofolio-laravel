<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Models\Contact;

Route::get('/', function () {
    return view('homepage.index', [
        "contact" => Contact::all()
    ]);
});

//Route form contact
Route::post('/contact', [ContactController::class, 'store'])->name('contact.submit');

//Route delete
Route::delete('/contact/{contact}', [ContactController::class, 'destroy'])->name('contact.destroy');

// Route form edit contact
Route::get('/contact/{name}/edit', [ContactController::class, 'edit'])->name('contact.edit');

// Route update contact
Route::put('/contact/{contact}', [ContactController::class, 'update'])->name('contact.update');

// Route detail contact
Route::get('/contact/{name}', [ContactController::class, 'show'])->name('contact.show');
