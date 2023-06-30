<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcceptOrders extends Model
{
    protected $table = 'acceptedorderlist';
    protected $primaryKey = 'o_id';
    public $timestamps = false;
}
