<?php

class VideosController extends Controller {

    public function index() {
        $dados = array();
        
        $this->loadTemplate('videos', $dados);
    }

    public function ver($id) {
        echo "Nome da noticia que veremos: " . $id;
    }

}
