<?php

namespace Apartaments;

class Apartment {

    public $sql;

    public function __construct($sql){
        $this->sql = $sql;
    }

    public function getAll(){
        $apartaments = array();
        $query = "select idApartament, idUsuari, diaMaximCancel, latitud, longitud, habitacions, titol, descripcio, preuTA,	preuTB, metresCuadrats, adreca, codiPostal from apartaments;";
        foreach ($this->sql->query($query, \PDO::FETCH_ASSOC) as $apt) {
            $apartaments[] = $apt;
        }

        return $apartaments;
    }
}