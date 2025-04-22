<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportsModel extends Model
{
    use HasFactory;
    protected $table = "reports";

    protected $fillable = [
        'date_',
        'url_app',
        'voucher_name',
        'voucher_unit_perprice',
        'total_unit_sold',
        'total_sold',
        'id_url_app',
        'id_voucher_name',
    ];
}
