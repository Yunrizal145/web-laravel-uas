<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crypto extends Model
{
    use HasFactory;

    protected $table = 'cryptos';

    protected $fillable = ['crypto_market', 'asset_name', 'crypto_price', 'product_status'];
}
