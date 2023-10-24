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
    <title>User</title>
</head>
<body>
    <?php include("header.php"); ?>

<div id="userx" class="row me-0">
    <div class="col-md-2 ">
        <div>
            <p class="text-white text-center mt-5  fs-2" id="enlace-dades">Dades</p>
            <p class="text-white text-center  fs-2" id="enlace-historial">Historial</p>
            <p class="text-white text-center mb-5 fs-2" id="enlace-reserves">Reserves</p>

        </div>
    </div>

    <!-- Col de dades-->
 <div class=" col-md-10 bg-dark d-flex align-items-center justify-content-center">
    <div id="contenido-dades" class="">
                <h1 class="text-white mb-5 ">Dades Personals</h1>
                <div class="col-md-12 shadow-lg border border-dark bg-light border-2 rounded-3 mb-5">
                    <input type="text" class="form-control-plaintext text-center" id="apt-lat" placeholder="User">
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-12 shadow-lg border border-dark bg-light border-2 rounded-3 mb-5">
                    <input type="text" class="form-control-plaintext text-center" id="apt-lat" placeholder="Contraseña">
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-12 shadow-lg border border-dark bg-light border-2 rounded-3 mb-5">
                    <input type="text" class="form-control-plaintext text-center" id="apt-lat" placeholder="Mail">
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-12 shadow-lg border border-dark bg-light border-2 rounded-3 mb-5">
                    <input type="text" class="form-control-plaintext text-center" id="apt-lat" placeholder="Telefon">
                </div>
<!-- Col de historials-->
    </div>
    
    <div id="contenido-historial" class="col-12 ">
    <h1 id="historial"class="text-white d-flex align-items-center justify-content-center ">Historial Reserves</h1>
    <table class="table table-striped table-hover">
  <thead>
    <tr class="table-warning">
      <th scope="col">#</th>
      <th scope="col">Dia entrada</th>
      <th scope="col">Dia Sortida</th>
      <th scope="col">Preu</th>
    </tr>
  </thead>
  <tbody>
    <tr class="table-warning">
      <th scope="row">1</th>
      <td>10/05/2023</td>
      <td>15/05/2023</td>
      <td>100€</td>
    </tr>
    <tr class="table-warning">
      <th scope="row">2</th>
      <td>10/05/2023</td>
      <td>15/05/2023</td>
      <td>100€</td>
    </tr>
    <tr class="table-warning">
      <th scope="row">3</th>
      <td>15/05/2023</td>
      <td>15/05/2023</td>
      <td>100€</td>
    </tr>
  </tbody>
</table>
    </div>
    
    <!--Col de reserves-->
    <div id="contenido-reserves">
                <h1 class="text-white mb-5 ">Reserves Obertes</h1>
                <div class="col-md-12 shadow-lg border border-dark bg-light border-2 rounded-3 mb-5 ">
                <input type="text" class="form-control-plaintext text-center" id="apt-lat" placeholder="Dia Entrada">
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-12 shadow-lg border border-dark bg-light border-2 rounded-3 mb-5">
                    <input type="text" class="form-control-plaintext text-center" id="apt-lat" placeholder="Dia Sortida">
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-12 shadow-lg border border-dark bg-light border-2 rounded-3 mb-5">
                    <input type="text" class="form-control-plaintext text-center" id="apt-lat" placeholder="Telefon">
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-12 shadow-lg border border-dark bg-light border-2 rounded-3 mb-5">
                    <input type="text" class="form-control-plaintext text-center" id="apt-lat" placeholder="Cancelar reserva">
                </div>
    </div>

    
</div>
    <?php include("footer.php"); ?>
    <script src="/public/script/script.js"></script>
</body>
</html>