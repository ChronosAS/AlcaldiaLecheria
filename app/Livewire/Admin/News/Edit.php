<?php

namespace App\Livewire\Admin\News;

use App\Enums\News\PostStatus;
use App\Models\News\Post;
use App\Models\Team;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Locked;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithFileUploads;
use Spatie\Tags\Tag;

class Edit extends Component
{
    use WithFileUploads;

    #[Locked]
    public $post;

    public $title;
    public $subtitle;
    public $user;
    public $date;
    public $content;
    public $status;
    public $postTags = [];
    public $iteration = 0;


    public function mount($post)
    {
        $this->post = Post::withTrashed()->find($post);

        $this->user = $this->post->user_id;
        $this->title = $this->post->title;
        $this->subtitle = $this->post->subtitle;
        $this->date = $this->post->date;
        $this->status = ($this->post->status->value == PostStatus::DRAFT->value) ? true : false;
        $this->content = $this->post->content;
        $this->postTags = $this->post->tags->pluck('name')->toArray();
        $this->dispatch('loadPage');
    }

    #[On('tag-created')]
        public function updatingTags()
        {
            $this->dispatch('loadPage');
            $this->iteration++;
        }
    // public function addImage()
    // {
    //     if (count($this->images) <= 9) {
    //         $this->images[] = $this->additionalImage();
    //     }
    // }

    // public function removeImage($line)
    // {
    //     $this->resetErrorBag();

    //     unset($this->images[$line]);

    //     $this->images = array_values($this->images);
    // }

    // public function additionalImage()
    // {
    //     return [
    //         'image',
    //         'description'
    //     ];
    // }

    public function update()
    {

        $this->title= Str::lower($this->title);

        $this->validate([
            'title' => ['required','string','max:200'],
            'subtitle' => ['nullable','string','max:200'],
            'date' => ['required','date'],
            'user' => ['required','string','exists:users,id'],
            // 'images.*.image' => ['required','image','max:4096'],
            // 'images.*.description' => ['nullable','string','max:150'],
            // 'images' => ['required','max:10']
        ],[
            'title.required' => 'Porfavor ingrese un titulo.',
            'max' => 'Maximo de caracteres exedido.',
            'date.required' => 'Porfavor elija una fecha.',
            'user.required' => 'Porfavor elija un usuario.',
            // 'images.max' => 'Ingrese un maximo de 10 imagenes.',
            // 'images.required' => 'Ingrese un minimo de 1 imagen.',
            // 'images.*.image.required' => 'El campo de imagen no puede estar vacio.',
        ]);

        if($this->content){
            $this->post->update([
                'title' => $this->title,
                'subtitle' => $this->subtitle,
                'content' => $this->content,
                'user_id' => $this->user,
                'status' => ($this->status) ? PostStatus::DRAFT->value : PostStatus::PUBLISHED->value,
                'date' => $this->date,
                'iso_date' => ucwords(Carbon::parse($this->date)->isoFormat('dddd, D')).' de '.ucwords(Carbon::parse($this->date)->isoFormat('MMMM YYYY'))
            ]);

            if(!empty($this->postTags))
                $this->post->syncTags($this->postTags);

            session()->flash('flash.banner','Post actualizado con exito.');
            session()->flash('flash.bannerStyle','success');

            return redirect()->route('admin.news.index');
        }else{
            session()->flash('message','Agregar contenido a el post.');
        }

    }

    #[Layout('layouts.admin',['header'=>'Editar Noticia'])]
    public function render()
    {

        return view('livewire.admin.news.edit',[
            'users' => (Team::where('name','Prensa')->first())->allUsers(),
            'tags' => Tag::all()
        ]);
    }
}
