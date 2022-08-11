<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'price' => 'required',
            'desc' => 'required|max:255',
            'detail' => 'required|max:255'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Tên bắt buộc nhập',
            'name.min' => 'Tên tối thiểu 6 ký tự',
            'name.max' => 'Tên tối đa 32 ký tự',
            'price.required' =>'Không được để trống',
            'desc.required' => 'không được để trống',
            'desc.max' => 'tối đa 255 ký tự',
            'detail.required' => 'không được để trống',
            'detail.max' => 'tối đa 255 ký tự',
        ];
    }
}
