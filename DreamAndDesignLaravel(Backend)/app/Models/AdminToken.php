<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminToken extends Model
{
    protected $table = 'admintoken';
    protected $primaryKey = 'id';
    public $timestamps = false;
}
