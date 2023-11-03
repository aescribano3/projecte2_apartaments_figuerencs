<?php

namespace Apartaments;

class Users {

    public $sql;

    public function __construct($sql){
        $this->sql = $sql;
    }

    public function getAll(){
        $users = array();
        $query = "select * from usuari;";
        foreach ($this->sql->query($query, \PDO::FETCH_ASSOC) as $user) {
            $users[] = $user;
        }

        return $users;
    }

    public function getUserData($id){
        $stm = $this->sql->prepare("select * from usuari where id=:id;");
        $stm -> execute([':id' => $id]);
        $result = $stm->fetch(\PDO::FETCH_ASSOC);
        if($result){
            return $result;
        } else {
            return false;
        }
    }

    public function login($email, $pass){
        $stm = $this->sql->prepare('select id, email, rol ,pass from usuari where email=:email;');
        $stm->execute([':email' => $email]);
        $result = $stm->fetch(\PDO::FETCH_ASSOC);
        //die(var_dump($result["pass"], hash('md5', $pass, false)));
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
            ':pass' => hash('md5', $pass, false),
            ':cv' => $cv,
            ':rol' => $rol
        ]);

        return $this->sql->lastInsertId();
    }

    public function update($id, $name, $lastname, $number, $email, $pass, $cv){

        $stm = $this->sql->prepare('UPDATE usuari SET nom=:nom, cognom=:cognom, telefon=:telefon, email=:email, pass=:pass, cv=:cv WHERE id=:id');

        $stm->execute([
            ':id' => $id,
            ':nom' => $name,
            ':cognom' => $lastname,
            ':telefon' => $number,
            ':email' => $email,
            ':pass' => hash('md5', $pass, false),
            ':cv' => $cv
        ]);
        
        return $this->sql->lastInsertId();
    }
}