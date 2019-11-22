<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 <link rel="stylesheet" href="estilos.css">
    <title>Estudiantes</title>
  </head>
  <body> 
<header >
 <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Matrícula Academica</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Crear Tablas</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="relacionar.php">Relacionar<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index2.html">Registrar</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown link
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
 
  </header>
<br>
<br>
<br>
<br>
<br>
<h1>Relación entre tablas</h1>
 
<form method="post" action="relacionar.php">
  <div class="form-group">
    <label for="exampleFormControlInput1">Seleccione una tabla</label>
     <select class="form-control" name="tabla1" required >
           <option value="" disabled selected>Seleccione...</option>
               <?php                                 
                 $tablas=simplexml_load_file("inventario.xml");
                          
                           foreach ($tablas as $key => $value) {
                                       echo "<option value='".$value."' >".$value." </option>";                           
                                   };                                     
                                 ?>                               
                            </select>
  </div>
   <div class="form-group">
    <label for="exampleFormControlInput1">Seleccione una tabla</label>
     <select class="form-control" name="tabla2" required >
           <option value="" disabled selected>Seleccione...</option>
               <?php                                 
                 $tablas=simplexml_load_file("inventario.xml");
                          $num=0;
                           foreach ($tablas as $key => $value) {
                                       echo "<option value='".$value."' >".$value." </option>";
                                       $num++;                           
                                   };                                     
                                 ?>                               
                            </select><br>
                       
  </div>
       <button type='submit' class='btn btn-primary'>Relacionar</button>
<?php
$tabla1=$_POST["tabla1"];
$tabla2=$_POST["tabla2"];
$id1="id_".$tabla1;
$id2="id_".$tabla2;
$raiz=$tabla1."_".$tabla2;
$archivo=$raiz.".xml";
$fp = fopen($archivo,"w+");
$type='<?xml version="1.0" encoding="UTF-8" ?>';
$dtd1='<!DOCTYPE '.$raiz.'[ ';
$dtd2="<!ELEMENT ".$raiz." (tabla*)>";
$dtd3="<!ELEMENT tabla (#PCDATA)>]>";
$tags="<".$raiz."><tabla>".$id1."</tabla><tabla>".$id2."</tabla></".$raiz.">";
fwrite($fp, $type.PHP_EOL); 
fwrite($fp, $dtd1.PHP_EOL); 
fwrite($fp, $dtd2.PHP_EOL); 
fwrite($fp, $dtd3.PHP_EOL); 
fwrite($fp, $tags.PHP_EOL); 

fclose($fp);
?>
</form>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <footer id="main-footer">
    <p>&copy; 2019 <a href="http://johntrejosdesigns.000webhostapp.com">Proyecto xml</a></p>
  </footer> <!-- / #main-footer -->
 
  </body>
</html>