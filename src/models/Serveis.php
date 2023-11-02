<?php

namespace Apartaments;

class Serveis {

    public $sql;

    public function __construct($sql){
        $this->sql = $sql;
    }

    public function getAll(){
        $serveis = array();
        $query = "select * from serveis;";
        foreach ($this->sql->query($query, \PDO::FETCH_ASSOC) as $ser) {
            $serveis[] = $ser;
        }

        return $serveis;

        
}
}