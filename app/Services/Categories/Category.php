<?php

namespace App\Services\Categories;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    
    protected $table = "categories";

    /**
     * fillable berfungsi untuk set attribute di database, colom mana saja yang akan di masukan ke dalam field
     */
    protected $fillable = [
    	'name'
    ];
}
