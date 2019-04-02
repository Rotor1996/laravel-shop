<?php

namespace App\Http\Requests;

class UserAddressRequest extends Request
{
    public function rules()
    {
        return [
            'province'      => 'required',
            'city'          => 'required',
            'district'      => 'required',
            'address'       => 'required',
            'zip'           => 'required',
            'contact_name'  => 'required',
            'contact_phone' => 'required',
        ];
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'province'     => '省',
            'city'         => '市',
            'district'     => '地区',
            'address'      => '详细地址',
            'zip'          => '邮编',
            'contact_name' => '姓名',
            'contact_phone'=> '电话',
        ];
    }
}