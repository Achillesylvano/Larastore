<?php

namespace App\Models;

use App\Models\Productproperty\Ram;
use App\Models\Productproperty\Size;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use App\Models\Productproperty\Processor;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Productproperty\Storage as ProductStorage;

class Product extends Model
{
    use HasFactory;

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
        'storage_id'
    ];

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

    /**
     * Retourne le chemin de l'image
     * si l'image ne s'affiche pas
     * changer le APP_URL dans .env
     * @return string
     */
    public function imageUrl() : string {
        return Storage::disk('public')->url($this->image);
    }
}
