<?php

namespace App\Models;

use App\Traits\Models\HasThumbnail;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
// use Laravel\Scout\Searchable;

class Product extends Model
{
    use HasFactory;
    use HasThumbnail;
    // use Searchable;

    protected $fillable = [
        'slug',
        'title',
        'brand_id',
        'price',
        'thumbnail',
        'on_home_page',
        'sorting',
        'text'
    ];

    public function thumbnailDir(): string
    {
        return 'products';
    }

    // Scout
    // #[SearchUsingFullText(['title', 'text'])] // что будем искать
    // public function toSearchableArray()
    // {
    //     return [
    //         'title' => $this->title,
    //         'text' => $this->text
    //     ];
    // }

    public function scopeFiltered(Builder $query)
    {
        $query->when(request('filters.brands'), function (Builder $q) {
            $q->whereIn('brand_id', request('filters.brands'));
        })->when(request('filters.price'), function (Builder $q) {
            $q->whereBetween('price', [
                request('filters.price.from', 0),
                request('filters.price.to', 100000)
            ]);
        });
    }

    public function scopeSorted(Builder $query)
    {
        $query->when(request('sort'), function (Builder $q) {
            $column = request()->str('sort');

            // Если содержатся те поля, которые мы можем сортировать
            if ($column->contains(['price', 'title'])) {

                // Если запрос содержит "-" - сортировка DESC
                $direction = $column->contains('-') ? 'DESC' : 'ASC';

                $q->orderBy((string) $column->remove('-'), $direction);
            }
        });
    }

    public function scopeHomePage(Builder $query)
    {
        $query->where('on_home_page', true)
            ->orderBy('sorting')
            ->limit(8);
    }

    protected static function boot()
    {
        parent::boot();

        // Геренация slug (если он ещё не сгенерирован)
        static::creating(function (Product $product) {
            $product->slug = $product->slug ?? str($product->title)->slug;
        });
    }

    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }

    public function properties(): BelongsToMany
    {
        return $this->belongsToMany(Property::class)
            ->withPivot('value');
    }
}
