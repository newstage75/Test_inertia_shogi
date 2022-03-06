<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RecordRequest extends FormRequest
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
          'sente' => 'required|max:50',
          'gote' => 'required|max:50',
        ];
    }
    public function attributes()
    {
        return [
            'sente' => '先手',
            'gote' => '後手',
            'place' => '対局場',
            'memo' => 'メモ',
        ];
    }
}
