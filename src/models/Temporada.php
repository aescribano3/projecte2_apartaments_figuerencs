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







}