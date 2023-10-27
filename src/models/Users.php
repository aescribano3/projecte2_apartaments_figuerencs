<?php

namespace Apartaments;

class Users {

    public $sql;

    public function __construct($sql){
        $this->sql = $sql;
    }

    public function getAll(){
        $users = array();
        $query = "select id, nom, cognom, email, telefon, pass, cv, rol from usuari;";
        foreach ($this->sql->query($query, \PDO::FETCH_ASSOC) as $user) {
            $users[] = $user;
        }

        return $users;
    }

    public function login($email, $pass){
        $stm = $this->sql->prepare('select id, email, pass from usuari where email=:email;');
        $stm->execute([':email' => $email]);
        $result = $stm->fetch(\PDO::FETCH_ASSOC);
        if(is_array($result) && $result["pass"] == $pass){
            return $result;
        } else {
            return false;
        }
    }

    public function register($name, $lastname, $number, $email, $pass, $confpass, $cv, $rol){

        if ($pass !== $confpass) {
            return false;
        }

        $stm = $this->sql->prepare('INSERT INTO usuari (nom, cognom, telefon, email, pass, cv, rol) VALUES (:nom, :cognom, :telefon, :email, :pass, :cv, :rol)');
        $stm->execute([
            ':nom' => $name,
            ':cognom' => $lastname,
            ':telefon' => $number,
            ':email' => $email,
            ':pass' => $pass,
            ':cv' => $cv,
            ':rol' => $rol
        ]);

        return $this->sql->lastInsertId();
    }

    public function update($id, $name, $lastname, $number, $email, $pass, $cv){

        $query = "update usuari set ";
        $params = array();

        if(($name != "")){
            $query .= "nom=:nom, ";
            $params[':nom'] = $name;
        }

        if(($lastname != "")){
            $query .= "cognom=:cognom, ";
            $params[':cognom'] = $lastname;
        }

        if(($number != "")){
            $query .= "telefon=:telefon, ";
            $params[':telefon'] = $number;
        }

        if(($email != "")){
            $query .= "email=:email, ";
            $params[':email'] = $email;
        }

        if(($pass != "")){
            $query .= "pass=:pass, ";
            $params[':pass'] = $pass;
        }

        if(($cv != "")){
            $query .= "cv=:cv ";
            $params[':cv'] = $cv;
        }

        $query .= "WHERE id=:id";
        $params[':id'] = $id;

        $stm = $this->sql->prepare($query);
        $stm->execute($params);

        return $stm->rowCount();
    }
}