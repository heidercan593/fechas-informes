<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Generador de periodos</title>
  <link rel="shortcut icon" href="assets/img/logosena.png">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="assets/css/style.css">

<!-- bootstrap -->
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<style>a{text-decoration:none}</style>
</head>
<body>
  
  <?php
  error_reporting(0);
  ?>
  <?php
   
    
	$dtz = new DateTimeZone("America/Bogota");
    $dt = new DateTime("now", $dtz);
    $fecha = $dt->format("Y-m-d");	
    $hora = $dt->format("h:i:s");
	$anio = $dt->format("Y");
	$fecha_hora = $dt->format("Y-m-d h:i:s");
    
    $inicio = date("d-m-Y",strtotime($_POST['inicio'])); 
    $parcial = date("d-m-Y",strtotime($_POST['inicio']."+ 90 days")); 
    $final = date("d-m-Y",strtotime($_POST['final'])); 
    $fecha1 = date("d-m-Y",strtotime($_POST['inicio'])); 
    $fecha2 = date("d-m-Y",strtotime($fecha1."+ 14 days"));    
    $a = 1;
?>
<!-- TITULO -->
<div class="container">
  <a href="index.php"> <img src="assets/img/logosena.png" class="rounded float-right" style="width: 130px" alt=""> </a>
</div>
<h1 class="text-center">SENA Centro Biotecnológico del Caribe</h1>
<h4 class="text-center" style="color:rgb(59, 162, 65)">Seguimiento a Etapa Productiva</h4>
<br>
<h3 class="text-center">Generar períodos de Informes</h3>
<br>


<form class="text-center" action="periodos.php" method="post">
<div class="container">
  <div class="row row-cols-auto">
    <div class="col-6" style="width: auto;">      
       <span class="input-group-text" style="color: #3ba241;background-color: #34495e;">Ingrese fecha Inicio de Etapa Productiva</span>
       <input type="date" id="inicio" name="inicio" class="form-control" required><br>
      </div>
      <br>
    <div class="col-6"style="width: auto;">      
      <span class="input-group-text" style="color: #3ba241;background-color: #34495e;" >Ingrese fecha final de Etapa Productiva</span>
       <input type="date" id="final" name="final" class="form-control" required ><br>
    </div>
    <div>
    <input type="submit" class="btn btn-outline-success" value="Generar" >                                   
    </div>
    </form>
    </div>
</div>
  <br>
  <div class="container">
    <div class="row ">
    <div class="col">
      
    </div>
    </div>
  </div>
    <br>
    <!-- Fecha de informe concertacion-->
    <div class="container" >
    <div class="row ">
    <div class="col">
    <h4 >Período informe concertación  </h4> 
    <small>(F023-01)</small> <a href="assets/Informes/GFPI-F-023_Formato_Planeacion_seguimiento_y_evaluacion_etapa_productiva.docx" download="GFPI-F-023_Formato_Planeacion_seguimiento_y_evaluacion_etapa_productiva.docx" > Descargar formato</a>
    <table class="rwd-table2" >
      <thead>
        <tr> 
        <th class="text-center">FECHA INICIAL</th>
          <th class="text-center">FECHA FINAL</th>  
        </tr>
      </thead>
      <tbody>
          <tr>
           <td class="text-center">No tiene</td>
           <td class="text-center">No tiene</td>               
          </tr>
      </tbody>
    </table>
    </div>
    <!-- Fecha de informe parcial -->
    <div class="col">
    <table id="cesar2" class="rwd-table2" >
    <h4>Período informe parcial</h4>
    <small>(F023-02)</small> <a href="assets/Informes/GFPI-F-023_Formato_Planeacion_seguimiento_y_evaluacion_etapa_productiva.docx" download="GFPI-F-023_Formato_Planeacion_seguimiento_y_evaluacion_etapa_productiva.docx" > Descargar formato</a>
  <thead>
      <tr>
          <th class="text-center">FECHA INICIAL</th>
          <th class="text-center">FECHA FINAL</th>                       
      </tr>

  </thead>
  <tbody>
          <tr>
           <td class="text-center"><?php echo $inicio ?></td>
           <td class="text-center"><?php echo $parcial ?></td>               
          </tr>
  </tbody>
  </table>
    </div>
