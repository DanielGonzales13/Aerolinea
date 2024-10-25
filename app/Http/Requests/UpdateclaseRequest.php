<?php

namespace App\Http\Requests;

use App\Models\clase;
use Illuminate\Foundation\Http\FormRequest;

class UpdateclaseRequest extends FormRequest
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
        $rules = clase::$rules;
        
        return $rules;
    }
}
