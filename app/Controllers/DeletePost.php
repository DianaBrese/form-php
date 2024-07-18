<?php

namespace App\Controllers;

use App\Models\PostsModel;

class DeletePost extends BaseController
{

    private $postModel;

    public function __construct()
    {
        $this->postModel = new PostsModel();
    }

    public function deleteP() {
        $idPost = $this->request->getVar('id');
        $this->postModel->deletePost( $idPost);
        return redirect()->to('/home');
    }
}
