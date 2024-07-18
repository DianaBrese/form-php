<?php

namespace App\Controllers;
use App\Models\PostsModel;

class PostDetail extends BaseController
{
    public function index(): string
    {
    $id = $this->request->getGet('id');
    $posts = new PostsModel();
    $post = $posts->find($id);

    $variable = [
        'post' => $post,
    ];
    
        return view('postDetail', $variable);
    }
}
