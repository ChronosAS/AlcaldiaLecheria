<?php

namespace App\Http\Livewire\Admin\News;

use App\Models\Media;
use App\Models\News\Post;
use Livewire\Component;

class ImagesTable extends Component
{
    public Post $post;
    public $images;

    public function mount($post)
    {
        $this->post = $post;
    }

    public function getImages()
    {
        return $this->post->getMedia('post-images')->sortBy('order_column');
    }

    public function moveImageUp($order)
    {

        $image = $this->images->where('order_column',$order)->first();
        $prev_image = $this->images->where('order_column',$order-1)->first();

        $image->order_column--;
        $prev_image->order_column++;

        $image->save();
        $prev_image->save();

        $this->render();

    }

    public function moveImageDown($order)
    {

        $image = $this->images->where('order_column',$order)->first();
        $next_image = $this->images->where('order_column',$order+1)->first();

        $image->order_column++;
        $next_image->order_column--;

        $image->save();
        $next_image->save();

        $this->render();
    }

    public function deleteImage($image)
    {
        Media::find($image)->delete();
    }
    public function render()
    {
        $this->images = $this->getImages();
        return view('livewire.admin.news.images-table');
    }
}
