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
    <link rel="icon" type="image/png" href="/img/logo_renting.png">
    <link rel="stylesheet" href="/css/style.css">
    <title>Pujar apartament</title>
</head>
<body>
    <?php include("header.php"); ?>
    <div class="container-md shadow-lg px-5 py-5 bg-success mb-5 mt-5 rounded-3" id="uploadApt">
        <h1 class="text-center mb-5 fw-bold text-light" >Pujar un apartament</h1>
        <form action="index.php?r=doupload" method="POST">
            <div class="row gx-6 gy-4 text-center justify-content-center">
                <div class="col-md-3 shadow-lg border border-dark bg-light border-2 rounded-3">
                    <label for="apt-name">Titol Apartament</label>
                    <input type="text" class="form-control-plaintext" name="apt-name" id="apt-name" placeholder="Titol Apartament" required>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-3 shadow-lg border border-dark bg-light border-2 rounded-3">
                    <label for="apt-adr">Adreça</label>
                    <input type="text" class="form-control-plaintext" name="apt-adr" id="apt-adr" placeholder="Adreça" required>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-3 shadow-lg border border-dark bg-light border-2 rounded-3">
                    <label for="apt-cp">Codi Postal</label>
                    <input type="text" class="form-control-plaintext" name="apt-cp"  id="apt-cp" placeholder="Codi Postal" required>
                </div>
                <div class="col-md-3 shadow-lg border border-dark bg-light border-2 rounded-3">
                    <label for="apt-habt">Numero d'Habitacions</label>
                    <input type="text" class="form-control-plaintext" name="apt-habt" id="apt-habt" placeholder="Numero d'Habitacions" required>
                </div>
                <div class="col-md-5">
                </div>
                <div class="col-md-3 shadow-lg border border-dark bg-light border-2 rounded-3">
                    <label for="apt-metr">Metres Cuadrats</label>
                    <input type="text" class="form-control-plaintext" name="apt-metr" id="apt-metr" placeholder="Metres Quadrats" required>
                </div>
                <div class="col-md-5 shadow-lg border border-dark bg-light border-2 rounded-3">
                    <label for="apt-lat">Latitud</label>
                    <input type="text" class="form-control-plaintext" name="apt-lat" id="apt-lat" placeholder="Latitud" required>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-5 shadow-lg border border-dark bg-light border-2 rounded-3">
                    <label for="apt-lon">Longitud</label>
                    <input type="text" class="form-control-plaintext" name="apt-lon" id="apt-lon" placeholder="Longitud" required>
                </div>
                <div class="col-md-5 shadow-lg border border-dark bg-light border-2 rounded-3">
                    <label for="apt-pta">Preu Temporada Alta</label>
                    <input type="text" class="form-control-plaintext" name="apt-pta" id="apt-pta" placeholder="Preu Temporada Alta" required>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-5 shadow-lg border border-dark bg-light border-2 rounded-3">
                    <label for="apt-ptb">Preu Temporada Baixa</label>
                    <input type="text" class="form-control-plaintext" name="apt-ptb" id="apt-ptb" placeholder="Preu Temporada Baixa" required>
                </div>
                <div class="col-md-8 shadow-lg border border-dark bg-light border-2 rounded-3">
                    <label for="apt-desc">Descripció del apartament</label>
                    <textarea class="form-control-plaintext" name="apt-desc" id="apt-desc" rows="3" placeholder="Descripció" required maxlength="300"></textarea>
                </div>
                <div class="col-md-1">
                </div>
                <div class="col-md-2 shadow-lg border border-dark bg-light border-2 rounded-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" name="apt-pisc" id="checkPiscina">
                        <label class="form-check-label" for="checkPiscina">
                        <i class="fa-solid fa-water-ladder me-2" style="color: #195dd2;"></i>Piscina
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="2" name="apt-park" id="checkParking">
                        <label class="form-check-label" for="checkParking">
                        <i class="fa-solid fa-square-parking me-2" style="color: #115ee4;"></i>Parking
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="3" name="apt-wifi" id="checkWifi">
                        <label class="form-check-label" for="checkWifi">
                        <i class="fa-solid fa-wifi me-2" style="color: #104bb2;"></i>Wi-Fi
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="4" name="apt-cale" id="checkCalefaccio">
                        <label class="form-check-label" for="checkCalefaccio">
                        <i class="fa-solid fa-temperature-full me-2" style="color: #1d5cc9;"></i>Calefacció
                        </label>
                    </div>
                </div>
                <div class="col-md-5 shadow-lg border border-dark bg-light border-2 rounded-3">
                    <label for="data-inici-alta">Data Inici Temporada Alta</label>
                    <input type="text" id="data-inici-alta" name="data-ini-alta" class="form-control from" placeholder="Data Inici Temporada Alta" value="01/07/2023" required>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-5 shadow-lg border border-dark bg-light border-2 rounded-3">
                    <label for="data-final-alta">Data Final Temporada Alta</label>
                    <input type="text" id="data-final-alta" name="data-fin-alta" class="form-control to" placeholder="Data Final Temporada Alta" value="31/12/2023" required>
                </div>
                <div class="col-md-5 shadow-lg border border-dark bg-light border-2 rounded-3"> 
                    <label for="data-inici-baixa">Data Inici Temporada Baixa</label>
                    <input type="text" id="data-inici-baixa" name="data-ini-baixa" class="form-control from" placeholder="Data Inici Temporada Baixa" value="01/01/2023" required>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-5 shadow-lg border border-dark bg-light border-2 rounded-3">
                    <label for="data-final-baixa">Data Final Temporada Baixa</label>
                    <input type="text" id="data-final-baixa" name="data-fin-baixa" class="form-control to" placeholder="Data Final Temporada Baixa" value="30/06/2023" required>
                </div>
                 <div class="col-md-4 shadow-lg border border-dark bg-light border-2 rounded-3">
                    <label for="apt-diamaxcancel">Dies maximas abans de cancelar</label>
                    <input type="text" class="form-control-plaintext" id="apt-diamaxcancel" name="apt-diamaxcancel" placeholder="Dies maxims de cancelació" required>
                </div>
                <div class="col-md-3"></div>
                <div class="col-md-4 shadow-lg border border-dark bg-light border-2 rounded-3">
                    <label for="apt-imgs">Imatge de l'apartament</label>
                    <input class="form-control-plaintext" type="file" name="apt-imgs" id="apt-imgs" required>
                </div>
                <button type="button" class="btn btn-dark btn-lg btn-block shadow-lg col-md-11" onclick="window.location.href='/index.php?r='">Cancelar</button>
                <button type="submit" class="btn btn-primary btn-lg btn-block shadow-lg col-md-11">Crear</button>
                </div>
            </div>
        </form>
    </div>
    <?php include("footer.php"); ?>
    <script src="/script/script.js"></script>
</body>
</html>