<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InviteFriendRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    /**
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'username' => ['required', 'string', 'exists:users,username'],
        ];
    }

    public function withValidator($validator): void
    {
        $validator->after(function ($validator) {
            if ($this->username === $this->user()->username) {
                $validator->errors()->add('username', 'You cannot invite yourself.');
            }
        });
    }
}

