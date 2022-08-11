<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name' => 'required|min:6|max:32',
            'email' => 'required',
            'password' => 'required|min:6',
            'phone' => 'required|max:10',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Tên bắt buộc nhập',
            'name.min' => 'Tên tối thiểu 6 ký tự',
            'name.max' => 'Tên tối đa 32 ký tự',
            'email.required' => 'không được để trống',
            'password.required' => 'không được để trống',
            'password.min' => 'tối đa 6 ký tự',
            'phone.required' => 'không được để trống',
            'phone.max' => 'tối đa 20 ký tự',
        ];
    }
}
