<?php

namespace Emeset;

class Container
{
    public $config = [];
    public $sql;

    /**
     * __construct:  Crear contenidor
     *
     * @param $config array paràmetres de configuració de l'aplicació.
     **/
    public function __construct($config)
    {
        $this->config = $config;
        $this->sql = $this->db()->getConnection();
    }

    public function response()
    {
        return new \Emeset\Response();
    }

    public function request()
    {
        return new \Emeset\Request();
    }

    public function db(){
        return new \Apartaments\Db(
            $this->config["db"]["user"],
            $this->config["db"]["pass"],
            $this->config["db"]["db"], 
            $this->config["db"]["host"]
        );
    }

    public function users()
    {
        return new \Apartaments\Users($this->sql);
    }

    public function apartaments()
    {
        return new \Apartaments\Apartment($this->sql);
    }

    public function serveis()
    {
        return new \Apartaments\Serveis($this->sql);
    }
    public function serveisapartaments()
    {
        return new \Apartaments\ServeisApartaments($this->sql);
    }
    public function imatge()
    {
        return new \Apartaments\Imatge($this->sql);
    }
   
    public function temporada()
    {
        return new \Apartaments\Temporada($this->sql);
    }
}