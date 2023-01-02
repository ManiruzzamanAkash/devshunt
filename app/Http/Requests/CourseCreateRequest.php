<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CourseCreateRequest extends FormRequest
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
            'title'                => 'required|max: 100',
            'description'          => 'nullable|string|min: 3|max: 1000',
            'category_id'          => 'required|integer',
            'priority'             => 'nullable|integer',
            'banner'               => 'nullable|image|max: 5000',
            'is_free'              => 'nullable|integer',
            'price'                => [
                'exclude_if:is_free,1',
                'integer'
            ],
            'offer_price'          => [
                'exclude_if:is_free,1',
                'exclude_if:price,0',
                'nullable',
                'integer',
                'gt:price',
            ],
            'status'               => 'required|integer',
            'meta_description'     => 'nullable|string|max: 500',
            'meta_keywords'        => 'nullable|string|max: 200',
            'external_enroll_link' => 'nullable|url',
            'start_date'           => 'nullable|date',
            'end_date'             => 'nullable|date',
        ];
    }
}
