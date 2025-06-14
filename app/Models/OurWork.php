<?php

namespace App\Models;

use App\Traits\HasTranslation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Cache;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class OurWork extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia, HasTranslation;

    protected $fillable = [
        'tag_id',
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

        static::created(function (OurWork $model) {
            static::clearCache();
        });

        static::updated(function (OurWork $model) {
            static::clearCache($model);
        });

        static::deleted(function (OurWork $model) {
            static::clearCache($model);
        });
    }

    private static function clearCache(?OurWork $model = null) {
        Cache::forget('works');
        Cache::forget('works-home');
        Cache::forget('works-tags');

        if ($model) {
            Cache::forget("work-{$model->id}");
            Cache::forget("work-images-{$model->id}");
        }
    }

    public function getThumbnailAttribute() {
        $media = $this->getFirstMedia('works-thumb')?->getUrl('main-thumb');
        return $media ?? asset(setting('logo'));
    }
    public function getBackgroundAttribute() {
        // $media = $this->getFirstMedia('works')?->getUrl();
        $media = $this->getFirstMedia('works-bg')?->getUrl();
        return $media ?? asset(setting('logo'));
    }

    public function getImagesAttribute() {
        // $media = $this->getFirstMedia('works')?->getUrl();
        $images = $this->getMedia('works');
        return $images;
    }

    public function tag() : BelongsTo {
        return $this->belongsTo(Tag::class);
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')
            ->width(110)
            ->height(110)
            ->sharpen(10)
            ->withResponsiveImages()
            ->keepOriginalImageFormat() ;

            $this->addMediaConversion('main-thumb')
            ->width(370)
            ->height(438)
            ->sharpen(10)
            ->withResponsiveImages()
            ->keepOriginalImageFormat();
    }

    public function getImageDimensions(Media $media)
    {
        // Get the full path to the image
        $filePath = $media->getPath();

        // Use getimagesize() to retrieve width and height
        list($width, $height) = getimagesize($filePath);

        return [
            'width' => $width,
            'height' => $height,
        ];
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('images')
             ->onlyKeepLatest(300); // Will keep only the latest 300 images
    }

}