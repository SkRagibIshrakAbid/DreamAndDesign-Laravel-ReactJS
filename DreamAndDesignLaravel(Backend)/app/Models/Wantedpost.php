<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wantedpost extends Model
{
    protected $table = 'wantedpost';
    protected $primaryKey = 'wp_id';
    public $timestamps = false;
}
