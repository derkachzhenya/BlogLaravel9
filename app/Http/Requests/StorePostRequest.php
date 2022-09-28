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
            'title' => 'required|string',
            'content' => 'required|string',
            'preview_image' => 'required|file',
            'main_image' => 'required|file',
            'category_id' => 'required|integer|exists:categories,id',
            'tag_ids' => 'nullable|array',
            'tag_ids*.' => 'nullable|integer|exists:tags_id',
        ];
    }

    public function messages()
    {
        return [
            'title.required'=>'Это поле должно быть заполнено',
            'title.string'=>'Данные должны соответсвовать строчному типу',
            'content.required'=>'Это поле должно быть заполнено',
            'content.string'=>'Данные должны соответсвовать строчному типу',
            'preview_image.required'=>'Это поле должно быть заполнено',
            'preview_image.file'=>'Необходимо выбрать файл',
            'main_image.required'=>'Это поле должно быть заполнено',
            'main_image.file'=>'Необходимо выбрать файл',
            'preview_image.required'=>'Это поле должно быть заполнено',
            'category_id.required'=>'Это поле должно быть заполнено',
            'category_id.integer'=>'Id категории должен быть числом',
            'category_id.exists'=>'Id категории должен быть в базе данных',
            'tag_ids.array'=>'Необходимо отправить масив базы данных',
        ];
    }
}
