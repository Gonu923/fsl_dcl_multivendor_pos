<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreVendorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:20',
            'address' => 'required|string|max:200',
            'nid' => 'required|string|max:20',
            'trade_license' => 'nullable|file',
            'category_id' => 'required',
            'subcat_id' => 'required',
            'type' => 'required',
            'email' => 'nullable|email',
            'contact_no' => 'string|max:11',
            'bkash' => 'string|max:11',
            'nagad' => 'string|max:11',
            'commission' => 'required',
            'status' => 'required',
            'vendor_discount' => 'nullable',
            'dcl_discount' => 'nullable',
            'vendor_picture' => 'required|image',
            'password' => 'nullable|string',
        ];
    }
}
