<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="generator" content="Hugo 0.101.0">
    <title> Generador de períodos</title>
    <link rel="shortcut icon" href="assets/img/logosena.png">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="assets/css/style.css">

    <!-- bootstrap -->
<!-- CSS only -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

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
        <a href="index.php"> <img src="assets/img/logosena.png" class="rounded mx-auto d-block" style="width: 130px" alt=""> </a>
    </div>
    <br>
    <h1 class="text-center">SENA Centro Biotecnológico del Caribe</h1>
    <h4 class="text-center" style="color:rgb(59, 162, 65)">Seguimiento a Etapa Productiva</h4>
    <br>
    <h3 class="text-center">Generar períodos de Informes</h3>
    <br>
    
    <!-- TITULO -->

    <!-- form -->
    <form class="text-center" action="periodos.php" method="post">
        <div class="container">
        <div class="row justify-content-center">
            <div class="" style="width: auto;">      
                <span class="input-group-text" style="color: #3ba241;background-color: #34495e;">Ingrese fecha Inicio de Etapa Productiva</span>
                <input type="date" id="inicio" name="inicio" class="form-control" required><br>
            </div>
            <br>
            <div class=""style="width: auto;">      
                <span class="input-group-text" style="color: #3ba241;background-color: #34495e;" >Ingrese fecha final de Etapa Productiva</span>
                <input type="date" id="final" name="final" class="form-control" required ><br>
            </div>
        </div>
        <div>
            <input type="submit" class="btn btn-outline-success" value="Generar" >                                   
        </div>
    </form>
    <!-- form -->
    <br>
    <br>
    <br>
    <!-- Fecha de informe concertacion-->
    <div class="container" >
        <div class="row ">
            <div class="col">
                <h4 >Período informe concertación</h4> 
                <small>(F023-01)</small> <a href="assets/Informes/GFPI-F-023_Formato_Planeacion_seguimiento_y_evaluacion_etapa_productiva.docx" download="GFPI-F-023_Formato_Planeacion_seguimiento_y_evaluacion_etapa_productiva.docx" > Descargar formato</a>
                <table class="rwd-table2">
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
        <h4>Período informe parcial</h4>
        <small>(F023-02)</small> <a href="assets/Informes/GFPI-F-023_Formato_Planeacion_seguimiento_y_evaluacion_etapa_productiva.docx" download="GFPI-F-023_Formato_Planeacion_seguimiento_y_evaluacion_etapa_productiva.docx" > Descargar formato</a>
        <table id="cesar2" class="rwd-table2" >
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
        <h4>Período informe final</h4>
        <small>(F023-03)</small> <a href="assets/Informes/GFPI-F-023_Formato_Planeacion_seguimiento_y_evaluacion_etapa_productiva.docx" download="GFPI-F-023_Formato_Planeacion_seguimiento_y_evaluacion_etapa_productiva.docx" > Descargar formato</a>
        <table id="cesar2" class="rwd-table2" >
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
    <!-- Fecha de informe final -->
    <!-- bitacoras -->
    <div class="container ">
        <div class="row " style="text-align: left !important;">
            <div class="col">
                <h4 class="text-left">Período de bitácoras</h4>
                <small>(F147)</small> 
                <br>
                <a href="assets/Informes/GFPI-F-147_Bitácora_de_seguimiento_Etapa_productiva - V1.xlsx" download="GFPI-F-147_Bitácora_de_seguimiento_Etapa_productiva - V1.xlsx" > Descargar formato V1</a>
                <br>
                <a href="assets/Informes/GFPI-F-147_Formato_bitácora_etapa_productiva - V2.xlsx" download="GFPI-F-147_Formato_bitácora_etapa_productiva - V2.xlsx" > Descargar formato V2</a>
                <br>
                <table id="cesar" class="rwd-table" >
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
            <br>
            <!-- sugerencias -->
            <div class="col">
                <table id="cesar2" class="rwd-table3" >
                    <br><br><br><br><br>
                    <thead>
                        <tr>
                            <th class="text-center" style="font-size:19px">⚠️ DUDAS FRECUENTES ⚠️</th>                      
                        </tr>
                    </thead>
                    <tbody>
                            <tr>
                            <td class="text-center"><a class="text-light" href="https://docs.google.com/document/d/1d9DskhOHYdXe1tOryXsDJ7FnZlFDm10h14wL3hjb7KU/edit#heading=h.nyaqketnv8w3" Target="_blank">¿Dónde debo ubicar los períodos generados?</a></td>             
                            </tr>
                            <tr>
                            <td class="text-center"><a class="text-light" href="https://docs.google.com/document/d/1d9DskhOHYdXe1tOryXsDJ7FnZlFDm10h14wL3hjb7KU/edit#heading=h.4lb4ori4n86v" Target="_blank">¿Que versión de las bitacoras debo descargar?</a></td>
                            </tr>
                            <tr>
                            <td class="text-center"><a class="text-light"href="https://docs.google.com/document/d/1d9DskhOHYdXe1tOryXsDJ7FnZlFDm10h14wL3hjb7KU/edit#heading=h.pa4m68ud1x46" Target="_blank">¿Que nomenclatura debo usar para la entrega de las bitacoras?</a></td>
                            </tr>
                    </tbody>
                </table>
                <br><br>
                <a href="presentacion.html" Target="_blank"> <img src="assets/img/como-diligenciar-informes.png" class="img-thumbnail" alt="" style="width: 475px;" ></a>
            </div>
            <!-- sugerencias-->
        </div>
    </div>

    <p class="mt-5 mb-3 text-muted">&copy; Version 1.2</p>
    <!-- script -->
    <script type="application/javascript">
        $(document).ready( function () {
        $('#cesar').DataTable();
        } );
    </script>
    <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./script.js"></script>
</body>
</html>
