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
    <title>Inici de Sesión</title>
</head>
<body>
<div class="container-md shadow-lg px-5 py-5" id="login">
    <h1 class="text-center mb-5 fw-bold" id="login-title">Iniciar Sessió</h1>
    <form action="index.php?r=dologin" method="POST" novalidate>
        <div class="row gx-5 gy-4 text-center justify-content-center">
            <div class="col-md-8 shadow-lg input-col">
                <label for="user-mail">Correu Electronic</label>
                <input type="email" name="user-mail" class="form-control-plaintext" id="user-mail" placeholder="Correu Electronic">
            </div>
            <div class="col-md-8 shadow-lg input-col">
                <label for="user-pass">Contraseña</label>
                <input type="password" name="user-pass" class="form-control-plaintext" id="user-pass" placeholder="Contraseña"> 
            </div>
            <button type="button" class="btn btn-dark btn-lg btn-block shadow-lg col-md-8" onclick="window.location.href='/index.php?r='">Cancelar</button>
            <?php if($_SESSION["rol"] == "Gestor" || $_SESSION["rol"] == "Administrador"){ ?>
                <button type="button" class="btn btn-warning btn-lg btn-block shadow-lg col-md-8" onclick="window.location.href='/index.php?r=register'">Crear Compta</button>
            <?php } else if ($_SESSION["rol"] != "Usuari" ){ ?>
                <button type="button" class="btn btn-warning btn-lg btn-block shadow-lg col-md-8" onclick="window.location.href='/index.php?r=register'">Registrar-se</button>
            <?php } ?>
            <button type="submit" class="btn btn-success btn-lg btn-block shadow-lg col-md-8">Iniciar sesió</button>

        </div>
    </form>
</div>
<script src="/script/script.js"></script>
</body>
</html>