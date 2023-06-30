<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RejectOrders extends Model
{
    protected $table = 'rejectedorderlist';
    protected $primaryKey = 'o_id';
    public $timestamps = false;
}
