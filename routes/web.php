<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Models\Category;
use App\Models\Member;
use App\Http\Controllers\CategoryController;

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

Route::get('/', function () {
    return view('home', [
        'active' => 'home',
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'active' => 'about',
        "title" => "About",
        "name" => "Ridho Almy",
        "email" => "almighty.ridho@gmail.com",
        "image" => "ridho.jpg"
    ]);
});

Route::get('/posts', [PostController::class, 'index']);
Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('/member',[MemberController::class, 'show']);
Route::get('/member/tambah',[MemberController::class, 'tambah']);
Route::post('/member/simpan',[MemberController::class, 'simpan']);
Route::get('/member/{id}/ubah',[MemberController::class, 'ubah']);
Route::put('/member/{id}',[MemberController::class, 'update']);
Route::delete('/member/{id}',[MemberController::class, 'destroy']);
Route::get('/category/{id}/profile', [CategoryController::class, 'profile']);

Route::get('/categories', function() {
    return view('categories', [
        'active' => 'categories',
        'title' => 'Post Categories',
        'categories' => Category::all('name')
    ]);
});

Route::get('/categories/{category:slug}', function(Category $category) {
    return view('category', [
        'active' => 'categories',
        'title' => $category->name,
        'posts' => $category->posts,
        'category' => $category->name
    ]);
});

Route::get('/member/manager', function () {
    return view('member.manager', [
        'active' => 'manager',
        "title" => "Data Manager"
    ]);
});
