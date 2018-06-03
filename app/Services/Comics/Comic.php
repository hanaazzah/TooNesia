<?php

namespace App\Services\Comics;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{

    protected $table = "comics";

    /**
     * fillable berfungsi untuk set attribute di database, colom mana saja yang akan di masukan ke dalam field
     */
    protected $fillable = [
    	'title', 'description', 'image', 'category_id'
    ];

    public function category()
    {
        return $this->hasOne(App\Services\Categories\Category::class);
    }

    public function seasons()
    {
        return $this->hasMany(App\Services\Seasons\Season::class);
    }
}
