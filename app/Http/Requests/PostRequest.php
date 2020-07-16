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
            'title' => 'required|max:255',
            'content' => 'required',
            'user_id' => 'required|numeric',
            'category_id' => 'required|numeric',
            'image' =>'mimes:jpeg,jpg,png,gif|max:10240',
        ];
    }

    public function messages()
    {
        return [
            'image.mimes' =>'ファイルタイプをjpeg,jpg,png,gifに設定してください。',
            'image.max'   =>'ファイルサイズを10MB以下に設定してください。',
        ];

    }
}
