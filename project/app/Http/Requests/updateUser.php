<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class updateUser extends FormRequest
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
        'uname' => 'required|max:255',
        'pno' => 'required|integer',
        'addr' => 'required|max:255',
        'city' => 'required|max:60',
        'country' => 'required|max:100',
        ];
    }
}
