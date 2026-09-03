<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class ProductUpdateRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'category_id'=>'nullable|exists:categories,id',
            'name'=> 'sometimes|string|max:255',
            'description'=> 'sometimes|nullable|string|max:255',
            'price' => 'sometimes|numeric|decimal:2',
            'stock' => 'sometimes|integer',
            'position'=> 'sometimes|nullable|integer',
            'enabled'=> 'sometimes|boolean'
        ];
    }
}
