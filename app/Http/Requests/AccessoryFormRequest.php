<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AccessoryFormRequest extends FormRequest
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
            'brand' => ['required','min:5'],
            'description' => ['min:10'],
            'price' => ['required','gt:1','integer'],
            'image' => ['nullable','image','max:11000'],
            'status' => ['required','boolean'],
            'property_id' => ['required','exists:properties,id','integer'],
        ];
    }
}
