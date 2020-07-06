<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TagRequest extends FormRequest
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
        switch($this->method()) {
            case 'GET':
            case 'DELETE':
                return [];
            case 'POST':
                return [
                    'title:en' => 'required|max:255',
                    'slug' => 'required|unique:tags'
                ];
            case 'PUT':
            case 'PATCH':
                return [
                    'title:en' => 'required|max:255',
                ];
            default:break;
        }
        return [];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name:en.required' => 'The title with english language is required',
            'tag.required'  => 'The tag is required',
        ];
    }
}
