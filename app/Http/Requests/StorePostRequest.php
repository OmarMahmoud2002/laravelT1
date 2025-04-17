<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|min:4|max:255',
            'content' => 'required|min:10',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:4048', 

        ];
    }

    /**
     * Custom validation messages
     */
    public function messages(): array
    {
        return [
            'title.required' => 'Please enter the post title.',
            'title.min' => 'The title must be at least 4 characters.',
            'title.max' => 'The title may not be greater than 255 characters.',
            'content.required' => 'Please enter the post content.',
            'content.min' => 'The content must be at least 10 characters.',
            'created_by.exists' => 'The selected creator does not exist.',
            'created_by.required' => 'Please select the creator of the post.',
            'image.image' => 'The file must be an image.',
            'image.mimes' => 'The image must be a file of type: jpeg, png, jpg, gif, svg.',
            'image.max' => 'The image may not be greater than 4MB.',
        ];
    }
}
