<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;

class Gallery extends Model
{
    use HasFactory,InteractsWithMedia;

    protected $fillable = [
        'name'
    ];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('gallery')
            ->useFallbackUrl('https://www.flaticon.com/free-icons/no-photo');
    }
}
