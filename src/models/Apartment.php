<?php

namespace Apartaments;

class Apartment {

    public $sql;

    public function __construct($sql){
        $this->sql = $sql;
    }

    public function getAll(){
        $apartaments = array();
        $query = "select * from apartaments;";
        foreach ($this->sql->query($query, \PDO::FETCH_ASSOC) as $apt) {
            $apartaments[] = $apt;
        }

        return $apartaments;
    }

    public function getAptData($id){
        $stm = $this->sql->prepare("select * from apartaments where idApartament=:id;");
        $stm -> execute([':id' => $id]);
        $result = $stm->fetch(\PDO::FETCH_ASSOC);
        if($result){
            return $result;
        } else {
            return false;
        }
    }

    public function upload($apt_name, $apt_adreca, $apt_cp, $apt_habts, $apt_metr, $apt_lat, $apt_lon, $apt_pta, $apt_ptb, $apt_desc, $apt_diamaxcancel, $idUsuari){

        $stm = $this->sql->prepare('INSERT INTO apartaments (idUsuari,diaMaximCancel, latitud, longitud, habitacions, titol, descripcio, preuTA, preuTB, metresCuadrats, adreca, codiPostal) VALUES (:usuari,:diacancel, :latitud, :longitud, :habts, :nom, :descripcion, :preuta, :preutb, :metr, :adreca, :codipostal)');
        $stm->execute([
            ':usuari' => $idUsuari,
            ':nom' => $apt_name,
            ':adreca' => $apt_adreca,
            ':codipostal' => $apt_cp,
            ':habts' => $apt_habts,
            ':metr' => $apt_metr,
            ':latitud' => $apt_lat,
            ':longitud' => $apt_lon,
            ':preuta' => $apt_pta,
            ':preutb' => $apt_ptb,
            ':descripcion' => $apt_desc,
            ':diacancel' => $apt_diamaxcancel,
        ]);
        
    
        $lastInsertId = $this->sql->lastInsertId();
    
        return $lastInsertId;
    
                
                
    }
}