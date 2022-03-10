<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $fillable=[
        'packageType',
        'price',
        'packageCount',
        'description',
        'status'
    ];

    //Paymentクラスとone to many検索があります。
    public function Payment()
    {
        return $this->hasMany('App\Model\Payment');
    }
}
