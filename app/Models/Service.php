<?php

namespace App\Models;

use App\Traits\ThumbnailModelAttribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory, ThumbnailModelAttribute;

    protected $fillable = [
        'image',
        'name',
        'price',
        'description',
    ];

    public function getGetNameAttribute() {
        return app()->getLocale() === 'en' ? $this->name_en : $this->name;
    }

    public function getGetDescriptionAttribute() {
        return app()->getLocale() === 'en' ? $this->description_en : $this->description;
    }
}