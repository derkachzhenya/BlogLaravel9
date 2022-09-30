<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
   
    public function authorize()
    {
        return true;
    }

    
    public function rules()
    {
        return [
            'name'=>'required|string',
            'email'=>'required|string|email|unique:users',
            'password'=>'required|string',
            'role'=>'required|integer',
        ];
    }

    
    public function messages()
    {
        return[
            'name.required'=>'Это поле необходимо для заполнения',
            'name.string'=>'Имя должно быть строкой',
            'email.required'=>'Это поле необходимо для заполнения',
            'email.string'=>'Почта должна быть строкой',
            'email.email'=>'Ваша почта должна соответсвовать формату email@com',
            'email.unique'=>'Пользователь с таким email уже существует',
            'password.required'=>'Это поле необходимо для заполнения',
            'password.string'=>'Пароль должно быть строкой',
        ];
       
    }
}
