<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StaffRequest extends FormRequest
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
            'id' => 'required',
            'email' => 'required',
            'group_staff' => 'required',
            'username' => 'required',
            'date_birth' => 'required',
            'gender' => 'required',
            'phone' => 'required',
            'id_number' => 'required',
            'address' => 'required',

        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Mail không được phép để trống',
            'id.required' => 'Mã nhân viên không được phép để trống',
            'group_staff.required' => 'Nhóm nhân viên không được phép để trống',
            'username.required' => 'Họ tên không được phép để trống',
            'date_birth.required' => 'Ngày sinh không được phép để trống',
            'gender.required' => 'Giới tính không được phép để trống',
            'phone.required' => 'Số điện thoại không được phép để trống',
            'id_number.required' => 'Mail không được phép để trống',
            'address.required' => 'Địa chỉ không được phép để trống',
        ];
    }

}
