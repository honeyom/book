<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookCreateUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;//所有用户都可以用这个验证
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'title'=>'required|min:5|max:8000',
            'body'=>'required|min:30',
            'published_at'=>'required|date'
        ];
    }
}
