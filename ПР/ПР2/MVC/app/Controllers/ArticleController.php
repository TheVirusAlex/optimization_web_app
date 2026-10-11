<?php

namespace App\Controllers;


use App\Core\Controller;
use App\Models\Article;


Class ArticleController extends Controller{

    private Article $model;


    public function __construct(){

        $this->model = new Article();
    }
    public function index() : void{

        $this->view('articles/index', ["article" => $this->model->all()]);


    }


    public function show(array $id): void{

        $article = $this->model->find($id);

        if(!$article){
            http_response_code(404);
            exit("Статья не найдена :<");
        }

        $this->view("articles/show", ["article" => $article]);
    }
}

?>