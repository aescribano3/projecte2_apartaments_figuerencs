<?php

function ctrlDoUpload($request, $response, $container){

    $apt_name = $request->get(INPUT_POST, "apt-name");
    $apt_adreca = $request->get(INPUT_POST, "apt-adreca");
    $apt_cp = $request->get(INPUT_POST, "apt-cp");
    $apt_habts = $request->get(INPUT_POST, "apt-habts");
    $apt_metr = $request->get(INPUT_POST, "apt-metr");
    $apt_lat = $request->get(INPUT_POST, "apt-lat");
    $apt_lon = $request->get(INPUT_POST, "apt-lon");
    $apt_pta = $request->get(INPUT_POST, "apt-pta");
    $apt_ptb = $request->get(INPUT_POST, "apt-ptb");
    $apt_desc = $request->get(INPUT_POST, "apt-desc");
    $apt_pisc = $request->get(INPUT_POST, "apt-pisc");
    $apt_wifi = $request->get(INPUT_POST, "apt-wifi");
    $apt_park = $request->get(INPUT_POST, "apt-park");
    $apt_cale = $request->get(INPUT_POST, "apt-cale");
    $data_ini_alta = $request->get(INPUT_POST, "data-ini-alta");
    $data_fin_alta = $request->get(INPUT_POST, "data-fin-alta");
    $data_ini_baixa = $request->get(INPUT_POST, "data-ini-baixa");
    $data_fin_baixa = $request->get(INPUT_POST, "data-fin-baixa");
    $apt_diamaxcancel = $request->get(INPUT_POST, "apt-diamaxcancel");
    $images = $_FILES['apt-imgs'];

    if(is_array($images['name'])){
        for($i=0; $i<count($images['name']); $i++){
            $image_name = $images['name'][$i];
            $image_tmp_name = $images['tmp_name'][$i];
        }
    } else {
        $image_name = $images['name'];
        $image_tmp_name = $images['tmp_name'];
    }

    $aptModel = $container->apartaments();

    $aptModel = $aptModel->upload($apt_name, $apt_adreca, $apt_cp, $apt_habts, $apt_metr, $apt_lat, $apt_lon, $apt_pta, $apt_ptb, $apt_desc, $apt_pisc, $apt_wifi, $apt_park, $apt_cale, $data_ini_alta, $data_fin_alta, $data_ini_baixa, $data_fin_baixa, $apt_diamaxcancel, $image_name, $image_tmp_name);

    return $response;
}