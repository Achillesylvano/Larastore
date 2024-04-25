<?php

namespace App\Models;

use App\Models\User;
use App\Models\Accessory\Property;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
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
    public function imageUrl() : string {
        return Storage::disk('public')->url($this->image);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
