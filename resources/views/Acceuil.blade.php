<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TODOlist</title>
    <link rel="stylesheet" href="{{asset("Bootstrap/css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("fontawasome/fontawesome/css/all.css")}}">
</head>
<body>

    <nav class="navbar bg-success fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand text-light" href="#">MyTODOlist</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">MyTODOlist</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{('accueil')}}">ACCUEIL</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{('ajouter')}}">AJOUTER</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{('observer')}}">OBSERVER</a>
          </li>
        <form class="d-flex mt-3" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">RECHERCHE</button>
        </form>
      </div>
    </div>
  </div>
</nav>



  
<script src="{{asset("Bootstrap/js/bootstrap.min.js")}}"></script> 
<script src="{{asset("fontawasome/fontawesome/js/all.js")}}"></script>
</body>
</html>