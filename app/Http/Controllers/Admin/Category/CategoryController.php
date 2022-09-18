<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;

class CategoryController extends Controller
{
    
    public function index()
    {
        $categories=Category::all();
        return view('admin.categories.index', compact('categories'));
    }

  
    public function create()
    {
        return view('admin.categories.create');
    }

   
    public function store(StoreCategoryRequest $request)
    {
        $data=$request->validated();
        Category::firstOrCreate($data);
        return redirect()->route('admin.category.index');


    }

   
    public function show(Category $category)
    {
        return view('admin.categories.show', compact('category'));
    }

    
    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

  
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $data=$request->validated();
        $category->update($data);
        return view('admin.categories.show', compact('category'));
    }

  
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('admin.category.index', compact('category'));
    }
}
