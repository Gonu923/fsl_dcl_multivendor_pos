<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use Illuminate\Support\Facades\Storage;
use App\Models\Category;
use App\Models\Subcategory;



class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->wantsJson()) {
            return response(
                Category::all()
            );
        }
        $categories = Category::latest()->paginate(10);
        $subcategories = Subcategory::latest()->paginate(10);
        return view('categories.index', compact('subcategories'))->with('categories', $categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryRequest $request)
    {
        // for ($i=1; $i < 48; $i++) {
        //     $arry[] = [
        //         'category_name' => 'Category Name'.$i,
        //         'category_image' => 'cat_img.jpg',
        //     ];
        // }
        // Category::insert($arry);

        $avatar_path = '';

        if ($request->hasFile('category_image')) {
            $avatar_path = $request->file('category_image')->store('categories', 'public');
        }

        $category = Category::create([
            'category_name' => $request->category_name,
            'category_image' => $avatar_path,
        ]);

        if (!$category) {
            return redirect()->back()->with('error', 'Sorry, there\'re a problem while creating category.');
        }
        return redirect()->route('categories.index')->with('success', 'Success, your category have been created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategoryRequest  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $category->category_name = $request->category_name;
        if ($request->hasFile('category_image')) {
            // Delete old avatar
            if ($category->category_image) {
                Storage::delete($category->category_image);
            }
            // Store avatar
            $avatar_path = $request->file('category_image')->store('categories', 'public');
            // Save to Database
            $category->category_image = $avatar_path;
        }

        if (!$category->save()) {
            return redirect()->back()->with('error', 'Sorry, there\'re a problem while updating category.');
        }
        return redirect()->route('categories.index')->with('success', 'Success, your category have been updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        if ($category->category_image) {
            Storage::delete($category->category_image);
        }

        $category->delete();

       return response()->json([
           'success' => true
       ]);
    }
}
