<?php

namespace App\Models;

use App\Traits\HasTranslation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Cache;

class Tag extends Model
{
    use HasFactory, HasTranslation;

    protected $fillable = ['name_ar', 'name_en'];

    protected static function boot()
    {
        parent::boot();

        static::retrieved(fn(Tag $tag) => static::translation($tag));

        static::created(function (Tag $model) {
            static::clearCache();
        });

        static::updated(function (Tag $model) {
            static::clearCache($model);
        });

        static::deleted(function (Tag $model) {
            static::clearCache($model);
        });
    }

    private static function clearCache(?Tag $tag = null) {
        Cache::forget('tags');
        Cache::forget('works-tags');
    }

    public function works() : HasMany {
        return $this->hasMany(OurWork::class);
    }
}