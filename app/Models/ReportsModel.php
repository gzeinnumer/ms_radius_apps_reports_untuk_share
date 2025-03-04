<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportsModel extends Model
{
    use HasFactory;
    protected $table = "reports";

    protected $fillable = [
        'adjusted_login_date',
        'url_app',
        'profile_name',
        'price_sell',
        'qty',
        'first_bill',
        'name',
        'investor'
    ];
}
