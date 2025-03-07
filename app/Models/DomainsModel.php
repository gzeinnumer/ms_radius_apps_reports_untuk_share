<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DomainsModel extends Model
{
    use HasFactory;
    protected $table = "domains";
    protected $fillable = ['site_id', 'site_name', 'island', 'area', 'lat', 'lng', 'domain', 'investor', 'name'];
}
