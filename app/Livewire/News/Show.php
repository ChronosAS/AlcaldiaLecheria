<?php

namespace App\Livewire\News;

use App\Models\Media;
use App\Models\News\Post;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Locked;
use Livewire\Component;

class Show extends Component
{
    #[Locked]
    public $navPosts;
    public Post $post;
    public $images = [];

    public function mount(Post $post)
    {
        $this->post = $post;
        $this->images = $this->post->getMedia('post-image')->map(function(Media $media){
            $media->url = $media->getUrl();
            $media->alt = str_replace(' ','-',$this->post->title).'-img';
            return $media;
        });
        $this->navPosts = Post::where('id', '!=' , $post->id)->latest()->take(5)->get();
    }

    // public function getImages()
    // {
    //     $images = [];
    //     foreach($this->post->getMedia('post-image') as $image){
    //         $images += [
    //             'url' => $image->getUrl(),
    //             'alt' => str_replace(' ','-',$this->post->title).'-img'
    //         ];
    //     }
    //     dd($images);
    //     return ;
    // }
    #[Layout('layouts.main')]
    public function render()
    {
        return view('livewire.news.show');
    }
}
