<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
class Consumption extends Model
{
    use HasFactory;

    protected $fillable = ['product_id', 'quantity', 'description','consumed_at'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
