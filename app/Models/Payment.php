<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable=[
        'member',
        'package',
        'bank_account_name',
        'bank_name',
        'registration_fee_slip',
        'payment_date',
        'status'
    ];
}
