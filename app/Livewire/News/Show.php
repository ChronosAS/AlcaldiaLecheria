<?php

namespace App\Livewire\News;

use App\Models\Media;
use App\Models\News\Post;
use Livewire\Component;

class Show extends Component
{

    public $post;
    public $images = [];

    public function mount(Post $post)
    {
        $this->post = $post;
        $this->images = $this->post->getMedia('post-image')->map(function(Media $media){
            $media->url = $media->getUrl();
            $media->alt = str_replace(' ','-',$this->post->title).'-img';
            return $media;
        });
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

    public function render()
    {
        return view('livewire.news.show')->layout('layouts.main');
    }
}
