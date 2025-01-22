<?php

namespace App\Models;

use App\Contracts\Sluggable;
use App\Models\User;
use App\Traits\HasSlug;
use Illuminate\Support\Str;
use Illuminate\Support\Number;
use App\Models\Productproperty\Ram;
use App\Models\Productproperty\Size;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use App\Models\Productproperty\Processor;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Productproperty\Storage as ProductStorage;

class Product extends Model implements Sluggable
{
    use HasFactory, HasSlug;

    protected $fillable = [
        'brand',
        'description',
        'price',
        'sold',
        'status',
        'image',
        'type',
        'processor_id',
        'ram_id',
        'size_id',
        'storage_id',
        'slug'
    ];

    public function slugAttribute(): string
    {
        return 'brand';
    }

    // public static function boot()
    // {
    //     parent::boot();

    //     static::creating(function (Product $model) {
    //         $title = $model->brand;
    //         $model->slug = Str::slug($title);
    //     });

    //     static::updating(function (Product $model) {
    //         $title = $model->brand;
    //         $model->slug = Str::slug($title);
    //     });
    // }
    public function processor(): BelongsTo
    {
        return $this->belongsTo(Processor::class);
    }

    public function ram(): BelongsTo
    {
        return $this->belongsTo(Ram::class);
    }

    public function size(): BelongsTo
    {
        return $this->belongsTo(Size::class);
    }

    public function storage(): BelongsTo
    {
        return $this->belongsTo(ProductStorage::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Retourne le chemin de l'image
     * si l'image ne s'affiche pas
     * changer le APP_URL dans .env
     * @return string
     */
    public function imageUrl(): string
    {
        return Storage::disk('public')->url($this->image);
    }

    public function getFormattedPriceAttribute()
    {
        return Number::format($this->price, locale: 'de') . '€';
    }

    public function scopeFilterByName(Builder $query, ?string $brand): Builder
    {
        if ($brand) {
            return $query->where('brand', 'like', "%{$brand}%");
        }
        return $query;
    }

    public function scopeFilterByPrice(Builder $query, ?string $price): Builder
    {
        if ($price) {
            return $query->where('price', '<=', $price);
        }
        return $query;
    }

    public function scopeFilterByStatus(Builder $query, ?string $status): Builder
    {
        if ($status != null) {
            return $query->where('status', (bool) $status);
        }
        return $query;
    }
}
