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
}