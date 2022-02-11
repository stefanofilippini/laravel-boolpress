<?php

namespace App\Http\Controllers\Admin;

use App\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function index() {
        return view('admin.create');
    }

    public function store(Request $request) {
        $data = $request->validate([
            'Title' => 'required|max:255|string',
            'description' => 'required|string',
            'thumb' => 'nullable|string',
        ]);
        $post = Post::create($data);
        return redirect()->route('admin.index');
    }

    public function edit($id) {
        $post = Post::findOrFail($id);
        return view('admin.edit', compact('post'));
    }

    public function update(Request $request, $id) {
        $data = $request->validate([
            'Title' => 'required|max:255|string',
            'description' => 'required|string',
            'thumb' => 'nullable|string',
        ]);
        $post = Post::findOrFail($id);
        $post->update($data);
        return redirect()->route('admin.index');
    }

    public function show($id) {
        $post = Post::findOrFail($id);
        return view('admin.show', compact('post'));
    }
}