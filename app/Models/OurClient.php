<?php

namespace App\Models;

use App\Traits\ThumbnailModelAttribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class OurClient extends Model
{
    use HasFactory, ThumbnailModelAttribute;

    protected $fillable = ['name', 'image', 'link'];

    protected static function boot()
    {
        parent::boot();

        static::created(function (OurClient $model) {
            Cache::forget('our-clients');
        });

        static::updated(function (OurClient $model) {
            Cache::forget('our-clients');
        });

        static::deleted(function (OurClient $model) {
            Cache::forget('our-clients');
        });
    }

}
