<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        'package',
        'user_registration',
        'occupation',
        'requestOccupation',
        'ideal_count',
        'status'
    ];

    protected $table='members';

    public function Package()
    {
        return $this->belongsTo('App\Model\Package','package_id');
    }

    public function Occupation()
    {
        return $this->belongsTo('App\Model\Occupation','occupation_id');
    }

    public function User()
    {
        return $this->belongsTo('App\Model\User','user_registration_id');
    }
}
