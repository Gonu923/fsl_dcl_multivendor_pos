<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subcategory;

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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
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
