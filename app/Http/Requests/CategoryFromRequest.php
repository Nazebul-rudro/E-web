<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryFromRequest extends FormRequest
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
        $productssvalidationRole = 'mimes:png,jpg';
        if ($this->isMethod('post')) {
            // dd('Post Method');
            $productssvalidationRole = 'required |' . $productssvalidationRole;
        }
        return [
            //

            'name' => [
                'required',
                'string'
                ],
                'slug' => [
                    'required',
                    'string'
                ],
                'description' => [
                    'required',
                    'string'
                ],

                "image" =>  $productssvalidationRole,

                'meta_title' => [
                    'required',
                    'string'
                ],
                'meta_keyword' => [
                  'required',
                  'string'  
                ],
                'meta_description' => [
                    'required',
                    'string'
                ],

        ];
    }
}
