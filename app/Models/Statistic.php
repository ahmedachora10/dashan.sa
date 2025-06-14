<?php

namespace App\Models;

use App\Traits\HasTranslation;
use App\Traits\ThumbnailModelAttribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Statistic extends Model
{
    use HasFactory, ThumbnailModelAttribute, HasTranslation;

    protected $fillable = ['title_en', 'title_ar', 'count'];

    protected static function boot() {
        parent::boot();

        static::retrieved(fn(Statistic $statistic) => static::translation($statistic));

        static::created(function (Statistic $model) {
            Cache::forget('statistics');
        });

        static::updated(function (Statistic $model) {
            Cache::forget('statistics');
        });

        static::deleted(function (Statistic $model) {
            Cache::forget('statistics');
        });
    }
}
