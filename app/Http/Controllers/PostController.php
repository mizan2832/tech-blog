<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        return view('backend.pages.post.index');
    }

    public function create() {
        return view('backend.pages.post.create');
    }
}
