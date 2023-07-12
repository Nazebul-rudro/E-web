<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        
        return [
            

        // 'category_id' => 'required',
        // 'name' => 'required|string',
        // 'slug' => 'required|string',
        // 'brand' => 'required|string',
        // 'small_description' => 'required|string',
        // 'original_price' => 'required|integer|min:0',
        // 'selling_price' => 'required|integer|min:0',
        // 'quantity' => 'required|integer|min:0',
        // 'meta_title' => 'string|max:255',
        // 'meta_keyword' => 'string|max:255',
        // 'meta_description' => 'string|max:255',
           
    
        ];
    }
}
