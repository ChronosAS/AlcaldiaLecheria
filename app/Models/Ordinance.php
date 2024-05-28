<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Ordinance extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia, HasUuids, SoftDeletes;

    protected $fillable = [
        'title',
        'number',
        'date'
    ];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('ordinance-media')
            ->useFallbackUrl('https://www.flaticon.com/free-icons/no-photo');
    }

    public function getDates()
    {
        return array('created_at','updated_at','date');
    }

    public function scopeSearch($query, $term) : void
    {
        if($term) {
            $query->where('id', 'like', '%' . $term . '%')
                  ->orWhere('title', 'like', '%' . $term . '%')
                  ->orWhere('number', 'like', '%' . $term . '%')
                  ->orWhere('date', 'like', '%' . $term . '%');
        }
    }

}
