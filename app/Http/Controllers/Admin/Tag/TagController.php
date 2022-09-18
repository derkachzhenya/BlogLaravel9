<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTagRequest;
use App\Http\Requests\UpdateTagRequest;
use App\Models\Tag;

class TagController extends Controller
{
   
    public function index()
    {
        $tags=Tag::all();
        return view('admin.tags.index', compact('tags'));
    }

   
    public function create()
    {
        return view('admin.tags.create');
    }

   
    public function store(StoreTagRequest $request)
    {
        $data=$request->validated();
        Tag::firstOrCreate($data);
        return redirect()->route('admin.tag.index');
    }

   
    public function show(Tag $tag)
    {
        return view('admin.tags.show', compact('tag'));
    }

   
    public function edit(Tag $tag)
    {
        return view('admin.tags.edit', compact('tag'));
    }

   
    public function update(UpdateTagRequest $request, Tag $tag)
    {
        $data=$request->validated();
        $tag->update($data);
        return view('admin.tags.show', compact('tag'));
    }

    
    public function destroy(Tag $tag)
    {
        $tag->delete();
        return redirect()->route('admin.tag.index', compact('tag'));
    }
}
