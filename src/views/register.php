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
    <title>Register</title>
</head>
<body>
<div class="container-md shadow-lg px-5 py-5" id="register">
    <h1 class="text-center mb-5 fw-bold" id="register-title">Crear una Compta</h1>
    <form action="index.php?r=doregister" method="POST">
        <div class="row gx-6 gy-4 text-center justify-content-center">
            <div class="col-md-4 shadow-lg input-col">
                <label for="user-name">Nom</label>
                <input type="text" class="form-control-plaintext" id="user-name" name="user-name" placeholder="Nom" required>
            </div>
            <div class="col-md-2"> </div>
            <div class="col-md-4 shadow-lg input-col">
                <label for="user-lastname">Cognoms</label>
                <input type="text" class="form-control-plaintext" id="user-lastname" name="user-lastname" placeholder="Cognoms" required>
            </div>
            <div class="col-md-4 shadow-lg input-col">
                <label for="user-number">Numero de telefon</label>
                <input type="text" class="form-control-plaintext" id="user-number" name="user-number" placeholder="Numero de telefon" required>
            </div>
            <div class="col-md-2"> </div>
            <div class="col-md-4 shadow-lg input-col">
                <label for="user-email">Correu electrònic</label>
                <input type="email" class="form-control-plaintext" id="user-email" name="user-email" placeholder="Correu electrònic" required>
            </div>
            <div class="col-md-10 shadow-lg input-col">
                <label for="user-pass">Contrasenya</label>
                <input type="password" class="form-control-plaintext" id="user-pass" name="user-pass" placeholder="Contrasenya" required>
            </div>
            <div class="col-md-10 shadow-lg input-col">
                <label for="user-confpass">Confirmar contrasenya</label>
                <input type="password" class="form-control-plaintext" id="user-confpass" name="user-confpass" placeholder="Confirmar contrasenya" required>
            </div>
            <div class="col-md-6 shadow-lg input-col">
                <label for="user-cv">Targeta de crèdit</label>
                <input type="text" class="form-control-plaintext" id="user-cv" name="user-cv" placeholder="Targeta de crèdit" required>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-2 shadow-lg input-col">
                <label for="user-rol">Rol s'usuari</label>
                <select class="form-select" aria-label="Default select example" id="user-rol" name="user-rol">
                    <option value="Usuari" selected>Usuari Client</option>
                    <option value="Gestor">Usuari Gestor</option>
                    <option value="Administrador">Usuari Administrador</option>
                </select>
            </div>
            <button type="button" class="btn btn-dark btn-lg btn-block shadow-lg col-md-10" onclick="window.location.href='/index.php?r='">Cancelar</button>
            <button type="submit" class="btn btn-success btn-lg btn-block shadow-lg col-md-10">Crear compte</button>
        </div>
    </form>
</div>
    <script src="/script/script.js"></script>
</body>
</html>