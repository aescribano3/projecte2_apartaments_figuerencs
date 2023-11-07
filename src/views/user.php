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
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css" />
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <link rel="icon" type="image/png" href="/img/logo_renting.png">
    <link rel="stylesheet" href="/css/style.css">
    <title>User</title>
</head>
<body>
    <?php include("header.php"); ?>

<div id="userx" class="row me-0 bg-grey">
  <div class="col-md-2 text-white text-center">
      <p class="mt-3 fs-2" id="enlace-dades">Dades</p>
      <p class="mt-3 fs-2" id="enlace-historial">Historial</p>
      <p class="mt-3 fs-2" id="enlace-reserves">Reserves</p>
      <?php if($_SESSION["rol"] == "Administrador"){ ?>
        <p class="mt-3 fs-2" id="enlace-usuarios">Usuaris</p>
      <?php } ?>
  </div>
  
  <!-- Col de dades-->
  <div class="col-md-10 bg-dark d-flex">
    <div id="contenido-dades">
      <h1 class="text-white mb-3 mt-5 text-center">Dades Personals</h1>
      <form action="index.php?r=doupdate" method="POST">
      <div class="row gx-6 gy-4 text-center justify-content-center">
            <div class="col-md-4 shadow-lg input-col">
                <label for="user-name">Nom</label>
                <input type="text" class="form-control-plaintext" id="user-name" name="user-name-update" placeholder="Nom" value="<?= $name ?>" required>
            </div>
            <div class="col-md-2"> </div>
            <div class="col-md-4 shadow-lg input-col">
                <label for="user-lastname">Cognoms</label>
                <input type="text" class="form-control-plaintext" id="user-lastname" name="user-lastname-update" placeholder="Cognoms" value="<?= $lastname; ?>" required>
            </div>
            <div class="col-md-4 shadow-lg input-col">
                <label for="user-number">Telefon</label>
                <input type="text" class="form-control-plaintext" id="user-number" name="user-number-update" placeholder="Numero de telefon" value="<?= $number; ?>" required>
            </div>
            <div class="col-md-2"> </div>
            <div class="col-md-4 shadow-lg input-col">
                <label for="user-email">Email</label>
                <input type="email" class="form-control-plaintext" id="user-email" name="user-email-update" placeholder="Correu electrònic" value="<?= $email; ?>" required>
            </div>
            <div class="col-md-4 shadow-lg input-col">
                <label for="user-pass">Contraseña</label>
                <input type="password" class="form-control-plaintext" id="user-pass" name="user-pass-update" placeholder="Contrasenya" required>
            </div>
            <div class="col-md-2"> </div>
            <div class="col-md-4 shadow-lg input-col">
                <label for="user-confpass">Targeta Credit</label>
                <input type="text" class="form-control-plaintext" id="user-confpass" name="user-cv-update" placeholder="Targeta de crèdit" value="<?= $cv; ?>" required>
            </div>
            <div class="col-md-6"></div>
            <button type="submit" class="btn btn-info btn-lg btn-block shadow-lg col-md-10 mt-5">Guardar canvis</button>
        </form>
    </div>
  </div>

  <!-- Col de historials-->
  <div id="contenido-historial" class="col-12 text-white">
    <h1 class="d-flex align-items-center justify-content-center mt-4 mb-4">Historial Reserves</h1>
    <table class="table table-striped table-hover" id="historialReserves">
      <thead>
        <tr class="table-dark">
          <th scope="col">#</th>
          <th scope="col">Dia entrada</th>
          <th scope="col">Dia Sortida</th>
          <th scope="col">Preu</th>
          <th scope="col">Estado</th>
        </tr>
      </thead>
      <tbody>
        <tr class="table-dark">
          <th scope="row">1</th>
          <td>10/05/2023</td>
          <td>15/05/2023</td>
          <td>100€</td>
          <td>Tencada</td>
        </tr>
        <tr class="table-dark">
          <th scope="row">2</th>
          <td>10/05/2023</td>
          <td>15/05/2023</td>
          <td>100€</td>
          <td>Tencada</td>
        </tr>
        <tr class="table-dark">
          <th scope="row">3</th>
          <td>15/05/2023</td>
          <td>15/05/2023</td>
          <td>100€</td>
          <td>Oberta</td>
        </tr>
        <tr class="table-dark">
          <th scope="row">4</th>
          <td>15/05/2023</td>
          <td>15/05/2023</td>
          <td>100€</td>
          <td>Oberta</td>
        </tr>
        <tr class="table-dark">
          <th scope="row">5</th>
          <td>15/05/2023</td>
          <td>15/05/2023</td>
          <td>100€</td>
          <td>Oberta</td>
        </tr>
      </tbody>
    </table>
  </div>

  <!--Col de reserves-->
  <div id="contenido-reserves" class="col-12 text-white">
    <h1 class="mt-4 mb-4 text-center">Reserves Obertes</h1>
    <table class="table table-striped table-hover" id="reserves">
      <thead>
        <tr class="table-dark">
          <th scope="col">#</th>
          <th scope="col">Dia entrada</th>
          <th scope="col">Dia Sortida</th>
          <th scope="col">Preu</th>
          <th scope="col">Cancelar Reserva</th>
        </tr>
      </thead>
      <tbody>
        <tr class="table-dark">
          <th scope="row">3</th>
          <td>10/05/2023</td>
          <td>15/05/2023</td>
          <td>100€</td>
          <td><button class="btn btn-danger">Cancelar</button></td>
        </tr>
        <tr class="table-dark">
          <th scope="row">4</th>
          <td>10/05/2023</td>
          <td>15/05/2023</td>
          <td>100€</td>
          <td><button class="btn btn-danger">Cancelar</button></td>
        </tr>
        <tr class="table-dark">
          <th scope="row">5</th>
          <td>15/05/2023</td>
          <td>15/05/2023</td>
          <td>100€</td>
          <td><button class="btn btn-danger">Cancelar</button></td>
        </tr>
      </tbody>
    </table>
</div>

<!--Col de usuaris-->
<div id="contenido-usuarios" class="col-12 text-white">
    <h1 class="d-flex align-items-center justify-content-center mt-4 mb-4">Usuarios</h1>
    <table class="table table-striped table-hover" id="usuaris">
      <thead>
        <tr class="table-dark">
          <th scope="col">Id</th>
          <th scope="col">Nom</th>
          <th scope="col">Cognom</th>
          <th scope="col">Email</th>
          <th scope="col">Telefon</th>
          <th scope="col">Rol</th>
        </tr>
      </thead>
      <tbody>
      <?php foreach($users as $i => $user) { ?>
        <tr class="table-dark">
          <th scope="row"><?=$user["id"]?></th>
          <td><?=$user["nom"]?></td>
          <td><?=$user["cognom"]?></td>
          <td><?=$user["email"]?></td>
          <td><?=$user["telefon"]?></td>
          <td><?=$user["rol"]?></td>
        </tr>
      <?php } ?>
      </tbody>
    </table>
  </div>

</div>
    <?php include("footer.php"); ?>
    <script src="/script/script.js"></script>
</body>
</html>