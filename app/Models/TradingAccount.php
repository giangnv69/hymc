<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TradingAccount extends Model
{
    protected $table = 'trading_account';
    protected $fillable = [
        'f_name',
        'l_name',
        'email',
        'first_number',
        'phone_number',
        'country',
        'check_ipay',
        'date_birth',
        'month_birth',
        'year_birth',
        'address',
        'city',
        'post_code',
        'account_type',
        'account_currency',
        'is_us',
        'is_pep',
        'password',
    ];
}