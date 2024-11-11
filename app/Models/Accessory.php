<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Support\Number;
use App\Models\Accessory\Property;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Accessory extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand',
        'description',
        'price',
        'status',
        'property_id',
        'image'
    ];

    public function property(): BelongsTo
    {
        return $this->belongsTo(Property::class);
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

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
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

    public function scopeFilterByProperty(Builder $query, ?string $property_id): Builder
    {
        if ($property_id) {
            return $query->where('property_id', $property_id);
        }
        return $query;
    }

    public function scopeFilterByStatus(Builder $query, ?string $status): Builder
    {
        if ($status != null) {
            return $query->where('status', (bool)$status);
        }
        return $query;
    }

    public function getFormattedPriceAttribute()
    {
        return Number::format($this->price, locale: 'de') . '€';
    }
}
