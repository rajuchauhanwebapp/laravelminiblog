<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('post');
    }


    public function store(Request $request)
    {
        $user = $request->user();
        $post = new Post();
        $post->title = $request->title;
        $post->body = $request->body;

        $user->post()->save($post);
        return redirect(route('post_index'))->with('post_add', 'Post Added Successfully!');

    }


    public function edit(string $id)
    {
        $post = Post::find($id);
        return view('editpost', ['post'=>$post]);
    }

    public function update(Request $request, string $id)
    {
        $post = Post::find($id);
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();
        return redirect(route('dashboard'))->with('post_update', 'Post Updated Successfully!');

    }

    public function destroy(string $id)
    {
        $post = Post::find($id);
        if ($post) {
            $deleted_post = $post->delete();
            return redirect(route('dashboard'))->with('post_delete', 'Post Deleted Successfully!');
        }
        else {
            return redirect(route('dashboard'))->with('post_delete', 'Something is wrong!');
        }
    }
}
