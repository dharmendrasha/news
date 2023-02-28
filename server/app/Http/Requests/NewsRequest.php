<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'q' => 'nullable|string',
            'date' => 'nullable|string|date_format:Y-m-d',
            'category' => 'nullable|string',
            'sources' => 'nullable|string',
            'pageSize' => 'nullable|numeric|max:100',
            'page' => 'nullable|numeric',
            'personalize' => 'nullable'
        ];
    }
}
