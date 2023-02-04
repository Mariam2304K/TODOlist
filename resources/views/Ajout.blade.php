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
       

   <div class="mt-5">
        <div class=" w-60">
            <div class="card shadow-sm">
                <div class="card-body">
                  <div class="container-fluid">
                    <div class="container align-self-center col-8  mr-5">
                      <form class="row g-3" action="{{URL('Insertion')}}">
                        <div class="col-md-6">
                          <label for="inputEmail4" class="form-label">Nom de la tache</label>
                          <input type="text" class="form-control" name="nom">
                        </div>
                        <div class="col-md-6">
                          <label for="inputPassword4" class="form-label">Durée de la tache</label>
                          <input type="text" class="form-control" name="duree">
                        </div>
                        <div class="col-12">
                          <label for="inputAddress" class="form-label">Jour1</label>
                          <input type="text" class="form-control" name="jour1" placeholder="Combien heures allez-vous faire sur la tache le premier jour?">
                        </div>
                        <div class="col-12">
                          <label for="inputAddress2" class="form-label">Jour2</label>
                          <input type="text" class="form-control" name="jour2" placeholder="Combien heures allez-vous faire sur la tache le deuxième jour?">
                        </div>
                        <div class="col-12">
                          <label for="inputCity" class="form-label">Jour3</label>
                          <input type="text" class="form-control" name="jour3" placeholder="Combien heures allez-vous faire sur la tache le troisième jour?">
                        </div>
                        <div class="col-12">
                          <label for="inputCity" class="form-label">Jour4</label>
                          <input type="text" class="form-control" name="jour4" placeholder="Combien heures allez-vous faire sur la tache le quatrième jour?">
                        </div>
                        <div class="col-12">
                          <label for="inputCity" class="form-label">Jour5</label>
                          <input type="text" class="form-control" name="jour5" placeholder="Combien heures allez-vous faire sur la tache le cinquième jour?">
                        </div>
                        <div class="col-12">
                          <label for="inputCity" class="form-label">Jour6</label>
                          <input type="text" class="form-control" name="jour6" placeholder="Combien heures allez-vous faire sur la tache le sixième jour?">
                        </div>
                        <div class="col-12">
                          <label for="inputCity" class="form-label">Jour7</label>
                          <input type="text" class="form-control" name="jour7" placeholder="Combien heures allez-vous faire sur la tache le septième jour?">
                        </div>
                        <div class="d-grid gap-2 col-6 mx-auto">
                          <button class="btn btn-success" type="submit">VALIDER</button>
                        </div>
                      </form>
                    
                    </div>
                  </div>

                </div>
        </div>

   </div>


      
   <script src="{{asset("Bootstrap/js/bootstrap.min.js")}}"></script> 
   <script src="{{asset("fontawasome/fontawesome/js/all.js")}}"></script>
</body>
</html>
