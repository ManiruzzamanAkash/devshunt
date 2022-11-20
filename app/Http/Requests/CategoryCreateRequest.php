<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryCreateRequest extends FormRequest
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
            'name'            => 'required|max:100',
            'description'     => 'nullable|string|min: 3|max: 1000',
            'parent_id'       => 'nullable|integer',
            'priority'        => 'nullable|integer',
            'enable_homepage' => 'nullable|integer',
            'logo'            => 'nullable|image|max:5000'
        ];
    }
}
