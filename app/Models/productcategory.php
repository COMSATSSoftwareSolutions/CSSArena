<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productcategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_name' , 'category_icon', 'isActive'
    ];

    public function products()
    {
        return $this->hasMany('App\Models\Product');
    }
}
