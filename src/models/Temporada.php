<?php

namespace Apartaments;

class Temporada {

    public $sql;

    public function __construct($sql){
        $this->sql = $sql;
    }

    public function getAll(){
        $temporada = array();
        $query = "select * from temporada;";
        foreach ($this->sql->query($query, \PDO::FETCH_ASSOC) as $temp) {
            $temporada[] = $temp;
        }

        return $temporada;
    }

    public function upload($data_ini_alta, $data_fin_alta, $data_ini_baixa, $data_fin_baixa, $aptId) {
        $stm = $this->sql->prepare('INSERT INTO temporada ( idApartament, nom, dataInici, dataFinal) VALUES (:idApartament, :tipus, :datainici, :datafinal)');
        $stm->execute([
            ':idApartament' => $aptId,
            ':tipus' => "Temporada Alta",
            ':datainici' => $data_ini_alta,
            ':datafinal' => $data_fin_alta,
        ]);
        $stm = $this->sql->prepare('INSERT INTO temporada ( idApartament, nom, dataInici, dataFinal) VALUES (:idApartament, :tipus, :datainicib, :datafinalb)');
        $stm->execute([
            ':idApartament' => $aptId,
            ':tipus' => "Temporada Baixa",
            ':datainicib' => $data_ini_baixa,
            ':datafinalb' => $data_fin_baixa,
        ]);



    }





}