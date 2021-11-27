<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    public function authorize()
    {
        if ($this->path() == '/') {
            return false;
        } else {
            return true;
        }
    }

    public function rules()
    {
        return [
            'first_name' => 'required',
            'last_name' => 'required',
            'gender' => 'required',
            'email' => 'required|email',
            'postcode' => 'required|max:8',
            'address' => 'required',
            'opinion' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'first_name.required' => '苗字を入力してください',
            'last_name.required' => '名前を入力してください',
            'gender.required' => '性別を選択してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.email' => 'メールアドレスの形式で入力してください',
            'postcode.required' => '郵便番号をハイフン有で8文字以内で入力してください',
            'address.required' => '住所入力してください',
            'opinion.required' => '意見内容を入力してください'
        ];
    }
}
