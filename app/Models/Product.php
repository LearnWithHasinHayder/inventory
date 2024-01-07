<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Vendor;
use App\Models\StockHistory;
use App\Models\Consumption;
use App\Models\Category;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'stock'];

    public function vendors()
    {
        return $this->belongsToMany(Vendor::class, 'vendor_products');
    }

    public function stockHistory()
    {
        return $this->hasMany(StockHistory::class);
    }

    public function consumptions()
    {
        return $this->hasMany(Consumption::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'product_categories');
    }
}
