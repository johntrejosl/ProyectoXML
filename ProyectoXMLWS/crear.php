<html>
<body>

<h1>Tabla:</h1>

<?php 

 echo $_POST["nombre"]; 
?>

 <br>
  <br>
 <h1>Atributos: </h1>
  <?php

  $datatype=$_POST["datatype"];
  $pos=$_POST["name"];

   $name=$_POST["name"];
   echo $_POST["valor"];
   $valor=$_POST["valor"];
   $tipo=$_POST["tipo"];
   $id=$_POST["id"];
    print_r($pos); 
  print_r($valor);
  print_r($tipo);




 $nombre=$_POST["nombre"];
 $archivo=$nombre.".xml";

 $elements="";
 $a=0;
 foreach ($pos as $key => $att) {
	$elements=$elements.'<!ELEMENT '.$att.' '.$datatype[$a].' >';
  $a++;
}
$valor= $_POST["valor"];
$root=substr($nombre,0,-1);
$atributos="";
$tags="";
$a=0;
foreach ($pos as $key => $at) {

	$tags=$tags.'<'.$at.'>'.$valor[$a].' </'.$at.'>';
	$a++;
}

foreach ($pos as $key => $value){
	$atributos=$atributos."".$value.",";
	# code...
}
 
$root=substr($nombre,0,-1);
$atributos=substr($atributos,0,-1);

$fp = fopen($archivo,"w+");
$idtag="<llave>".$id."</llave>";
fwrite($fp, '<?xml version="1.0" encoding="UTF-8" ?> 
	<!DOCTYPE '.$nombre.'[ <!ELEMENT '.$nombre.' ANY>

    <!ELEMENT '.$nombre.' ('.$id.','.$root.'*)>
     '.PHP_EOL);
fwrite($fp,"<!ELEMENT ".$id." (#PCDATA)>".PHP_EOL);
fwrite($fp,"<!ELEMENT ".$root." ANY>".PHP_EOL);
fwrite($fp,'<!ELEMENT '.$root.' ('.$atributos.')*> '.$elements.']>'.PHP_EOL);
fwrite($fp,'<'.$nombre.'>'.PHP_EOL);
fwrite($fp,$idtag.PHP_EOL);
fwrite($fp,'<'.$root.'>'.PHP_EOL);


fwrite($fp,$tags.PHP_EOL);
fwrite($fp,'</'.$root.'>'.PHP_EOL);
fwrite($fp,'</'.$nombre.'>'.PHP_EOL);



fclose($fp);
$inventario=simplexml_load_file("inventario.xml");

  $inventario->addChild("tabla",$nombre);

$inventario->asXML("inventario.xml");


?> <br>






</body>
</html>

	


