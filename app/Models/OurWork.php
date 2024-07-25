<?php

namespace App\Models;

use App\Traits\HasTranslation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class OurWork extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia, HasTranslation;

    protected $fillable = [
        'client_name_ar',
        'client_name_en',
        'transaction_start_date',
        'transaction_end_date',
        'duration_of_work',
        'description_ar',
        'description_en',
        'content_ar',
        'content_en'
    ];

    protected static function boot()
    {
        parent::boot();

        static::retrieved(fn(OurWork $ourWork) => static::translation($ourWork));
    }

    public function getThumbnailAttribute() {
        // $media = $this->getFirstMedia('works')?->getUrl();
        $media = $this->media?->first()?->getUrl();
        return $media ?? asset(setting('logo'));
    }

}