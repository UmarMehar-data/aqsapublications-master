<?php

namespace App\Http\Requests\Admin\Book;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateRequest extends FormRequest
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
           'name' => ['required', Rule::unique('books')->whereNull('deleted_at')->ignore($this->id)],
           'slug' => 'required',
            'thumbnail' => 'required',
            'price' => 'required',
            'qty' => 'required',
            'content' => 'required',
        ];
    }
}
