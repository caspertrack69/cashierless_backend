<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class product extends Model
{
    use HasFactory, SoftDeletes;
      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'price',
        'categories_id',
        'tags',
    ];

    public function galleries()
    {
       
        return $this->hasMany(ProductGallery::class, 'product_id', 'id');
        
    }

    public function category()
    {
      return $this->belongTo(ProductCategory::class, 'categories_id', 'id');  
    }
    
}
