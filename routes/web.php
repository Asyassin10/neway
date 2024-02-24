<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Controller;

use App\Models\Blog;
use App\Models\Contact;
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

Route::get('/', [Controller::class, 'home'])->name('home');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');
Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/dashboard', function () {
        $posts = Blog::all();
        $contacts = Contact::all();
        $countposts = count($posts);
        $countcontacts = count($contacts);
        return view('dashboard.dashboard')->with("countcontacts", $countcontacts)->with("countposts", $countposts);
    })->name("dashboard");
    Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');



    //blogs
    Route::get('/blogs', [BlogController::class, 'index'])->name('blog');
    Route::get('/blog-add', [BlogController::class, 'create'])->name('add-blog');
    Route::post('/blog/store', [BlogController::class, 'store'])->name('blogs.store');
    Route::post('/blog/update/{slug}', [BlogController::class, 'update'])->name('blogs.update');
    Route::get('/blog/edit/{slug}', [BlogController::class, 'edit'])->name('blogs.edit');
    Route::delete('/blogs/destroy/{slug}', [BlogController::class, 'destroy'])->name('blogs.destroy');

});

require __DIR__ . '/auth.php';
