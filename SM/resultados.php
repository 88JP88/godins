
<!DOCTYPE html>
<html lang="es">
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!--Bootstrap CSS-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!--Bootstrap JS & Popper-->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
    crossorigin="anonymous"></script>
  <!--Stilos CSS-->
  <link rel="stylesheet" href="estilo.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cabin&family=Glass+Antiqua&family=Merriweather:wght@300&family=Noto+Sans+TC:wght@100&display=swap" rel="stylesheet">

<html>
<head>
<nav class="navbar navbar-expand-lg navbar-light navbar-dark">
  <div class="container-fluid">
    <img src="img/Logo_Nombre_Transparent.png" class="img" alt="logo">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
      <ul class="nav navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="#">Index</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <title>Procesador de CSV</title>
</head>
<body>
    <!--<h1>Subir archivo CSV</h1>
    <form method="post" enctype="multipart/form-data">
        <input type="file" name="csv_file" accept=".csv" required><br>
        <label>Fecha inicio:</label><br>
        <input type="datetime-local" name="fechaInicio" required><br>
        <label>Fecha final:</label><br>
        <input type="datetime-local" name="fechaFinal" required><br>
        <button type="submit" name="procesarCSV">Procesar CSV</button>
    </form>-->

    <div class="container marketing">
    <h1>Subir archivo CSV</h1>
        
<form method="post" enctype="multipart/form-data" class="row g-3">
  <div class="col-md-4">
 
    <div class="mb-3">
      <input type="file" name="csv_file" accept=".csv" required class="form-control" id="floatingInputGrid">
      <label for="floatingInputGrid"></label>
  </div>
  <!--<input type="file" name="csv_file" accept=".csv" required>-->
  </div>

    <div class="col-md-8">
    <label>Fecha inicio:</label>
    <input type="datetime-local" name="fechaInicio" required>
    <label>Fecha final:</label>
    <input type="datetime-local" name="fechaFinal" required>
    <label>Fecha final:</label>
    <input type="datetime-local" name="fechaInicioS" required>
    </div>


  <div class="col-12">
  
  </div>
 
  <div class="col-12">

    <button type="submit" class="btn btn-primary" name="procesarCSV">Procesar CSV</button>
  </div>
