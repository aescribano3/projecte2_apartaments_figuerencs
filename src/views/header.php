<nav class="navbar navbar-expand-md navbar-dark justify-content-between ml-3 shadow-lg" style="background-color: #000099">
  <a class="navbar-brand" href="/index.php?r=">
    <img src="/img/logo_renting.png" width="60" height="60" alt="logo" class="d-inline-block align-top ms-3">
  </a>
  <a class="navbar-brand" href="/index.php?r=">Apartaments Figuerencs</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarScroll">
    <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
      <?php if($_SESSION["rol"] != "Usuari"){ ?>
        <li class="nav-item">
          <a class="nav-link" href="/index.php?r=pujar">Pujar Apartament</a>
        </li>
      <?php } ?>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="fa-solid fa-user me-2"></i>Usuari
        </a>
        <ul class="dropdown-menu">
          <a class="dropdown-item" href="/index.php?r=login">Login</a>
          <?php if($_SESSION["rol"] != "Usuari"){ ?>
            <a class="dropdown-item" href="/index.php?r=register">Crear compta</a>
          <?php } ?>
          <a class="dropdown-item" href="/index.php?r=user">Perfil</a>
          <a class="dropdown-item" href="/index.php?r=dologout">Tancar Sesió</a>
        </ul>
      </li>
    </ul>
    <div class="col-md-4 text-white mt-5 mb-5 text-center d-none d-sm-block d-md-none">
          <div class="sticky-top" style="z-index: 1;">
              <form action="/index?r=" method="POST">
                  <div class="row mb-2">
                      <div class="col-3">
                          <div class="mb-3">
                              <label for="habitacions-head">Numero d'habitacions</label>
                              <select class="form-select" id="habitacions-head">
                                  <option value="1" selected>1</option>
                                  <option value="2">2</option>
                                  <option value="3">3</option>
                                  <option value="4">4 +</option>
                              </select>
                          </div>
                      </div>
                      <div class="col-1"></div>
                      <div class="col-3">
                          <div class="mb-3">
                              <label for="codipostal-head">Codi Postal</label>
                              <input type="text" class="form-control" id="codipostal-head" name="search-cv" placeholder="Codi Postal">
                          </div>
                      </div>
                  </div>
                  <div class="row mb-3">
                      <div class="col-7">
                          <div class="mb-3">
                              <label for="from-head">Data Inici</label>
                              <input type="text" id="from-head" name="from" class="form-control mb-3 from">
                              <label for="to-head">Data Final</label>
                              <input type="text" id="to-head" name="to" class="form-control to">
                          </div>
                      </div>
                  </div>
                  <div class="row mb-3 text-center" style="z-index: -1;">
                      <div class="col-6">
                          <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="Piscina" id="checkPiscina-head">
                              <label class="form-check-label" for="checkPiscina-head">
                              <i class="fa-solid fa-water-ladder me-4" style="color: #195dd2;"></i>Piscina
                              </label>
                          </div>
                          <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="Parking" id="checkParking-head">
                              <label class="form-check-label" for="checkParking-head">
                              <i class="fa-solid fa-square-parking me-4" style="color: #115ee4;"></i>Parking
                              </label>
                          </div>
                      </div>
                      <div class="col-6">
                          <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="Wifi" id="checkWifi-head">
                              <label class="form-check-label" for="checkWifi-head">
                              <i class="fa-solid fa-wifi me-4" style="color: #104bb2;"></i>Wi-Fi
                              </label>
                          </div>
                          <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="Calefaccio" id="checkCalefaccio-head">
                              <label class="form-check-label" for="checkCalefaccio-head">
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
</nav>