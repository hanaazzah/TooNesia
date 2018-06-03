<?php

namespace App\Services\Seasons;

use Illuminate\Database\Eloquent\Model;

class Season extends Model
{

    protected $table = "seasons";

    /**
     * fillable berfungsi untuk set attribute di database, colom mana saja yang akan di masukan ke dalam field
     */
    protected $fillable = [
    	'season_name', 'cover_image', 'file_comic', 'comic_id'
    ];

    public function commic()
    {
        return $this->belongsTo(App\Services\Comics\Comic::class);
    }
}