</form>
</div>




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['csv_file'])) {
    $file = $_FILES['csv_file'];
    $fechaInicioparam = $_POST['fechaInicio']; // Valor del campo "Fecha de inicio con hora"
    $fechaFinalparam = $_POST['fechaFinal']; // Valor del campo "Fecha final con hora"
    $fechaInicioparams = $_POST['fechaInicioS'];// Valor del campo "Fecha inicial con hora ultimo sprint"

    // Verifica si se ha subido un archivo
    if ($file['error'] === 0) {
        $csvFile = file_get_contents($file['tmp_name']);

        // Realiza la validación de los datos del CSV
        // Por ejemplo, puedes dividir las líneas del CSV y validar cada campo
$totalTicketsSuperHigh=0;
$totalTicketsHigh=0;
$totalTicketsMedium=0;
$totalTicketsLow=0;
$totalTicketsSuperLow=0;

$horasSHP=0;
$diasSHP=0;
$horasHP=0;
$diasHP=0;
$horasM=0;
$diasM=0;
$horasL=0;
$diasL=0;
$horasSL=0;
$diasSL=0;

$SHresolve=0;
$Hresolve=0;
$Mresolve=0;
$Lresolve=0;
$SLresolve=0;

$SHcurso=0;
$Hcurso=0;
$Mcurso=0;
$Lcurso=0;
$SLcurso=0;


$SHwsupport=0;
$Hwsupport=0;
$Mwsupport=0;
$Lwsupport=0;
$SLwsupport=0;


$SHwresponse=0;
$Hwresponse=0;
$Mwresponse=0;
$Lwresponse=0;
$SLwresponse=0;

$SHchecking=0;
$Hchecking=0;
$Mchecking=0;
$Lchecking=0;
$SLchecking=0;

$SHtesting=0;
$Htesting=0;
$Mtesting=0;
$Ltesting=0;
$SLtesting=0;

$SHsc=0;
$Hsc=0;
$Msc=0;
$Lsc=0;
$SLsc=0;







$totalTicketsSuperHighps=0;
$totalTicketsHighps=0;
$totalTicketsMediumps=0;
$totalTicketsLowps=0;
$totalTicketsSuperLowps=0;

$horasSHPps=0;
$diasSHPps=0;
$horasHPps=0;
$diasHPps=0;
$horasMps=0;
$diasMps=0;
$horasLps=0;
$diasLps=0;
$horasSLps=0;
$diasSLps=0;

$SHresolveps=0;
$Hresolveps=0;
$Mresolveps=0;
$Lresolveps=0;
$SLresolveps=0;

$SHcursops=0;
$Hcursops=0;
$Mcursops=0;
$Lcursops=0;
$SLcursops=0;


$SHwsupportps=0;
$Hwsupportps=0;
$Mwsupportps=0;
$Lwsupportps=0;
$SLwsupportps=0;


$SHwresponseps=0;
$Hwresponseps=0;
$Mwresponseps=0;
$Lwresponseps=0;
$SLwresponseps=0;

$SHcheckingps=0;
$Hcheckingps=0;
$Mcheckingps=0;
$Lcheckingps=0;
$SLcheckingps=0;

$SHtestingps=0;
$Htestingps=0;
$Mtestingps=0;
$Ltestingps=0;
$SLtestingps=0;

$SHscps=0;
$Hscps=0;
$Mscps=0;
$Lscps=0;
$SLscps=0;

        $csvRows = explode("\n", $csvFile);
        foreach ($csvRows as $row) {
            $fields = str_getcsv($row);

            // Realiza tus validaciones en los campos del CSV
            if (count($fields) === 5) {
                $clave = $fields[0];
                $prioridad = $fields[1];
                $estado = $fields[2];
                $fechaInicio = $fields[3];
                $fechaFinal = $fields[4];
                
                // Formatear fechas en el formato "dd/mm/yyyy hh:mm:ss" a "Y-m-d H:i:s"
                $dateInicio = DateTime::createFromFormat('d/m/Y H:i:s', $fechaInicio);
                $dateFinal = DateTime::createFromFormat('d/m/Y H:i:s', $fechaFinal);
                $dateFinal1 = new DateTime($fechaInicioparam);
                $dateFinal2 = new DateTime($fechaFinalparam);
                $dateInicios = new DateTime($fechaInicioparams);
                
                if ($dateInicio >= $dateFinal1 && $dateInicio <= $dateFinal2 ) {
                   
//verifica estado para calculo por fecha y hora
                    if($estado=="Resuelta"){

                        

// Calcular la diferencia en horas
$interval = $dateInicio->diff($dateFinal);
$horas = $interval->h + ($interval->i );

// Calcular la diferencia en días
$dias = $interval->days;



if ($dias < 1) {
    $diasDecimal = $horas / 24;
    if ($interval->i !== 0) {

        if ($prioridad=="Highest") {
            $totalTicketsSuperHigh++;
            $SHresolve++;
            $horasSHP=$horasSHP+number_format($horas, 2);
        $diasSHP=$diasSHP+number_format($diasDecimal, 2);
        }
        if ($prioridad=="High") {
            $totalTicketsHigh++;
            $Hresolve++;
            $horasHP=$horasHP+number_format($horas, 2);
        $diasHP=$diasHP+number_format($diasDecimal, 2);
        }
        if ($prioridad=="Medium") {
            $totalTicketsMedium++;
            $Mresolve++;
            $horasM=$horasM+number_format($horas, 2);
        $diasM=$diasM+number_format($diasDecimal, 2);
        }
        
        if ($prioridad=="Low") {
            $totalTicketsLow++;
            $Lresolve++;
            $horasL=$horasL+number_format($horas, 2);
        $diasL=$diasL+number_format($diasDecimal, 2);
        }
        if ($prioridad=="Lowest") {
            $totalTicketsSuperLow++;
            $SLresolve++;
            $horasSL=$horasSL+number_format($horas, 2);
        $diasSL=$diasSL+number_format($diasDecimal, 2);
        }
        
       
    } else {
        if ($prioridad=="Highest") {
            $totalTicketsSuperHigh++;
            $SHresolve++;
            $horasSHP=$horasSHP+$horas;
            $diasSHP=$diasSHP+number_format($diasDecimal, 2);
            
        }
        if ($prioridad=="High") {
            $totalTicketsHigh++;
            $Hresolve++;
            $horasHP=$horasHP+$horas;
            $diasHP=$diasHP+number_format($diasDecimal, 2);
        }
        if ($prioridad=="Medium") {
            $totalTicketsMedium++;
            $Mresolve++;
            $horasM=$horasM+$horas;
            $diasM=$diasM+number_format($diasDecimal, 2);
        }
        if ($prioridad=="Low") {
            $totalTicketsLow++;
            $Lresolve++;
            $horasL=$horasL+$horas;
            $diasL=$diasL+number_format($diasDecimal, 2);
        }
        if ($prioridad=="Lowest") {
            $totalTicketsSuperLow++;
            $SLresolve++;
            $horasSL=$horasSL+$horas;
            $diasSL=$diasSL+number_format($diasDecimal, 2);
        }
        
    }
    
    
} else {
    if ($interval->i !== 0) {
        if ($prioridad=="Highest") {
            $totalTicketsSuperHigh++;
            $SHresolve++;
        $horasSHP=$horasSHP+number_format($horas, 2);
        $diasSHP=$diasSHP+$dias;
            
        }
        if ($prioridad=="High") {
            $totalTicketsHigh++;
            $Hresolve++;
            $horasHP=$horasHP+number_format($horas, 2);
            $diasHP=$diasHP+$dias;
        }
        if ($prioridad=="Medium") {
            $totalTicketsMedium++;
            $Mresolve++;
            $horasM=$horasM+number_format($horas, 2);
            $diasM=$diasM+$dias;
        }
        if ($prioridad=="Low") {
            $totalTicketsLow++;
            $Lresolve++;
            $horasL=$horasL+number_format($horas, 2);
            $diasL=$diasL+$dias;
        }
        if ($prioridad=="Lowest") {
            $totalTicketsSuperLow++;
            $SLresolve++;
            $horasSL=$horasSL+number_format($horas, 2);
            $diasSL=$diasSL+$dias;
        }
    } else {
        if ($prioridad=="Highest") {
            $totalTicketsSuperHigh++;
            $SHresolve++;
      
            $horasSHP=$horasSHP+$horas;
            $diasSHP=$diasSHP+$dias;
            
        }
        if ($prioridad=="High") {
            $totalTicketsHigh++;
            $Hresolve++;
            $horasHP=$horasHP+$horas;
            $diasHP=$diasHP+$dias;
        }
        if ($prioridad=="Medium") {
            $totalTicketsMedium++;
            $Mresolve++;
            $horasM=$horasM+$horas;
            $diasM=$diasM+$dias;
        }
        if ($prioridad=="Low") {
            $totalTicketsLow++;
            $Lresolve++;
            $horasL=$horasL+$horas;
            $diasL=$diasL+$dias;
        }
        if ($prioridad=="Lowest") {
            $totalTicketsSuperLow++;
            $SLresolve++;
            $horasSL=$horasSL+$horas;
            $diasSL=$diasSL+$dias;
        }
    }
}
// Imprimir los resultados






                    }
                    else{
                        

// Calcular la diferencia en horas
$interval = $dateInicio->diff($dateFinal2);
$horas = $interval->h + ($interval->i );

// Calcular la diferencia en días
$dias = $interval->days;



if ($dias < 1) {
    $diasDecimal = $horas / 24;
    if ($interval->i !== 0) {

        if ($prioridad=="Highest") {

            $totalTicketsSuperHigh++;
            $horasSHP=$horasSHP+number_format($horas, 2);
        $diasSHP=$diasSHP+number_format($diasDecimal, 2);

        if($estado=="En curso"){
            $SHcurso++;

        }
        if($estado=="Waiting for Support"){
            $SHwsupport++;

        }
        if($estado=="Waiting for Response"){
            $SHwresponse++;

        }
        if($estado=="Checking"){
            $SHchecking++;

        }
        if($estado=="Pruebas"){
            $SHtesting++;

        }
        if($estado=="Scalation"){
            $SHsc++;

        }
        }
        if ($prioridad=="High") {
            $totalTicketsHigh++;
            $horasHP=$horasHP+number_format($horas, 2);
        $diasHP=$diasHP+number_format($diasDecimal, 2);
        if($estado=="En curso"){
            $Hcurso++;

        }
        if($estado=="Waiting for Support"){
            $Hwsupport++;

        }
        if($estado=="Waiting for Response"){
            $Hwresponse++;

        }
        if($estado=="Checking"){
            $Hchecking++;

        }
        if($estado=="Pruebas"){
            $Htesting++;

        }
        if($estado=="Scalation"){
            $Hsc++;

        }
        }
        if ($prioridad=="Medium") {
            $totalTicketsMedium++;
            
            $horasM=$horasM+number_format($horas, 2);
        $diasM=$diasM+number_format($diasDecimal, 2);
        if($estado=="En curso"){
            $Mcurso++;

        }
        if($estado=="Waiting for Support"){
            $Mwsupport++;

        }
        if($estado=="Waiting for Response"){
            $Mwresponse++;

        }
        if($estado=="Checking"){
            $Mchecking++;

        }
        if($estado=="Pruebas"){
            $Mtesting++;

        }
        if($estado=="Scalation"){
            $Msc++;

        }
        }
        
        if ($prioridad=="Low") {
            $totalTicketsLow++;
            
            $horasL=$horasL+number_format($horas, 2);
        $diasL=$diasL+number_format($diasDecimal, 2);
        if($estado=="En curso"){
            $Lcurso++;

        }
        if($estado=="Waiting for Support"){
            $Lwsupport++;

        }
        if($estado=="Waiting for Response"){
            $Lwresponse++;

        }
        if($estado=="Checking"){
            $Lchecking++;

        }
        if($estado=="Pruebas"){
            $Ltesting++;

        }
        if($estado=="Scalation"){
            $Lsc++;

        }
        }
        if ($prioridad=="Lowest") {
            $totalTicketsSuperLow++;
            
            $horasSL=$horasSL+number_format($horas, 2);
        $diasSL=$diasSL+number_format($diasDecimal, 2);
        if($estado=="En curso"){
            $SLcurso++;

        }
        if($estado=="Waiting for Support"){
            $SLwsupport++;

        }
        if($estado=="Waiting for Response"){
            $SLwresponse++;

        }
        if($estado=="Checking"){
            $SLchecking++;

        }
        if($estado=="Pruebas"){
            $SLtesting++;

        }
        if($estado=="Scalation"){
            $SLsc++;

        }
        }
        
       
    } else {
        if ($prioridad=="Highest") {
            $totalTicketsSuperHigh++;
            $horasSHP=$horasSHP+$horas;
            $diasSHP=$diasSHP+number_format($diasDecimal, 2);
            if($estado=="En curso"){
                $SHcurso++;
    
            }
            if($estado=="Waiting for Support"){
                $SHwsupport++;
    
            }
            if($estado=="Waiting for Response"){
                $SHwresponse++;
    
            }
            if($estado=="Checking"){
                $SHchecking++;
    
            }
            if($estado=="Pruebas"){
                $SHtesting++;
    
            }
            if($estado=="Scalation"){
                $SHsc++;
    
            }
        }
        if ($prioridad=="High") {
            $totalTicketsHigh++;
            $horasHP=$horasHP+$horas;
            $diasHP=$diasHP+number_format($diasDecimal, 2);
            if($estado=="En curso"){
                $Hcurso++;
    
            }
            if($estado=="Waiting for Support"){
                $Hwsupport++;
    
            }
            if($estado=="Waiting for Response"){
                $Hwresponse++;
    
            }
            if($estado=="Checking"){
                $Hchecking++;
    
            }
            if($estado=="Pruebas"){
                $Htesting++;
    
            }
            if($estado=="Scalation"){
                $Hsc++;
    
            }
        }
        if ($prioridad=="Medium") {
            $totalTicketsMedium++;
            
            $horasM=$horasM+$horas;
            $diasM=$diasM+number_format($diasDecimal, 2);
            if($estado=="En curso"){
                $Mcurso++;
    
            }
            if($estado=="Waiting for Support"){
                $Mwsupport++;
    
            }
            if($estado=="Waiting for Response"){
                $Mwresponse++;
    
            }
            if($estado=="Checking"){
                $Mchecking++;
    
            }
            if($estado=="Pruebas"){
                $Mtesting++;
    
            }
            if($estado=="Scalation"){
                $Msc++;
    
            }
        }
        if ($prioridad=="Low") {
            $totalTicketsLow++;
            
            $horasL=$horasL+$horas;
            $diasL=$diasL+number_format($diasDecimal, 2);
            if($estado=="En curso"){
                $Lcurso++;
    
            }
            if($estado=="Waiting for Support"){
                $Lwsupport++;
    
            }
            if($estado=="Waiting for Response"){
                $Lwresponse++;
    
            }
            if($estado=="Checking"){
                $Lchecking++;
    
            }
            if($estado=="Pruebas"){
                $Ltesting++;
    
            }
            if($estado=="Scalation"){
                $Lsc++;
    
            }
        }
        if ($prioridad=="Lowest") {
            $totalTicketsSuperLow++;
            
            $horasSL=$horasSL+$horas;
            $diasSL=$diasSL+number_format($diasDecimal, 2);
            if($estado=="En curso"){
                $SLcurso++;
    
            }
            if($estado=="Waiting for Support"){
                $SLwsupport++;
    
            }
            if($estado=="Waiting for Response"){
                $SLwresponse++;
    
            }
            if($estado=="Checking"){
                $SLchecking++;
    
            }
            if($estado=="Pruebas"){
                $SLtesting++;
    
            }
            if($estado=="Scalation"){
                $SLsc++;
    
            }
        }
        
    }
    
    
} else {
    if ($interval->i !== 0) {
        if ($prioridad=="Highest") {
            $totalTicketsSuperHigh++;
            
        $horasSHP=$horasSHP+number_format($horas, 2);
        $diasSHP=$diasSHP+$dias;
        if($estado=="En curso"){
            $SHcurso++;

        }
        if($estado=="Waiting for Support"){
            $SHwsupport++;

        }
        if($estado=="Waiting for Response"){
            $SHwresponse++;

        }
        if($estado=="Checking"){
            $SHchecking++;

        }
        if($estado=="Pruebas"){
            $SHtesting++;

        }
        if($estado=="Scalation"){
            $SHsc++;

        }
            
        }
        if ($prioridad=="High") {
            $totalTicketsHigh++;
            $horasHP=$horasHP+number_format($horas, 2);
            $diasHP=$diasHP+$dias;
            if($estado=="En curso"){
                $Hcurso++;
    
            }
            if($estado=="Waiting for Support"){
                $Hwsupport++;
    
            }
            if($estado=="Waiting for Response"){
                $Hwresponse++;
    
            }
            if($estado=="Checking"){
                $Hchecking++;
    
            }
            if($estado=="Pruebas"){
                $Htesting++;
    
            }
            if($estado=="Scalation"){
                $Hsc++;
    
            }
        }
        if ($prioridad=="Medium") {
            $totalTicketsMedium++;
            
            $horasM=$horasM+number_format($horas, 2);
            $diasM=$diasM+$dias;
            if($estado=="En curso"){
                $Mcurso++;
    
            }
            if($estado=="Waiting for Support"){
                $Mwsupport++;
    
            }
            if($estado=="Waiting for Response"){
                $Mwresponse++;
    
            }
            if($estado=="Checking"){
                $Mchecking++;
    
            }
            if($estado=="Pruebas"){
                $Mtesting++;
    
            }
            if($estado=="Scalation"){
                $Msc++;
    
            }
        }
        if ($prioridad=="Low") {
            $totalTicketsLow++;
            
            $horasL=$horasL+number_format($horas, 2);
            $diasL=$diasL+$dias;
            if($estado=="En curso"){
                $Lcurso++;
    
            }
            if($estado=="Waiting for Support"){
                $Lwsupport++;
    
            }
            if($estado=="Waiting for Response"){
                $Lwresponse++;
    
            }
            if($estado=="Checking"){
                $Lchecking++;
    
            }
            if($estado=="Pruebas"){
                $Ltesting++;
    
            }
            if($estado=="Scalation"){
                $Lsc++;
    
            }
        }
        if ($prioridad=="Lowest") {
            $totalTicketsSuperLow++;
            
            $horasSL=$horasSL+number_format($horas, 2);
            $diasSL=$diasSL+$dias;
            if($estado=="En curso"){
                $SLcurso++;
    
            }
            if($estado=="Waiting for Support"){
                $SLwsupport++;
    
            }
            if($estado=="Waiting for Response"){
                $SLwresponse++;
    
            }
            if($estado=="Checking"){
                $SLchecking++;
    
            }
            if($estado=="Pruebas"){
                $SLtesting++;
    
            }
            if($estado=="Scalation"){
                $SLsc++;
    
            }
        }
    } else {
        if ($prioridad=="Highest") {
            $totalTicketsSuperHigh++;
            
      
            $horasSHP=$horasSHP+$horas;
            $diasSHP=$diasSHP+$dias;
            if($estado=="En curso"){
                $SHcurso++;
    
            }
            if($estado=="Waiting for Support"){
                $SHwsupport++;
    
            }
            if($estado=="Waiting for Response"){
                $SHwresponse++;
    
            }
            if($estado=="Checking"){
                $SHchecking++;
    
            }
            if($estado=="Pruebas"){
                $SHtesting++;
    
            }
            if($estado=="Scalation"){
                $SHsc++;
    
            }
        }
        if ($prioridad=="High") {
            $totalTicketsHigh++;
            $horasHP=$horasHP+$horas;
            $diasHP=$diasHP+$dias;
            if($estado=="En curso"){
                $Hcurso++;
    
            }
            if($estado=="Waiting for Support"){
                $Hwsupport++;
    
            }
            if($estado=="Waiting for Response"){
                $Hwresponse++;
    
            }
            if($estado=="Checking"){
                $Hchecking++;
    
            }
            if($estado=="Pruebas"){
                $Htesting++;
    
            }
            if($estado=="Scalation"){
                $Hsc++;
    
            }
        }
        if ($prioridad=="Medium") {
            $totalTicketsMedium++;
            
            $horasM=$horasM+$horas;
            $diasM=$diasM+$dias;
            if($estado=="En curso"){
                $Mcurso++;
    
            }
            if($estado=="Waiting for Support"){
                $Mwsupport++;
    
            }
            if($estado=="Waiting for Response"){
                $Mwresponse++;
    
            }
            if($estado=="Checking"){
                $Mchecking++;
    
            }
            if($estado=="Pruebas"){
                $Mtesting++;
    
            }
            if($estado=="Scalation"){
                $Msc++;
    
            }
        }
        if ($prioridad=="Low") {
            $totalTicketsLow++;
            
            $horasL=$horasL+$horas;
            $diasL=$diasL+$dias;
            if($estado=="En curso"){
                $Lcurso++;
    
            }
            if($estado=="Waiting for Support"){
                $Lwsupport++;
    
            }
            if($estado=="Waiting for Response"){
                $Lwresponse++;
    
            }
            if($estado=="Checking"){
                $Lchecking++;
    
            }
            if($estado=="Pruebas"){
                $Ltesting++;
    
            }
            if($estado=="Scalation"){
                $Lsc++;
    
            }
        }
        if ($prioridad=="Lowest") {
            $totalTicketsSuperLow++;
            
            $horasSL=$horasSL+$horas;
            $diasSL=$diasSL+$dias;
            if($estado=="En curso"){
                $SLcurso++;
    
            }
            if($estado=="Waiting for Support"){
                $SLwsupport++;
    
            }
            if($estado=="Waiting for Response"){
                $SLwresponse++;
    
            }
            if($estado=="Checking"){
                $SLchecking++;
    
            }
            if($estado=="Pruebas"){
                $SLtesting++;
    
            }
            if($estado=="Scalation"){
                $SLsc++;
    
            }
        }
    }
}
// Imprimir los resultados





                    }

                    //verifica prioridad para conteo de tickets por prioridad
                   
                  
                  //  echo $clave ." ".$prioridad. " ".$estado. "<br>";
                   
                }
                



                //VALIDACIÓN SPRINT ANTERIOR
                if ($dateInicio >= $dateInicios && $dateInicio <= $dateFinal1 ) {


                   
//verifica estado para calculo por fecha y hora
if($estado=="Resuelta"){

                        

    // Calcular la diferencia en horas
    $interval = $dateInicio->diff($dateFinal);
    $horas = $interval->h + ($interval->i );
    
    // Calcular la diferencia en días
    $dias = $interval->days;
    
    
    
    if ($dias < 1) {
        $diasDecimal = $horas / 24;
        if ($interval->i !== 0) {
    
            if ($prioridad=="Highest") {
                $totalTicketsSuperHighps++;
                $SHresolveps++;
                $horasSHPps=$horasSHPps+number_format($horas, 2);
            $diasSHPps=$diasSHPps+number_format($diasDecimal, 2);
            }
            if ($prioridad=="High") {
                $totalTicketsHighps++;
                $Hresolveps++;
                $horasHPps=$horasHPps+number_format($horas, 2);
            $diasHPps=$diasHPps+number_format($diasDecimal, 2);
            }
            if ($prioridad=="Medium") {
                $totalTicketsMediumps++;
                $Mresolveps++;
                $horasMps=$horasMps+number_format($horas, 2);
            $diasMps=$diasMps+number_format($diasDecimal, 2);
            }
            
            if ($prioridad=="Low") {
                $totalTicketsLowps++;
                $Lresolveps++;
                $horasLps=$horasLps+number_format($horas, 2);
            $diasLps=$diasLps+number_format($diasDecimal, 2);
            }
            if ($prioridad=="Lowest") {
                $totalTicketsSuperLowps++;
                $SLresolveps++;
                $horasSLps=$horasSLps+number_format($horas, 2);
            $diasSLps=$diasSLps+number_format($diasDecimal, 2);
            }
            
           
        } else {
            if ($prioridad=="Highest") {
                $totalTicketsSuperHighps++;
                $SHresolveps++;
                $horasSHPps=$horasSHPps+$horas;
                $diasSHPps=$diasSHPps+number_format($diasDecimal, 2);
                
            }
            if ($prioridad=="High") {
                $totalTicketsHighps++;
                $Hresolveps++;
                $horasHPps=$horasHPps+$horas;
                $diasHP=$diasHP+number_format($diasDecimal, 2);
            }
            if ($prioridad=="Medium") {
                $totalTicketsMediumps++;
                $Mresolveps++;
                $horasMps=$horasMps+$horas;
                $diasMps=$diasMps+number_format($diasDecimal, 2);
            }
            if ($prioridad=="Low") {
                $totalTicketsLowps++;
                $Lresolveps++;
                $horasLps=$horasLps+$horas;
                $diasLps=$diasLps+number_format($diasDecimal, 2);
            }
            if ($prioridad=="Lowest") {
                $totalTicketsSuperLowps++;
                $SLresolveps++;
                $horasSLps=$horasSLps+$horas;
                $diasSLps=$diasSLps+number_format($diasDecimal, 2);
            }
            
        }
        
        
    } else {
        if ($interval->i !== 0) {
            if ($prioridad=="Highest") {
                $totalTicketsSuperHighps++;
                $SHresolveps++;
            $horasSHPps=$horasSHPps+number_format($horas, 2);
            $diasSHPps=$diasSHPps+$dias;
                
            }
            if ($prioridad=="High") {
                $totalTicketsHighps++;
                $Hresolveps++;
                $horasHPps=$horasHPps+number_format($horas, 2);
                $diasHPps=$diasHPps+$dias;
            }
            if ($prioridad=="Medium") {
                $totalTicketsMediumps++;
                $Mresolveps++;
                $horasMps=$horasMps+number_format($horas, 2);
                $diasMps=$diasMps+$dias;
            }
            if ($prioridad=="Low") {
                $totalTicketsLowps++;
                $Lresolveps++;
                $horasLps=$horasLps+number_format($horas, 2);
                $diasLps=$diasLps+$dias;
            }
            if ($prioridad=="Lowest") {
                $totalTicketsSuperLowps++;
                $SLresolveps++;
                $horasSLps=$horasSLps+number_format($horas, 2);
                $diasSLps=$diasSLps+$dias;
            }
        } else {
            if ($prioridad=="Highest") {
                $totalTicketsSuperHighps++;
                $SHresolveps++;
          
                $horasSHPps=$horasSHPps+$horas;
                $diasSHPps=$diasSHPps+$dias;
                
            }
            if ($prioridad=="High") {
                $totalTicketsHighps++;
                $Hresolveps++;
                $horasHPps=$horasHPps+$horas;
                $diasHPps=$diasHPps+$dias;
            }
            if ($prioridad=="Medium") {
                $totalTicketsMediumps++;
                $Mresolveps++;
                $horasMps=$horasMps+$horas;
                $diasMps=$diasMps+$dias;
            }
            if ($prioridad=="Low") {
                $totalTicketsLowps++;
                $Lresolveps++;
                $horasLps=$horasLps+$horas;
                $diasLps=$diasLps+$dias;
            }
            if ($prioridad=="Lowest") {
                $totalTicketsSuperLowps++;
                $SLresolveps++;
                $horasSLps=$horasSLps+$horas;
                $diasSLps=$diasSLps+$dias;
            }
        }
    }
    // Imprimir los resultados
    
    
    
    
    
    
                        }
                        else{
                            
    
    // Calcular la diferencia en horas
    $interval = $dateInicio->diff($dateFinal2);
    $horas = $interval->h + ($interval->i );
    
    // Calcular la diferencia en días
    $dias = $interval->days;
    
    
    
    if ($dias < 1) {
        $diasDecimal = $horas / 24;
        if ($interval->i !== 0) {
    
            if ($prioridad=="Highest") {
    
                $totalTicketsSuperHighps++;
                $horasSHPps=$horasSHPps+number_format($horas, 2);
            $diasSHPps=$diasSHPps+number_format($diasDecimal, 2);
    
            if($estado=="En curso"){
                $SHcursops++;
    
            }
            if($estado=="Waiting for Support"){
                $SHwsupportps++;
    
            }
            if($estado=="Waiting for Response"){
                $SHwresponseps++;
    
            }
            if($estado=="Checking"){
                $SHcheckingps++;
    
            }
            if($estado=="Pruebas"){
                $SHtestingps++;
    
            }
            if($estado=="Scalation"){
                $SHscps++;
    
            }
            }
            if ($prioridad=="High") {
                $totalTicketsHighps++;
                $horasHPps=$horasHPps+number_format($horas, 2);
            $diasHPps=$diasHPps+number_format($diasDecimal, 2);
            if($estado=="En curso"){
                $Hcursops++;
    
            }
            if($estado=="Waiting for Support"){
                $Hwsupportps++;
    
            }
            if($estado=="Waiting for Response"){
                $Hwresponseps++;
    
            }
            if($estado=="Checking"){
                $Hcheckingps++;
    
            }
            if($estado=="Pruebas"){
                $Htestingps++;
    
            }
            if($estado=="Scalation"){
                $Hscps++;
    
            }
            }
            if ($prioridad=="Medium") {
                $totalTicketsMediumps++;
                
                $horasMps=$horasMps+number_format($horas, 2);
            $diasMps=$diasMps+number_format($diasDecimal, 2);
            if($estado=="En curso"){
                $Mcursops++;
    
            }
            if($estado=="Waiting for Support"){
                $Mwsupportps++;
    
            }
            if($estado=="Waiting for Response"){
                $Mwresponseps++;
    
            }
            if($estado=="Checking"){
                $Mcheckingps++;
    
            }
            if($estado=="Pruebas"){
                $Mtestingps++;
    
            }
            if($estado=="Scalation"){
                $Mscps++;
    
            }
            }
            
            if ($prioridad=="Low") {
                $totalTicketsLowps++;
                
                $horasLps=$horasLps+number_format($horas, 2);
            $diasLps=$diasLps+number_format($diasDecimal, 2);
            if($estado=="En curso"){
                $Lcursops++;
    
            }
            if($estado=="Waiting for Support"){
                $Lwsupportps++;
    
            }
            if($estado=="Waiting for Response"){
                $Lwresponseps++;
    
            }
            if($estado=="Checking"){
                $Lcheckingps++;
    
            }
            if($estado=="Pruebas"){
                $Ltestingps++;
    
            }
            if($estado=="Scalation"){
                $Lscps++;
    
            }
            }
            if ($prioridad=="Lowest") {
                $totalTicketsSuperLowps++;
                
                $horasSLps=$horasSLps+number_format($horas, 2);
            $diasSLps=$diasSLps+number_format($diasDecimal, 2);
            if($estado=="En curso"){
                $SLcursops++;
    
            }
            if($estado=="Waiting for Support"){
                $SLwsupportps++;
    
            }
            if($estado=="Waiting for Response"){
                $SLwresponseps++;
    
            }
            if($estado=="Checking"){
                $SLcheckingps++;
    
            }
            if($estado=="Pruebas"){
                $SLtestingps++;
    
            }
            if($estado=="Scalation"){
                $SLscps++;
    
            }
            }
            
           
        } else {
            if ($prioridad=="Highest") {
                $totalTicketsSuperHighps++;
                $horasSHPps=$horasSHPps+$horas;
                $diasSHPps=$diasSHPps+number_format($diasDecimal, 2);
                if($estado=="En curso"){
                    $SHcursops++;
        
                }
                if($estado=="Waiting for Support"){
                    $SHwsupportps++;
        
                }
                if($estado=="Waiting for Response"){
                    $SHwresponseps++;
        
                }
                if($estado=="Checking"){
                    $SHcheckingps++;
        
                }
                if($estado=="Pruebas"){
                    $SHtestingps++;
        
                }
                if($estado=="Scalation"){
                    $SHscps++;
        
                }
            }
            if ($prioridad=="High") {
                $totalTicketsHighps++;
                $horasHPps=$horasHPps+$horas;
                $diasHPps=$diasHPps+number_format($diasDecimal, 2);
                if($estado=="En curso"){
                    $Hcursops++;
        
                }
                if($estado=="Waiting for Support"){
                    $Hwsupportps++;
        
                }
                if($estado=="Waiting for Response"){
                    $Hwresponseps++;
        
                }
                if($estado=="Checking"){
                    $Hcheckingps++;
        
                }
                if($estado=="Pruebas"){
                    $Htestingps++;
        
                }
                if($estado=="Scalation"){
                    $Hscps++;
        
                }
            }
            if ($prioridad=="Medium") {
                $totalTicketsMediumps++;
                
                $horasMps=$horasMps+$horas;
                $diasMps=$diasMps+number_format($diasDecimal, 2);
                if($estado=="En curso"){
                    $Mcursops++;
        
                }
                if($estado=="Waiting for Support"){
                    $Mwsupportps++;
        
                }
                if($estado=="Waiting for Response"){
                    $Mwresponseps++;
        
                }
                if($estado=="Checking"){
                    $Mcheckingps++;
        
                }
                if($estado=="Pruebas"){
                    $Mtestingps++;
        
                }
                if($estado=="Scalation"){
                    $Mscps++;
        
                }
            }
            if ($prioridad=="Low") {
                $totalTicketsLowps++;
                
                $horasLps=$horasLps+$horas;
                $diasLps=$diasLps+number_format($diasDecimal, 2);
                if($estado=="En curso"){
                    $Lcursops++;
        
                }
                if($estado=="Waiting for Support"){
                    $Lwsupportps++;
        
                }
                if($estado=="Waiting for Response"){
                    $Lwresponseps++;
        
                }
                if($estado=="Checking"){
                    $Lcheckingps++;
        
                }
                if($estado=="Pruebas"){
                    $Ltestingps++;
        
                }
                if($estado=="Scalation"){
                    $Lscps++;
        
                }
            }
            if ($prioridad=="Lowest") {
                $totalTicketsSuperLowps++;
                
                $horasSLps=$horasSLps+$horas;
                $diasSLps=$diasSLps+number_format($diasDecimal, 2);
                if($estado=="En curso"){
                    $SLcursops++;
        
                }
                if($estado=="Waiting for Support"){
                    $SLwsupportps++;
        
                }
                if($estado=="Waiting for Response"){
                    $SLwresponseps++;
        
                }
                if($estado=="Checking"){
                    $SLcheckingps++;
        
                }
                if($estado=="Pruebas"){
                    $SLtestingps++;
        
                }
                if($estado=="Scalation"){
                    $SLscps++;
        
                }
            }
            
        }
        
        
    } else {
        if ($interval->i !== 0) {
            if ($prioridad=="Highest") {
                $totalTicketsSuperHighps++;
                
            $horasSHPps=$horasSHPps+number_format($horas, 2);
            $diasSHPps=$diasSHPps+$dias;
            if($estado=="En curso"){
                $SHcursops++;
    
            }
            if($estado=="Waiting for Support"){
                $SHwsupportps++;
    
            }
            if($estado=="Waiting for Response"){
                $SHwresponseps++;
    
            }
            if($estado=="Checking"){
                $SHcheckingps++;
    
            }
            if($estado=="Pruebas"){
                $SHtestingps++;
    
            }
            if($estado=="Scalation"){
                $SHscps++;
    
            }
                
            }
            if ($prioridad=="High") {
                $totalTicketsHighps++;
                $horasHPps=$horasHPps+number_format($horas, 2);
                $diasHPps=$diasHPps+$dias;
                if($estado=="En curso"){
                    $Hcursops++;
        
                }
                if($estado=="Waiting for Support"){
                    $Hwsupportps++;
        
                }
                if($estado=="Waiting for Response"){
                    $Hwresponseps++;
        
                }
                if($estado=="Checking"){
                    $Hcheckingps++;
        
                }
                if($estado=="Pruebas"){
                    $Htestingps++;
        
                }
                if($estado=="Scalation"){
                    $Hscps++;
        
                }
            }
            if ($prioridad=="Medium") {
                $totalTicketsMediumps++;
                
                $horasMps=$horasMps+number_format($horas, 2);
                $diasMps=$diasMps+$dias;
                if($estado=="En curso"){
                    $Mcursops++;
        
                }
                if($estado=="Waiting for Support"){
                    $Mwsupportps++;
        
                }
                if($estado=="Waiting for Response"){
                    $Mwresponseps++;
        
                }
                if($estado=="Checking"){
                    $Mcheckingps++;
        
                }
                if($estado=="Pruebas"){
                    $Mtestingps++;
        
                }
                if($estado=="Scalation"){
                    $Mscps++;
        
                }
            }
            if ($prioridad=="Low") {
                $totalTicketsLowps++;
                
                $horasLps=$horasLps+number_format($horas, 2);
                $diasLps=$diasLps+$dias;
                if($estado=="En curso"){
                    $Lcursops++;
        
                }
                if($estado=="Waiting for Support"){
                    $Lwsupportps++;
        
                }
                if($estado=="Waiting for Response"){
                    $Lwresponseps++;
        
                }
                if($estado=="Checking"){
                    $Lcheckingps++;
        
                }
                if($estado=="Pruebas"){
                    $Ltestingps++;
        
                }
                if($estado=="Scalation"){
                    $Lscps++;
        
                }
            }
            if ($prioridad=="Lowest") {
                $totalTicketsSuperLowps++;
                
                $horasSLps=$horasSLps+number_format($horas, 2);
                $diasSLps=$diasSLps+$dias;
                if($estado=="En curso"){
                    $SLcursops++;
        
                }
                if($estado=="Waiting for Support"){
                    $SLwsupportps++;
        
                }
                if($estado=="Waiting for Response"){
                    $SLwresponseps++;
        
                }
                if($estado=="Checking"){
                    $SLcheckingps++;
        
                }
                if($estado=="Pruebas"){
                    $SLtestingps++;
        
                }
                if($estado=="Scalation"){
                    $SLscps++;
        
                }
            }
        } else {
            if ($prioridad=="Highest") {
                $totalTicketsSuperHighps++;
                
          
                $horasSHPps=$horasSHPps+$horas;
                $diasSHPps=$diasSHPps+$dias;
                if($estado=="En curso"){
                    $SHcursops++;
        
                }
                if($estado=="Waiting for Support"){
                    $SHwsupportps++;
        
                }
                if($estado=="Waiting for Response"){
                    $SHwresponseps++;
        
                }
                if($estado=="Checking"){
                    $SHcheckingps++;
        
                }
                if($estado=="Pruebas"){
                    $SHtestingps++;
        
                }
                if($estado=="Scalation"){
                    $SHscps++;
        
                }
            }
            if ($prioridad=="High") {
                $totalTicketsHighps++;
                $horasHPps=$horasHPps+$horas;
                $diasHPps=$diasHPps+$dias;
                if($estado=="En curso"){
                    $Hcursops++;
        
                }
                if($estado=="Waiting for Support"){
                    $Hwsupportps++;
        
                }
                if($estado=="Waiting for Response"){
                    $Hwresponseps++;
        
                }
                if($estado=="Checking"){
                    $Hcheckingps++;
        
                }
                if($estado=="Pruebas"){
                    $Htestingps++;
        
                }
                if($estado=="Scalation"){
                    $Hscps++;
        
                }
            }
            if ($prioridad=="Medium") {
                $totalTicketsMediumps++;
                
                $horasMps=$horasMps+$horas;
                $diasMps=$diasMps+$dias;
                if($estado=="En curso"){
                    $Mcursops++;
        
                }
                if($estado=="Waiting for Support"){
                    $Mwsupportps++;
        
                }
                if($estado=="Waiting for Response"){
                    $Mwresponseps++;
        
                }
                if($estado=="Checking"){
                    $Mcheckingps++;
        
                }
                if($estado=="Pruebas"){
                    $Mtestingps++;
        
                }
                if($estado=="Scalation"){
                    $Mscps++;
        
                }
            }
            if ($prioridad=="Low") {
                $totalTicketsLowps++;
                
                $horasLps=$horasLps+$horas;
                $diasLps=$diasLps+$dias;
                if($estado=="En curso"){
                    $Lcursops++;
        
                }
                if($estado=="Waiting for Support"){
                    $Lwsupportps++;
        
                }
                if($estado=="Waiting for Response"){
                    $Lwresponseps++;
        
                }
                if($estado=="Checking"){
                    $Lcheckingps++;
        
                }
                if($estado=="Pruebas"){
                    $Ltestingps++;
        
                }
                if($estado=="Scalation"){
                    $Lscps++;
        
                }
            }
            if ($prioridad=="Lowest") {
                $totalTicketsSuperLowps++;
                
                $horasSLps=$horasSLps+$horas;
                $diasSLps=$diasSLps+$dias;
                if($estado=="En curso"){
                    $SLcursops++;
        
                }
                if($estado=="Waiting for Support"){
                    $SLwsupportps++;
        
                }
                if($estado=="Waiting for Response"){
                    $SLwresponseps++;
        
                }
                if($estado=="Checking"){
                    $SLcheckingps++;
        
                }
                if($estado=="Pruebas"){
                    $SLtestingps++;
        
                }
                if($estado=="Scalation"){
                    $SLscps++;
        
                }
            }
        }
    }
    // Imprimir los resultados
    
    
    
    
    
                        }
    
                        //verifica prioridad para conteo de tickets por prioridad
                       
                      
                      //  echo $clave ." ".$prioridad. " ".$estado. "<br>";




                 // echo "<br>".$clave;
                }
                
               

                // Realiza validaciones adicionales si es necesario
                // ...

                // Guarda o procesa los datos según tus necesidades
            }
        }



        //foreach



$resolveSHCF=0;
$resolveHCF=0;
$resolveMCF=0;
$resolveLCF=0;
$resolveSLCF=0;



        foreach ($csvRows as $row) {
            $fields = str_getcsv($row);

            // Realiza tus validaciones en los campos del CSV
            if (count($fields) === 5) {
                $clave = $fields[0];
                $prioridad = $fields[1];
                $estado = $fields[2];
                $fechaInicio = $fields[3];
                $fechaFinal = $fields[4];
                
                // Formatear fechas en el formato "dd/mm/yyyy hh:mm:ss" a "Y-m-d H:i:s"
                $dateInicio = DateTime::createFromFormat('d/m/Y H:i:s', $fechaInicio);
                $dateFinal = DateTime::createFromFormat('d/m/Y H:i:s', $fechaFinal);
                $dateFinal1 = new DateTime($fechaInicioparam);
                $dateFinal2 = new DateTime($fechaFinalparam);
                $dateInicios = new DateTime($fechaInicioparams);

                if($estado=="Resuelta"){
                
                    if($dateFinal>=$dateFinal1 && $dateInicio< $dateFinal1){
                        if($prioridad=="Highest"){
                            $resolveSHCF++;
                                }
                                if($prioridad=="High"){
                                    $resolveHCF++;
                                    
                                        }
                                        if($prioridad=="Medium"){
                                            $resolveMCF++;
                                            
                                                }
                                                if($prioridad=="Low"){
                                                    $resolveLCF++;
                                                        }
                                                        if($prioridad=="Lowest"){
                                                            $resolveSLCF++;
                                                                }
                
                    }
                }
                else{


                }

            }
        }






        //DESDE EL INICIO DE LOS TIEMPOS


       



        // Si las validaciones son exitosas, puedes guardar o procesar los datos del CSV
        // ...
    $sumatoria=$totalTicketsSuperHigh+$totalTicketsHigh+$totalTicketsMedium+$totalTicketsLow+$totalTicketsSuperLow;
    
    $sumatoriahoras=$horasSHP+$horasHP+$horasM+$horasL+$horasSL;
    $sumatoriadias=$diasSHP+$diasHP+$diasM+$diasL+$diasSL;
    $sumatoriaresolve=$SHresolve+$Hresolve+$Mresolve+$Lresolve+$SLresolve;
    
    $porcentajetotal = $sumatoria ? ($sumatoriaresolve / $sumatoria) * 100 : 0;
    $porcentajetotalSH = $totalTicketsSuperHigh ? ($SHresolve / $totalTicketsSuperHigh) * 100 : 0;
    $porcentajetotalH = $totalTicketsHigh ? ($Hresolve / $totalTicketsHigh) * 100 : 0;
    $porcentajetotalM = $totalTicketsMedium ? ($Mresolve / $totalTicketsMedium) * 100 : 0;
    $porcentajetotalL = $totalTicketsLow ? ($Lresolve / $totalTicketsLow) * 100 : 0;
    $porcentajetotalSL = $totalTicketsSuperLow ? ($SLresolve / $totalTicketsSuperLow) * 100 : 0;
    

    $totalCurso=$SHcurso+$Hcurso+$Mcurso+$Lcurso+$SLcurso;
    $totalWsupport=$SHwsupport+$Hwsupport+$Mwsupport+$Lwsupport+$SLwsupport;
    $totalWresponse=$SHwresponse+$Hwresponse+$Mwresponse+$Lwresponse+$SLwresponse;
    $totalChecking=$SHchecking+$Hchecking+$Mchecking+$Lchecking+$SLchecking;
    $totalTesting=$SHtesting+$Htesting+$Mtesting+$Ltesting+$SLtesting;
    $totalSc=$SHsc+$Hsc+$Msc+$Lsc+$SLsc;

    $porcentajetotalEscalados = ($sumatoria != 0) ? ($totalSc / $sumatoria) * 100 : 0;

    $porcentajetotalEncurso = ($sumatoria != 0) ? ($totalCurso / $sumatoria) * 100 : 0;
    
    $porcentajetotalWsupport = ($sumatoria != 0) ? ($totalWsupport / $sumatoria) * 100 : 0;
    
    $porcentajetotalWresponse = ($sumatoria != 0) ? ($totalWresponse / $sumatoria) * 100 : 0;
    
    $porcentajetotalChecking = ($sumatoria != 0) ? ($totalChecking / $sumatoria) * 100 : 0;
    
    $porcentajetotalTesting = ($sumatoria != 0) ? ($totalTesting / $sumatoria) * 100 : 0;
    
    


        echo    '<table div class="container text-center">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
          <div class="col">Column</div>
          <div class="col">Column</div>
          <div class="col">Column</div>
          <div class="col">Column</div>
        </div>
      </div>
      /<table>';
      echo "<H2>SPRINT ACTUAL</H2>";

//grilla----
    echo '<table border-collapse: collapse; border: 1px solid #000;" div class="container text-center">
    <tr>
    <th style="border: 1px solid #000;"> Prioridad </th>
    <th style="border: 1px solid #000;">Horas totales</th>
    <th style="border: 1px solid #000;">Días promedio</th>
    <th style="border: 1px solid #000;">Qty</th>
    <th style="border: 1px solid #000;">Resueltas</th>
    <th style="border: 1px solid #000;">En curso</th>
    <th style="border: 1px solid #000;">Espera soporte</th>
    <th style="border: 1px solid #000;">Espera respuesta</th>
    <th style="border: 1px solid #000;">Verificando</th>
    <th style="border: 1px solid #000;">Testeando</th>
    <th style="border: 1px solid #000;">Escalado</th>
</tr>
        <tr style="border: 1px solid #000;"> 
            <td style="background-color: #e6bb67; border: 1px solid  #000;">Highest</td>
            <td>' . $horasSHP . '</td>
            <td style="border: 1px solid #000;">' . (($totalTicketsSuperHigh !== 0) ? ($diasSHP / $totalTicketsSuperHigh) : 0) . '</td>
            <td>' . $totalTicketsSuperHigh . '</td>
            <td style="border: 1px solid #000;"><b>' . $SHresolve . '</b> -> (' . $porcentajetotalSH . '%)</td>
            
            <td>' . $SHcurso . '</td>
            <td style="border: 1px solid #000;">' . $SHwsupport . '</td>
            <td>' . $SHwresponse . '</td>
            <td style="border: 1px solid #000;">' . $SHchecking . '</td>
            <td>' . $SHtesting . '</td>
            <td style="border: 1px solid #000;">' . $SHsc . '</td>
        </tr>
        <tr style="border: 1px solid #000;">
            <td style="background-color: #e6bb67; border: 1px solid #000;">High</td>
            <td>' . $horasHP . '</td>
            <td style="border: 1px solid #000;">' . ($diasHP / $totalTicketsHigh) . '</td>
            <td>' . $totalTicketsHigh . '</td>
            <td style="border: 1px solid #000;"><b>' . $Hresolve . '</b> -> (' . $porcentajetotalH . '%)</td>
          
            <td>' . $Hcurso . '</td>
            <td style="border: 1px solid #000;">' . $Hwsupport . '</td>
            <td>' . $Hwresponse . '</td>
            
            <td style="border: 1px solid #000;">' . $Hchecking . '</td>
            <td>' . $Htesting . '</td>
            <td style="border: 1px solid #000;">' . $Hsc . '</td>
        </tr>
        <tr style="border: 1px solid #000;">
            <td style="background-color: #e6bb67; border: 1px solid #000;">Medium</td>
            <td>' . $horasM . '</td>
            <td style="border: 1px solid #000;">' . ($diasM / $totalTicketsMedium) . '</td>
            <td>' . $totalTicketsMedium . '</td>
            <td style="border: 1px solid #000;"><b>' . $Mresolve . '</b> -> (' . $porcentajetotalM . '%)</td>
            
            <td>' . $Mcurso . '</td>
            <td style="border: 1px solid #000;">' . $Mwsupport . '</td>
            <td>' . $Mwresponse . '</td>
            
            <td style="border: 1px solid #000;">' . $Mchecking . '</td>
            <td>' . $Mtesting . '</td>
            <td style="border: 1px solid #000;">' . $Msc . '</td>
        </tr>
        <tr style="border: 1px solid #000;">
            <td style="background-color: #e6bb67; border: 1px solid #000;">Low</td>
            <td>' . $horasL . '</td>
            <td style="border: 1px solid #000;">' . ($diasL / $totalTicketsLow) . '</td>
            <td>' . $totalTicketsLow . '</td>
            <td style="border: 1px solid #000;"><b>' . $Lresolve . '</b> -> (' . $porcentajetotalL . '%)</td>
            
            <td>' . $Lcurso . '</td>
            <td style="border: 1px solid #000;">' . $Lwsupport . '</td>
            <td>' . $Lwresponse . '</td>
            
            <td style="border: 1px solid #000;">' . $Lchecking . '</td>
            <td>' . $Ltesting . '</td>
            <td style="border: 1px solid #000;">' . $Lsc . '</td>
        </tr>
        <tr style="border: 1px solid #000;">
            <td style="background-color: #e6bb67; border: 1px solid #000;">Lowest</td>
            <td>' . $horasSL . '</td>
            <td style="border: 1px solid #000;">' . (($totalTicketsSuperLow !== 0) ? ($diasSL / $totalTicketsSuperLow) : 0) . '</td>

            <td>' . $totalTicketsSuperLow . '</td>
            <td style="border: 1px solid #000;"><b>' . $SLresolve . '</b> -> (' . $porcentajetotalSL . '%)</td>
            
            <td>' . $SLcurso . '</td>
            <td style="border: 1px solid #000;">' . $SLwsupport . '</td>
            <td>' . $SLwresponse . '</td>
            
            <td style="border: 1px solid #000;">' . $SLchecking . '</td>
            <td>' . $SLtesting . '</td>
            <td style="border: 1px solid #000;">' . $SLsc . '</td>
        </tr>
        <tr style="border: 1px solid #000;">
        <td style="background-color: #3e5cc6; border: 1px solid #000;"><h3>Total</h3></td>
        <td>' . $sumatoriahoras . '</td>
        <td style="border: 1px solid #000;">' . ($sumatoriadias / $sumatoria) . '</td>
        <td><h3><b>' . $sumatoria . '</b></h3></td>
        <td style="border: 1px solid #000;"><b>' . $sumatoriaresolve . '</b> -> (' . $porcentajetotal . '%)</td>
     
        <td><b>' . $totalCurso . '</b> -> (' . $porcentajetotalEncurso . '%)</td>
        <td style="border: 1px solid #000;"><b>' . $totalWsupport . '</b> -> (' . $porcentajetotalWsupport . '%)</td>
        <td><b>' . $totalWresponse . '</b> -> (' . $porcentajetotalWresponse . '%)</td>
        <td style="border: 1px solid #000;"><b>' . $totalChecking . '</b> -> (' . $porcentajetotalChecking . '%)</td>
        <td><b>' . $totalTesting . '</b> -> (' . $porcentajetotalTesting . '%)</td>
        <td style="border: 1px solid #000;"><b>' . $totalSc . '</b> -> (' . $porcentajetotalEscalados . '%)</td>
    </tr>

        
    </table><br><br>';










    $sumatoriaps=$totalTicketsSuperHighps+$totalTicketsHighps+$totalTicketsMediumps+$totalTicketsLowps+$totalTicketsSuperLowps;
    
    $sumatoriahorasps=$horasSHPps+$horasHPps+$horasMps+$horasLps+$horasSLps;
    $sumatoriadiasps=$diasSHPps+$diasHPps+$diasMps+$diasLps+$diasSLps;
    $sumatoriaresolveps=$SHresolveps+$Hresolveps+$Mresolveps+$Lresolveps+$SLresolveps;
    
    $porcentajetotalps = $sumatoriaps ? ($sumatoriaresolveps / $sumatoriaps) * 100 : 0;
    $porcentajetotalSHps = $totalTicketsSuperHighps ? ($SHresolveps / $totalTicketsSuperHighps) * 100 : 0;
    $porcentajetotalHps = $totalTicketsHighps ? ($Hresolveps / $totalTicketsHighps) * 100 : 0;
    $porcentajetotalMps = $totalTicketsMediumps ? ($Mresolveps / $totalTicketsMediumps) * 100 : 0;
    $porcentajetotalLps = $totalTicketsLowps ? ($Lresolveps / $totalTicketsLowps) * 100 : 0;
    $porcentajetotalSLps = $totalTicketsSuperLowps ? ($SLresolveps / $totalTicketsSuperLowps) * 100 : 0;
    

    $totalCursops=$SHcursops+$Hcursops+$Mcursops+$Lcursops+$SLcursops;
    $totalWsupportps=$SHwsupportps+$Hwsupportps+$Mwsupportps+$Lwsupportps+$SLwsupportps;
    $totalWresponseps=$SHwresponseps+$Hwresponseps+$Mwresponseps+$Lwresponseps+$SLwresponseps;
    $totalCheckingps=$SHcheckingps+$Hcheckingps+$Mcheckingps+$Lcheckingps+$SLcheckingps;
    $totalTestingps=$SHtestingps+$Htestingps+$Mtestingps+$Ltestingps+$SLtestingps;
    $totalScps=$SHscps+$Hscps+$Mscps+$Lscps+$SLscps;

    $porcentajetotalEscaladosps = ($sumatoriaps != 0) ? ($totalScps / $sumatoriaps) * 100 : 0;

    $porcentajetotalEncursops = ($sumatoriaps != 0) ? ($totalCursops / $sumatoriaps) * 100 : 0;
    
    $porcentajetotalWsupportps = ($sumatoriaps != 0) ? ($totalWsupportps / $sumatoriaps) * 100 : 0;
    
    $porcentajetotalWresponseps = ($sumatoriaps != 0) ? ($totalWresponseps / $sumatoriaps) * 100 : 0;
    
    $porcentajetotalCheckingps = ($sumatoriaps != 0) ? ($totalCheckingps / $sumatoriaps) * 100 : 0;
    
    $porcentajetotalTestingps = ($sumatoriaps != 0) ? ($totalTestingps / $sumatoriaps) * 100 : 0;
    

echo "<H2>SPRINT ANTERIOR</H2>";


    echo '<table style="background-color: #3b5ac6; color: #000; border-collapse: collapse; border: 1px solid #000;"  div class="container text-center">
    <tr>
    <th style="border: 1px solid #000;"> Prioridad </th>
    <th style="border: 1px solid #000;">Horas totales</th>
    <th style="border: 1px solid #000;">Días promedio</th>
    <th style="border: 1px solid #000;">Qty</th>
    <th style="border: 1px solid #000;">Resueltas</th>
    <th style="border: 1px solid #000;">En curso</th>
    <th style="border: 1px solid #000;">Espera soporte</th>
    <th style="border: 1px solid #000;">Espera respuesta</th>
    <th style="border: 1px solid #000;">Verificando</th>
    <th style="border: 1px solid #000;">Testeando</th>
    <th style="border: 1px solid #000;">Escalado</th>
</tr>
        <tr style="border: 1px solid #000;">
            <td style="background-color: #e6bb67; border: 1px solid  #000;">Highest</td>
            <td>' . $horasSHPps . '</td>
            <td style="border: 1px solid #000;">' . (($totalTicketsSuperHighps !== 0) ? ($diasSHPps / $totalTicketsSuperHighps) : 0)  . '</td>
            <td>' . $totalTicketsSuperHighps . '</td>
            <td style="border: 1px solid #000;"><b>' . $SHresolveps . '</b> -> (' . $porcentajetotalSHps . '%)</td>
            
            <td>' . $SHcursops . '</td>
            <td style="border: 1px solid #000;">' . $SHwsupportps . '</td>
            <td>' . $SHwresponseps . '</td>
            <td style="border: 1px solid #000;">' . $SHcheckingps . '</td>
            <td>' . $SHtestingps . '</td>
            <td style="border: 1px solid #000;">' . $SHscps . '</td>
        </tr>
        <tr style="border: 1px solid #000;">
            <td style="background-color: #e6bb67; border: 1px solid  #000;">High</td>
            <td>' . $horasHPps . '</td>
            <td style="border: 1px solid #000;">' . ($diasHPps / $totalTicketsHighps) . '</td>
            <td>' . $totalTicketsHighps . '</td>
            <td style="border: 1px solid #000;"><b>' . $Hresolveps . '</b> -> (' . $porcentajetotalHps . '%)</td>
          
            <td>' . $Hcursops . '</td>
            <td style="border: 1px solid #000;">' . $Hwsupportps . '</td>
            <td>' . $Hwresponseps . '</td>
            
            <td style="border: 1px solid #000;">' . $Hcheckingps . '</td>
            <td>' . $Htestingps . '</td>
            <td style="border: 1px solid #000;">' . $Hscps . '</td>
        </tr>
        <tr style="border: 1px solid #000;">
            <td style="background-color: #e6bb67; border: 1px solid  #000;">Medium</td>
            <td>' . $horasMps . '</td>
            <td style="border: 1px solid #000;">' . ($diasMps / $totalTicketsMediumps) . '</td>
            <td>' . $totalTicketsMediumps . '</td>
            <td style="border: 1px solid #000;"><b>' . $Mresolveps . '</b> -> (' . $porcentajetotalMps . '%)</td>
            
            <td>' . $Mcursops . '</td>
            <td style="border: 1px solid #000;">' . $Mwsupportps . '</td>
            <td>' . $Mwresponseps . '</td>
            
            <td style="border: 1px solid #000;">' . $Mcheckingps . '</td>
            <td>' . $Mtestingps . '</td>
            <td style="border: 1px solid #000;">' . $Mscps . '</td>
        </tr>
        <tr style="border: 1px solid #000;">
            <td style="background-color: #e6bb67; border: 1px solid  #000;">Low</td>
            <td>' . $horasLps . '</td>
            <td style="border: 1px solid #000;">' . ($diasLps / $totalTicketsLowps) . '</td>
            <td>' . $totalTicketsLowps . '</td>
            <td style="border: 1px solid #000;"><b>' . $Lresolveps . '</b> -> (' . $porcentajetotalLps . '%)</td>
            
            <td>' . $Lcursops . '</td>
            <td style="border: 1px solid #000;">' . $Lwsupportps . '</td>
            <td>' . $Lwresponseps . '</td>
            
            <td style="border: 1px solid #000;">' . $Lcheckingps . '</td>
            <td>' . $Ltestingps . '</td>
            <td style="border: 1px solid #000;">' . $Lscps . '</td>
        </tr>
        <tr style="border: 1px solid #000;">
            <td style="background-color: #e6bb67; border: 1px solid  #000;">Lowest</td>
            <td>' . $horasSLps . '</td>
            <td style="border: 1px solid #000;">' . (($totalTicketsSuperLowps !== 0) ? ($diasSLps / $totalTicketsSuperLowps) : 0) . '</td>

            <td>' . $totalTicketsSuperLowps . '</td>
            <td style="border: 1px solid #000;"><b>' . $SLresolveps . '</b> -> (' . $porcentajetotalSLps . '%)</td>
            
            <td>' . $SLcursops . '</td>
            <td style="border: 1px solid #000;">' . $SLwsupportps . '</td>
            <td>' . $SLwresponseps . '</td>
            
            <td style="border: 1px solid #000;">' . $SLcheckingps . '</td>
            <td>' . $SLtestingps . '</td>
            <td style="border: 1px solid #000;">' . $SLscps . '</td>
        </tr>
        <tr style="border: 1px solid #000;">
        <td style="background-color: #3e5cc6; border: 1px solid #000;"><h3>Total</h3></td>
        <td>' . $sumatoriahorasps . '</td>
        <td style="border: 1px solid #000;">' . ($sumatoriadiasps / $sumatoriaps) . '</td>
        <td><h3><b>' . $sumatoriaps . '</b></h3></td>
        <td style="border: 1px solid #000;"><b>' . $sumatoriaresolveps . '</b> -> (' . $porcentajetotalps . '%)</td>
     
        <td><b>' . $totalCursops . '</b> -> (' . $porcentajetotalEncursops . '%)</td>
        <td style="border: 1px solid #000;"><b>' . $totalWsupportps . '</b> -> (' . $porcentajetotalWsupportps . '%)</td>
        <td><b>' . $totalWresponseps . '</b> -> (' . $porcentajetotalWresponseps . '%)</td>
        <td style="border: 1px solid #000;"><b>' . $totalCheckingps . '</b> -> (' . $porcentajetotalCheckingps . '%)</td>
        <td><b>' . $totalTestingps . '</b> -> (' . $porcentajetotalTestingps . '%)</td>
        <td style="border: 1px solid #000;"><b>' . $totalScps . '</b> -> (' . $porcentajetotalEscaladosps . '%)</td>
    </tr>

        
    </table>';






    
echo "<H2>CONSOLIDADO SPRINT ACTUAL / SPRINT ANTERIOR</H2>";


echo '<table style="background-color: #3b5ac6; color: #000; border-collapse: collapse; border: 1px solid #000;"  div class="container text-center">
<tr>
<th style="border: 1px solid #000;"> Prioridad </th>
<th style="border: 1px solid #000;">Horas totales</th>
<th style="border: 1px solid #000;">Días promedio</th>
<th style="border: 1px solid #000;">Qty</th>
<th style="border: 1px solid #000;">Resueltas</th>
<th style="border: 1px solid #000;">En curso</th>
<th style="border: 1px solid #000;">Espera soporte</th>
<th style="border: 1px solid #000;">Espera respuesta</th>
<th style="border: 1px solid #000;">Verificando</th>
<th style="border: 1px solid #000;">Testeando</th>
<th style="border: 1px solid #000;">Escalado</th>
</tr>

    <tr style="border: 1px solid #000;">
        <td style="background-color: #e6bb67; border: 1px solid  #000;">Highest</td>
        <td>' . ($horasSHPps+$horasSHP)/2.0 . '</td>
        <td style="border: 1px solid #000;">' .(($totalTicketsSuperHighps !== 0) ? (($totalTicketsSuperHigh !== 0) ? ((($diasSHP / $totalTicketsSuperHigh)+ ($diasSHPps / $totalTicketsSuperHighps))/2.0) : 0) : 0). '</td>
        <td>' . $totalTicketsSuperHighps +$totalTicketsSuperHigh. '</td>
        <td style="border: 1px solid #000;"><b>' . $SHresolveps+$SHresolve . '</b> -> (' . ($porcentajetotalSHps+$porcentajetotalSH)/2.0 . '%)</td>
        
        <td>' . $SHcursops+$SHcurso . '</td>
        <td style="border: 1px solid #000;">' . $SHwsupportps+$SHwsupport . '</td>
        <td>' . $SHwresponseps+$SHwresponse . '</td>
        <td style="border: 1px solid #000;">' . $SHcheckingps+$SHchecking . '</td>
        <td>' . $SHtestingps+$SHtesting . '</td>
        <td style="border: 1px solid #000;">' . $SHscps+$SHsc . '</td>
    </tr>

    <tr style="border: 1px solid #000;">
        <td style="background-color: #e6bb67; border: 1px solid  #000;">High</td>
        <td>' . ($horasHPps+$horasHP)/2.0 . '</td>
        <td style="border: 1px solid #000;">' .(($diasHP / $totalTicketsHigh)+ ($diasHPps / $totalTicketsHighps))/2.0 . '</td>
        <td>' . $totalTicketsHighps+$totalTicketsHigh . '</td>
        <td style="border: 1px solid #000;"><b>' . $Hresolveps+$Hresolve . '</b> -> (' . ($porcentajetotalHps+$porcentajetotalH)/2.0 . '%)</td>
      
        <td>' . $Hcursops+$Hcurso . '</td>
        <td style="border: 1px solid #000;">' . $Hwsupportps+$Hwsupportps . '</td>
        <td>' . $Hwresponseps+$Hwresponse . '</td>
        
        <td style="border: 1px solid #000;">' . $Hcheckingps+$Hchecking . '</td>
        <td>' . $Htestingps+$Htesting . '</td>
        <td style="border: 1px solid #000;">' . $Hscps+$Hsc . '</td>
    </tr>

    <tr style="border: 1px solid #000;">
        <td style="background-color: #e6bb67; border: 1px solid  #000;">Medium</td>
        <td>' . ($horasMps+$horasM)/2.0 . '</td>
        <td style="border: 1px solid #000;">' .( ($diasM / $totalTicketsMedium)+ ($diasMps / $totalTicketsMediumps))/2.0 . '</td>
        <td>' . $totalTicketsMediumps+$totalTicketsMedium . '</td>
        <td style="border: 1px solid #000;"><b>' . $Mresolveps+$Mresolve . '</b> -> (' . ($porcentajetotalMps+$porcentajetotalM)/2.0 . '%)</td>
        
        <td>' . $Mcursops+$Mcurso . '</td>
        <td style="border: 1px solid #000;">' . $Mwsupportps+$Mwsupport . '</td>
        <td>' . $Mwresponseps+$Mwresponse . '</td>
        
        <td style="border: 1px solid #000;">' . $Mcheckingps+$Mchecking . '</td>
        <td>' . $Mtestingps+$Mtesting . '</td>
        <td style="border: 1px solid #000;">' . $Mscps+$Msc . '</td>
    </tr>
    <tr style="border: 1px solid #000;">
        <td style="background-color: #e6bb67; border: 1px solid  #000;">Low</td>
        <td>' . ($horasLps+$horasL)/2.0 . '</td>
        <td style="border: 1px solid #000;">' .( ($diasLps / $totalTicketsLowps)+ ($diasL / $totalTicketsLow))/2 . '</td>
        <td>' . $totalTicketsLowps+$totalTicketsLow . '</td>
        <td style="border: 1px solid #000;"><b>' . $Lresolveps+$Lresolve . '</b> -> (' . ($porcentajetotalLps+$porcentajetotalL)/2.0 . '%)</td>
        
        <td>' . $Lcursops+$Lcurso . '</td>
        <td style="border: 1px solid #000;">' . $Lwsupportps+$Lwsupport . '</td>
        <td>' . $Lwresponseps+$Lwresponse . '</td>
        
        <td style="border: 1px solid #000;">' . $Lcheckingps+$Lchecking . '</td>
        <td>' . $Ltestingps+$Ltesting . '</td>
        <td style="border: 1px solid #000;">' . $Lscps+$Lsc . '</td>
    </tr>
    <tr style="border: 1px solid #000;">
        <td style="background-color: #e6bb67; border: 1px solid  #000;">Lowest</td>
        <td>' . ($horasSLps+$horasSL)/2.0 . '</td>
        <td style="border: 1px solid #000;">' . (($totalTicketsSuperLowps !== 0) ?  (($diasSLps / $totalTicketsSuperLowps) + ($diasSL / $totalTicketsSuperLow))/2.0 : 0) . '</td>
        <td>' . $totalTicketsSuperLowps+$totalTicketsSuperLow . '</td>
        <td style="border: 1px solid #000;"><b>' . $SLresolveps+$SLresolve . '</b> -> (' . ($porcentajetotalSLps+$porcentajetotalSLps)/2.0 . '%)</td>
        
        <td>' . $SLcursops+$SLcurso . '</td>
        <td style="border: 1px solid #000;">' . $SLwsupportps+$SLwsupport . '</td>
        <td>' . $SLwresponseps+$SLwresponse . '</td>
        
        <td style="border: 1px solid #000;">' . $SLcheckingps+$SLchecking . '</td>
        <td>' . $SLtestingps+$SLtesting . '</td>
        <td style="border: 1px solid #000;">' . $SLscps+$SLsc . '</td>
    </tr>


    <tr style="border: 1px solid #000;">
    <td style="background-color: #3e5cc6; border: 1px solid #000;"><h3>Total</h3></td>
    <td>' . $sumatoriahorasps+$sumatoriahoras . '</td>
    <td style="border: 1px solid #000;">' . (($sumatoriadiasps / $sumatoriaps) +($sumatoriadias / $sumatoria))/2.0 . '</td>
    <td><h3><b>' . $sumatoriaps+$sumatoria . '</b></h3></td>
    <td style="border: 1px solid #000;"><b>' . $sumatoriaresolveps+$sumatoriaresolve . '</b> -> (' . ($porcentajetotalps+$porcentajetotal)/2.0 . '%)</td>
 
    <td><b>' . $totalCursops+$totalCurso . '</b> -> (' . ($porcentajetotalEncursops+$porcentajetotalEncurso)/2.0 . '%)</td>
    <td style="border: 1px solid #000;"><b>' . $totalWsupportps+$totalWsupport . '</b> -> (' . ($porcentajetotalWsupportps+$porcentajetotalWsupport)/2.0 . '%)</td>
    <td><b>' . $totalWresponseps+$totalWresponse . '</b> -> (' . ($porcentajetotalWresponseps+$porcentajetotalWresponse)/2.0 . '%)</td>
    <td style="border: 1px solid #000;"><b>' . $totalCheckingps+$totalChecking . '</b> -> (' . ($porcentajetotalCheckingps+$porcentajetotalChecking)/2.0 . '%)</td>
    <td><b>' . $totalTestingps+$totalTesting . '</b> -> (' . ($porcentajetotalTestingps+$porcentajetotalTesting)/2.0 . '%)</td>
    <td style="border: 1px solid #000;"><b>' . $totalScps+$totalSc . '</b> -> (' . ($porcentajetotalEscaladosps+$porcentajetotalEscalados)/2.0 . '%)</td>
</tr>

    
</table>';




$totalResolvePS=$resolveSHCF+$resolveHCF+$resolveMCF+$resolveLCF+$resolveSLCF;
$totalNResolve= $totalCurso+$totalWsupport+$totalWresponse+$totalChecking+$totalTesting+$totalSc;
$totalNResolve2= $totalCursops+$totalWsupportps+$totalWresponseps+$totalCheckingps+$totalTestingps+$totalScps;
echo "<H2>DEL SPRINT ANTERIOR</H2>";


echo '<table style="background-color: #3b5ac6; color: #000; border-collapse: collapse; border: 1px solid #000;"  div class="container text-center">
<tr>
<th style="border: 1px solid #000;"> Prioridad </th>
<th style="border: 1px solid #000;">Qty sprint pasado</th>
<th style="border: 1px solid #000;">Qty sprint actual</th>
<th style="border: 1px solid #000;">Total resueltas</th>
<th style="border: 1px solid #000;">Qty sprint actual sin resolver</th>
<th style="border: 1px solid #000;">Qty sprint pasado sin resolver</th>
<th style="border: 1px solid #000;">Total sin resolver</th>
</tr>

    <tr style="border: 1px solid #000;">
        <td style="background-color: #e6bb67; border: 1px solid  #000;">Highest</td>
        <td>' . $resolveSHCF . '</td>
        <td style="border: 1px solid #000;">' .$SHresolve . '</td>
        <td>' . $resolveSHCF +$SHresolve. '</td>
        <td  style="border: 1px solid #000;">' . $SHcurso +$SHwresponse+$SHwsupport+$SHchecking+$SHtesting+$SHsc. '</td>
        <td>' . $SHcursops +$SHwresponseps+$SHwsupportps+$SHcheckingps+$SHtestingps+$SHscps. '</td>
    </tr>

    <tr style="border: 1px solid #000;">
        <td style="background-color: #e6bb67; border: 1px solid  #000;">High</td>
        <td>' . $resolveHCF . '</td>
        <td style="border: 1px solid #000;">' .$Hresolve . '</td>
        <td>' . $resolveHCF +$Hresolve. '</td>
        <td  style="border: 1px solid #000;">' . $Hcurso +$Hwresponse+$Hwsupport+$Hchecking+$Htesting+$Hsc. '</td>
        <td>' . $Hcursops +$Hwresponseps+$Hwsupportps+$Hcheckingps+$Htestingps+$Hscps. '</td>
    </tr>

    <tr style="border: 1px solid #000;">
        <td style="background-color: #e6bb67; border: 1px solid  #000;">Medium</td>
        <td>' . $resolveMCF . '</td>
        <td style="border: 1px solid #000;">' .$Mresolve . '</td>
        <td>' . $resolveMCF +$Mresolve. '</td>
        <td  style="border: 1px solid #000;">' . $Mcurso +$Mwresponse+$Mwsupport+$Mchecking+$Mtesting+$Msc. '</td>
        <td>' . $Mcursops +$Mwresponseps+$Mwsupportps+$Mcheckingps+$Mtestingps+$Mscps. '</td>
    </tr>
    <tr style="border: 1px solid #000;">
        <td style="background-color: #e6bb67; border: 1px solid  #000;">Low</td>
        <td>' . $resolveLCF . '</td>
        <td style="border: 1px solid #000;">' .$Lresolve . '</td>
        <td>' . $resolveLCF +$Lresolve. '</td>
        <td  style="border: 1px solid #000;">' . $Lcurso +$Lwresponse+$Lwsupport+$Lchecking+$Ltesting+$Lsc. '</td>
        <td>' . $Lcursops +$Lwresponseps+$Lwsupportps+$Lcheckingps+$Ltestingps+$Lscps. '</td>
    </tr>
    <tr style="border: 1px solid #000;">
        <td style="background-color: #e6bb67; border: 1px solid  #000;">Lowest</td>
        <td>' . $resolveSLCF . '</td>
        <td style="border: 1px solid #000;">' .$SLresolve . '</td>
        <td>' . $resolveSLCF +$SLresolve. '</td>
        <td  style="border: 1px solid #000;">' . $SLcurso +$SLwresponse+$SLwsupport+$SLchecking+$SLtesting+$SLsc. '</td>
        <td>' . $SLcursops +$SLwresponseps+$SLwsupportps+$SLcheckingps+$SLtestingps+$SLscps. '</td>
    </tr>


    <tr style="border: 1px solid #000;">
    <td style="background-color: #3e5cc6; border: 1px solid #000;"><h3>Total</h3></td>
    <td>' . $totalResolvePS . '</td>
    <td style="border: 1px solid #000;">' . $sumatoriaresolve . '</td>
    
    <td><h3><b>' . $totalResolvePS+$sumatoriaresolve . '</b></h3></td>
    <td style="border: 1px solid #000;">' . $totalCurso+$totalWsupport+$totalWresponse+$totalChecking+$totalTesting+$totalSc . '</td>
    <td>' . $totalCursops+$totalWsupportps+$totalWresponseps+$totalCheckingps+$totalTestingps+$totalScps . '</td>
    <td style="border: 1px solid #000;"><h3><b>' . $totalNResolve+$totalNResolve2 . '</b></h3></td>
</tr>

    
</table>';








$totalTicketsSuperHigh=0;
$totalTicketsHigh=0;
$totalTicketsMedium=0;
$totalTicketsLow=0;
$totalTicketsSuperLow=0;

$horasSHP=0;
$diasSHP=0;
$horasHP=0;
$diasHP=0;
$horasM=0;
$diasM=0;
$horasL=0;
$diasL=0;
$horasSL=0;
$diasSL=0;

$SHresolve=0;
$Hresolve=0;
$Mresolve=0;
$Lresolve=0;
$SLresolve=0;

$SHcurso=0;
$Hcurso=0;
$Mcurso=0;
$Lcurso=0;
$SLcurso=0;


$SHwsupport=0;
$Hwsupport=0;
$Mwsupport=0;
$Lwsupport=0;
$SLwsupport=0;


$SHwresponse=0;
$Hwresponse=0;
$Mwresponse=0;
$Lwresponse=0;
$SLwresponse=0;

$SHchecking=0;
$Hchecking=0;
$Mchecking=0;
$Lchecking=0;
$SLchecking=0;

$SHtesting=0;
$Htesting=0;
$Mtesting=0;
$Ltesting=0;
$SLtesting=0;

$SHsc=0;
$Hsc=0;
$Msc=0;
$Lsc=0;
$SLsc=0;





foreach ($csvRows as $row) {
    $fields = str_getcsv($row);

    // Realiza tus validaciones en los campos del CSV
    if (count($fields) === 5) {
        $clave = $fields[0];
        $prioridad = $fields[1];
        $estado = $fields[2];
        $fechaInicio = $fields[3];
        $fechaFinal = $fields[4];
        
        // Formatear fechas en el formato "dd/mm/yyyy hh:mm:ss" a "Y-m-d H:i:s"
        $dateInicio = DateTime::createFromFormat('d/m/Y H:i:s', $fechaInicio);
        $dateFinal = DateTime::createFromFormat('d/m/Y H:i:s', $fechaFinal);
        $dateFinal1 = new DateTime($fechaInicioparam);
        $dateFinal2 = new DateTime($fechaFinalparam);
        $dateInicios = new DateTime($fechaInicioparams);
        
        if (1==1) {
            
                   
//verifica estado para calculo por fecha y hora
if($estado=="Resuelta"){

                        

    // Calcular la diferencia en horas
    $interval = $dateInicio->diff($dateFinal);
    $horas = $interval->h + ($interval->i );
    
    // Calcular la diferencia en días
    $dias = $interval->days;
    
    
    
    if ($dias < 1) {
        $diasDecimal = $horas / 24;
        if ($interval->i !== 0) {
    
            if ($prioridad=="Highest") {
                $totalTicketsSuperHigh++;
                $SHresolve++;
                $horasSHP=$horasSHP+number_format($horas, 2);
            $diasSHP=$diasSHP+number_format($diasDecimal, 2);
            }
            if ($prioridad=="High") {
                $totalTicketsHigh++;
                $Hresolve++;
                $horasHP=$horasHP+number_format($horas, 2);
            $diasHP=$diasHP+number_format($diasDecimal, 2);
            }
            if ($prioridad=="Medium") {
                $totalTicketsMedium++;
                $Mresolve++;
                $horasM=$horasM+number_format($horas, 2);
            $diasM=$diasM+number_format($diasDecimal, 2);
            }
            
            if ($prioridad=="Low") {
                $totalTicketsLow++;
                $Lresolve++;
                $horasL=$horasL+number_format($horas, 2);
            $diasL=$diasL+number_format($diasDecimal, 2);
            }
            if ($prioridad=="Lowest") {
                $totalTicketsSuperLow++;
                $SLresolve++;
                $horasSL=$horasSL+number_format($horas, 2);
            $diasSL=$diasSL+number_format($diasDecimal, 2);
            }
            
           
        } else {
            if ($prioridad=="Highest") {
                $totalTicketsSuperHigh++;
                $SHresolve++;
                $horasSHP=$horasSHP+$horas;
                $diasSHP=$diasSHP+number_format($diasDecimal, 2);
                
            }
            if ($prioridad=="High") {
                $totalTicketsHigh++;
                $Hresolve++;
                $horasHP=$horasHP+$horas;
                $diasHP=$diasHP+number_format($diasDecimal, 2);
            }
            if ($prioridad=="Medium") {
                $totalTicketsMedium++;
                $Mresolve++;
                $horasM=$horasM+$horas;
                $diasM=$diasM+number_format($diasDecimal, 2);
            }
            if ($prioridad=="Low") {
                $totalTicketsLow++;
                $Lresolve++;
                $horasL=$horasL+$horas;
                $diasL=$diasL+number_format($diasDecimal, 2);
            }
            if ($prioridad=="Lowest") {
                $totalTicketsSuperLow++;
                $SLresolve++;
                $horasSL=$horasSL+$horas;
                $diasSL=$diasSL+number_format($diasDecimal, 2);
            }
            
        }
        
        
    } else {
        if ($interval->i !== 0) {
            if ($prioridad=="Highest") {
                $totalTicketsSuperHigh++;
                $SHresolve++;
            $horasSHP=$horasSHP+number_format($horas, 2);
            $diasSHP=$diasSHP+$dias;
                
            }
            if ($prioridad=="High") {
                $totalTicketsHigh++;
                $Hresolve++;
                $horasHP=$horasHP+number_format($horas, 2);
                $diasHP=$diasHP+$dias;
            }
            if ($prioridad=="Medium") {
                $totalTicketsMedium++;
                $Mresolve++;
                $horasM=$horasM+number_format($horas, 2);
                $diasM=$diasM+$dias;
            }
            if ($prioridad=="Low") {
                $totalTicketsLow++;
                $Lresolve++;
                $horasL=$horasL+number_format($horas, 2);
                $diasL=$diasL+$dias;
            }
            if ($prioridad=="Lowest") {
                $totalTicketsSuperLow++;
                $SLresolve++;
                $horasSL=$horasSL+number_format($horas, 2);
                $diasSL=$diasSL+$dias;
            }
        } else {
            if ($prioridad=="Highest") {
                $totalTicketsSuperHigh++;
                $SHresolve++;
          
                $horasSHP=$horasSHP+$horas;
                $diasSHP=$diasSHP+$dias;
                
            }
            if ($prioridad=="High") {
                $totalTicketsHigh++;
                $Hresolve++;
                $horasHP=$horasHP+$horas;
                $diasHP=$diasHP+$dias;
            }
            if ($prioridad=="Medium") {
                $totalTicketsMedium++;
                $Mresolve++;
                $horasM=$horasM+$horas;
                $diasM=$diasM+$dias;
            }
            if ($prioridad=="Low") {
                $totalTicketsLow++;
                $Lresolve++;
                $horasL=$horasL+$horas;
                $diasL=$diasL+$dias;
            }
            if ($prioridad=="Lowest") {
                $totalTicketsSuperLow++;
                $SLresolve++;
                $horasSL=$horasSL+$horas;
                $diasSL=$diasSL+$dias;
            }
        }
    }
    // Imprimir los resultados
    
    
    
    
    
    
                        }
                        else{
                            
    
    // Calcular la diferencia en horas
    
    
    
    
    if ($dias < 1) {
        $diasDecimal = $horas / 24;
        if ($interval->i !== 0) {
    
            if ($prioridad=="Highest") {
    
                $totalTicketsSuperHigh++;
                $horasSHP=$horasSHP+number_format($horas, 2);
            $diasSHP=$diasSHP+number_format($diasDecimal, 2);
    
            if($estado=="En curso"){
                $SHcurso++;
    
            }
            if($estado=="Waiting for Support"){
                $SHwsupport++;
    
            }
            if($estado=="Waiting for Response"){
                $SHwresponse++;
    
            }
            if($estado=="Checking"){
                $SHchecking++;
    
            }
            if($estado=="Pruebas"){
                $SHtesting++;
    
            }
            if($estado=="Scalation"){
                $SHsc++;
    
            }
            }
            if ($prioridad=="High") {
                $totalTicketsHigh++;
                $horasHP=$horasHP+number_format($horas, 2);
            $diasHP=$diasHP+number_format($diasDecimal, 2);
            if($estado=="En curso"){
                $Hcurso++;
    
            }
            if($estado=="Waiting for Support"){
                $Hwsupport++;
    
            }
            if($estado=="Waiting for Response"){
                $Hwresponse++;
    
            }
            if($estado=="Checking"){
                $Hchecking++;
    
            }
            if($estado=="Pruebas"){
                $Htesting++;
    
            }
            if($estado=="Scalation"){
                $Hsc++;
    
            }
            }
            if ($prioridad=="Medium") {
                $totalTicketsMedium++;
                
                $horasM=$horasM+number_format($horas, 2);
            $diasM=$diasM+number_format($diasDecimal, 2);
            if($estado=="En curso"){
                $Mcurso++;
    
            }
            if($estado=="Waiting for Support"){
                $Mwsupport++;
    
            }
            if($estado=="Waiting for Response"){
                $Mwresponse++;
    
            }
            if($estado=="Checking"){
                $Mchecking++;
    
            }
            if($estado=="Pruebas"){
                $Mtesting++;
    
            }
            if($estado=="Scalation"){
                $Msc++;
    
            }
            }
            
            if ($prioridad=="Low") {
                $totalTicketsLow++;
                
                $horasL=$horasL+number_format($horas, 2);
            $diasL=$diasL+number_format($diasDecimal, 2);
            if($estado=="En curso"){
                $Lcurso++;
    
            }
            if($estado=="Waiting for Support"){
                $Lwsupport++;
    
            }
            if($estado=="Waiting for Response"){
                $Lwresponse++;
    
            }
            if($estado=="Checking"){
                $Lchecking++;
    
            }
            if($estado=="Pruebas"){
                $Ltesting++;
    
            }
            if($estado=="Scalation"){
                $Lsc++;
    
            }
            }
            if ($prioridad=="Lowest") {
                $totalTicketsSuperLow++;
                
                $horasSL=$horasSL+number_format($horas, 2);
            $diasSL=$diasSL+number_format($diasDecimal, 2);
            if($estado=="En curso"){
                $SLcurso++;
    
            }
            if($estado=="Waiting for Support"){
                $SLwsupport++;
    
            }
            if($estado=="Waiting for Response"){
                $SLwresponse++;
    
            }
            if($estado=="Checking"){
                $SLchecking++;
    
            }
            if($estado=="Pruebas"){
                $SLtesting++;
    
            }
            if($estado=="Scalation"){
                $SLsc++;
    
            }
            }
            
           
        } else {
            if ($prioridad=="Highest") {
                $totalTicketsSuperHigh++;
                $horasSHP=$horasSHP+$horas;
                $diasSHP=$diasSHP+number_format($diasDecimal, 2);
                if($estado=="En curso"){
                    $SHcurso++;
        
                }
                if($estado=="Waiting for Support"){
                    $SHwsupport++;
        
                }
                if($estado=="Waiting for Response"){
                    $SHwresponse++;
        
                }
                if($estado=="Checking"){
                    $SHchecking++;
        
                }
                if($estado=="Pruebas"){
                    $SHtesting++;
        
                }
                if($estado=="Scalation"){
                    $SHsc++;
        
                }
            }
            if ($prioridad=="High") {
                $totalTicketsHigh++;
                $horasHP=$horasHP+$horas;
                $diasHP=$diasHP+number_format($diasDecimal, 2);
                if($estado=="En curso"){
                    $Hcurso++;
        
                }
                if($estado=="Waiting for Support"){
                    $Hwsupport++;
        
                }
                if($estado=="Waiting for Response"){
                    $Hwresponse++;
        
                }
                if($estado=="Checking"){
                    $Hchecking++;
        
                }
                if($estado=="Pruebas"){
                    $Htesting++;
        
                }
                if($estado=="Scalation"){
                    $Hsc++;
        
                }
            }
            if ($prioridad=="Medium") {
                $totalTicketsMedium++;
                
                $horasM=$horasM+$horas;
                $diasM=$diasM+number_format($diasDecimal, 2);
                if($estado=="En curso"){
                    $Mcurso++;
        
                }
                if($estado=="Waiting for Support"){
                    $Mwsupport++;
        
                }
                if($estado=="Waiting for Response"){
                    $Mwresponse++;
        
                }
                if($estado=="Checking"){
                    $Mchecking++;
        
                }
                if($estado=="Pruebas"){
                    $Mtesting++;
        
                }
                if($estado=="Scalation"){
                    $Msc++;
        
                }
            }
            if ($prioridad=="Low") {
                $totalTicketsLow++;
                
                $horasL=$horasL+$horas;
                $diasL=$diasL+number_format($diasDecimal, 2);
                if($estado=="En curso"){
                    $Lcurso++;
        
                }
                if($estado=="Waiting for Support"){
                    $Lwsupport++;
        
                }
                if($estado=="Waiting for Response"){
                    $Lwresponse++;
        
                }
                if($estado=="Checking"){
                    $Lchecking++;
        
                }
                if($estado=="Pruebas"){
                    $Ltesting++;
        
                }
                if($estado=="Scalation"){
                    $Lsc++;
        
                }
            }
            if ($prioridad=="Lowest") {
                $totalTicketsSuperLow++;
                
                $horasSL=$horasSL+$horas;
                $diasSL=$diasSL+number_format($diasDecimal, 2);
                if($estado=="En curso"){
                    $SLcurso++;
        
                }
                if($estado=="Waiting for Support"){
                    $SLwsupport++;
        
                }
                if($estado=="Waiting for Response"){
                    $SLwresponse++;
        
                }
                if($estado=="Checking"){
                    $SLchecking++;
        
                }
                if($estado=="Pruebas"){
                    $SLtesting++;
        
                }
                if($estado=="Scalation"){
                    $SLsc++;
        
                }
            }
            
        }
        
        
    } else {
        if ($interval->i !== 0) {
            if ($prioridad=="Highest") {
                $totalTicketsSuperHigh++;
                
            $horasSHP=$horasSHP+number_format($horas, 2);
            $diasSHP=$diasSHP+$dias;
            if($estado=="En curso"){
                $SHcurso++;
    
            }
            if($estado=="Waiting for Support"){
                $SHwsupport++;
    
            }
            if($estado=="Waiting for Response"){
                $SHwresponse++;
    
            }
            if($estado=="Checking"){
                $SHchecking++;
    
            }
            if($estado=="Pruebas"){
                $SHtesting++;
    
            }
            if($estado=="Scalation"){
                $SHsc++;
    
            }
                
            }
            if ($prioridad=="High") {
                $totalTicketsHigh++;
                $horasHP=$horasHP+number_format($horas, 2);
                $diasHP=$diasHP+$dias;
                if($estado=="En curso"){
                    $Hcurso++;
        
                }
                if($estado=="Waiting for Support"){
                    $Hwsupport++;
        
                }
                if($estado=="Waiting for Response"){
                    $Hwresponse++;
        
                }
                if($estado=="Checking"){
                    $Hchecking++;
        
                }
                if($estado=="Pruebas"){
                    $Htesting++;
        
                }
                if($estado=="Scalation"){
                    $Hsc++;
        
                }
            }
            if ($prioridad=="Medium") {
                $totalTicketsMedium++;
                
                $horasM=$horasM+number_format($horas, 2);
                $diasM=$diasM+$dias;
                if($estado=="En curso"){
                    $Mcurso++;
        
                }
                if($estado=="Waiting for Support"){
                    $Mwsupport++;
        
                }
                if($estado=="Waiting for Response"){
                    $Mwresponse++;
        
                }
                if($estado=="Checking"){
                    $Mchecking++;
        
                }
                if($estado=="Pruebas"){
                    $Mtesting++;
        
                }
                if($estado=="Scalation"){
                    $Msc++;
        
                }
            }
            if ($prioridad=="Low") {
                $totalTicketsLow++;
                
                $horasL=$horasL+number_format($horas, 2);
                $diasL=$diasL+$dias;
                if($estado=="En curso"){
                    $Lcurso++;
        
                }
                if($estado=="Waiting for Support"){
                    $Lwsupport++;
        
                }
                if($estado=="Waiting for Response"){
                    $Lwresponse++;
        
                }
                if($estado=="Checking"){
                    $Lchecking++;
        
                }
                if($estado=="Pruebas"){
                    $Ltesting++;
        
                }
                if($estado=="Scalation"){
                    $Lsc++;
        
                }
            }
            if ($prioridad=="Lowest") {
                $totalTicketsSuperLow++;
                
                $horasSL=$horasSL+number_format($horas, 2);
                $diasSL=$diasSL+$dias;
                if($estado=="En curso"){
                    $SLcurso++;
        
                }
                if($estado=="Waiting for Support"){
                    $SLwsupport++;
        
                }
                if($estado=="Waiting for Response"){
                    $SLwresponse++;
        
                }
                if($estado=="Checking"){
                    $SLchecking++;
        
                }
                if($estado=="Pruebas"){
                    $SLtesting++;
        
                }
                if($estado=="Scalation"){
                    $SLsc++;
        
                }
            }
        } else {
            if ($prioridad=="Highest") {
                $totalTicketsSuperHigh++;
                
          
                $horasSHP=$horasSHP+$horas;
                $diasSHP=$diasSHP+$dias;
                if($estado=="En curso"){
                    $SHcurso++;
        
                }
                if($estado=="Waiting for Support"){
                    $SHwsupport++;
        
                }
                if($estado=="Waiting for Response"){
                    $SHwresponse++;
        
                }
                if($estado=="Checking"){
                    $SHchecking++;
        
                }
                if($estado=="Pruebas"){
                    $SHtesting++;
        
                }
                if($estado=="Scalation"){
                    $SHsc++;
        
                }
            }
            if ($prioridad=="High") {
                $totalTicketsHigh++;
                $horasHP=$horasHP+$horas;
                $diasHP=$diasHP+$dias;
                if($estado=="En curso"){
                    $Hcurso++;
        
                }
                if($estado=="Waiting for Support"){
                    $Hwsupport++;
        
                }
                if($estado=="Waiting for Response"){
                    $Hwresponse++;
        
                }
                if($estado=="Checking"){
                    $Hchecking++;
        
                }
                if($estado=="Pruebas"){
                    $Htesting++;
        
                }
                if($estado=="Scalation"){
                    $Hsc++;
        
                }
            }
            if ($prioridad=="Medium") {
                $totalTicketsMedium++;
                
                $horasM=$horasM+$horas;
                $diasM=$diasM+$dias;
                if($estado=="En curso"){
                    $Mcurso++;
        
                }
                if($estado=="Waiting for Support"){
                    $Mwsupport++;
        
                }
                if($estado=="Waiting for Response"){
                    $Mwresponse++;
        
                }
                if($estado=="Checking"){
                    $Mchecking++;
        
                }
                if($estado=="Pruebas"){
                    $Mtesting++;
        
                }
                if($estado=="Scalation"){
                    $Msc++;
        
                }
            }
            if ($prioridad=="Low") {
                $totalTicketsLow++;
                
                $horasL=$horasL+$horas;
                $diasL=$diasL+$dias;
                if($estado=="En curso"){
                    $Lcurso++;
        
                }
                if($estado=="Waiting for Support"){
                    $Lwsupport++;
        
                }
                if($estado=="Waiting for Response"){
                    $Lwresponse++;
        
                }
                if($estado=="Checking"){
                    $Lchecking++;
        
                }
                if($estado=="Pruebas"){
                    $Ltesting++;
        
                }
                if($estado=="Scalation"){
                    $Lsc++;
        
                }
            }
            if ($prioridad=="Lowest") {
                $totalTicketsSuperLow++;
                
                $horasSL=$horasSL+$horas;
                $diasSL=$diasSL+$dias;
                if($estado=="En curso"){
                    $SLcurso++;
        
                }
                if($estado=="Waiting for Support"){
                    $SLwsupport++;
        
                }
                if($estado=="Waiting for Response"){
                    $SLwresponse++;
        
                }
                if($estado=="Checking"){
                    $SLchecking++;
        
                }
                if($estado=="Pruebas"){
                    $SLtesting++;
        
                }
                if($estado=="Scalation"){
                    $SLsc++;
        
                }
            }
        }
    }
    // Imprimir los resultados
    
    
    
    
    
                        }
    
                        //verifica prioridad para conteo de tickets por prioridad
                       
                      
                      //  echo $clave ." ".$prioridad. " ".$estado. "<br>";
                       
        }
    }
}


        // Si las validaciones son exitosas, puedes guardar o procesar los datos del CSV
        // ...
        $sumatoria=$totalTicketsSuperHigh+$totalTicketsHigh+$totalTicketsMedium+$totalTicketsLow+$totalTicketsSuperLow;
    
        $sumatoriahoras=$horasSHP+$horasHP+$horasM+$horasL+$horasSL;
        $sumatoriadias=$diasSHP+$diasHP+$diasM+$diasL+$diasSL;
        $sumatoriaresolve=$SHresolve+$Hresolve+$Mresolve+$Lresolve+$SLresolve;
        
        $porcentajetotal = $sumatoria ? ($sumatoriaresolve / $sumatoria) * 100 : 0;
        $porcentajetotalSH = $totalTicketsSuperHigh ? ($SHresolve / $totalTicketsSuperHigh) * 100 : 0;
        $porcentajetotalH = $totalTicketsHigh ? ($Hresolve / $totalTicketsHigh) * 100 : 0;
        $porcentajetotalM = $totalTicketsMedium ? ($Mresolve / $totalTicketsMedium) * 100 : 0;
        $porcentajetotalL = $totalTicketsLow ? ($Lresolve / $totalTicketsLow) * 100 : 0;
        $porcentajetotalSL = $totalTicketsSuperLow ? ($SLresolve / $totalTicketsSuperLow) * 100 : 0;
        
    
        $totalCurso=$SHcurso+$Hcurso+$Mcurso+$Lcurso+$SLcurso;
        $totalWsupport=$SHwsupport+$Hwsupport+$Mwsupport+$Lwsupport+$SLwsupport;
        $totalWresponse=$SHwresponse+$Hwresponse+$Mwresponse+$Lwresponse+$SLwresponse;
        $totalChecking=$SHchecking+$Hchecking+$Mchecking+$Lchecking+$SLchecking;
        $totalTesting=$SHtesting+$Htesting+$Mtesting+$Ltesting+$SLtesting;
        $totalSc=$SHsc+$Hsc+$Msc+$Lsc+$SLsc;
    
        $porcentajetotalEscalados = ($sumatoria != 0) ? ($totalSc / $sumatoria) * 100 : 0;
    
        $porcentajetotalEncurso = ($sumatoria != 0) ? ($totalCurso / $sumatoria) * 100 : 0;
        
        $porcentajetotalWsupport = ($sumatoria != 0) ? ($totalWsupport / $sumatoria) * 100 : 0;
        
        $porcentajetotalWresponse = ($sumatoria != 0) ? ($totalWresponse / $sumatoria) * 100 : 0;
        
        $porcentajetotalChecking = ($sumatoria != 0) ? ($totalChecking / $sumatoria) * 100 : 0;
        
        $porcentajetotalTesting = ($sumatoria != 0) ? ($totalTesting / $sumatoria) * 100 : 0;
        
        
    
    
           
          echo "<H2>INICIO DE LOS TIEMPOS</H2>";
    
    //grilla----
        echo '<table style="background-color: #3b5ac6; color: #000; border-collapse: collapse; border: 1px solid #000;" div class="container text-center">
        <tr>
        <th style="border: 1px solid #000;"> Prioridad </th>
        <th style="border: 1px solid #000;">Horas totales</th>
        <th style="border: 1px solid #000;">Días promedio</th>
        <th style="border: 1px solid #000;">Qty</th>
        <th style="border: 1px solid #000;">Resueltas</th>
        <th style="border: 1px solid #000;">En curso</th>
        <th style="border: 1px solid #000;">Espera soporte</th>
        <th style="border: 1px solid #000;">Espera respuesta</th>
        <th style="border: 1px solid #000;">Verificando</th>
        <th style="border: 1px solid #000;">Testeando</th>
        <th style="border: 1px solid #000;">Escalado</th>
    </tr>
            <tr style="border: 1px solid #000;">
                <td style="background-color: #e6bb67; border: 1px solid  #000;">Highest</td>
                <td>' . $horasSHP . '</td>
                <td style="border: 1px solid #000;">' . ($diasSHP / $totalTicketsSuperHigh) . '</td>
                <td>' . $totalTicketsSuperHigh . '</td>
                <td style="border: 1px solid #000;"><b>' . $SHresolve . '</b> -> (' . $porcentajetotalSH . '%)</td>
                
                <td>' . $SHcurso . '</td>
                <td style="border: 1px solid #000;">' . $SHwsupport . '</td>
                <td>' . $SHwresponse . '</td>
                <td style="border: 1px solid #000;">' . $SHchecking . '</td>
                <td>' . $SHtesting . '</td>
                <td style="border: 1px solid #000;">' . $SHsc . '</td>
            </tr>
            <tr style="border: 1px solid #000;">
                <td style="background-color: #e6bb67; border: 1px solid  #000;">High</td>
                <td>' . $horasHP . '</td>
                <td style="border: 1px solid #000;">' . ($diasHP / $totalTicketsHigh) . '</td>
                <td>' . $totalTicketsHigh . '</td>
                <td style="border: 1px solid #000;"><b>' . $Hresolve . '</b> -> (' . $porcentajetotalH . '%)</td>
              
                <td>' . $Hcurso . '</td>
                <td style="border: 1px solid #000;">' . $Hwsupport . '</td>
                <td>' . $Hwresponse . '</td>
                
                <td style="border: 1px solid #000;">' . $Hchecking . '</td>
                <td>' . $Htesting . '</td>
                <td style="border: 1px solid #000;">' . $Hsc . '</td>
            </tr>
            <tr style="border: 1px solid #000;">
                <td style="background-color: #e6bb67; border: 1px solid  #000;">Medium</td>
                <td>' . $horasM . '</td>
                <td style="border: 1px solid #000;">' . ($diasM / $totalTicketsMedium) . '</td>
                <td>' . $totalTicketsMedium . '</td>
                <td style="border: 1px solid #000;"><b>' . $Mresolve . '</b> -> (' . $porcentajetotalM . '%)</td>
                
                <td>' . $Mcurso . '</td>
                <td style="border: 1px solid #000;">' . $Mwsupport . '</td>
                <td>' . $Mwresponse . '</td>
                
                <td style="border: 1px solid #000;">' . $Mchecking . '</td>
                <td>' . $Mtesting . '</td>
                <td style="border: 1px solid #000;">' . $Msc . '</td>
            </tr>
            <tr style="border: 1px solid #000;">
                <td style="background-color: #e6bb67; border: 1px solid  #000;">Low</td>
                <td>' . $horasL . '</td>
                <td style="border: 1px solid #000;">' . ($diasL / $totalTicketsLow) . '</td>
                <td>' . $totalTicketsLow . '</td>
                <td style="border: 1px solid #000;"><b>' . $Lresolve . '</b> -> (' . $porcentajetotalL . '%)</td>
                
                <td>' . $Lcurso . '</td>
                <td style="border: 1px solid #000;">' . $Lwsupport . '</td>
                <td>' . $Lwresponse . '</td>
                
                <td style="border: 1px solid #000;">' . $Lchecking . '</td>
                <td>' . $Ltesting . '</td>
                <td style="border: 1px solid #000;">' . $Lsc . '</td>
            </tr>
            <tr style="border: 1px solid #000;">
                <td style="background-color: #e6bb67; border: 1px solid  #000;">Lowest</td>
                <td>' . $horasSL . '</td>
                <td style="border: 1px solid #000;">' . (($totalTicketsSuperLow !== 0) ? ($diasSL / $totalTicketsSuperLow) : 0) . '</td>
    
                <td>' . $totalTicketsSuperLow . '</td>
                <td style="border: 1px solid #000;"><b>' . $SLresolve . '</b> -> (' . $porcentajetotalSL . '%)</td>
                
                <td>' . $SLcurso . '</td>
                <td style="border: 1px solid #000;">' . $SLwsupport . '</td>
                <td>' . $SLwresponse . '</td>
                
                <td style="border: 1px solid #000;">' . $SLchecking . '</td>
                <td>' . $SLtesting . '</td>
                <td style="border: 1px solid #000;">' . $SLsc . '</td>
            </tr>
            <tr style="border: 1px solid #000;">
            <td style="background-color: #3e5cc6; border: 1px solid #000;""><h3>Total</h3></td>
            <td>' . $sumatoriahoras . '</td>
            <td style="border: 1px solid #000;">' . ($sumatoriadias / $sumatoria) . '</td>
            <td><h3><b>' . $sumatoria . '</b></h3></td>
            <td style="border: 1px solid #000;"><b>' . $sumatoriaresolve . '</b> -> (' . $porcentajetotal . '%)</td>
         
            <td><b>' . $totalCurso . '</b> -> (' . $porcentajetotalEncurso . '%)</td>
            <td style="border: 1px solid #000;"><b>' . $totalWsupport . '</b> -> (' . $porcentajetotalWsupport . '%)</td>
            <td><b>' . $totalWresponse . '</b> -> (' . $porcentajetotalWresponse . '%)</td>
            <td style="border: 1px solid #000;"><b>' . $totalChecking . '</b> -> (' . $porcentajetotalChecking . '%)</td>
            <td><b>' . $totalTesting . '</b> -> (' . $porcentajetotalTesting . '%)</td>
            <td style="border: 1px solid #000;"><b>' . $totalSc . '</b> -> (' . $porcentajetotalEscalados . '%)</td>
        </tr>
    
            
        </table><br><br>';
    
    
    


















        //INICIO DE LOS TIEMPOS CON FILTRO





        


$totalTicketsSuperHigh=0;
$totalTicketsHigh=0;
$totalTicketsMedium=0;
$totalTicketsLow=0;
$totalTicketsSuperLow=0;

$horasSHP=0;
$diasSHP=0;
$horasHP=0;
$diasHP=0;
$horasM=0;
$diasM=0;
$horasL=0;
$diasL=0;
$horasSL=0;
$diasSL=0;

$SHresolve=0;
$Hresolve=0;
$Mresolve=0;
$Lresolve=0;
$SLresolve=0;

$SHcurso=0;
$Hcurso=0;
$Mcurso=0;
$Lcurso=0;
$SLcurso=0;


$SHwsupport=0;
$Hwsupport=0;
$Mwsupport=0;
$Lwsupport=0;
$SLwsupport=0;


$SHwresponse=0;
$Hwresponse=0;
$Mwresponse=0;
$Lwresponse=0;
$SLwresponse=0;

$SHchecking=0;
$Hchecking=0;
$Mchecking=0;
$Lchecking=0;
$SLchecking=0;

$SHtesting=0;
$Htesting=0;
$Mtesting=0;
$Ltesting=0;
$SLtesting=0;

$SHsc=0;
$Hsc=0;
$Msc=0;
$Lsc=0;
$SLsc=0;





foreach ($csvRows as $row) {
    $fields = str_getcsv($row);

    // Realiza tus validaciones en los campos del CSV
    if (count($fields) === 5) {
        $clave = $fields[0];
        $prioridad = $fields[1];
        $estado = $fields[2];
        $fechaInicio = $fields[3];
        $fechaFinal = $fields[4];
        
        // Formatear fechas en el formato "dd/mm/yyyy hh:mm:ss" a "Y-m-d H:i:s"
        $dateInicio = DateTime::createFromFormat('d/m/Y H:i:s', $fechaInicio);
        $dateFinal = DateTime::createFromFormat('d/m/Y H:i:s', $fechaFinal);
        $dateFinal1 = new DateTime($fechaInicioparam);
        $dateFinal2 = new DateTime($fechaFinalparam);
        $dateInicios = new DateTime($fechaInicioparams);
        
        if ($dateInicio<=$dateFinal2) {
            
                   
//verifica estado para calculo por fecha y hora
if($estado=="Resuelta"){

                        

    // Calcular la diferencia en horas
    $interval = $dateInicio->diff($dateFinal);
    $horas = $interval->h + ($interval->i );
    
    // Calcular la diferencia en días
    $dias = $interval->days;
    
    
    
    if ($dias < 1) {
        $diasDecimal = $horas / 24;
        if ($interval->i !== 0) {
    
            if ($prioridad=="Highest") {
                $totalTicketsSuperHigh++;
                $SHresolve++;
                $horasSHP=$horasSHP+number_format($horas, 2);
            $diasSHP=$diasSHP+number_format($diasDecimal, 2);
            }
            if ($prioridad=="High") {
                $totalTicketsHigh++;
                $Hresolve++;
                $horasHP=$horasHP+number_format($horas, 2);
            $diasHP=$diasHP+number_format($diasDecimal, 2);
            }
            if ($prioridad=="Medium") {
                $totalTicketsMedium++;
                $Mresolve++;
                $horasM=$horasM+number_format($horas, 2);
            $diasM=$diasM+number_format($diasDecimal, 2);
            }
            
            if ($prioridad=="Low") {
                $totalTicketsLow++;
                $Lresolve++;
                $horasL=$horasL+number_format($horas, 2);
            $diasL=$diasL+number_format($diasDecimal, 2);
            }
            if ($prioridad=="Lowest") {
                $totalTicketsSuperLow++;
                $SLresolve++;
                $horasSL=$horasSL+number_format($horas, 2);
            $diasSL=$diasSL+number_format($diasDecimal, 2);
            }
            
           
        } else {
            if ($prioridad=="Highest") {
                $totalTicketsSuperHigh++;
                $SHresolve++;
                $horasSHP=$horasSHP+$horas;
                $diasSHP=$diasSHP+number_format($diasDecimal, 2);
                
            }
            if ($prioridad=="High") {
                $totalTicketsHigh++;
                $Hresolve++;
                $horasHP=$horasHP+$horas;
                $diasHP=$diasHP+number_format($diasDecimal, 2);
            }
            if ($prioridad=="Medium") {
                $totalTicketsMedium++;
                $Mresolve++;
                $horasM=$horasM+$horas;
                $diasM=$diasM+number_format($diasDecimal, 2);
            }
            if ($prioridad=="Low") {
                $totalTicketsLow++;
                $Lresolve++;
                $horasL=$horasL+$horas;
                $diasL=$diasL+number_format($diasDecimal, 2);
            }
            if ($prioridad=="Lowest") {
                $totalTicketsSuperLow++;
                $SLresolve++;
                $horasSL=$horasSL+$horas;
                $diasSL=$diasSL+number_format($diasDecimal, 2);
            }
            
        }
        
        
    } else {
        if ($interval->i !== 0) {
            if ($prioridad=="Highest") {
                $totalTicketsSuperHigh++;
                $SHresolve++;
            $horasSHP=$horasSHP+number_format($horas, 2);
            $diasSHP=$diasSHP+$dias;
                
            }
            if ($prioridad=="High") {
                $totalTicketsHigh++;
                $Hresolve++;
                $horasHP=$horasHP+number_format($horas, 2);
                $diasHP=$diasHP+$dias;
            }
            if ($prioridad=="Medium") {
                $totalTicketsMedium++;
                $Mresolve++;
                $horasM=$horasM+number_format($horas, 2);
                $diasM=$diasM+$dias;
            }
            if ($prioridad=="Low") {
                $totalTicketsLow++;
                $Lresolve++;
                $horasL=$horasL+number_format($horas, 2);
                $diasL=$diasL+$dias;
            }
            if ($prioridad=="Lowest") {
                $totalTicketsSuperLow++;
                $SLresolve++;
                $horasSL=$horasSL+number_format($horas, 2);
                $diasSL=$diasSL+$dias;
            }
        } else {
            if ($prioridad=="Highest") {
                $totalTicketsSuperHigh++;
                $SHresolve++;
          
                $horasSHP=$horasSHP+$horas;
                $diasSHP=$diasSHP+$dias;
                
            }
            if ($prioridad=="High") {
                $totalTicketsHigh++;
                $Hresolve++;
                $horasHP=$horasHP+$horas;
                $diasHP=$diasHP+$dias;
            }
            if ($prioridad=="Medium") {
                $totalTicketsMedium++;
                $Mresolve++;
                $horasM=$horasM+$horas;
                $diasM=$diasM+$dias;
            }
            if ($prioridad=="Low") {
                $totalTicketsLow++;
                $Lresolve++;
                $horasL=$horasL+$horas;
                $diasL=$diasL+$dias;
            }
            if ($prioridad=="Lowest") {
                $totalTicketsSuperLow++;
                $SLresolve++;
                $horasSL=$horasSL+$horas;
                $diasSL=$diasSL+$dias;
            }
        }
    }
    // Imprimir los resultados
    
    
    
    
    
    
                        }
                        else{
                            
    
    // Calcular la diferencia en horas
    
    
    
    
    if ($dias < 1) {
        $diasDecimal = $horas / 24;
        if ($interval->i !== 0) {
    
            if ($prioridad=="Highest") {
    
                $totalTicketsSuperHigh++;
                $horasSHP=$horasSHP+number_format($horas, 2);
            $diasSHP=$diasSHP+number_format($diasDecimal, 2);
    
            if($estado=="En curso"){
                $SHcurso++;
    
            }
            if($estado=="Waiting for Support"){
                $SHwsupport++;
    
            }
            if($estado=="Waiting for Response"){
                $SHwresponse++;
    
            }
            if($estado=="Checking"){
                $SHchecking++;
    
            }
            if($estado=="Pruebas"){
                $SHtesting++;
    
            }
            if($estado=="Scalation"){
                $SHsc++;
    
            }
            }
            if ($prioridad=="High") {
                $totalTicketsHigh++;
                $horasHP=$horasHP+number_format($horas, 2);
            $diasHP=$diasHP+number_format($diasDecimal, 2);
            if($estado=="En curso"){
                $Hcurso++;
    
            }
            if($estado=="Waiting for Support"){
                $Hwsupport++;
    
            }
            if($estado=="Waiting for Response"){
                $Hwresponse++;
    
            }
            if($estado=="Checking"){
                $Hchecking++;
    
            }
            if($estado=="Pruebas"){
                $Htesting++;
    
            }
            if($estado=="Scalation"){
                $Hsc++;
    
            }
            }
            if ($prioridad=="Medium") {
                $totalTicketsMedium++;
                
                $horasM=$horasM+number_format($horas, 2);
            $diasM=$diasM+number_format($diasDecimal, 2);
            if($estado=="En curso"){
                $Mcurso++;
    
            }
            if($estado=="Waiting for Support"){
                $Mwsupport++;
    
            }
            if($estado=="Waiting for Response"){
                $Mwresponse++;
    
            }
            if($estado=="Checking"){
                $Mchecking++;
    
            }
            if($estado=="Pruebas"){
                $Mtesting++;
    
            }
            if($estado=="Scalation"){
                $Msc++;
    
            }
            }
            
            if ($prioridad=="Low") {
                $totalTicketsLow++;
                
                $horasL=$horasL+number_format($horas, 2);
            $diasL=$diasL+number_format($diasDecimal, 2);
            if($estado=="En curso"){
                $Lcurso++;
    
            }
            if($estado=="Waiting for Support"){
                $Lwsupport++;
    
            }
            if($estado=="Waiting for Response"){
                $Lwresponse++;
    
            }
            if($estado=="Checking"){
                $Lchecking++;
    
            }
            if($estado=="Pruebas"){
                $Ltesting++;
    
            }
            if($estado=="Scalation"){
                $Lsc++;
    
            }
            }
            if ($prioridad=="Lowest") {
                $totalTicketsSuperLow++;
                
                $horasSL=$horasSL+number_format($horas, 2);
            $diasSL=$diasSL+number_format($diasDecimal, 2);
            if($estado=="En curso"){
                $SLcurso++;
    
            }
            if($estado=="Waiting for Support"){
                $SLwsupport++;
    
            }
            if($estado=="Waiting for Response"){
                $SLwresponse++;
    
            }
            if($estado=="Checking"){
                $SLchecking++;
    
            }
            if($estado=="Pruebas"){
                $SLtesting++;
    
            }
            if($estado=="Scalation"){
                $SLsc++;
    
            }
            }
            
           
        } else {
            if ($prioridad=="Highest") {
                $totalTicketsSuperHigh++;
                $horasSHP=$horasSHP+$horas;
                $diasSHP=$diasSHP+number_format($diasDecimal, 2);
                if($estado=="En curso"){
                    $SHcurso++;
        
                }
                if($estado=="Waiting for Support"){
                    $SHwsupport++;
        
                }
                if($estado=="Waiting for Response"){
                    $SHwresponse++;
        
                }
                if($estado=="Checking"){
                    $SHchecking++;
        
                }
                if($estado=="Pruebas"){
                    $SHtesting++;
        
                }
                if($estado=="Scalation"){
                    $SHsc++;
        
                }
            }
            if ($prioridad=="High") {
                $totalTicketsHigh++;
                $horasHP=$horasHP+$horas;
                $diasHP=$diasHP+number_format($diasDecimal, 2);
                if($estado=="En curso"){
                    $Hcurso++;
        
                }
                if($estado=="Waiting for Support"){
                    $Hwsupport++;
        
                }
                if($estado=="Waiting for Response"){
                    $Hwresponse++;
        
                }
                if($estado=="Checking"){
                    $Hchecking++;
        
                }
                if($estado=="Pruebas"){
                    $Htesting++;
        
                }
                if($estado=="Scalation"){
                    $Hsc++;
        
                }
            }
            if ($prioridad=="Medium") {
                $totalTicketsMedium++;
                
                $horasM=$horasM+$horas;
                $diasM=$diasM+number_format($diasDecimal, 2);
                if($estado=="En curso"){
                    $Mcurso++;
        
                }
                if($estado=="Waiting for Support"){
                    $Mwsupport++;
        
                }
                if($estado=="Waiting for Response"){
                    $Mwresponse++;
        
                }
                if($estado=="Checking"){
                    $Mchecking++;
        
                }
                if($estado=="Pruebas"){
                    $Mtesting++;
        
                }
                if($estado=="Scalation"){
                    $Msc++;
        
                }
            }
            if ($prioridad=="Low") {
                $totalTicketsLow++;
                
                $horasL=$horasL+$horas;
                $diasL=$diasL+number_format($diasDecimal, 2);
                if($estado=="En curso"){
                    $Lcurso++;
        
                }
                if($estado=="Waiting for Support"){
                    $Lwsupport++;
        
                }
                if($estado=="Waiting for Response"){
                    $Lwresponse++;
        
                }
                if($estado=="Checking"){
                    $Lchecking++;
        
                }
                if($estado=="Pruebas"){
                    $Ltesting++;
        
                }
                if($estado=="Scalation"){
                    $Lsc++;
        
                }
            }
            if ($prioridad=="Lowest") {
                $totalTicketsSuperLow++;
                
                $horasSL=$horasSL+$horas;
                $diasSL=$diasSL+number_format($diasDecimal, 2);
                if($estado=="En curso"){
                    $SLcurso++;
        
                }
                if($estado=="Waiting for Support"){
                    $SLwsupport++;
        
                }
                if($estado=="Waiting for Response"){
                    $SLwresponse++;
        
                }
                if($estado=="Checking"){
                    $SLchecking++;
        
                }
                if($estado=="Pruebas"){
                    $SLtesting++;
        
                }
                if($estado=="Scalation"){
                    $SLsc++;
        
                }
            }
            
        }
        
        
    } else {
        if ($interval->i !== 0) {
            if ($prioridad=="Highest") {
                $totalTicketsSuperHigh++;
                
            $horasSHP=$horasSHP+number_format($horas, 2);
            $diasSHP=$diasSHP+$dias;
            if($estado=="En curso"){
                $SHcurso++;
    
            }
            if($estado=="Waiting for Support"){
                $SHwsupport++;
    
            }
            if($estado=="Waiting for Response"){
                $SHwresponse++;
    
            }
            if($estado=="Checking"){
                $SHchecking++;
    
            }
            if($estado=="Pruebas"){
                $SHtesting++;
    
            }
            if($estado=="Scalation"){
                $SHsc++;
    
            }
                
            }
            if ($prioridad=="High") {
                $totalTicketsHigh++;
                $horasHP=$horasHP+number_format($horas, 2);
                $diasHP=$diasHP+$dias;
                if($estado=="En curso"){
                    $Hcurso++;
        
                }
                if($estado=="Waiting for Support"){
                    $Hwsupport++;
        
                }
                if($estado=="Waiting for Response"){
                    $Hwresponse++;
        
                }
                if($estado=="Checking"){
                    $Hchecking++;
        
                }
                if($estado=="Pruebas"){
                    $Htesting++;
        
                }
                if($estado=="Scalation"){
                    $Hsc++;
        
                }
            }
            if ($prioridad=="Medium") {
                $totalTicketsMedium++;
                
                $horasM=$horasM+number_format($horas, 2);
                $diasM=$diasM+$dias;
                if($estado=="En curso"){
                    $Mcurso++;
        
                }
                if($estado=="Waiting for Support"){
                    $Mwsupport++;
        
                }
                if($estado=="Waiting for Response"){
                    $Mwresponse++;
        
                }
                if($estado=="Checking"){
                    $Mchecking++;
        
                }
                if($estado=="Pruebas"){
                    $Mtesting++;
        
                }
                if($estado=="Scalation"){
                    $Msc++;
        
                }
            }
            if ($prioridad=="Low") {
                $totalTicketsLow++;
                
                $horasL=$horasL+number_format($horas, 2);
                $diasL=$diasL+$dias;
                if($estado=="En curso"){
                    $Lcurso++;
        
                }
                if($estado=="Waiting for Support"){
                    $Lwsupport++;
        
                }
                if($estado=="Waiting for Response"){
                    $Lwresponse++;
        
                }
                if($estado=="Checking"){
                    $Lchecking++;
        
                }
                if($estado=="Pruebas"){
                    $Ltesting++;
        
                }
                if($estado=="Scalation"){
                    $Lsc++;
        
                }
            }
            if ($prioridad=="Lowest") {
                $totalTicketsSuperLow++;
                
                $horasSL=$horasSL+number_format($horas, 2);
                $diasSL=$diasSL+$dias;
                if($estado=="En curso"){
                    $SLcurso++;
        
                }
                if($estado=="Waiting for Support"){
                    $SLwsupport++;
        
                }
                if($estado=="Waiting for Response"){
                    $SLwresponse++;
        
                }
                if($estado=="Checking"){
                    $SLchecking++;
        
                }
                if($estado=="Pruebas"){
                    $SLtesting++;
        
                }
                if($estado=="Scalation"){
                    $SLsc++;
        
                }
            }
        } else {
            if ($prioridad=="Highest") {
                $totalTicketsSuperHigh++;
                
          
                $horasSHP=$horasSHP+$horas;
                $diasSHP=$diasSHP+$dias;
                if($estado=="En curso"){
                    $SHcurso++;
        
                }
                if($estado=="Waiting for Support"){
                    $SHwsupport++;
        
                }
                if($estado=="Waiting for Response"){
                    $SHwresponse++;
        
                }
                if($estado=="Checking"){
                    $SHchecking++;
        
                }
                if($estado=="Pruebas"){
                    $SHtesting++;
        
                }
                if($estado=="Scalation"){
                    $SHsc++;
        
                }
            }
            if ($prioridad=="High") {
                $totalTicketsHigh++;
                $horasHP=$horasHP+$horas;
                $diasHP=$diasHP+$dias;
                if($estado=="En curso"){
                    $Hcurso++;
        
                }
                if($estado=="Waiting for Support"){
                    $Hwsupport++;
        
                }
                if($estado=="Waiting for Response"){
                    $Hwresponse++;
        
                }
                if($estado=="Checking"){
                    $Hchecking++;
        
                }
                if($estado=="Pruebas"){
                    $Htesting++;
        
                }
                if($estado=="Scalation"){
                    $Hsc++;
        
                }
            }
            if ($prioridad=="Medium") {
                $totalTicketsMedium++;
                
                $horasM=$horasM+$horas;
                $diasM=$diasM+$dias;
                if($estado=="En curso"){
                    $Mcurso++;
        
                }
                if($estado=="Waiting for Support"){
                    $Mwsupport++;
        
                }
                if($estado=="Waiting for Response"){
                    $Mwresponse++;
        
                }
                if($estado=="Checking"){
                    $Mchecking++;
        
                }
                if($estado=="Pruebas"){
                    $Mtesting++;
        
                }
                if($estado=="Scalation"){
                    $Msc++;
        
                }
            }
            if ($prioridad=="Low") {
                $totalTicketsLow++;
                
                $horasL=$horasL+$horas;
                $diasL=$diasL+$dias;
                if($estado=="En curso"){
                    $Lcurso++;
        
                }
                if($estado=="Waiting for Support"){
                    $Lwsupport++;
        
                }
                if($estado=="Waiting for Response"){
                    $Lwresponse++;
        
                }
                if($estado=="Checking"){
                    $Lchecking++;
        
                }
                if($estado=="Pruebas"){
                    $Ltesting++;
        
                }
                if($estado=="Scalation"){
                    $Lsc++;
        
                }
            }
            if ($prioridad=="Lowest") {
                $totalTicketsSuperLow++;
                
                $horasSL=$horasSL+$horas;
                $diasSL=$diasSL+$dias;
                if($estado=="En curso"){
                    $SLcurso++;
        
                }
                if($estado=="Waiting for Support"){
                    $SLwsupport++;
        
                }
                if($estado=="Waiting for Response"){
                    $SLwresponse++;
        
                }
                if($estado=="Checking"){
                    $SLchecking++;
        
                }
                if($estado=="Pruebas"){
                    $SLtesting++;
        
                }
                if($estado=="Scalation"){
                    $SLsc++;
        
                }
            }
        }
    }
    // Imprimir los resultados
    
    
    
    
    
                        }
    
                        //verifica prioridad para conteo de tickets por prioridad
                       
                      
                      //  echo $clave ." ".$prioridad. " ".$estado. "<br>";
                       
        }
    }
}


        // Si las validaciones son exitosas, puedes guardar o procesar los datos del CSV
        // ...
        $sumatoria=$totalTicketsSuperHigh+$totalTicketsHigh+$totalTicketsMedium+$totalTicketsLow+$totalTicketsSuperLow;
    
        $sumatoriahoras=$horasSHP+$horasHP+$horasM+$horasL+$horasSL;
        $sumatoriadias=$diasSHP+$diasHP+$diasM+$diasL+$diasSL;
        $sumatoriaresolve=$SHresolve+$Hresolve+$Mresolve+$Lresolve+$SLresolve;
        
        $porcentajetotal = $sumatoria ? ($sumatoriaresolve / $sumatoria) * 100 : 0;
        $porcentajetotalSH = $totalTicketsSuperHigh ? ($SHresolve / $totalTicketsSuperHigh) * 100 : 0;
        $porcentajetotalH = $totalTicketsHigh ? ($Hresolve / $totalTicketsHigh) * 100 : 0;
        $porcentajetotalM = $totalTicketsMedium ? ($Mresolve / $totalTicketsMedium) * 100 : 0;
        $porcentajetotalL = $totalTicketsLow ? ($Lresolve / $totalTicketsLow) * 100 : 0;
        $porcentajetotalSL = $totalTicketsSuperLow ? ($SLresolve / $totalTicketsSuperLow) * 100 : 0;
        
    
        $totalCurso=$SHcurso+$Hcurso+$Mcurso+$Lcurso+$SLcurso;
        $totalWsupport=$SHwsupport+$Hwsupport+$Mwsupport+$Lwsupport+$SLwsupport;
        $totalWresponse=$SHwresponse+$Hwresponse+$Mwresponse+$Lwresponse+$SLwresponse;
        $totalChecking=$SHchecking+$Hchecking+$Mchecking+$Lchecking+$SLchecking;
        $totalTesting=$SHtesting+$Htesting+$Mtesting+$Ltesting+$SLtesting;
        $totalSc=$SHsc+$Hsc+$Msc+$Lsc+$SLsc;
    
        $porcentajetotalEscalados = ($sumatoria != 0) ? ($totalSc / $sumatoria) * 100 : 0;
    
        $porcentajetotalEncurso = ($sumatoria != 0) ? ($totalCurso / $sumatoria) * 100 : 0;
        
        $porcentajetotalWsupport = ($sumatoria != 0) ? ($totalWsupport / $sumatoria) * 100 : 0;
        
        $porcentajetotalWresponse = ($sumatoria != 0) ? ($totalWresponse / $sumatoria) * 100 : 0;
        
        $porcentajetotalChecking = ($sumatoria != 0) ? ($totalChecking / $sumatoria) * 100 : 0;
        
        $porcentajetotalTesting = ($sumatoria != 0) ? ($totalTesting / $sumatoria) * 100 : 0;
        
        
    
    
           
          echo "<H2>INICIO DE LOS TIEMPOS CON FILTRO</H2>";
    
    //grilla----
        echo '<table style="background-color: #3b5ac6; color: #000; border-collapse: collapse; border: 1px solid #000;" div class="container text-center">
        <tr>
        <th style="border: 1px solid #000;"> Prioridad </th>
        <th style="border: 1px solid #000;">Horas totales</th>
        <th style="border: 1px solid #000;">Días promedio</th>
        <th style="border: 1px solid #000;">Qty</th>
        <th style="border: 1px solid #000;">Resueltas</th>
        <th style="border: 1px solid #000;">En curso</th>
        <th style="border: 1px solid #000;">Espera soporte</th>
        <th style="border: 1px solid #000;">Espera respuesta</th>
        <th style="border: 1px solid #000;">Verificando</th>
        <th style="border: 1px solid #000;">Testeando</th>
        <th style="border: 1px solid #000;">Escalado</th>
    </tr>
            <tr style="border: 1px solid #000;">
                <td style="background-color: #e6bb67; border: 1px solid  #000;">Highest</td>
                <td>' . $horasSHP . '</td>
                <td style="border: 1px solid #000;">' . ($diasSHP / $totalTicketsSuperHigh) . '</td>
                <td>' . $totalTicketsSuperHigh . '</td>
                <td style="border: 1px solid #000;"><b>' . $SHresolve . '</b> -> (' . $porcentajetotalSH . '%)</td>
                
                <td>' . $SHcurso . '</td>
                <td style="border: 1px solid #000;">' . $SHwsupport . '</td>
                <td>' . $SHwresponse . '</td>
                <td style="border: 1px solid #000;">' . $SHchecking . '</td>
                <td>' . $SHtesting . '</td>
                <td style="border: 1px solid #000;">' . $SHsc . '</td>
            </tr>
            <tr style="border: 1px solid #000;">
                <td style="background-color: #e6bb67; border: 1px solid  #000;">High</td>
                <td>' . $horasHP . '</td>
                <td style="border: 1px solid #000;">' . ($diasHP / $totalTicketsHigh) . '</td>
                <td>' . $totalTicketsHigh . '</td>
                <td style="border: 1px solid #000;"><b>' . $Hresolve . '</b> -> (' . $porcentajetotalH . '%)</td>
              
                <td>' . $Hcurso . '</td>
                <td style="border: 1px solid #000;">' . $Hwsupport . '</td>
                <td>' . $Hwresponse . '</td>
                
                <td style="border: 1px solid #000;">' . $Hchecking . '</td>
                <td>' . $Htesting . '</td>
                <td style="border: 1px solid #000;">' . $Hsc . '</td>
            </tr>
            <tr style="border: 1px solid #000;">
                <td style="background-color: #e6bb67; border: 1px solid  #000;">Medium</td>
                <td>' . $horasM . '</td>
                <td style="border: 1px solid #000;">' . ($diasM / $totalTicketsMedium) . '</td>
                <td>' . $totalTicketsMedium . '</td>
                <td style="border: 1px solid #000;"><b>' . $Mresolve . '</b> -> (' . $porcentajetotalM . '%)</td>
                
                <td>' . $Mcurso . '</td>
                <td style="border: 1px solid #000;">' . $Mwsupport . '</td>
                <td>' . $Mwresponse . '</td>
                
                <td style="border: 1px solid #000;">' . $Mchecking . '</td>
                <td>' . $Mtesting . '</td>
                <td style="border: 1px solid #000;">' . $Msc . '</td>
            </tr>
            <tr style="border: 1px solid #000;">
                <td style="background-color: #e6bb67; border: 1px solid  #000;">Low</td>
                <td>' . $horasL . '</td>
                <td style="border: 1px solid #000;">' . ($diasL / $totalTicketsLow) . '</td>
                <td>' . $totalTicketsLow . '</td>
                <td style="border: 1px solid #000;"><b>' . $Lresolve . '</b> -> (' . $porcentajetotalL . '%)</td>
                
                <td>' . $Lcurso . '</td>
                <td style="border: 1px solid #000;">' . $Lwsupport . '</td>
                <td>' . $Lwresponse . '</td>
                
                <td style="border: 1px solid #000;">' . $Lchecking . '</td>
                <td>' . $Ltesting . '</td>
                <td style="border: 1px solid #000;">' . $Lsc . '</td>
            </tr>
            <tr style="border: 1px solid #000;">
                <td style="background-color: #e6bb67; border: 1px solid  #000;">Lowest</td>
                <td>' . $horasSL . '</td>
                <td style="border: 1px solid #000;">' . (($totalTicketsSuperLow !== 0) ? ($diasSL / $totalTicketsSuperLow) : 0) . '</td>
    
                <td>' . $totalTicketsSuperLow . '</td>
                <td style="border: 1px solid #000;"><b>' . $SLresolve . '</b> -> (' . $porcentajetotalSL . '%)</td>
                
                <td>' . $SLcurso . '</td>
                <td style="border: 1px solid #000;">' . $SLwsupport . '</td>
                <td>' . $SLwresponse . '</td>
                
                <td style="border: 1px solid #000;">' . $SLchecking . '</td>
                <td>' . $SLtesting . '</td>
                <td style="border: 1px solid #000;">' . $SLsc . '</td>
            </tr>
            <tr style="border: 1px solid #000;">
            <td style="background-color: #3e5cc6; border: 1px solid #000;"><h3>Total</h3></td>
            <td>' . $sumatoriahoras . '</td>
            <td style="border: 1px solid #000;">' . ($sumatoriadias / $sumatoria) . '</td>
            <td><h3><b>' . $sumatoria . '</b></h3></td>
            <td style="border: 1px solid #000;"><b>' . $sumatoriaresolve . '</b> -> (' . $porcentajetotal . '%)</td>
         
            <td><b>' . $totalCurso . '</b> -> (' . $porcentajetotalEncurso . '%)</td>
            <td style="border: 1px solid #000;"><b>' . $totalWsupport . '</b> -> (' . $porcentajetotalWsupport . '%)</td>
            <td><b>' . $totalWresponse . '</b> -> (' . $porcentajetotalWresponse . '%)</td>
            <td style="border: 1px solid #000;"><b>' . $totalChecking . '</b> -> (' . $porcentajetotalChecking . '%)</td>
            <td><b>' . $totalTesting . '</b> -> (' . $porcentajetotalTesting . '%)</td>
            <td style="border: 1px solid #000;"><b>' . $totalSc . '</b> -> (' . $porcentajetotalEscalados . '%)</td>
        </tr>
    
            
        </table><br><br>';
    
    
    } else {
        echo 'Error al subir el archivo';
    }
}
?>
