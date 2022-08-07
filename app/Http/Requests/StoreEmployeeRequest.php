<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmployeeRequest extends FormRequest
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
            'employee_name' => 'required|string|max:20',
            'employee_uid' => 'required|unique:employees,employee_uid|string|max:20',
            'employee_salary' => 'nullable|integer',
            'employee_designation' => 'nullable|string',
            'employee_working_area' => 'nullable|string|max:20',
            'employee_live_location' => 'nullable|string',
            'employee_photo' => 'nullable|image',
            'salary_status' => 'nullable|integer',
        ];
    }
}
