<?php

namespace Apartaments;

class ServeisApartaments {

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

    //Obtenir els serveis d'un apartament
    public function getSerData($id) {
        $stm = $this->sql->prepare("SELECT idServei FROM serveisapartaments WHERE idApartament = :id;");
        $stm->execute([':id' => $id]);
        $results = $stm->fetchAll(\PDO::FETCH_ASSOC);
    
        if ($results) {
            return $results;
        } else {
            return [];
        }
    }
    
    //Pujar serveis a la bdd
    public function upload($apt_pics, $apt_wifi, $apt_park, $apt_cale, $aptId){
        if($apt_pics != NULL){
            $stm = $this->sql->prepare('INSERT INTO serveisapartaments (idServei, idApartament) VALUES (:idServei, :idApartament)');
            $stm->execute([
                ':idServei' => $apt_pics,
                ':idApartament' => $aptId,
            ]);
        }
        if($apt_wifi != NULL){
            $stm = $this->sql->prepare('INSERT INTO serveisapartaments (idServei, idApartament) VALUES (:idServei, :idApartament)');
            $stm->execute([
                ':idServei' => $apt_wifi,
                ':idApartament' => $aptId,
            ]);
        }
        if($apt_park != NULL){
            $stm = $this->sql->prepare('INSERT INTO serveisapartaments (idServei, idApartament) VALUES (:idServei, :idApartament)');
            $stm->execute([
                ':idServei' => $apt_park,
                ':idApartament' => $aptId,
            ]);
        }
        if($apt_cale != NULL){
            $stm = $this->sql->prepare('INSERT INTO serveisapartaments (idServei, idApartament) VALUES (:idServei, :idApartament)');
            $stm->execute([
                ':idServei' => $apt_cale,
                ':idApartament' => $aptId,
            ]);
        }
    }
    
}