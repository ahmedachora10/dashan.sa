<?php

namespace App\Models;

use App\Traits\HasTranslation;
use App\Traits\ThumbnailModelAttribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    use HasFactory, HasTranslation, ThumbnailModelAttribute;

    protected $fillable = ['image', 'title_ar', 'title_en'];

    protected static function boot()
    {
        parent::boot();

        static::retrieved(fn(Certificate $certificate) => static::translation($certificate));
    }
}