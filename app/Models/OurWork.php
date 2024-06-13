<?php

namespace App\Models;

use App\Traits\ThumbnailModelAttribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OurWork extends Model
{
    use HasFactory, ThumbnailModelAttribute;

    protected $fillable = ['image', 'title', 'content'];
}