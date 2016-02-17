<?php

namespace Blog\Http\Requests;

use Blog\Http\Requests\Request;

class ArticleRequest extends Request
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
            'title' => 'min:8|max:250|required|unique:articles',
            'content' => 'required|min:60',
            'category_id' => 'required',
            'image' => 'required',
        ];
    }
}
