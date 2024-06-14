<?php

namespace App\Models\News;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Post extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia, SoftDeletes, HasUuids;

    protected $casts = [
        'is_draft' => 'boolean'
    ];

    protected $fillable = [
        'title',
        'subtitle',
        'content',
        'user_id',
        'date',
        'is_draft',
        'slug'
    ];

    public function postedAt(): Attribute
    {
        return new Attribute(
            get: fn()=> ucwords(Carbon::parse($this->created_at)->isoFormat('dddd, d')).' de '.ucwords(Carbon::parse($this->created_at)->isoFormat('MMMM YYYY'))
        );
    }

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('post-image')
            ->useFallbackUrl('https://www.flaticon.com/free-icons/no-photo');
    }

    public function scopeSearch($query, $term) : void
    {
        if($term) {
            $query->where('title', 'like', '%' . $term . '%')
                  ->orWhere('subtitle', 'like', '%' . $term . '%')
                  ->orWhere('date','like','%'.$term.'%')
                  ->orWhereRelation('user','name','like','%'.$term.'%');
        }
    }
}
