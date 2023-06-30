<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DecoratorsApproveList extends Model
{
    protected $table = 'decoapprovallist';
    protected $primaryKey = 'dapp_id';
    public $timestamps = false;
}
