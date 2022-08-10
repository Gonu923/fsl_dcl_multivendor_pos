<?php

namespace App\Http\Controllers;

use App\Models\Subcategory;
use App\Models\Category;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subcats = Subcategory::latest()->paginate(10);
        $cats = Category::all();
        return view('sub-categories.index', compact('subcats', 'cats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sub-categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $avatar_path = '';

        if ($request->hasFile('image')) {
            $avatar_path = $request->file('image')->store('subcategories', 'public');
        }

        $subcat = Subcategory::create([
            'name' => $request->name,
            'image' => $avatar_path,
            'category_id' => $request->category_id,
        ]);

        if (!$subcat) {
            return redirect()->back()->with('error', 'Sorry, there\'re a problem while creating sub category.');
        }
        return redirect()->route('subcategories.index')->with('success', 'Success, your sub category have been created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function show(Subcategory $subcategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function edit(Subcategory $subcategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subcategory $subcategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subcategory $subcategory)
    {
        if ($subcategory->image) {
            Storage::delete($subcategory->image);
        }

        $subcategory->delete();

       return response()->json([
           'success' => true
       ]);
    }
}
