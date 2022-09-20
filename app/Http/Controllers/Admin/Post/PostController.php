<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Support\Facades\Storage;


class PostController extends Controller
{

    public function index()
    {
        $posts = Post::all();
        return view('admin.posts.index', compact('posts'));
    }


    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.posts.create', compact('categories', 'tags'));
    }


    public function store(StorePostRequest $request)
    {

        try {
        $data = $request->validated();
        $tagIds = $data['tag_ids'];
        unset($data['tag_ids']);
        $data['preview_image'] = Storage::disk('public')->put('/images', $data['preview_image']);
        $data['main_image'] = Storage::disk('public')->put('/images', $data['main_image']);
        $post=Post::firstOrCreate($data);
        $post->tags()->attach($tagIds);
        return redirect()->route('admin.post.index');
        } catch(\Exception $exception){
            abort(404);
        }
    }


    public function show(Post $post)
    {
        return view('admin.posts.show', compact('post'));
    }


    public function edit(Post $post)
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.posts.edit', compact('post', 'categories', 'tags'));
    }


    public function update(UpdatePostRequest $request, Post $post)
    {
        
       
       
        $data = $request->validated();
        $tagIds = $data['tag_ids'];
        unset($data['tag_ids']);
        
        $data['preview_image'] = Storage::disk('public')->put('/images', $data['preview_image']);
        $data['main_image'] = Storage::disk('public')->put('/images', $data['main_image']);
        $post->update($data);
        $post->tags()->sync($tagIds);
        return view('admin.posts.show', compact('post'));
    }


    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('admin.post.index', compact('post'));
    }
}
