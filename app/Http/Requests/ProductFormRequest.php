<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductFormRequest extends FormRequest
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
            'image' => ['nullable'],
            'status' => ['required','boolean'],
            'type' => ['required','boolean'],
            'processor_id' => ['required','exists:processors,id','integer'],
            'ram_id' => ['required','exists:rams,id','integer'],
            'size_id' => ['required','exists:sizes,id','integer'],
            'storage_id' => ['required','exists:storages,id','integer'],
        ];
    }
}
