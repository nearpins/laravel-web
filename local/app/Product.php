<?php


namespace App;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;


use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     *	
     * @var array
     */
    use HasSlug;

    protected $fillable = [
        'name', 'detail','slug'
    ];
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }
}
