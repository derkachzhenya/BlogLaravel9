<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
   
    public function authorize()
    {
        return true;
    }

   
    public function rules()
    {
        return [
            'title'=>'required|string',
            'content'=>'required|string',
            'preview_image'=>'required|file',
            'main_image'=>'required|file',
            'category_id'=>'required|integer|exists:categories,id',
            'tag_ids'=>'nullable|array',
            'tag_ids*.'=>'nullable|integer|exists:tags_id',
        ];
    }
}
