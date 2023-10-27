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
    <title>User</title>
</head>
<body>
    <?php include("header.php"); ?>

<div id="userx" class="row me-0 bg-info">
  <div class="col-md-2 text-white text-center">
      <p class="mt-3 fs-2" id="enlace-dades">Dades</p>
      <p class="mt-3 fs-2" id="enlace-historial">Historial</p>
      <p class="mt-3 fs-2" id="enlace-reserves">Reserves</p>
  </div>
  
  <!-- Col de dades-->
  <div class="col-md-10 bg-dark d-flex">
    <div id="contenido-dades">
      <h1 class="text-white mb-3 mt-5 text-center">Dades Personals</h1>
      <form action="index.php?r=doupdate" method="POST">
      <div class="row gx-6 gy-4 text-center justify-content-center">
            <div class="col-md-4 shadow-lg input-col">
                <label for="user-name">Nom</label>
                <input type="text" class="form-control-plaintext" id="user-name" name="user-name-update" placeholder="Nom">
            </div>
            <div class="col-md-2"> </div>
            <div class="col-md-4 shadow-lg input-col">
                <label for="user-lastname">Cognoms</label>
                <input type="text" class="form-control-plaintext" id="user-lastname" name="user-lastname-update" placeholder="Cognoms">
            </div>
            <div class="col-md-4 shadow-lg input-col">
                <label for="user-number">Numero de telefon</label>
                <input type="text" class="form-control-plaintext" id="user-number" name="user-number-update" placeholder="Numero de telefon">
            </div>
            <div class="col-md-2"> </div>
            <div class="col-md-4 shadow-lg input-col">
                <label for="user-email">Correu electrònic</label>
                <input type="email" class="form-control-plaintext" id="user-email" name="user-email-update" placeholder="Correu electrònic">
            </div>
            <div class="col-md-4 shadow-lg input-col">
                <label for="user-pass">Contrasenya</label>
                <input type="password" class="form-control-plaintext" id="user-pass" name="user-pass-update" placeholder="Contrasenya">
            </div>
            <div class="col-md-2"> </div>
            <div class="col-md-4 shadow-lg input-col">
                <label for="user-confpass">Targeta de crèdit</label>
                <input type="text" class="form-control-plaintext" id="user-confpass" name="user-cv-update" placeholder="Targeta de crèdit">
            </div>
            <div class="col-md-6"></div>
            <button type="submit" class="btn btn-info btn-lg btn-block shadow-lg col-md-10 mt-5">Guardar canvis</button>
        </form>
    </div>
  </div>

  <!-- Col de historials-->
  <div id="contenido-historial" class="col-12">
    <h1 class="text-white d-flex align-items-center justify-content-center mt-4 mb-4">Historial Reserves</h1>
    <table class="table table-striped table-hover">
      <thead>
        <tr class="table-warning">
          <th scope="col">#</th>
          <th scope="col">Dia entrada</th>
          <th scope="col">Dia Sortida</th>
          <th scope="col">Preu</th>
          <th scope="col">Estado</th>
        </tr>
      </thead>
      <tbody>
        <tr class="table-warning">
          <th scope="row">1</th>
          <td>10/05/2023</td>
          <td>15/05/2023</td>
          <td>100€</td>
          <td>Cancelado</td>
        </tr>
        <tr class="table-warning">
          <th scope="row">2</th>
          <td>10/05/2023</td>
          <td>15/05/2023</td>
          <td>100€</td>
          <td>Terminado</td>
        </tr>
        <tr class="table-warning">
          <th scope="row">3</th>
          <td>15/05/2023</td>
          <td>15/05/2023</td>
          <td>100€</td>
          <td>En Reserva</td>
        </tr>
        <tr class="table-warning">
          <th scope="row">4</th>
          <td>15/05/2023</td>
          <td>15/05/2023</td>
          <td>100€</td>
          <td>En Reserva</td>
        </tr>
        <tr class="table-warning">
          <th scope="row">5</th>
          <td>15/05/2023</td>
          <td>15/05/2023</td>
          <td>100€</td>
          <td>En Reserva</td>
        </tr>
      </tbody>
    </table>
  </div>

  <!--Col de reserves-->
  <div id="contenido-reserves" class="col-12">
    <h1 class="text-white mt-4 mb-4 text-center">Reserves Obertes</h1>
    <table class="table table-striped table-hover">
      <thead>
        <tr class="table-warning">
          <th scope="col">#</th>
          <th scope="col">Dia entrada</th>
          <th scope="col">Dia Sortida</th>
          <th scope="col">Preu</th>
          <th scope="col">Cancelar Reserva</th> <!-- Agregamos una nueva columna para el botón Eliminar -->
        </tr>
      </thead>
      <tbody>
        <tr class="table-warning">
          <th scope="row">3</th>
          <td>10/05/2023</td>
          <td>15/05/2023</td>
          <td>100€</td>
          <td><button class="btn btn-danger">Cancelar</button></td>
        </tr>
        <tr class="table-warning">
          <th scope="row">4</th>
          <td>10/05/2023</td>
          <td>15/05/2023</td>
          <td>100€</td>
          <td><button class="btn btn-danger">Cancelar</button></td>
        </tr>
        <tr class="table-warning">
          <th scope="row">5</th>
          <td>15/05/2023</td>
          <td>15/05/2023</td>
          <td>100€</td>
          <td><button class="btn btn-danger">Cancelar</button></td>
        </tr>
      </tbody>
    </table>
</div>
</div>
    <?php include("footer.php"); ?>
    <script src="/script/script.js"></script>
</body>
</html>