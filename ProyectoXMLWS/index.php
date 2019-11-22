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
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Crear Tablas<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="relacionar.php">Relacionar</a>
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
 
<!---<br>
<br>
<br>
<br>
<br>
<br>--->
<div id="d">
  <br>
<br>
 <br>
<br>
 <h1 id="d">¡Bienvenido!</h1>

<h3 id="c">Creacion de tablas</h2>
  <br>
  <br>

</div>

 <form method="post" action="index.php">
  <div class="form-group">
    <label for="exampleFormControlInput1">Nombre</label>
    <input name="nombre" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Ej:Materias">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Cantidad de atributos</label>
    <select name="cant_atributos"class="form-control" id="exampleFormControlSelect1">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
    <br>

    <button type="submit" class="btn btn-primary">generar</button>
  </div>
</form>
<form method="post" action="crear.php">
  <?php 
  if(isset($_POST["nombre"])){
  $name= $_POST["nombre"];
  $id="id_".$name;
  echo"<input name='nombre' type='hidden' class='form-control' id='exampleFormControlInput1' placeholder='Nombre campo ' value=".$name.">";
  $cant=$_POST["cant_atributos"];
  echo"<form><div class='form-group'>";
  echo" <label for='exampleFormControlInput'>Llave primaria ".$id."</label>";
  echo"<input name='id' type='hidden' class='form-control' id='exampleFormControlInput1' value=".$id.">

  <br>
  <br>";
  for($i=0;$i<$cant;$i++){

   
    echo" <label for='exampleFormControlInput".$i."'>Atributo".$i."</label>";
    echo " <input name='name[]' type='text' class='form-control' id='exampleFormControlInput1' placeholder='Nombre campo'>";
    echo " <input name='valor[]' type='text' class='form-control' id='exampleFormControlInput1' placeholder='valor'>";
      echo " <label for='exampleFormControlSelect1'>Tipo de dato</label>
    <select name='datatype[]' class='form-control' id='exampleFormControlSelect1'>
      <option>(#PCDATA)</option>
      <option>ANY</option>
      <option>EMPTY</option>
    </select>
    <br>";
  }
   echo"<button type='submit' class='btn btn-primary'>Crear</button>";
}  


 ?>



  </form>
 <!--- <form>
  <div class="form-group">
    <label for="exampleFormControlInput1">Atributos</label>
    <input name="atributos" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Escribalos atributos separados por coma sin dejar espacios. Ej:APO2,LOGICA,ETICA,XML">
  </div>
  
<h5>Se creará automaticamente una llave primaria, nombrada como ID_NOMBREDETABLA</h5>
  <div><button type="submit" class="btn btn-primary">Inputs</button>
    <button type="submit" class="btn btn-primary">Crear</button></div>
 
</form>--->























 
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <footer id="main-footer">
    <p>&copy; 2019 <a href="http://johntrejosdesigns.000webhostapp.com">Proyecto xml</a></p>
  </footer> <!-- / #main-footer -->
 
  </body>
</html>