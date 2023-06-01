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
            "price" => "required|max:9999.99|decimal:0,2",
            "series" => "nullable|min:2|max:50",
            "sale_date" => "nullable|before_or_equal:today|after:1900-01-01",
            "type" => "nullable|min:2|max:50",
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'title.required' => 'The title is required',
            'title.min' => 'The title must contain at least 2 characters',
            'title.max' => 'The title must contain no more than 50 characters',
            'description.required' => 'The description is required',
            'description.min' => 'The description must contain at least 2 characters',
            'description.max' => 'The description must contain no more than 2000 characters',
            'thumb.required' => 'The thumb is required',
            'thumb.min' => 'The thumb must contain at least 12 characters',
            'thumb.max' => 'The thumb must contain no more than 1000 characters',
            'price.required' => 'The price is required',
            'price.max' => 'The price must be no more than 9999.99',
            'price.decimal' => 'The price must contain no more than 2 decimal digits',
            'series.min' => 'The series must contain at least 2 characters',
            'series.max' => 'The series must contain no more than 50 characters',
            'sale_date.before_or_equal' => 'The sale date must be no more than today',
            'sale_date.after' => 'The sale date must be after 1900-01-01',
            'type.min' => 'The type must contain at least 2 characters',
            'type.max' => 'The type must contain no more than 50 characters',
        ];
    }
}
