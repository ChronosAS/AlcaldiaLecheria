<?php

namespace App\Livewire\Admin\News;

use App\Models\News\Post;
use App\Models\Team;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class Edit extends Component
{
    use WithFileUploads;

    public $post;

    public $title;
    public $subtitle;
    public $user;
    public $date;
    public $content;
    public $status = true;


    public function mount(Post $post)
    {
        $this->post = $post;

        $this->user = $post->user_id;
        $this->title = $post->title;
        $this->subtitle = $post->subtitle;
        $this->date = $this->post->date;
        $this->content = $post->content;
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
            'title' => ['required','string','max:200','unique:posts'],
            'subtitle' => ['nullable','string','max:200'],
            'date' => ['required','date'],
            'user' => ['required','string','exists:users,id'],
            // 'images.*.image' => ['required','image','max:4096'],
            // 'images.*.description' => ['nullable','string','max:150'],
            // 'images' => ['required','max:10']
        ],[
            'title.required' => 'Porfavor ingrese un titulo.',
            'title.unique' => 'Ya existe un post con este titulo.',
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
                'is_draft' => $this->is_draft,
                'date' => $this->date,
            ]);

            session()->flash('flash.banner','Post actualizado con exito.');
            session()->flash('flash.bannerStyle','success');

            return redirect()->route('admin.news.index');
        }else{
            session()->flash('message','Agregar contenido a el post.');
        }

    }

    public function render()
    {

        return view('livewire.admin.news.edit',[
            'users' => (Team::where('name','Prensa')->first())->allUsers()
        ])->layout('layouts.admin',['header'=>'Editar Noticia']);
    }
}
