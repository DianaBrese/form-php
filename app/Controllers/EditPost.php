<?php

namespace App\Controllers;

use App\Models\PostsModel;

class EditPost extends BaseController
{

    private $postModel;

    public function __construct(){
        $this->postModel = new PostsModel();
    }

    public function index(): string
    {
        helper(['form']);
        $id = $this->request->getGet('id');
  
        $post =  $this->postModel->find($id);

        $variables = [
            'post'=> $post,
        ];
      

        return view('editPost', $variables);
    }

    public function edit() {
        helper(['form']);

        $rules = [
            'title'=>'required',
            'content'=>'required',
            'author'=>'required',
            'date'=>'required',
        ];

        if($this->validate($rules)) {
           

            $idPost = $this->request->getVar('id');

            $data = [
                'title'=> $this->request->getVar('title'),
                'content'=>$this->request->getVar('content'),
                'author'=>$this->request->getVar('author'),
                'date'=>$this->request->getVar('date'),
            ];

            $this->postModel->updatePost($idPost, $data);


            return redirect()->to('/home');
        } else {
            $data['validation'] = $this->validator;
            echo view('editPost', $data);
        }
    }
}
