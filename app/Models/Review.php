<?php

namespace App\Models;

use App\Traits\HasTranslation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Review extends Model
{
    use HasFactory , HasTranslation;

    protected $fillable = ['name_ar','name_en', 'comment_ar', 'comment_en','status','rate'];

    protected static function boot()
    {
        parent::boot();

        static::retrieved(fn(Review $review) => static::translation($review));

        static::created(function (Review $model) {
            Cache::forget('reviews');
            Cache::forget('active-reviews');
        });

        static::updated(function (Review $model) {
            Cache::forget('reviews');
            Cache::forget('active-reviews');
        });

        static::deleted(function (Review $model) {
            Cache::forget('reviews');
            Cache::forget('active-reviews');
        });
    }
    public function scopeActive($query) {
        $query->where('status', true);
    }

}
