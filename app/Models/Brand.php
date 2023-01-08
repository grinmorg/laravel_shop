<?php

namespace App\Models;

use App\Traits\Models\HasThumbnail;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Brand extends Model
{
    use HasFactory;
    use HasThumbnail;

    protected $fillable = [
        'slug',
        'title',
        'thumbnail',
        'on_home_page',
        'sorting'
    ];

    public function thumbnailDir(): string 
    {
        return 'brands';
    }

    protected static function boot()
    {
        parent::boot();

        // Геренация slug (если он ещё не сгенерирован)
        static::creating(function (Brand $brand) {
            $brand->slug = $brand->slug ?? str($brand->title)->slug;
        });
    }

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}
