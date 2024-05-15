<?php

namespace App\Models\News;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Post extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia, SoftDeletes, HasUuids;

    protected $fillable = [
        'title',
        'subtitle',
        'content',
        'slug'
    ];

    public function postetAt(): Attribute
    {
        return new Attribute(
            get: fn()=> ucwords(Carbon::parse($this->created_at)->isoFormat('dddd, d')).' de '.ucwords(Carbon::parse($this->created_at)->isoFormat('MMMM YYYY'))
        );
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('post-images')
            ->useFallbackUrl('https://www.flaticon.com/free-icons/no-photo');
    }

    public function scopeSearch($query, $term) : void
    {
        if($term) {
            $query->where('uuid', 'like', '%' . $term . '%')
                  ->orWhere('title', 'like', '%' . $term . '%')
                  ->orWhere('subtitle', 'like', '%' . $term . '%');
        }
    }
}
