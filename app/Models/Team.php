<?php

namespace App\Models;

use App\Traits\HasTranslation;
use App\Traits\ThumbnailModelAttribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Team extends Model
{
    use HasFactory, ThumbnailModelAttribute, HasTranslation;

    protected $fillable = [
        'image',
        'name_ar',
        'name_en',
        'job_name_ar',
        'job_name_en',
        'linkedin',
        'twitter',
    ];

    protected static function boot() {
        parent::boot();

        static::retrieved(fn(Team $team) => static::translation($team));

        static::created(function (Team $model) {
            static::clearCache();
        });

        static::updated(function (Team $model) {
            static::clearCache();
        });

        static::deleted(function (Team $model) {
            static::clearCache();
        });
    }

    public static function clearCache() {
        Cache::forget('team-members');
    }
}