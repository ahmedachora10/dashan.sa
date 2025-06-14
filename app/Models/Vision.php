<?php

namespace App\Models;

use App\Traits\HasTranslation;
use App\Traits\ThumbnailModelAttribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Vision extends Model
{
    use HasFactory, HasTranslation, ThumbnailModelAttribute;

    protected $fillable = [
        'title_ar',
        'title_en',
        'description_en',
        'description_ar',
        'image'
    ];

    protected static function booted() : void
    {
        static::retrieved(fn(Vision $service) => self::translation($service));

        static::created(function (Vision $model) {
            Cache::forget('visions');
        });

        static::updated(function (Vision $model) {
            Cache::forget('visions');
        });

        static::deleted(function (Vision $model) {
            Cache::forget('visions');
        });
    }
}