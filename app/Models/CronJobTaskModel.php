<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CronJobTaskModel extends Model
{
    use HasFactory;
    protected $table = "cronjob_task";
    protected $fillable = ['domain', 'msg', 'investor', 'name'];
}
