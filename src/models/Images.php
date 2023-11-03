<?php

namespace Apartaments;

class Imatge {

    public $sql;

    public function __construct($sql){
        $this->sql = $sql;
    }

    public function getAll(){
        $imgApartament = array();
        $query = "select * from imgapartament;";
        foreach ($this->sql->query($query, \PDO::FETCH_ASSOC) as $img) {
            $imgApartament[] = $img;
        }

        return $imgApartament;
    }
    
    
    public function upload($aptId, $imgPath) {
        $stm = $this->sql->prepare('INSERT INTO imgapartament (aptUrl, idApartament) VALUES (:aptUrl, :idApartament)');
        $stm->execute([
            ':aptUrl' => $imgPath,
            ':idApartament' => $aptId,
            
        ]);
    }
    

}