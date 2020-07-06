<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
                    'slug' => 'required|unique:tags',
                    'body:en' => 'required',
                    'images' => 'required'
                ];
            case 'PUT':
            case 'PATCH':
            return [
                'title:en' => 'required|max:255',
                'body:en' => 'required',
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
            'title:en.required' => 'The title with english language is required',
            'body:en.required'  => 'The body with english language is required',
        ];
    }
}
