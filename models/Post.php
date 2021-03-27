<?php
namespace App\models;
use PDO;

class Post
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function getAllPosts()
    {
        $stmt = $this->pdo->query("SELECT * FROM posts ORDER BY created_at desc");
        return $stmt->fetchAll();
    }
    public function getOnePost($id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM posts WHERE id=:id");
        $stmt->execute([
            'id'=>$id
        ]);
        return $stmt->fetch();
    }
    public function insertPost($data)
    {
        $stmt = $this->pdo->prepare("INSERT INTO posts(title,text,created_at,image) VALUES(:title,:text,:created_at,:image)");
        $stmt->execute([
            "title"=>$data["title"],
            "text"=>$data["text"],
            "created_at"=>date("y-m-d"),
            "image"=>$data["image"]
        ]);
        return $this->pdo->lastInsertId();
    }
    public function deletePost($id){
        $stmt = $this->pdo->prepare('DELETE FROM posts WHERE id=:id');
        $stmt->execute([
            'id'=>$id
        ]);
    }
    public function updatePost($data)
    {
        $stmt=$this->pdo->prepare("UPDATE posts SET title=:title,text=:text,image=:image,created_at=:created_at WHERE id=:id");

        $stmt->execute([
            'title'=>$data['title'],
            'text'=>$data['text'],
            'image'=>$data['image'],
            'created_at'=>date('y-m-d'),
            'id'=>$data['id']
        ]);
    }
}