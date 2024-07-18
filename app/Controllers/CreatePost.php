<?php

namespace App\Controllers;

use App\Models\PostsModel;

class CreatePost extends BaseController
{

    public function index(): string
    {

        helper(['form']);
        return view('createPost');
    }

    public function store()
    {
        helper(['form']);

        $rules = [
            'title' => 'required',
            'content' => 'required',
            'author' => 'required',
            'date' => 'required',
        ];

     
        if ($this->validate($rules)) {
            $createPost = new PostsModel();

            $data = [
                'title' => $this->request->getVar('title'),
                'content' => $this->request->getVar('content'),
                'author' => $this->request->getVar('author'),
                'date' => $this->request->getVar('date'),

            ];
        
            $createPost->save($data);
            return redirect()->to('/home');
        } else {
            $data['validation'] = $this->validator;
            echo view('createPost', $data);
        }
  
    }
}
