<?php

namespace App\Livewire\Admin\News;

use App\Models\News\Post;
use Livewire\Attributes\On;
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

        $this->validate([
            'image' => ['required','file','image','max:4096'],
            'name' => ['nullable','string','max:50'],
            'description' => ['nullable','string','max:150'],
        ],[
            'name.max' => 'Nombre de la imagen no debe exeder 50 caracteres.',
            'image.required' => 'El campo de imagen no puede estar vacio.',
            'image.file' => 'El archivo debe ser válido.',
            'image.image' => 'El archivo debe ser una imagen',
            'image.max' => 'Imagen exede el tamaño maximo de 4mb.'
        ]);

        if (blank($this->image)) {
            $this->addError('image', 'El campo de imagen no puede estar vacio.');

            return;
        }

        $originalName = $this->image->getClientOriginalName();
        $this->name = $originalName;

        $this->post->addMedia($this->image->getRealPath())
            ->withCustomProperties(['description' => $this->description])
            ->usingName($originalName)
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
