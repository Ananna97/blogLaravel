<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;


class BlogController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function getIndex() {
		$posts = Post::orderBy('id', 'desc')->paginate(5);

		return view('blog.index')->withPosts($posts);
	}

    public function getSingle($slug) {
    	// fetch from the DB based on slug
    	$post = Post::where('slug', '=', $slug)->first();

    	// return the view and pass in the post object
    	return view('blog.single')->withPost($post);
    }

    public function search(Request $request)
    {

        //search after at least 3 minimum characters

        $request->validate([
            'query' => 'required|min:3',
        ]);

        $query = $request->input('query');

        $posts = Post::where('title', 'like', "%$query%")
                            ->orWhere('body', 'like', "%$query%")
                           ->orWhere('slug', 'like', "%$query%")
                            ->orderBy('id', 'desc')->paginate(3);

        return view('blog.search')->with('posts', $posts);
    }
}
