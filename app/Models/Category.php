<?php

namespace App\Models;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'title',
        'on_home_page',
        'sorting'
    ];

    public function scopeHomePage(Builder $query) {
        $query->where('on_home_page', true)
            ->orderBy('sorting')
            ->limit(5);
    }

    protected static function boot()
    {
        parent::boot();

        // Геренация slug (если он ещё не сгенерирован)
        static::creating( function(Category $category) {
            $category->slug = $category->slug ?? str($category->title)->slug;
        } );
    }


    // Связь с товарами
    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class);
    }
}
