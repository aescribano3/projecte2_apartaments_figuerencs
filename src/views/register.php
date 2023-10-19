<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="/public/img/logo_renting.png">
    <link rel="stylesheet" href="/public/css/style.css">
    <title>Register</title>
</head>
<body>
<div class="container-md shadow-lg px-5 py-5" id="register">
    <h1 class="text-center mb-5 fw-bold" id="register-title">Crear una Compta</h1>
    <form action="https://cendrassos.net" method="POST">
        <div class="row gx-6 gy-4 text-center justify-content-center">
            <div class="col-md-4 shadow-lg">
                <input type="text" class="form-control-plaintext" id="user-name" placeholder="Nom">
            </div>
            <div class="col-md-2"> </div>
            <div class="col-md-4 shadow-lg">
                <input type="text" class="form-control-plaintext" id="user-lastname" placeholder="Cognoms">
            </div>
            <div class="col-md-4 shadow-lg">
                <input type="text" class="form-control-plaintext" id="user-number" placeholder="Numero de telefon">
            </div>
            <div class="col-md-2"> </div>
            <div class="col-md-4 shadow-lg">
                <input type="text" class="form-control-plaintext" id="user-email" placeholder="Correu electrònic">
            </div>
            <div class="col-md-10 shadow-lg">
                <input type="password" class="form-control-plaintext" id="user-passw" placeholder="Contrasenya">
            </div>
            <div class="col-md-10 shadow-lg">
                <input type="password" class="form-control-plaintext" id="user-confpassw" placeholder="Confirmar contrasenya">
            </div>
            <div class="col-md-10 shadow-lg">
                <input type="text" class="form-control-plaintext" id="user-cv" placeholder="Targeta de crèdit">
            </div>
            <button type="button" class="btn btn-dark btn-lg btn-block shadow-lg col-md-10" onclick="window.location.href='/public/index.php?r='">Cancelar</button>
            <button type="submit" class="btn btn-success btn-lg btn-block shadow-lg col-md-10">Crear compte</button>
        </div>
    </form>
</div>
    <script src="/public/script/script.js"></script>
</body>
</html>