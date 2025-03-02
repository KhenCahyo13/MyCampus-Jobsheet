<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $table = 'stocks';
    protected $primaryKey = 'stock_id';
    protected $fillable = [
        'stock_id',
        'item_id',
        'user_id',
        'stock_qty',
    ];
}
