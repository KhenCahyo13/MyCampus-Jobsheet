<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'items';
    protected $primaryKey = 'item_id';
    protected $fillable = [
        'item_id',
        'category_id',
        'item_code',
        'item_name',
        'item_buy_price',
        'item_sell_price',
    ];
}
