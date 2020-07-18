<?php

session_start();
require "./repository/FilmesRepositoryPDO.php";
require "./model/filme.php";

class FilmesController{
        public function index(){
                $filmesRepository = new FilmesRepositoryPDO();
                return $filmesRepository->listarTodos();
        }

        
        public function save($request){

                $filmeRepository = new FilmesRepositoryPDO();                
                $filme = (object) $request;

                $upload = $this-> savePoster($_FILES);

                if (gettype($upload)=="string"){
                        $filme->poster = $upload;
                }

                if ($filmeRepository->salvar($filme)) 
                        $_SESSION["msg"] = "Filme cadastrado com sucesso";
                else
                        $_SESSION["msg"] = "Erro ao cadastrar filme";
                
                header("location: /");
        }

        private function savePoster($file){
                $posterDir = "imagens/posters/";
                $posterPath = $posterDir . basename( $file ["poster_file"]["tmp_name"]);
                $posterTmp = $file ["poster_file"]["tmp_name"];
                
                
                $image = new SimpleImage();
                $image->load($posterTmp);
                $image->resize(200, 300);
                $image->save($posterPath);
                return $posterPath;
        }
        
        public function favorite(int $id){
                $filmesRepository = new FilmesRepositoryPDO();
                $result = ['success' => $filmesRepository->favoritar($id)];
                header('Content-type: application/json');
                echo json_encode($result);


        }
}



?>