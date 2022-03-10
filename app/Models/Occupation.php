<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Occupation extends Model
{
    use HasFactory;
    protected $fillable = [
        'requestOccupation',
        'status'
    ];

    //MemberクラスとOne to Many検索があります。
    public function Member()
    {
        return $this->hasManay('App\Model\Member');
    }
}
