<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequest extends FormRequest
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
                    'name:en' => 'required|max:100',
                    'username:en' => 'required|unique:admins|max:100',
                    'email' => 'required|email',
                    'avatar' => 'required',
                    'password' => 'required|confirmed|min:6',
                ];
            case 'PUT':
            case 'PATCH':
            return [
                'name:en' => 'required|max:100',
                'username:en' => 'required|max:100',
                'email' => 'required|email',
                'password' => 'nullable|confirmed|min:6',
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
            'name:en.required' => 'A name with english language is required',
            'username:en.required' => 'A username with english language is required',
            'email.required'  => 'An email is required',
            'avatar.required'  => 'An avatar is required',
        ];
    }
}
