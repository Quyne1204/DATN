<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class LoginAdminRequest extends FormRequest
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
            'email' => 'required|email|exists:users',
            'password' => 'required'
        ];
    }
    public function messages(): array
    {
        return [
            'email.required' => 'Hãy nhập Email của bạn!',
            'email.email' => 'Hãy nhập đúng định dạng Email!',
            'email.exists' => 'Email của bạn không tồn tại trong hệ thống!',
            'password.required' => 'Hãy nhập Password của bạn!'
        ];
    }
}
