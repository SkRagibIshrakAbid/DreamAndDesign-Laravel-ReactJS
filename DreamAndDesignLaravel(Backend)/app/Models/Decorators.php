<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Decorators extends Model
{
    protected $table = 'decorators';
    protected $primaryKey = 'd_id';
    public $timestamps = false;
}
