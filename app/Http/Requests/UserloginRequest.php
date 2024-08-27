<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserloginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'email'=> 'required|email|exists:users,email',
            'password'=>'required|min:8',
        ];
    }
    public function messages(): array{
        return['email.required'=>'Email khong duoc bo chong ',
        'email.email'=>'Email phai co dinh dang dung',
        'email.exists'=>'Email chua duoc dang ki ',
        'password.required'=>'Mat khau khong duoc bo chong',
        'password.min'=>'Mat khau phai co it nhat 8 ki tu',
     //    'password.confirmed'=>'Mat khau khong dung'
       
       ];
    }
}
