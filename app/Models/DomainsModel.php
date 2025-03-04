<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DomainsModel extends Model
{
    use HasFactory;
    protected $table = "domains";
    protected $fillable = ['domain', 'name', 'investor'];
}
