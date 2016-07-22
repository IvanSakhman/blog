<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 7/20/16
 * Time: 7:13 PM
 */

namespace App\Repositories;

use App\Entities\Post;

class PostRepository
{
    private $model;

    public function __construct(Post $model)
    {
        $this->model = $model;
    }
    
    public function getAll() 
    {
        return $this->model->all();
    }

    /**
     * @return Post
     */
    public function paginate()
    {
        return $this->model->paginate(5);
    }
    
    public function store(array $data)
    {
        $post = Post::create($data);
        return $post;
    }

    public function find($id)
    {
        return $this->model->find($id);
    }
    
    public function edit($id)
    {
        $post = Post::find($id);
        return $post;
    }

    public function update(array $data, $id)
    {
        $post = Post::find($id);
        $post->update($data);
        return $post;
    }
    
    public function destroy($id)
    {
        Post::destroy($id);
    }
}