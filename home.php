    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
  
    <nav class="navbar navbar-expand-lg navbar-light bg-background">
      <div class="logo">
      <a href="#"> <img class="img-logo" src="img/logo_small.png" alt=""></a>
    </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Administrar
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="CRUD_ingredientes.php">Ingredientes</a>
              <a class="dropdown-item" href="CRUD_platillos.php">Platillos</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Menú
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="login.html">Log in</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>


    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100 min" src="img/pollo1.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 min" src="img/pollo3.png" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 min" src="img/pollo2.png" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
    </div>

   <div class="container padding-home padd">
     <h1 class="display-4 font-weight-bold" id="titulo">EL MEJOR POLLO FRITO</h1>
     <hr>
       <h2 class="display-5 font-weight-bold text-light">Nuestros preferidos</h2>
        <div class="row">
          
          <?php
          include "php/conexion.php";
          $stmt = $pdo->prepare('SELECT * FROM restaurante.producto limit 2');
          $stmt->execute();
          $resultado=$stmt->fetchAll();
          foreach($resultado as $fila):
          ?>      
          <div class="col-lg-6 col-sm-12 padd">
            <img class="adapt-img limite2"  src='data:image/<?php echo $fila['tipo_imagen'];?>; base64,<?php echo base64_encode($fila['imagen']) ?> ' alt="">
              <div class="text-light ">
                <h2> <?php echo $fila['nombre'];?>  </h2>
                <hr>
                <?php echo $fila['descripcion'];?>

              </div>
          </div>
          <?php endforeach ?> 
        </div>
        <div class="row padd">
            <div class="col-lg-4 col-md-6 col-sm-12 padd">
              <img class="adapt-img limite" src="img/restaurante/pechuga.jpg" alt="">
              <div class="text-light">
                  <h2>Pechuga de pollo</h2>
                  <hr>
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex unde aut quo labore modi reprehenderit.
              </div>
            </div>
            <div class="col-lg-4 col-md-6  col-sm-12 padd">
              <img class="adapt-img limite" src="img/restaurante/piernas.jpg" alt="">
              <div class="text-light">
                  <h2>Pierna de pollo</h2>
                  <hr>
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex unde aut quo labore modi reprehenderit.
              </div>
            </div>
            <div class="col-lg-4 col-md-6  col-sm-12 padd">
              <img class="adapt-img limite" src="img/restaurante/medioPollo.jpg" alt="">
              <div class="text-light">
                  <h2>Pierna de pollo</h2>
                  <hr>
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex unde aut quo labore modi reprehenderit.
              </div>
            </div>
        </div>
   </div>

    <footer class="container-fluid text-center bg-background footer">
      <div class="row text-center">
        <div class="col-md-4">
        </div>
        <div class="col-md-4">
          <p>Copyright</p>
        </div>
        <div class="col-md-4">
          <div>
            <a href="#" id="share-fb" class="sharer button"><i class="fa fa-2x fa-facebook-square"></i></a>
            <a href="#" id="share-tw" class="sharer button"><i class="fa fa-2x fa-twitter-square"></i></a>
            <a href="#" id="share-li" class="sharer button"><i class="fa fa-2x fa-linkedin-square"></i></a>
            <a href="#" id="share-em" class="sharer button"><i class="fa fa-2x fa-envelope-square"></i></a>
            
          </div>
        </div>
      </div>
    </footer>

   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
   <script src="js/main.js"></script>

  </body> 

</html>