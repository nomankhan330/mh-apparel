<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
    	'name',
		'slug',
		'price',
		'category_id',
		'description'
	];

	public function category()
	{
		return $this->belongsTo(Categories::class);
	}

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
