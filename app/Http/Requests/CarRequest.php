<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        // !!!Da bismo testirali validaciju kod updatea potrebno je popuniti sva required polja, 
        // nebitno sto radimo samo update vec kreiranog objekta...kako ne bi doslo do frustracije tokom testiranja :)
        return [
            'brand' => 'required|min:2',
            'model' => 'required|min:2',
            'year' => 'required',
            'maxSpeed​' => 'nullable|numeric|min:20|max:300',
            'isAutomatic' => 'required',
            'engine' => 'required',
            'numberOfDoors' => 'required|numeric|min:2|max:5'
        ];
    }
}


