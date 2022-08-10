<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use App\Models\Payment;
use App\Http\Requests\StoreVendorRequest;
use App\Http\Requests\UpdateVendorRequest;
use Illuminate\Support\Facades\Storage;
use App\Models\Category;
use App\Models\Subcategory;

class VendorController extends Controller
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
                Vendor::all()
            );
        }
        $vendors = Vendor::latest()->paginate(10);
        $vendors_count = Vendor::count();
        $active_count = Vendor::where('status', 1)->count();
        $inactive_count = Vendor::where('status', 0)->count();
        $vendors_count = Vendor::count();
        $categories = Category::all();
        $subcats = Subcategory::all();
        $total_sale = Payment::all()->sum('amount');
        return view('vendors.index', compact('categories', 'vendors_count','active_count','inactive_count', 'total_sale', 'subcats'))->with('vendors', $vendors);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $subcats = Subcategory::all();
        return view('vendors.create', compact('categories', 'subcats'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreVendorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVendorRequest $request)
    {
        // for ($i=1; $i <= 2000 ; $i++) {
        //     $array[] =[
        //         'name' => 'Ven  '.$i,
        //         'address' => 'Dhaka '. $i,
        //         'contact_no' => '01753662262',
        //         'category_id' => 1,
        //         'nid' => "154263978",
        //         'trade_license' => 'example.pdf',
        //         'bkash' => "01753882266",
        //         'nagad' => "01753882254",
        //         'commission' => 2,
        //         'vendor_picture' => 'example.pdf',
        //         'created_at' => date('Y-m-d H:i:s'),
        //         'updated_at' => date('Y-m-d H:i:s')
        //     ] ;
        // };
        // Vendor::insert($array);



        $file_path = '';
        $avatar_path = '';

        if ($request->hasFile('trade_license')) {
            $file_path = $request->file('trade_license')->store('vendors', 'public');
        }

        if ($request->hasFile('vendor_picture')) {
            $avatar_path = $request->file('vendor_picture')->store('vendors', 'public');
        }

        $vendor = Vendor::create([
            'name' => $request->name,
            'address' => $request->address,
            'nid' => $request->nid,
            'category_id' => $request->category_id,
            'subcat_id' => $request->subcat_id,
            'type' => $request->type,
            'dcl_discount' => $request->dcl_discount,
            'vendor_discount' => $request->vendor_discount,
            'trade_license' => $file_path,
            'contact_no' => $request->contact_no,
            'bkash' => $request->bkash,
            'nagad' => $request->nagad,
            'commission' => $request->commission,
            'status' => $request->status,
            'vendor_picture' => $avatar_path,
        ]);

        if (!$vendor) {
            return redirect()->back()->with('error', 'Sorry, there\'re a problem while creating vendor.');
        }
        return redirect()->route('vendors.index')->with('success', 'Success, your vendor have been created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function show(Vendor $vendor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function edit(Vendor $vendor)
    {
        $categories = Category::all();
        return view('vendors.edit', compact('vendor', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateVendorRequest  $request
     * @param  \App\Models\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateVendorRequest $request, Vendor $vendor)
    {
        $vendor->name = $request->name;
        $vendor->address = $request->address;
        $vendor->contact_no = $request->contact_no;
        $vendor->vendor_picture = $request->vendor_picture;
        $vendor->nid = $request->nid;
        $vendor->bkash = $request->bkash;
        $vendor->nagad = $request->nagad;
        $vendor->commission = $request->commission;
        $vendor->status = $request->status;
        $vendor->category_id = $request->category_id;

        if ($request->hasFile('vendor_picture')) {
            // Delete old avatar
            if ($vendor->vendor_picture) {
                Storage::delete($vendor->vendor_picture);
            }
            // Store avatar
            $avatar_path = $request->file('vendor_picture')->store('vendors', 'public');
            // Save to Database
            $vendor->vendor_picture = $avatar_path;
        }

        if (!$vendor->save()) {
            return redirect()->back()->with('error', 'Sorry, there\'re a problem while updating vendor.');
        }
        return redirect()->route('vendors.index')->with('success', 'Success, your vendor have been updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vendor $vendor)
    {
        if ($vendor->avatar) {
            Storage::delete($vendor->vendor_picture);
        }

        $vendor->delete();

       return response()->json([
           'success' => true
       ]);
    }
}
