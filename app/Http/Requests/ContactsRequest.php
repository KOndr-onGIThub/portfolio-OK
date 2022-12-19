<?php

namespace App\Http\Requests;
use Illuminate\Validation\Rule;


use Illuminate\Foundation\Http\FormRequest;

class ContactsRequest extends FormRequest
{


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'email' => ['required', 'email'],
            'message' => ['required', 'min:50'],
            'year' => [
                'required',
                Rule::in(date('Y')),
            ],
        ];

    }
}
