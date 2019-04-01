<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
    //数据白名单
    protected $fillable=[
        'province',
        'city',
        'district',
        'address',
        'zip',
        'contact_name',
        'contact_phone',
        'last_used_at',
    ];
    protected $dates=['last_used_at']; //设置对象返回是日期格式。
    //模型关联
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getFullAddressAttribute(){
        return "{$this->province}{$this->city}{$this->disstrice}{$this->address}";
    }
}
