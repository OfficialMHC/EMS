<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeStoreRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'first_name' => ['nullable'],
            'middle_name' => ['nullable'],
            'last_name' => ['nullable'],
            'department_id' => ['nullable'],
            'address' => ['nullable'],
            'country_id' => ['nullable'],
            'state_id' => ['nullable'],
            'city_id' => ['nullable'],
            'zip_code' => ['nullable'],
            'date_of_birth' => ['nullable'],
            'date_hired' => ['nullable'],
        ];
    }
}
