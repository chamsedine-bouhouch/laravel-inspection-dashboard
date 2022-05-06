<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChecklistStoreRequest extends FormRequest
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
            'title' => ['required', 'string', 'max:255'],
            'date_inspection' => ['required', 'string', 'max:255'],
            'owner' => ['required', 'string', 'max:255'],
            'manufacturer' => ['required', 'string', 'max:255'],
            'manufacturer_number' => ['required', 'string', 'max:255'],
            'derricking' => ['required', 'string', 'max:255'],
            'image' => [ 'image','mimes:jpeg,png,jpg,gif,svg'],
        ];
    }
}
