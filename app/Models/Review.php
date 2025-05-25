<?php

namespace App\Models;

use App\Traits\HasTranslation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory , HasTranslation;

    protected $fillable = ['name_ar','name_en', 'comment_ar', 'comment_en','status','rate'];

    protected static function boot()
    {
        parent::boot();

        static::retrieved(fn(Review $review) => static::translation($review));
    }
    public function scopeActive($query) {
        $query->where('status', true);
    }

}
