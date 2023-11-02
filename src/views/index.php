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
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"/>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <link rel="icon" type="image/png" href="/img/logo_renting.png">
    <link rel="stylesheet" href="/css/style.css">
    <title>Index</title>
</head>
<body>
    <?php include("header.php");?>
    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/img/apartamento_portada_1.webp" class="d-block w-100" alt="apartament_1">
            </div>
            <div class="carousel-item">
                <img src="/img/apartamento_portada_2.jpg" class="d-block w-100" alt="apartament_2">
            </div>
            <div class="carousel-item">
                <img src="/img/apartamento_portada_3.jpg" class="d-block w-100" alt="apartament_3">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="container-md">
        <div class="row">
            <div class="col-md-8">
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Titol Apartament</h1>
                                <p class="modal-title fs-5 ms-3">Estat apartament: Obert</p>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            <img src="/img/casa1.jpg" class="d-block w-100" alt="img1">
                                <div class="row me-0 ms-3">
                                    <div class="col-md-12 mt-3"> 
                                        <h1 class="">450.000€</h1>
                                        <div class="container-text">
                                            <p class="">
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.
                                            </p>
                                        </div>
                                        <h1 class="">Característiques</h1>
                                        <div class="row col-md-12">
                                            <div class="col-md-3">
                                                <i class="fa-solid fa-person-swimming" style="color: #000000;"></i>
                                                <p class="">Piscina</p>
                                            </div>
                                            <div class="col-md-3">
                                                <i class="fa-solid fa-wifi" style="color: #000000;"></i>
                                                <p class="">Wi-Fi</p>
                                            </div>
                                            <div class="col-md-3">
                                                <i class="fa-solid fa-square-parking" style="color: #000000;"></i>
                                                <p class="">Parking</p>
                                            </div>
                                            <div class="col-md-3">
                                                <i class="fa-solid fa-temperature-quarter" style="color: #000000;"></i>
                                                <p class="">Calefacció</p>
                                            </div>
                                        </div>
                                        <!-- Map -->
                                        <div class="row mt-3">
                                            <div class="col-md-12">
                                                <div id="map" class="z-depth-1-half map-container mb-3">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Form -->
                                    <div class="col-md-12">
                                        <div class="sticky-top" style="z-index: 1;">
                                            <form action="https://www.fotocasa.es/es/" method="POST">
                                                <div class="row gx-5 gy-4 text-center justify-content-center m-3">
                                                    <h4 class="">Reservar Apartament</h4>
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
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tencar</button>
                            </div>
                        </div>
                    </div>
                </div>

                <a class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <div class="card m-5" style="max-width: 800px;">
                        <div class="row g-0">
                            <div class="col-md-5">
                            <img src="/img/apartamento_portada_1.webp" class="img-fluid rounded-start" alt="apartament">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <h5 class="card-title">Titol Apartament</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-body-secondary">Tencat</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>

                <a class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <div class="card m-5" style="max-width: 800px;">
                        <div class="row g-0">
                            <div class="col-md-5">
                            <img src="/img/apartamento_portada_1.webp" class="img-fluid rounded-start" alt="apartament">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-body-secondary">Manteniment</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>

                <a class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <div class="card m-5" style="max-width: 800px;">
                        <div class="row g-0">
                            <div class="col-md-5">
                            <img src="/img/apartamento_portada_1.webp" class="img-fluid rounded-start" alt="apartament">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-body-secondary">Obert</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>

            </div>
            <div class="col-md-4 text-white mt-5 mb-5 text-center d-sm-none d-md-block">
                <div class="sticky-top" style="z-index: 1;">
                    <h4 class="mb-3">Cerca d'apartaments</h4>
                    <form action="/index?r=" method="POST">
                        <div class="row mb-3">
                            <div class="col-5">
                                <div class="mb-3">
                                    <label for="habitacions">Numero d'habitacions</label>
                                    <select class="form-select" id="habitacions">
                                        <option value="1" selected>1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4 +</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-2"></div>
                            <div class="col-5">
                                <div class="mb-3">
                                    <label for="codipostal">Codi Postal</label>
                                    <input type="text" class="form-control" id="codipostal" name="search-cv" placeholder="Codi Postal">
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="from">Data Inici</label>
                                    <input type="text" id="from" name="from" class="form-control mb-3 from">
                                    <label for="to">Data Final</label>
                                    <input type="text" id="to" name="to" class="form-control to">
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3 text-center" style="z-index: -1;">
                            <div class="col-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Piscina" id="checkPiscina">
                                    <label class="form-check-label" for="checkPiscina">
                                    <i class="fa-solid fa-water-ladder me-4" style="color: #195dd2;"></i>Piscina
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Parking" id="checkParking">
                                    <label class="form-check-label" for="checkParking">
                                    <i class="fa-solid fa-square-parking me-4" style="color: #115ee4;"></i>Parking
                                    </label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Wifi" id="checkWifi">
                                    <label class="form-check-label" for="checkWifi">
                                    <i class="fa-solid fa-wifi me-4" style="color: #104bb2;"></i>Wi-Fi
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Calefaccio" id="checkCalefaccio">
                                    <label class="form-check-label" for="checkCalefaccio">
                                    <i class="fa-solid fa-temperature-full me-4" style="color: #1d5cc9;"></i>Calefacció
                                    </label>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block col-md-12"><img src="/img/lupa_icon.png" alt="Buscar" width="30" height="30"></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php include("footer.php");?>
    <script src="/script/script.js"></script>
</body>
</html>