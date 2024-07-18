<?php

namespace App\Controllers;

use App\Models\PostsModel;

class Home extends BaseController
{
    public function index(): string
    {
        $posts = new PostsModel();

        $resumoPosts = $posts->findAll();
        $variables = [
            'posts' => $resumoPosts,
        ];

        return view('home', $variables);
    }
}
