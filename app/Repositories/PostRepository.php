<?php

namespace App\Repositories;

use App\Models\Post;

class PostRepository{

    protected $post;

    public function __construct(Post $post){
        $this->post = $post;
    }

    public function getAll(){
        $post = $this->post;
        return $post->orderBy('id','desc')->get();
    }

    public function save($data){
        $post = new $this->post;
        $post->title = $data['title'];
        $post->description = $data['description'];
        $post->save($data);
        return $post->fresh();
    }

    public function getbyId($id){ 
        return $this->post->where('id',$id)->first();
    }

    public function update($data,$id){
        $post = $this->post->find($id);
        $post->title = $data['title'];
        $post->description = $data['description'];
        $post->update();
        return $post->fresh();
    }

}