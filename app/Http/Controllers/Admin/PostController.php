<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Post;
use App\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('admin.post.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.post.create',compact('categories','tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Post $post , Request $request)
    {
        $request->validate([
           'title' => 'required|min:3|unique:posts',
           'category' => 'required',
           'description' => 'required',
           'image' => 'required|image'
        ]);
        $post = $post->create([
            'title' => $request->title,
            'category_id' => $request->category,
            'description' => $request->description,
        ]);

        $post->tags()->sync($request->tags);

        $image = $request->file('image');
        $image_name = $post->id.'_'.time().'.jpg';
        $destination = public_path().'/upload/post/'.$post->id;
        File::makeDirectory($destination,0777,true,true);
        if ($image->move($destination,$image_name)) {
            $post->update([
               'image' => $image_name
            ]);
        }else {
            return redirect()->route('admin.post.index')->with('image_error','مقاله ثبت شد ولی تصویر اپلود نشد !');
        }
        return redirect()->route('admin.post.index')->with('image_success','مقاله با موفقیت ثبت شد !');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        // delete post
        $post->delete();
        // delete image post
        $path = public_path("upload/post/$post->id");
        if (File::exists($path)) {
            File::deleteDirectory($path);
        }
        // delete tags post
        $post->tags()->detach($post->tags);

        return redirect()->back();
    }
}
