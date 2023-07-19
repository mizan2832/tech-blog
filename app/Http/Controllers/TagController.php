<?php

namespace App\Http\Controllers;

use App\Models\admin\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = Tag::all();
        return view('backend.pages.tag.index')->withTags($tags);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:tags|max:20',
            'slug' => 'required',
        ]);

        $tag = new Tag();
        $tag->name = $request->name;
        $tag->slug = $request->slug;
        $tag->save();
         return redirect(route('admin.tag.index'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\admin\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function show(Tag $tag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\admin\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $tag = Tag::find($id);
        $tags = Tag::all();
        return view('backend.pages.tag.create')->withTag($tag)->withTags($tags);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\admin\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $validated = $request->validate([
            'name' => 'required|unique:tags|max:20',
            'slug' => 'required',
        ]);

         $tag = Tag::find($id);
         $tag->name = $request->name;
         $tag->slug = $request->slug;
         $tag->save();

         return redirect(route('admin.tag.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\admin\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $tag = Tag::find($id);
        $tag->delete();
        return redirect(route('admin.tag.index'));
    }
}
