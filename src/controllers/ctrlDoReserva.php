<?php

    function ctrlDoReserva($request, $response, $container){

        //Agafem la id del apartament que volem reservar
        $aptId = $_SESSION['AptIdMod'];
        //I la del usuari que fa la reserva
        $idUsuari = $_SESSION["user"]["id"];

        $aptModel = $container->apartaments();
        $aptData = $aptModel->getAptData($aptId);

        $aptId = intval($aptId); 

       
        $tempModel = $container->temporada();
        $temps = $tempModel->getTempData($aptId);

       
        //Guardem les dates de la reserva
        $iniciReserva = $request->get(INPUT_POST, "from");
        $fiReserva = $request->get(INPUT_POST, "to");

        //Guarden els preus i els dies maxims abans de cancelar del apartament
        $preuTA = $aptData["preuTA"];
        $preuTB = $aptData["preuTB"];

        $diaMaximCancel = $aptData["diaMaximCancel"];

        //Calculem la data maxima per cancelar la reserva
        $dataCancel = date("Y-m-d", strtotime($iniciReserva . "-$diaMaximCancel days"));

        //Formatem les dates per poder fer la resta
        $FormatIniciReserva = date("Y-m-d", strtotime($iniciReserva));
        $FormatFiReserva = date("Y-m-d", strtotime($fiReserva));

        $Diff = strtotime($FormatFiReserva) - strtotime($FormatIniciReserva);

        $DiasDiff = floor($Diff / (60 * 60 * 24));

        //Comprovem si la reserva es en temporada alta o baixa
        foreach ($temps as $tempr) {
            $fechaInicio = $tempr["dataInici"];
            $fechaFin = $tempr["dataFinal"];
    
            
            if ($FormatIniciReserva >= $fechaInicio && $FormatIniciReserva <= $fechaFin) {
                $temp = "Baixa";
            } else {
                $temp = "Alta";
            }
        }
        //Calculem el preu de la reserva
        if($temp == "Baixa"){
            $preu = $preuTB * $DiasDiff;
        } else if ($temp == "Alta"){
            $preu = $preuTA * $DiasDiff;
        }

        //El estat per defecte de la reserva es obert
        $Estat = "Obert";

        $resModel = $container->reserva();

        //Fem la reserva i guardem la seva id
        $id = $resModel->reser($idUsuari, $aptId, $dataCancel, $preu, $FormatIniciReserva, $FormatFiReserva, $Estat);

        $id = intval($id); 
        
        $getreserva = $resModel->getreserva($id);

        $response = json_encode($getreserva);

        header('Content-Type: application/json');

        echo($response);
        die();   
    }
