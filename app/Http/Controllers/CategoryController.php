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

    public function edit($id)
    {
         $category = Category::find($id);
         $categories = Category::all();
        return view('backend.pages.category.create')->withCategory($category)->withCategories($categories);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|unique:categories|max:20',
            'slug' => 'required',
        ]);

         $category = Category::find($id);
         $category->name = $request->name;
         $category->slug = $request->slug;
         $category->save();

         return redirect(route('admin.category.index'));

    }

    public function destroy($id)
    {

        $category = Category::find($id);
        $category->delete();
        return redirect(route('admin.category.index'));

    }


}
