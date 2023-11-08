<?php

namespace Apartaments;

class Reserva {

    public $sql;

    public function __construct($sql){
        $this->sql = $sql;
    }

    public function getAll(){
        $reserva = array();
        $query = "select * from reserva;";
        foreach ($this->sql->query($query, \PDO::FETCH_ASSOC) as $res) {
            $reserva[] = $res;
        }

        return $reserva;
    }

    public function getResData($id) {
        $stm = $this->sql->prepare("SELECT * FROM reserva WHERE idUsuari=:id;");
        $stm->execute([':id' => $id]);
        $results = $stm->fetchAll(\PDO::FETCH_ASSOC);
    
        if ($results) {
            return $results;
        } else {
            return [];
        }
    }

    public function getResDataObert($id) {
        $stm = $this->sql->prepare("SELECT * FROM reserva WHERE idUsuari=:id and estat = 'Obert';");
        $stm->execute([':id' => $id]);
        $results = $stm->fetchAll(\PDO::FETCH_ASSOC);
    
        if ($results) {
            return $results;
        } else {
            return [];
        }
    }

    public function reser($idUsuari, $aptId, $dataCancel, $preu, $FormatIniciReserva, $FormatFiReserva, $Estat){
        $stm = $this->sql->prepare('INSERT INTO reserva ( idApartament, idUsuari, DataMaximCancel, preu, diaEntrada, diaSortida, estat) VALUES (:idApartament, :idUsuari,:DataMaximCancel, :preu, :diaEntrada, :diaSortida, :estat)');
        $stm->execute([
            ':idApartament' => $aptId,
            ':idUsuari' => $idUsuari,
            ':DataMaximCancel' => $dataCancel,
            ':preu' => $preu,
            ':diaEntrada' => $FormatIniciReserva,
            ':diaSortida' => $FormatFiReserva,
            ':estat' => $Estat,
        ]);
    }
}