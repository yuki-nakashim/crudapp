<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    public function index() {

        $posts = Post::orderBy('created_at', 'desc')->paginate(10);

        return view('index', ['posts' => $posts])->with(['posts' => $posts]);
    }

    public function show(Post $post)
    {
        return view('posts.show')->with(['post' => $post]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(PostRequest $request)
    {
        $post = new Post();
        $post->name = $request->name;
        $post->email = $request->email;
        $post->postcode = $request->postcode;
        $post->prefecture = $request->prefecture;
        $post->city = $request->city;
        $post->local = $request->local;
        $post->street_address = $request->street_address;
        $post->business_hour = $request->business_hour;
        $post->regular_holiday = $request->regular_holiday;
        $post->phone = $request->phone;
        $post->fax = $request->fax;
        $post->url = $request->url;
        $post->license_number = $request->license_number;
        $post->image = $request->image;
        $post->save();

        $image_name = 'image_' . $post->id . '.png';
        $request->file('image')->storeAs('public/uploads/file', $image_name);
        $post->save();

        return redirect()->route('posts.index')->with('flash_message', '記入内容を投稿しました。');;
    }

    public function edit(Post $post)
    {
        return view('posts.edit')->with(['post' => $post]);
    }

    public function update(PostRequest $request, Post $post)
    {
        $post->name = $request->name;
        $post->email = $request->email;
        $post->postcode = $request->postcode;
        $post->prefecture = $request->prefecture;
        $post->city = $request->city;
        $post->local = $request->local;
        $post->street_address = $request->street_address;
        $post->business_hour = $request->business_hour;
        $post->regular_holiday = $request->regular_holiday;
        $post->phone = $request->phone;
        $post->fax = $request->fax;
        $post->url = $request->url;
        $post->license_number = $request->license_number;
        $post->image = $request->image;
        $image_name = 'image_' . $post->id . '.png';
        $request->file('image')->storeAs('public/uploads/file', $image_name);

        $post->save();

        return redirect()->route('posts.index')->with('flash_message', '編集した内容を保存しました。');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('posts.index')->with('flash_message', '選択された内容を削除しました。');;
    }
}
