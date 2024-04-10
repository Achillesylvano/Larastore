<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

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
        return $this->belongsTo(Storage::class);
    }
}
