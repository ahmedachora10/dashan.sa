<?php

namespace App\Models;

use App\Traits\HasTranslation;
use App\Traits\ThumbnailModelAttribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory, ThumbnailModelAttribute, HasTranslation;

    protected $fillable = ['title_ar', 'title_en', 'image', 'sort'];

    protected static function boot()
    {
        parent::boot();

        static::created(function (Slider $model) {
            $model->update(['sort' => $model->id]);
        });

        static::retrieved(fn(Slider $slider) => self::translation($slider));
    }
}
