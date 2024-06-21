<?php

namespace App\Livewire\Admin\News;

use App\Models\News\Post;
use App\Models\Team;
use Illuminate\Support\Str;
use Livewire\Attributes\Locked;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;


    public $title;
    public $subtitle;
    #[Locked]
    public $user;
    public $date;
    public $content;
    public $images = [];


    public function mount()
    {
        $this->images[] = $this->additionalImage();
        $this->user = auth()->user()->id;
    }

    public function addImage()
    {
        if (count($this->images) <= 9) {
            $this->images[] = $this->additionalImage();
        }
    }

    public function removeImage($line)
    {
        $this->resetErrorBag();

        unset($this->images[$line]);

        $this->images = array_values($this->images);
    }

    public function additionalImage()
    {
        return [
            'image',
            'description'
        ];
    }

    public function save()
    {

        $this->title= Str::lower($this->title);

        $this->validate([
            'title' => ['required','string','max:200','unique:posts'],
            'subtitle' => ['nullable','string','max:200'],
            'date' => ['required','date'],
            'user' => ['required','string','exists:users,id'],
            'images.*.image' => ['required','image','max:4096'],
            'images.*.description' => ['nullable','string','max:150'],
            'images' => ['required','max:10']
        ],[
            'title.required' => 'Porfavor ingrese un titulo.',
            'title.unique' => 'Ya existe un post con este titulo.',
            'max' => 'Maximo de caracteres exedido.',
            'date.required' => 'Porfavor elija una fecha.',
            'user.required' => 'Porfavor elija un usuario.',
            'images.max' => 'Ingrese un maximo de 10 imagenes.',
            'images.image.max' => 'Imagen exede el tamaño maximo de 4mb.',
            'images.required' => 'Ingrese un minimo de 1 imagen.',
            'images.*.image.required' => 'El campo de imagen no puede estar vacio.',
        ]);

        if($this->content){
            tap(Post::create([
                'title' => $this->title,
                'subtitle' => $this->subtitle,
                'content' => $this->content,
                'user_id' => $this->user,
                'date' => $this->date,
            ]),function($post){
                if(isset($this->images[0]['image'])){
                    foreach($this->images as $image){
                        $description = (isset($image['description'])) ? $image['description'] : '';
                        $post->addMedia($image['image']->getRealPath())
                            ->withCustomProperties(['description' => $description])
                            ->usingName($image['image']->getClientOriginalName())
                            ->toMediaCollection('post-image');
                    }
                }
            });

            session()->flash('flash.banner','Post creado con exito.');
            session()->flash('flash.bannerStyle','success');

            return redirect()->route('admin.news.index');
        }else{
            session()->flash('message','Agregar contenido a el post.');
        }

    }

    public function render()
    {

        return view('livewire.admin.news.create',[
            'users' => (Team::where('name','Prensa')->first())->allUsers()
        ])->layout('layouts.admin',['header'=>'Crear Noticia']);
    }
}
