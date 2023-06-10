<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UploadImageRequest extends FormRequest
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
            'image'=>'images|mimes:jpg,jpeg,png|max:2048'
        ];
    }

    public function message()
    {
        return [
            'image'=>'指定されたファイルが画像ではありません。',
            'mimes'=>'指定された拡張子（PNG/JPG/JPEG）ではありません。',
            'max'=>'ファイルサイズが2MB以下の画像ファイルを選択してください。'
        ];
    }
}
