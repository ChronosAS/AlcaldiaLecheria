<?php


namespace App\Livewire\News;

use App\Enums\News\PostStatus;
use App\Models\News\Post;
use Livewire\Attributes\Computed;
use Livewire\Component;

class Main extends Component
{
    public $carouselPosts;
    public $sidePosts;

    public function mount()
    {
        $posts = Post::latest()
        ->where('status',PostStatus::PUBLISHED->value)
        ->take(10)
        ->get()
        ->map(function($post){
            $post->image = $post->getFirstMediaUrl('post-image');
            // $images = $post->getMedia('post-image');
            // $post->image = ($images->where('order_column',1)->first())?->getUrl();
            $post->imageAlt = $post->title.'-img';
            return $post;
        });
        if(count($posts)>=6){
            $this->sidePosts = $posts->take(6-count($posts));
        }
        $this->carouselPosts = $posts->take(5);
    }

    public function render()
    {
        return view('components.news.main');
    }
}
