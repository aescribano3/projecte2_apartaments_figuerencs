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

    public function reser($idUsuari, $aptId, $iniciReserva, $fiReserva, $diasRestantes){
        $stm = $this->sql->prepare('INSERT INTO reserva ( idApartament, idUsuari, DataMaximCancel, diaEntrada, diaSortida) VALUES (:idApartament, :idUsuari, :DataMaximCancel, :diaEntrada, :diaSortida)');
        $stm->execute([
            ':idApartament' => $aptId,
            ':idUsuari' => $idUsuari,
            ':diaEntrada' => $iniciReserva,
            ':diaSortida' => $fiReserva,
            ':DataMaximCancel' => $diasRestantes,
        ]);
    }
}