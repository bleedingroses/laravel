<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Member;

class CategoryController extends Controller
{
    public function profile($id)
    {
        $category = Category::find($id);
        return view('category.profile', [
            'category' => $category,
            "active" => 'categories',
            "title" => "Divisi"]);   
    }
}
