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