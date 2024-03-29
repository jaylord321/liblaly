<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorebookRequest extends FormRequest
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
     * @return array
     */
    public function rules()
{
    return [
        'name' => 'required|unique:books,name,NULL,id,status,Y|max:255',
        'category_id' => 'nullable|exists:categories,id',
        'author_id' => 'nullable|exists:authors,id',
        'publisher_id' => 'nullable|exists:publishers,id',
    ];
}

}
