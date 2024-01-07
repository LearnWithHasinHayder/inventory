<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\StockHistory;
use App\Models\Product;

class Vendor extends Model
{
    use HasFactory;

    protected $fillable = ['name'];


    public function products()
    {
        return $this->belongsToMany(Product::class, 'vendor_products');
    }

    public function stockHistory()
    {
        return $this->hasMany(StockHistory::class);
    }
}
