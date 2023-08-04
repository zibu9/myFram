<?php

namespace App\Controllers;

use App\Models\Post;

class BlogController extends BaseController {

    public function index()
    {
        $post = new Post($this->getDB());
        $posts = $post->all();
        var_dump($posts);die();
        return $this->view('blog.index');
    }

    public function show(int $id)
    {
        $post = new Post($this->getDB());
        return $this->view('blog.show', compact('id'));
    }
}