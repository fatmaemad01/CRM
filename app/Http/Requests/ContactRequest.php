<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'first_name' => 'required|string|max:50',
            'surname' => 'nullable|string|max:50',
            'company' => 'nullable|string',
            'job_title' => 'nullable|string',
            'email' => 'nullable|string',
            'phone' => 'required|string|max:10|min:10',
            'birthday' => 'nullable|date',
            'note' => 'nullable|string',
            'image' => 'nullable|image',
        ];
    
    }

    public function messages() : array
    {
        return [
            'required' => ':attribute Important!'
        ];
    }
}
