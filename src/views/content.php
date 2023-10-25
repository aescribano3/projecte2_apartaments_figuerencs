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
    <title>Content</title>
</head>
<body>
    <?php include("header.php"); ?>

<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/img/casa1.jpg" class="d-block w-100" alt="hola">
    </div>
    <div class="carousel-item">
      <img src="/img/casa2.jpg" class="d-block w-100" alt="pi">
    </div>
    <div class="carousel-item">
      <img src="/img/casa3.jpg" class="d-block w-100" alt="pe">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
<div>
    
<!--Slider -->
<div class="row me-0 ms-3">
  <!-- start col-8 -->
    <div class="col-8 mt-3"> 
        <div class="col-12">
        <h1 class="text-white ">450.000€</h1>
        </div>
        <div class="container-text">
            <p class="text-white">
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.
            </p>
        </div>
        <div class="col-12">
            <h1 class="text-white ">Característiques</h1>
        </div>
        <div class="row col-6">
            <div class="col-3">
                <i class="fa-solid fa-person-swimming" style="color: #ffffff;"></i>
            </div>
            <div class="col-3">
                <i class="fa-solid fa-wifi" style="color: #ffffff;"></i>
            </div>
            <div class="col-3">
                <i class="fa-solid fa-square-parking" style="color: #ffffff;"></i>
            </div>
            <div class="col-3">
                <i class="fa-solid fa-temperature-quarter" style="color: #ffffff;"></i>
            </div>
        </div>
        <!-- Google map -->
        <div class="row mt-3">
            <div class="col-12">
                <div id="map-container-google-1 " class="z-depth-1-half map-container mb-3" style="height: 500px " >
                    <iframe src="https://maps.google.com/maps?q=manhattan&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
                        style="border:0; width: 100%; height: 100%;" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>

<!-- Formul -->
    <div class="col-3 mt-2">
        <div class="sticky-top" style="z-index: 1;">
            <form action="https://www.fotocasa.es/es/" method="POST">
                <div class="row gx-5 gy-4 text-center justify-content-center mt-3">
                    <h4 class="text-light">Reservar Apartament</h4>
                    <div class="col-md-8 shadow-lg input-col">
                        <label for="rsv-email">Correu Electronic</label>
                        <input type="email" class="form-control-plaintext" name="rsv-email" id="rsv-email" placeholder="Email">
                    </div>
                    <div class="col-md-8 shadow-lg input-col">
                        <label for="rsv-telef">Telefon</label>
                        <input type="text" class="form-control-plaintext" name="rsv-telef" id="rsv-telef" placeholder="Telefon"> 
                    </div>
                    <div class="col-md-8 shadow-lg input-col">
                        <label for="rsv-pers">Persones</label>
                        <input type="text" class="form-control-plaintext" name="rsv-pers" id="rsv-pers" placeholder="Persones"> 
                    </div>
                    <div class="col-md-8">
                            <label for="from">Data Inici</label>
                            <input type="text" id="from" name="from" class="form-control mb-3 from">
                            <label for="to">Data Final</label>
                            <input type="text" id="to" name="to" class="form-control mb-3 to">
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

