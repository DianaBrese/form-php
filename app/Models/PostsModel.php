<?php namespace App\Models;

use CodeIgniter\Model;
class PostsModel extends Model {

    protected $table = 'posts';

    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'content', 'author', 'date'];



    public function updatePost($id, $data){

        return $this->update($id, $data);

    }
    
    public function deletePost($id) {
        return $this->delete($id);
    }




}
