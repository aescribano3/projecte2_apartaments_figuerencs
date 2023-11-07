<div class="modal-dialog modal-xl">
    <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5 AptTitol" id="exampleModalLabel"><?=$titol?></h1>
            <p class="modal-title fs-5 ms-3">Estat apartament: Obert</p>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <img src="/img/<?=$imageUrls[0]?>" class="d-block w-100" alt="imatge_portada">
            <div class="row me-0 ms-3">
                <div class="col-md-12 mt-3">
                    <h1 class="">
                        <?php
                            if ($temp == true){
                                echo 'Preu Temporada Baixa: '. $preuTB .'€/dia';
                            } else {
                                echo 'Preu Temporada Alta: '. $preuTA .'€/dia';
                            }
                        ?>
                    </h1>
                    <div class="container-text">
                        <p class="">
                            <?=$descripcio?>
                        </p>
                    </div>
                    <div class="container-text">
                        <p class="">
                            <?=$adreca?>
                        </p>
                    </div>
                    <h1 class="">Característiques</h1>
                    <div class="row col-md-12">
                        <div class="col-md-3">
                            <p class="">Metres Quadrats: <?=$metresCuadrats?> </p>
                        </div>
                        <div class="col-md-3">
                            <p class="">Habitacions: <?=$habitacions?> </p>
                        </div>
                        <div class="col-md-3">
                            <p class="">Dies maxims de cancelació: <?=$diaMaximCancel?> </p>
                        </div>
                    </div>
                    <div class="row col-md-12">
                    
                    <?php if ($piscina == true) { ?>
                            <div class="col-md-3">
                                <i class="fa-solid fa-person-swimming" style="color: #000000;"></i>
                                <p class="">Piscina</p>
                            </div>
                    <?php } ?>
                    <?php  if ($wifi == true) { ?>
                            <div class="col-md-3">
                                <i class="fa-solid fa-wifi" style="color: #000000;"></i>
                                <p class="">Wi-Fi</p>
                            </div>
                    <?php } ?>
                    <?php  if ($parking == true) { ?>
                            <div class="col-md-3">
                                <i class="fa-solid fa-square-parking" style="color: #000000;"></i>
                                <p class="">Parking</p>
                            </div>
                    <?php } ?>
                    <?php  if ($calefaccio == true) { ?>
                            <div class="col-md-3">
                                <i class="fa-solid fa-temperature-quarter" style="color: #000000;"></i>
                                <p class="">Calefacció</p>
                            </div>
                    <?php } ?>
                        
                    </div>
                    
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <div id="map" class="z-depth-1-half map-container mb-3">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="sticky-top" style="z-index: 1;">
                        <form action="/index?r=doreserva" method="POST">
                            <div class="row gx-5 gy-4 text-center justify-content-center m-3">
                                <h4 class="">Reservar Apartament</h4>
                                <div class="col-md-8 shadow-lg input-col">
                                    <label for="from">Data Inici</label>
                                    <input type="text" id="from" name="from" class="form-control mb-3 from">
                                    <label for="to">Data Final</label>
                                    <input type="text" id="to" name="to" class="form-control mb-3 to">
                                </div>
                                <div class="col-md-8 shadow-lg input-col">
                                    <label for="rsv-email">Correu Electronic</label>
                                    <input type="email" class="form-control-plaintext" name="rsv-email" id="rsv-email" placeholder="Email">
                                </div>
                                <div class="col-md-8 shadow-lg input-col">
                                    <label for="rsv-telef" class>Telefon</label>
                                    <input type="text" class="form-control-plaintext" name="rsv-telef" id="rsv-telef" placeholder="Telefon"> 
                                </div>
                                <div class="col-md-8 shadow-lg input-col">
                                    <label for="rsv-pers">Persones</label>
                                    <input type="text" class="form-control-plaintext" name="rsv-pers" id="rsv-pers" placeholder="Persones"> 
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block shadow-lg col-md-8">Reservar</button>
                            </div>
                        </form>   
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
        </div>
    </div>
</div>