<?php

function ctrlDoUpload($request, $response, $container){

    //Guardem les dades del formulari en variables
    $apt_name = $request->get(INPUT_POST, "apt-name");
    $apt_adreca = $request->get(INPUT_POST, "apt-adr");
    $apt_cp = $request->get(INPUT_POST, "apt-cp");
    $apt_habts = $request->get(INPUT_POST, "apt-habt");
    $apt_metr = $request->get(INPUT_POST, "apt-metr");
    $apt_lat = $request->get(INPUT_POST, "apt-lat");
    $apt_lon = $request->get(INPUT_POST, "apt-lon");
    $apt_pta = $request->get(INPUT_POST, "apt-pta");
    $apt_ptb = $request->get(INPUT_POST, "apt-ptb");
    $apt_desc = $request->get(INPUT_POST, "apt-desc");
    $apt_diamaxcancel = $request->get(INPUT_POST, "apt-diamaxcancel");
    $idUsuari = $_SESSION["user"]["id"];

    $apt_pisc = $request->get(INPUT_POST, "apt-pisc");
    $apt_wifi = $request->get(INPUT_POST, "apt-wifi");
    $apt_park = $request->get(INPUT_POST, "apt-park");
    $apt_cale = $request->get(INPUT_POST, "apt-cale");

    $data_ini_alta = $request->get(INPUT_POST, "data-ini-alta");
    $data_fin_alta = $request->get(INPUT_POST, "data-fin-alta");
    $data_ini_baixa = $request->get(INPUT_POST, "data-ini-baixa");
    $data_fin_baixa = $request->get(INPUT_POST, "data-fin-baixa");

    //Cridem a la funció per pujar l'apartament
    $aptModel = $container->apartaments();
    $aptId = $aptModel->upload($apt_name, $apt_adreca, $apt_cp, $apt_habts, $apt_metr, $apt_lat, $apt_lon, $apt_pta, $apt_ptb, $apt_desc, $apt_diamaxcancel, $idUsuari);

    $_SESSION['aptId'] = $aptId; // Almacena el ID del departamento en una variable de sesión
    
    //Cridem a la funció per pujar els serveis de l'apartament
    $serModel = $container->serveisapartaments();
    $serModel = $serModel->upload($apt_pisc, $apt_wifi, $apt_park, $apt_cale, $aptId);

    //Cridem a la funció per pujar les imatges de l'apartament
    $imgModel = $container->imatge();

        // Obtener las imágenes subidas
        if (isset($_FILES['apt-imgs'])) {
            $imgFiles = $_FILES['apt-imgs'];

            // Ruta donde se almacenarán las imágenes subidas (ajusta la ruta a tu configuración)
            $uploadDirectory = '../public/img/';

        foreach ($imgFiles['name'] as $key => $imageName) {
            // Verificar si no hubo errores en la carga
            if ($imgFiles['error'][$key] === UPLOAD_ERR_OK) {
                // Nombre del archivo
                $imgPath = $uploadDirectory . $imageName;

                // Mover la imagen al directorio de destino
                if (move_uploaded_file($imgFiles['tmp_name'][$key], $imgPath)) {
        
                    // Obtener el nombre del archivo sin la ruta
                    $imageFileName = pathinfo($imageName, PATHINFO_BASENAME);

                    // Luego, puedes guardar el nombre del archivo en la base de datos
                    $imgModel = $container->imatge();
                    $imgModel->upload($aptId, $imageFileName);
                            }
                        }
                    }
                }

    //Cridem a la funció per pujar les temporades de l'apartament
    $data_ini_alta = date('Y-m-d', strtotime(str_replace('/', '-', $data_ini_alta)));
    $data_fin_alta = date('Y-m-d', strtotime(str_replace('/', '-', $data_fin_alta)));
    $data_ini_baixa = date('Y-m-d', strtotime(str_replace('/', '-', $data_ini_baixa)));
    $data_fin_baixa = date('Y-m-d', strtotime(str_replace('/', '-', $data_fin_baixa)));

    $tempModel = $container->temporada();

    $tempModel = $tempModel->upload($data_ini_alta, $data_fin_alta, $data_ini_baixa, $data_fin_baixa, $aptId);

    if($aptModel) {
        $response->redirect("location: /index.php");
    } else {
        $response->redirect("location: /index.php?r=pujar");
    }

    return $response;
}