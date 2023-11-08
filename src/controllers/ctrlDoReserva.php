<?php

    function ctrlDoReserva($request, $response, $container){

        $aptId = $_SESSION['aptId'];
        $idUsuari = $_SESSION["user"]["id"];

        die(var_dump($aptId));
        
        $apt_pta = $request->get(INPUT_POST, "apt-pta");
        $apt_ptb = $request->get(INPUT_POST, "apt-ptb");

        $iniciReserva = $request ->get(INPUT_POST, "data-inir");
        $fiReserva =$request ->get(INPUT_POST, "data-finr");

        // Convierte las fechas al formato adecuado para la base de datos (por ejemplo, si estás usando el formato 'dd/mm/yy' en el formulario):
        $iniciReserva = date("Y-m-d", strtotime(str_replace('/', '-', $iniciReserva)));
        $fiReserva = date("Y-m-d", strtotime(str_replace('/', '-', $fiReserva)));


        $aptModel = $container->apartaments();
        $aptData = $aptModel->getAptData($aptId);
        $aptDiasMaxCancel = $aptData['diaMaximCancel'];

        // Calcula la diferencia de días entre la fecha máxima para cancelar y la fecha de inicio de la reserva
        $diasRestantes = strtotime($iniciReserva) - strtotime($aptDiasMaxCancel);
        $diasRestantes = floor($diasRestantes / (60 * 60 * 24)); // Convierte segundos en días
        

        $resModel = $container->reserva();

        $resModel = $resModel->reser($idUsuari, $aptId, $iniciReserva, $fiReserva, $diasRestantes);


        if($resModel) {
            $response->redirect("location: /index.php");
        } else {
            $response->redirect("location: /index.php?r=content");
        }

        return $response;

        
    }
