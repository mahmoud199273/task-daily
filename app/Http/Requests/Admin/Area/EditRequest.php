<?php

namespace App\Http\Requests\Admin\Area;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Area;
class EditRequest extends FormRequest
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
            'name_ar'           => 'required|string',
            'name_en'           => 'required|string',
        ];
    }

    public function persist($id)
    {
        Area::find($id)->Update($this->request->all());
    }
}
