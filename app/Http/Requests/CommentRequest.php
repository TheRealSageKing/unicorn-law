<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends FormRequest
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
            'post_id' => 'required|numeric',
            'parent_id' => 'numeric',
            'author' => 'required',
            'author_url' => 'string',
            'comment' => 'required',
            'author_email' => 'required',
            'author_ip'=>'required',
            'agent' => 'string'
        ];
    }
}
