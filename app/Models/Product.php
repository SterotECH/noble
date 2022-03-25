<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';

    protected $primaryKey = 'id';

    #protected $timestamps = true;

    #protected $dateFormat = 'h:m:s';
    protected $fillable = ['product_name', 'cost_price', 'selling_price', 'quantity', 'image_path'];

    protected $hidden = ['created_at', 'updated_at'];

    protected $visible = [];
}
