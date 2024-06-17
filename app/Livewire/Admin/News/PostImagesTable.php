<?php

namespace App\Livewire\Admin\News;

use App\Models\News\Post;
use Livewire\Component;

class PostImagesTable extends Component
{
    public Post $post;
    public $showImage = false;
    public $modal_image = "";
    public $images;

    public function mount($post)
    {
        $this->post = $post;
    }

    public function getImages()
    {
        return $this->post->getMedia('post-image')->sortBy('order_column');
    }

    public function moveImageUp($order)
    {

        $image = $this->images->where('order_column',$order)->first();
        $prev_image = $this->images->where('order_column',$order-1)->first();

        $image->order_column--;
        $prev_image->order_column++;

        $image->save();
        $prev_image->save();
    }

    public function moveImageDown($order)
    {

        $image = $this->images->where('order_column',$order)->first();
        $next_image = $this->images->where('order_column',$order+1)->first();

        $image->order_column++;
        $next_image->order_column--;

        $image->save();
        $next_image->save();
    }

    public function deleteImage($index)
    {
        $image = $this->images[$index];

        $image->delete();

    }

    public function showImageModal($image)
    {
        $this->showImage = !$this->showImage;

        $this->modal_image = $image;
    }

    public function render()
    {
        $this->images = $this->getImages();
        return view('livewire.admin.news.post-images-table');
    }
}
