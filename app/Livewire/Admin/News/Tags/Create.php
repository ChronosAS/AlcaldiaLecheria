<?php

namespace App\Livewire\Admin\News\Tags;

use App\Livewire\Admin\News\Create as NewsCreate;
use Livewire\Attributes\On;
use Livewire\Component;
use Spatie\Tags\Tag;

class Create extends Component
{
    public $createTagModal = false;
    public $name;

    #[On('create-tag')]
    public function toggleCreateTagsModal()
    {
        $this->createTagModal = !$this->createTagModal;
    }

    public function save()
    {

        $this->validate([
            'name' => ['string','max:25']
        ]);

        Tag::create([
            'name' => $this->name
        ]);

        $this->toggleCreateTagsModal();
        $this->dispatch('tag-created');
    }

    public function render()
    {
        return view('livewire.admin.news.tags.create');
    }
}