<?php

declare(strict_types=1);

namespace App\Traits;

use Illuminate\Support\Str;
use App\Contracts\Sluggable;

trait HasSlug
{

    public function slugColumn(): string
    {
        return 'slug';
    }

    public static function generateUniqueSlug(string $attribute): string
    {
        $counter = 1;
        $slug = Str::slug($attribute);
        $originalSlug = $slug;

        while (self::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $counter;
            $counter++;
        }

        return $slug;
    }

    protected static function bootHasSlug()
    {
        static::saving(function (Sluggable $model) {
            $model->{$model->slugColumn()} = static::generateUniqueSlug($model->{$model->slugAttribute()});
        });
    }
}
