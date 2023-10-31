<?php

namespace Apartaments;

class serveis {

    public $sql;

    public function __construct($sql){
        $this->sql = $sql;
    }

    public function getAll(){
        $serveis = array();
        $query = "select * from serveisapartaments;";
        foreach ($this->sql->query($query, \PDO::FETCH_ASSOC) as $ser) {
            $serveis[] = $ser;
        }

        return $serveis;
}

    /*public function upload($apt_pics,$apt_wifi, $apt_park,$apt_cale,$idApartament){
        if($apt_pics != NULL){
            $stm = $this->sql->prepare('INSERT INTO serveisapartaments (idServei, idApartament) VALUES (:idServei, :idApartament)');
            $stm->execute([
                ':idServei' =>
            ])
        }
    }*/
}