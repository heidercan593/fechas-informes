<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title> Generador de períodos</title>
<link rel="shortcut icon" href="img/logosena.png">
<script src="jquery-3.4.1.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  
<link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
<script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>

<link href = "//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel = "hoja de estilo" >  
<script src = "http://code.jquery.com/jquery-2.0.3.min.js" > </script>  
<script src = "//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js" > </script>

<!-- BOOTSTRAP 5 -->
<link href="  bootstrap/css/bootstrap.min.css" rel="stylesheet">
<script src="bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- SWEETALERT2 -->
<script src="sweetalert2/dist/sweetalert2.all.min.js"></script>
<link rel="stylesheet" href="sweetalert2/dist/sweetalert2.all.min.js">

<!-- DATATABLE -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

<link rel="stylesheet" href="FONDOS.css">
</head>
<body>  
<img src="img/logosena.png" class="rounded float-left" style="width: 130px;" alt="">                      
<br> 
<div class="container text-center">
		<h1 style="margin-top:20px">GENERAR TUS PERÍODOS</h1>
    <h3>Etapa productiva</h3>
		<hr>

    <form action="periodos.php" method="post">
       <div  style="margin-left:350px" class="col-md-4">
       <div class="input-group mb-3 form-floating">
       <span class="input-group-text">Fecha de Inicial</span>
       <input type="date" id="inicio" name="inicio" class="form-control" required><br>
       </div>
       <div class="input-group mb-3 form-floating">
       <span class="input-group-text">Fecha de final</span>
       <input type="date" id="final" name="final" class="form-control" required><br>
       </div>

       </div>

       <input type="submit" class="btn btn-outline-success"value="Generar" >                                   
    </form>
    <div class="row justify-content-md-center">		
    <div class="col-md-8">
    <div id="mostrar_mensaje"></div>
    </div>
    </div>                           
    </div>              
</body>
</html>

 <script type="text/javascript">


function periodos()
{ 
  var parametros = 
  {
    "bitacora" : $("#bitacora").val(),    
  };

  $.ajax({
    data: parametros,
    url: 'periodos.php',
    type: 'POST',
    
    beforesend: function()
    {
      $('#mostrar_mensaje').html("Mensaje antes de Enviar");
    },

    success: function(mensaje)
    {
      $('#mostrar_mensaje').html(mensaje);
    }
  });
}
    </script>
