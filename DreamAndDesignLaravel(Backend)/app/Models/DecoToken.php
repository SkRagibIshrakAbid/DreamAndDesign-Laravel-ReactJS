<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DecoToken extends Model
{
    protected $table = 'decoratorstoken';
    protected $primaryKey = 'id';
    public $timestamps = false;
}
