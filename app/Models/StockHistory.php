<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Vendor;
use App\Models\Product;

class StockHistory extends Model
{
    use HasFactory;
    protected $fillable = ['vendor_id', 'product_id', 'quantity', 'date', 'total_cost'];

    public function vendor()
    {
        return $this->belongsTo(Vendor::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
