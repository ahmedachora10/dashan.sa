<?php

namespace App\Models;

use App\Traits\HasTranslation;
use App\Traits\ThumbnailModelAttribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Slider extends Model
{
    use HasFactory, ThumbnailModelAttribute, HasTranslation;

    protected $fillable = ['title_ar', 'title_en', 'link', 'image_ar', 'image_en', 'styles', 'sort'];

    protected $casts = [
        'styles' => 'json'
    ];

    protected static function boot()
    {
        parent::boot();

        static::created(function (Slider $model) {
            $model->update(['sort' => $model->id]);
            self::clearCache();
        });

        static::retrieved(fn(Slider $slider) => self::translation($slider));

        static::updated(function (Slider $model) {
            self::clearCache();
        });

        static::deleted(function (Slider $model) {
            self::clearCache();
        });
    }

    private static function clearCache() {
        Cache::forget('why-us-icons');
    }
}
