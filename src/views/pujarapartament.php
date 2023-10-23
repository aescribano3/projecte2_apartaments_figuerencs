<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="icon" type="image/png" href="/public/img/logo_renting.png">
    <link rel="stylesheet" href="/public/css/style.css">
    <title>Pujar apartament</title>
</head>
<body>
    <?php include("header.php"); ?>
    <div class="container-md shadow-lg px-5 py-5 bg-success mb-5 mt-5 rounded-3" id="uploadApt">
        <h1 class="text-center mb-5 fw-bold text-light" >Pujar un apartament</h1>
        <form action="https://cendrassos.net" method="POST">
            <div class="row gx-6 gy-4 text-center justify-content-center">
                <div class="col-md-3 shadow-lg border border-dark bg-light border-2 rounded-3">
                    <input type="text" class="form-control-plaintext" id="apt-name" placeholder="Titol Apartament">
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-3 shadow-lg border border-dark bg-light border-2 rounded-3">
                    <input type="text" class="form-control-plaintext" id="apt-adr" placeholder="Adreça">
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-3 shadow-lg border border-dark bg-light border-2 rounded-3">
                    <input type="text" class="form-control-plaintext" id="apt-cp" placeholder="Codi Postal">
                </div>
                <div class="col-md-3 shadow-lg border border-dark bg-light border-2 rounded-3">
                    <input type="text" class="form-control-plaintext" id="apt-habt" placeholder="Numero d'Habitacions">
                </div>
                <div class="col-md-5">
                </div>
                <div class="col-md-3 shadow-lg border border-dark bg-light border-2 rounded-3">
                    <input type="text" class="form-control-plaintext" id="apt-metr" placeholder="Metres Quadrats">
                </div>
                <div class="col-md-5 shadow-lg border border-dark bg-light border-2 rounded-3">
                    <input type="text" class="form-control-plaintext" id="apt-lat" placeholder="Latitud">
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-5 shadow-lg border border-dark bg-light border-2 rounded-3">
                    <input type="text" class="form-control-plaintext" id="apt-lon" placeholder="Longitud">
                </div>
                <div class="col-md-5 shadow-lg border border-dark bg-light border-2 rounded-3">
                    <input type="text" class="form-control-plaintext" id="apt-pta" placeholder="Preu Temporada Alta">
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-5 shadow-lg border border-dark bg-light border-2 rounded-3">
                    <input type="text" class="form-control-plaintext" id="apt-ptb" placeholder="Preu Temporada Baixa">
                </div>
                <div class="col-md-8 shadow-lg border border-dark bg-light border-2 rounded-3">
                    <textarea class="form-control-plaintext" id="apt-desc" rows="3" placeholder="Descripció"></textarea>
                </div>
                <div class="col-md-1">
                </div>
                <div class="col-md-2 shadow-lg border border-dark bg-light border-2 rounded-3">
                    <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="apt-pisc" id="checkPiscina">
                            <label class="form-check-label" for="checkPiscina">
                            <i class="fa-solid fa-water-ladder me-2" style="color: #195dd2;"></i>Piscina
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="apt-park" id="checkParking">
                            <label class="form-check-label" for="checkParking">
                            <i class="fa-solid fa-square-parking me-2" style="color: #115ee4;"></i>Parking
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="apt-wifi" id="checkWifi">
                            <label class="form-check-label" for="checkWifi">
                            <i class="fa-solid fa-wifi me-2" style="color: #104bb2;"></i>Wi-Fi
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="apt-cale" id="checkCalefaccio">
                            <label class="form-check-label" for="checkCalefaccio">
                            <i class="fa-solid fa-temperature-full me-2" style="color: #1d5cc9;"></i>Calefacció
                            </label>
                        </div>
                    </div>
                <div class="col-md-5 shadow-lg border border-dark bg-light border-2 rounded-3">
                    <label for="from">Data Inici Temporada Alta</label>
                    <input type="text" id="data-inici-alta" name="data-ini-alta" class="form-control" placeholder="Data Inici Temporada Alta" value="01/07/2023">
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-5 shadow-lg border border-dark bg-light border-2 rounded-3">
                    <label for="from">Data Final Temporada Alta</label>
                    <input type="text" id="data-final-alta" name="data-fin-alta" class="form-control" placeholder="Data Final Temporada Alta" value="31/12/2023">
                </div>
                <div class="col-md-5 shadow-lg border border-dark bg-light border-2 rounded-3">
                    <label for="from">Data Inici Temporada Baixa</label>
                    <input type="text" id="data-inici-baixa" name="data-ini-baixa" class="form-control" placeholder="Data Inici Temporada Baixa" value="01/01/2023">
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-5 shadow-lg border border-dark bg-light border-2 rounded-3">
                    <label for="from">Data Final Temporada Baixa</label>
                    <input type="text" id="data-final-baixa" name="data-fin-baixa" class="form-control" placeholder="Data Final Temporada Baixa" value="30/06/2023">
                </div>
                 <div class="col-md-4 shadow-lg border border-dark bg-light border-2 rounded-3">
                    <input type="text" class="form-control-plaintext" id="apt-diamaxcan" placeholder="Dies maxims de cancelació">
                </div>
                <div class="col-md-3"></div>
                <div class="col-md-4">
                    <input class="form-control" type="file" id="apt-imgs" multiple>
                </div>
                <button type="button" class="btn btn-dark btn-lg btn-block shadow-lg col-md-11" onclick="window.location.href='/public/index.php?r='">Cancelar</button>
                <button type="submit" class="btn btn-primary btn-lg btn-block shadow-lg col-md-11">Crear</button>
                </div>
            </div>
        </form>
    </div>
    <?php include("footer.php"); ?>
    <script src="/public/script/script.js"></script>
</body>
</html>