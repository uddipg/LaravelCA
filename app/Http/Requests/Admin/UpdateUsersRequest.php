<?php
namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUsersRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$this->route('user'),
            'role_id' => 'required',
        ];
    }
}
