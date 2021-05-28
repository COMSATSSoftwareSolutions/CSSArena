<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'price', 'model_no', 'description' , 'product_img', 'categoryId', 'userId', 'isActive'
    ];

    public function productcategory()
    {
        return $this->belongsTo('App\Models\productcategory' , 'categoryId');
    }
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'userId');
    }
}
