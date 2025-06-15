<?php

namespace App\Models;

use App\Traits\HasTranslation;
use App\Traits\ThumbnailModelAttribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class OurService extends Model
{
    use HasFactory, ThumbnailModelAttribute, HasTranslation;

    protected $fillable = [
        'name_ar',
        'name_en',
        'title_ar',
        'title_en',
        'description_ar',
        'description_en',
        'image',
        'logo',
        'sort'
    ];

    protected static function boot()
    {
        parent::boot();

        static::created(function (OurService $model) {
            $model->update(['sort' => $model->id]);
            Cache::forget('our_services');
            Cache::forget('our-services-home');
        });

        static::updated(function (OurService $model) {
            Cache::forget('our_services');
            Cache::forget('our-services-home');
        });

        static::deleted(function (OurService $model) {
            Cache::forget('our_services');
            Cache::forget('our-services-home');
        });

        static::retrieved(fn(OurService $service) => self::translation($service));
    }
}