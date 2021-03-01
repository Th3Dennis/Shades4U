<?php




?>

<!DOCTYPE html>
<html lang="de">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">


  <link rel="stylesheet" href="css/style.css">

  <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>



  <title>Shades4U</title>
</head>

<body>

  <div class="container-fluid">

  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"> <img src="img/icons/Logo.png" alt=""> </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="sites/abmeldung.php">Logout</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
  </div>


  <!--Text under the title picture-->
  <div class="container-fluid noMargin">

    <div class="row">
      <img id="titlePicture" src="img/sunglasses/titlePictureCropped.jpg" alt="Picture of a pair of sunglasses">
    </div>
    <div class="row titleInformation align-items-center">
      <div class="col-sm-4 rightAlign">
        <p class="titleInformationText">3 Jahre Garantie</p>
      </div>
      <div class="col-sm-4 centerAlign">
        <p class="titleInformationText">Gratis 30 Tage Rückerstattung</p>
      </div>
      <div class="col-sm-4">
        <p class="titleInformationText">3 Jahre Garantie</p>
      </div>
    </div>
  </div>



  <div class="container-fluid px-5 mt-5">

    <p class="elementTitle">Alle Sonnenbrillen</p>

    <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4 g-4">

    <?php

    if (!empty($sunglasses)) {
        foreach ($sunglasses as $sunglass){
            echo '<div class="col">
            <div class="card h-100">
              <img src="'.$sunglass->picture. '" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">'.$sunglass->name. '</h5>
              </div>
              
            </div>
          </div>';
        }
    }


    ?>
    </div>
  
</div>


<div class="container-fluid px-5">

    <div class="newCollection">
      <div class="row">
        <div class="col">
          <p class="elementTitle elementTitleMargin">Neue Kollektion</p>

        </div>
        <div class="col">
          <p class="elementTitle elementTitleMargin rightAlign">Alle anzeigen</p>

        </div>

      </div>

      <div class="row">
        <div class="col">
          <img class="newCollectionImage" src="img/sunglasses/NewCollection2.png" alt="">
        </div>

        <div class="col">
          <img class="newCollectionImage" src="img/sunglasses/NewCollection1.png" alt="">

        </div>
      </div>

    </div>







    <div class="SS21Collection">

      <div class="row">
        <div class="col">
          <p class="SS21CollectionText"><b class="SS21CollectionTitleText">Neuer Look mit der SS21
              Kollektion</b><br><br>Finde jetzt deinen neuen Sommerlook mit der SS21 Kollektion.
            Natürlich sind alle unsere Gläser mit 100% UV Schutz ausgestattet.</p>
        </div>

        <div class="col">
          <img class="newCollectionImage" src="img/sunglasses/SS21CollectionSquare.png"
            alt="Photo of the new SS21 Collection">

        </div>
      </div>

    </div>
  </div>

  </div>


  <footer id="sticky-footer" class="py-4 bg-dark text-white-50 mt-5">
    <div class="container text-center text-white">
      <small>Copyright &copy; Shades4U</small>
    </div>
  </footer>




  <!--Bootstrap-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>



</body>

</html>