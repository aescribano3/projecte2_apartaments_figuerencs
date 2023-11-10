<?php

    function ctrlDoReserva($request, $response, $container){

        $aptId = $_SESSION['AptIdMod'];
        $idUsuari = $_SESSION["user"]["id"];

        $aptModel = $container->apartaments();
        $aptData = $aptModel->getAptData($aptId);

        $aptId = intval($aptId); 

       
        $tempModel = $container->temporada();
        $temps = $tempModel->getTempData($aptId);

       

        $iniciReserva = $request->get(INPUT_POST, "from");
        $fiReserva = $request->get(INPUT_POST, "to");
        $correu = $request->get(INPUT_POST, "rsv-email");

        $preuTA = $aptData["preuTA"];
        $preuTB = $aptData["preuTB"];

        $diaMaximCancel = $aptData["diaMaximCancel"];

        $dataCancel = date("Y-m-d", strtotime($iniciReserva . "-$diaMaximCancel days"));

        $FormatIniciReserva = date("Y-m-d", strtotime($iniciReserva));
        $FormatFiReserva = date("Y-m-d", strtotime($fiReserva));

        $Diff = strtotime($FormatFiReserva) - strtotime($FormatIniciReserva);

        $DiasDiff = floor($Diff / (60 * 60 * 24));

        foreach ($temps as $tempr) {
            $fechaInicio = $tempr["dataInici"];
            $fechaFin = $tempr["dataFinal"];
    
            
            if ($FormatIniciReserva >= $fechaInicio && $FormatIniciReserva <= $fechaFin) {
                $temp = "Baixa";
            } else {
                $temp = "Alta";
            }
        }

        if($temp == "Baixa"){
            $preu = $preuTB * $DiasDiff;
        } else if ($temp == "Alta"){
            $preu = $preuTA * $DiasDiff;
        }

        $Estat = "Obert";

        $resModel = $container->reserva();

        $id = $resModel->reser($idUsuari, $aptId, $dataCancel, $preu, $FormatIniciReserva, $FormatFiReserva, $Estat);

        $id = intval($id); 
        
        $getreserva = $resModel->getreserva($id);

        $response = json_encode($getreserva);

        header('Content-Type: application/json');

        echo($response);
        die();   
    }
