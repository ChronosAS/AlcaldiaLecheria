<?php

namespace App\Livewire\News;

use App\Enums\News\PostStatus;
use App\Models\News\Post;
use Livewire\Attributes\Computed;
use Livewire\Component;

class NewsCarousel extends Component
{
    #[Computed]
    public function posts()
    {
        return Post::latest()
        ->where('status',PostStatus::PUBLISHED->value)
        ->take(4)
        ->get()
        ->map(function($post){
            $images = $post->getMedia('post-image');
            $post->image = ($images->where('order_column',1)->first())->getUrl();
            $post->imageAlt = $post->title.'-img';
            return $post;
        })->toArray();
    }

    public function show($post)
    {
        return redirect()->route('app.news.show',$post);
    }

    public function render()
    {
        return view('components.news.news-carousel');
    }

}
