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
    <title>Inici de Sesión</title>
</head>
<body>
<div class="container-md shadow-lg px-5 py-5" id="login">
    <h1 class="text-center mb-5 fw-bold" id="login-title">Iniciar Sessió</h1>
    <form action="https://cendrassos.net" method="POST">
        <div class="row gx-5 gy-4 text-center justify-content-center">
            <div class="col-md-8 shadow-lg">
                <input type="text" class="form-control-plaintext" id="user-name" placeholder="Nom Usuari">
            </div>
            <div class="col-md-8 shadow-lg">
                <input type="text" class="form-control-plaintext" id="user-name" placeholder="Contraseña"> 
            </div>
            <button type="button" class="btn btn-dark btn-lg btn-block shadow-lg col-md-8" onclick="window.location.href='/public/index.php?r='">Cancelar</button>
            <button type="submit" class="btn btn-success btn-lg btn-block shadow-lg col-md-8">Iniciar sesió</button>
        </div>
    </form>
</div>
<script src="/public/script/script.js"></script>
</body>
</html>