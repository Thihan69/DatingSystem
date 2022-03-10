<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matching extends Model
{
    use HasFactory;
    protected $fillable=[
        'member_one_id',
        'member_two_id',
        'matched_date'
    ];

    protected $table='matchings';

    public function Member()
    {
        return $this->belongsTo('App\Model\Member','member_one_id','member_two_id');
    }
}
