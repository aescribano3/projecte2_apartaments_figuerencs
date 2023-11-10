<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--PDF-->>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js" integrity="sha512-qZvrmS2ekKPF2mSznTQsxqPgnpkI4DNTlrdUmTzrDgektczlKNRRhy5X5AAOnx5S09ydFYWWNSfcEqDTTHgtNA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"/>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <link rel="icon" type="image/png" href="/img/logo_renting.png">
    <link rel="stylesheet" href="/css/style.css">
    <title>Content</title>
</head>
<body>
    <?php include("header.php"); ?>

    <img src="/img/casa1.jpg" class="d-block w-100" alt="img1">    

<div class="row me-0 ms-3">
    <div class="col-md-8 mt-3"> 
        <h1 class="text-white ">450.000€</h1>
        <div class="container-text">
            <p class="text-white">
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.
            </p>
        </div>
        <h1 class="text-white">Característiques</h1>
        <div class="row col-6">
            <div class="col-3">
                <i class="fa-solid fa-person-swimming" style="color: #ffffff;"></i>
                <p class="text-white">Piscina</p>
            </div>
            <div class="col-3">
                <i class="fa-solid fa-wifi" style="color: #ffffff;"></i>
                <p class="text-white">Wi-Fi</p>
            </div>
            <div class="col-3">
                <i class="fa-solid fa-square-parking" style="color: #ffffff;"></i>
                <p class="text-white">Parking</p>
            </div>
            <div class="col-3">
                <i class="fa-solid fa-temperature-quarter" style="color: #ffffff;"></i>
                <p class="text-white">Calefacció</p>
            </div>
        </div>
        <!-- Map -->
        <div class="row mt-3">
            <div class="col-12">
                <div id="map" class="z-depth-1-half map-container mb-3">
                </div>
            </div>
        </div>
    </div>

    <!-- Form -->
    <div class="col-md-4">
        <div class="sticky-top" style="z-index: 1;">
            <form action="index.php?r=doreserva" method="POST">
                <div class="row gx-5 gy-4 text-center justify-content-center m-3">
                    <h4 class="text-light">Reservar Apartament</h4>
                    <div class="col-md-8 shadow-lg input-col">
                        <label for="rsv-email">Correu Electronic</label>
                        <input type="email" class="form-control-plaintext" name="rsv-email" id="rsv-email" placeholder="Email">
                    </div>
                    <div class="col-md-8 shadow-lg input-col">
                        <label for="rsv-telef" class>Telefon</label>
                        <input type="text" class="form-control-plaintext" name="rsv-telef" id="rsv-telef" placeholder="Telefon"> 
                    </div>
                    <div class="col-md-8 shadow-lg input-col">
                        <label for="rsv-pers">Persones</label>
                        <input type="text" class="form-control-plaintext" name="rsv-pers" id="rsv-pers" placeholder="Persones"> 
                    </div>
                <div class="col-md-5 shadow-lg border border-dark bg-light border-2 rounded-3">
                    <label for="data-inici">Data inici</label>
                    <input type="text" id="data-inici" name="data-inir" class="form-control from" placeholder="Data Inici Temporada Alta" required>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-5 shadow-lg border border-dark bg-light border-2 rounded-3">
                    <label for="data-final">Data final</label>
                    <input type="text" id="data-final" name="data-finr" class="form-control to" placeholder="Data Final Temporada Alta"  required>
                </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block shadow-lg col-md-8">Reservar</button>
                </div>
            </form>   
        </div>
    </div>
</div>
    <?php include("footer.php"); ?>
   
    <script src="/script/script.js"></script>
    
</body>
</html>

