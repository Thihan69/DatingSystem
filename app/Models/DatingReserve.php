<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DatingReserve extends Model
{
    use HasFactory;
    protected $fillable=[
        'member_one_id',
        'member_two_id',
        'reserve_date',
        'reserve_time',
        'place',
        'status'
    ];

    protected $table='datingreserves';

    public function Member()
    {
        return $this->belongsTo('App\Model\Member','member_one_id','member_two_id');
    }
}
