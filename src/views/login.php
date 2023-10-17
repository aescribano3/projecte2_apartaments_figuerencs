<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/style.css">
    <title>Login</title>
</head>
<body>
<div class="container-md shadow-lg px-5 py-5" id="login">
    <h1 class="text-center mb-5 fw-bold" id="login-title">Iniciar Sessió</h1>
    <form action="https://cendrassos.net" method="post">
        <div class="row gx-5 gy-4 text-center justify-content-center">
            <div class="col-md-8 shadow-lg">
                <input type="text" class="form-control-plaintext" id="user-name" placeholder="Nom Usuari">
            </div>
            <div class="col-md-8 shadow-lg">
                <input type="text" class="form-control-plaintext" id="user-name" placeholder="Contraseña"> 
            </div>
            <button type="button" class="btn btn-dark btn-lg btn-block shadow-lg col-md-8" onclick="window.location.href='/src/controllers/register.php'">Crear compta</button>
            <button type="submit" class="btn btn-success btn-lg btn-block shadow-lg col-md-8">Iniciar sesió</button>
        </div>
    </form>
</div>
<script src="/public/script/script.js"></script>
</body>
</html>