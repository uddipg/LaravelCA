<?php
namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRolesRequest extends FormRequest
{
    /**
     *
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     *
     * 
     *
     * @return array
     */
    public function rules()
    {
        return [
            
            'title' => 'required',
        ];
    }
}
