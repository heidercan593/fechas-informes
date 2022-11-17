<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title> Generador de períodos</title>
    <link rel="shortcut icon" href="assets/img/logosena.png">

    <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/sign-in/">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="assets/css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
<form class="form-signin" action="periodos.php" method="post">
<h1 class="text-center">Generar períodos de Informes</h1>
  <img class="mb-4" src="assets/img/logosena.png" alt="" width="100" height="100">
      <span class="input-group-text" style="color: #3ba241;background-color: #34495e; ">Ingrese fecha Inicio de Etapa Productiva</span>
       <input type="date" id="inicio" name="inicio" class="form-control" required><br>

       <span class="input-group-text" style="color: #3ba241;background-color: #34495e;" >Ingrese fecha final de Etapa Productiva</span>
       <input type="date" id="final" name="final" class="form-control" required ><br>
 
       <input type="submit" class="btn btn-outline-success" value="Generar" > 
  <p class="mt-5 mb-3 text-muted">&copy; Version 1.1</p>
</form> 
  </body>
</html>

