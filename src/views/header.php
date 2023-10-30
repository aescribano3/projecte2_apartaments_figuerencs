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
            <a class="dropdown-item" href="/index.php?r=dologout">Tencar Sesió</a>
          </ul>
        </div>
      </li>
    </ul>
  </div>
</nav>