<!-- Fecha de informe final -->
    <div class="col">
    <table id="cesar2" class="rwd-table2" >
    <h4>Período informe final</h4>
    <small>(F023-03)</small> <a href="assets/Informes/GFPI-F-023_Formato_Planeacion_seguimiento_y_evaluacion_etapa_productiva.docx" download="GFPI-F-023_Formato_Planeacion_seguimiento_y_evaluacion_etapa_productiva.docx" > Descargar formato</a>
  <thead>
      <tr>
          <th class="text-center">FECHA INICIAL</th>
          <th class="text-center">FECHA FINAL</th>                       
      </tr>
  </thead>
  <tbody>
          <tr>
           <td class="text-center"><?php echo $inicio?></td>
           <td class="text-center"><?php echo $final ?></td>             
          </tr>
  </tbody>
  </table>
    </div>
    <br>
    <br>
<!-- bitacoras -->
<div class="container">
    <div class="row ">
    <div class="col">
    <table id="cesar" class="rwd-table" >
      <br>
<h4>Período de bitácoras</h4>
<small>(F147)</small> 
<br>
<a href="assets/Informes/GFPI-F-147_Bitácora_de_seguimiento_Etapa_productiva - V1.xlsx" download="GFPI-F-147_Bitácora_de_seguimiento_Etapa_productiva - V1.xlsx" > Descargar formato V1</a>
<br>
<a href="assets/Informes/GFPI-F-147_Formato_bitácora_etapa_productiva - V2.xlsx" download="GFPI-F-147_Formato_bitácora_etapa_productiva - V2.xlsx" > Descargar formato V2</a>
<br>
  <thead>
      <tr>
          <th class="text-center">BITÁCORA</th>
          <th class="text-center">FECHA INICIAL</th>
          <th class="text-center">FECHA FINAL</th>                          
      </tr>
  </thead>
  <tbody>
        <tr>
           <td class="text-center"><?php echo $a ?></td>
   <td class="text-center"><?php echo $fecha1 ?></td>
   <td class="text-center"><?php echo $fecha2 ?></td>
           <tr>
           <?php
           while ($a <= 11) 
           {
            $a = $a + 1;
            
            $fecha1 = date("d-m-Y",strtotime($fecha2."+ 1 days"));
            $fecha2 = date("d-m-Y",strtotime($fecha1."+ 14 days"));
            if ($a==12) {
              $fecha2 = $final;
            }
            ?>
            <td class="text-center"><?php echo $a ?></td>
    <td class="text-center"><?php echo $fecha1 ?></td>
    <td class="text-center"><?php echo $fecha2 ?></td>
                    
        </tr>
     <?php } ?>    
      
  </tbody>
  <tfoot>
   <tr>
       <th class="text-center">BITÁCORA</th>
       <th class="text-center">FECHA INICIAL</th>
       <th class="text-center">FECHA FINAL</th> 
   </tr>
  </tfoot>
  </table>
  </div>
  <!-- sugerencias -->
<div class="col">
    <table id="cesar2" class="rwd-table3" >
      <br>
      <br>
      <br>
      <br>
      <br>

  <thead>
      <tr>
          <th class="text-center" style="font-size:19px">⚠️ DUDAS FRECUENTES ⚠️</th>                      
      </tr>
  </thead>
  <tbody>
          <tr>
           <td class="text-center"><a class="link-light" href="https://docs.google.com/document/d/1d9DskhOHYdXe1tOryXsDJ7FnZlFDm10h14wL3hjb7KU/edit#heading=h.nyaqketnv8w3" Target="_blank">¿Dónde debo ubicar los períodos generados?</a></td>             
          </tr>
          <tr>
          <td class="text-center"><a class="link-light" href="https://docs.google.com/document/d/1d9DskhOHYdXe1tOryXsDJ7FnZlFDm10h14wL3hjb7KU/edit#heading=h.4lb4ori4n86v" Target="_blank">¿Que versión de las bitacoras debo descargar?</a></td>
          </tr>
          <tr>
           <td class="text-center"><a class="link-light"href="https://docs.google.com/document/d/1d9DskhOHYdXe1tOryXsDJ7FnZlFDm10h14wL3hjb7KU/edit#heading=h.pa4m68ud1x46" Target="_blank">¿Que nomenclatura debo usar para la entrega de las bitacoras?</a></td>
          </tr>
  </tbody>
  </table>
    </div>
     <!-- sugerencias-->
  </div> 

  <!-- script -->
  <script type="application/javascript">
     $(document).ready( function () {
     $('#cesar').DataTable();
     } );
 </script>
    </div>
  </div>
</div>


<p class="mt-5 mb-3 text-muted" style="text-align: center">&copy; Version 2.0</p>

  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./script.js"></script>
</body>
</html>
