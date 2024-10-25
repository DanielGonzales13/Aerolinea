<?php

namespace App\Http\Requests;

use App\Models\vuelo_colaborador;
use Illuminate\Foundation\Http\FormRequest;

class Updatevuelo_colaboradorRequest extends FormRequest
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
        $rules = vuelo_colaborador::$rules;
        
        return $rules;
    }
}