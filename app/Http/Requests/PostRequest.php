<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
        return [
            'name' => 'required',
            'email' => 'required',
            'postcode' => 'required',
            'prefecture' => 'required',
            'city' => 'required',
            'local' => 'required',
            'image' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '名前は必須です',
            'email.required' => 'メールアドレスは必須です',
            'postcode.required' => '郵便番号は必須です',
            'prefecture.required' => '都道府県は必須です',
            'city.required' => '市町村は必須です',
            'local.required' => '住所は必須です',
            'image.required' => '画像は必須です',
        ];
    }
}
