<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
            "title" => "required|min:2|max:50",
            "description" => "required|min:2|max:2000",
            "thumb" => "required|min:12|max:1000",
            "price" => "required|decimal:0,2",
            "series" => "nullable|min:2|max:50",
            "sale_date" => "nullable|before_or_equal:now|after:1900-01-01",
            "type" => "nullable|min:2|max:50",
        ];
    }
}
