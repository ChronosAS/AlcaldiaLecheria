<?php

namespace App\Livewire\Admin\News;

use App\Models\News\Post;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class AddImageModal extends Component
{
    use WithFileUploads;

    public $addImage = false;

    public Post $post;

    public $image;
    public $name;
    public $description;

    public function mount(Post $post)
    {
        $this->post = $post;
    }

    public function saveImage()
    {
        $this->name = $this->image->getClientOriginalName();
        $this->validate([
            'image' => ['required','image','max:4096'],
            'name' => ['nullable','string','max:50'],
            'description' => ['nullable','string','max:150'],
        ],[
            'name.max' => 'Nombre de la imagen no debe exeder 50 caracteres.',
            'image.required' => 'El campo de imagen no puede estar vacio.',
            'image.image' => 'El archivo debe ser una imagen',
            'image.max' => 'Imagen exede el tamaño maximo de 4mb.'
        ]);

        $this->post->addMedia($this->image->getRealPath())
            ->withCustomProperties(['descrip tion' => $this->description])
            ->usingName($this->image->getClientOriginalName())
            ->toMediaCollection('post-image');

        $this->reset(['image','description','addImage']);
        $this->dispatch('image-added');
    }

    #[On('show-add-image-modal')]
    public function showImageModal()
    {
        $this->addImage = !$this->addImage;
    }

    public function render()
    {
        return view('livewire.admin.news.add-image-modal');
    }
}
