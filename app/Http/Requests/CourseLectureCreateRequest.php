<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseLectureCreateRequest extends FormRequest
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
            'title'            => 'required|string|max:255',
            'slug'             => 'nullable|string|max:255',
            'chapter_id'       => 'required|integer',
            'priority'         => 'nullable|integer',
            'banner'           => 'nullable|image|max:5000',
            'description'      => 'nullable',
            'meta_description' => 'nullable|string',
            'meta_keyywords'   => 'nullable|string',
            'status'           => 'required|integer',
            'is_live'          => 'nullable|integer',
            'is_free'          => 'nullable|integer',
            'type'             => 'required|string',
            'label'            => 'required|string',
            'video_url'        => 'nullable|mimes:mp4,3gp,mkv',
            'embedded_url'     => 'nullable|url',
        ];
    }
}
