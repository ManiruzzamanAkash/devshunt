<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PageUpdateRequest extends FormRequest
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
            'title'            => 'required|max:150',
            'description'      => 'nullable|string',
            'slug'             => 'nullable|unique:pages,slug,' . $this->id,
            'meta_description' => 'nullable|string',
            'meta_keywords'    => 'nullable|string',
        ];
    }
}
