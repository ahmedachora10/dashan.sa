<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class JobCity extends Model
{
    use HasFactory;

    public $fillable = ['title'];

    public function getGetTitleAttribute()
    {
        return $this->title;
    }

    public function jobs() : HasMany {
        return $this->hasMany(JobRequest::class);
    }
}