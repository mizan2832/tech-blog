<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin\Category;

class CategoryController extends Controller
{
    public function index() {
        $categories = Category::all();
        return view('backend.pages.category.index')->withCategories($categories);
    }

    public function create(Request $request) {

        $input = $request->all();

        $validated = $request->validate([
            'name' => 'required|unique:categories|max:20',
            'slug' => 'required',
        ]);

        $category = new Category();
        $category->name = $request->name;
        $category->slug = $request->slug;
        $category->save();
         return redirect(route('admin.category.index'));

    }
}
