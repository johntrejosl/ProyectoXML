<html>
<body>
<?php 
/*$reset=$_POST['reset'];
foreach ($fichas as $ficha) {
	
fwrite($fp, '<#'.$rompecabezas->ficha['id'].'{'. PHP_EOL);
fwrite($fp, ' transform: rotate('.$rompecabezas->ficha->posicionAsociada['grados'].');'. PHP_EOL);
fwrite($fp, '}'. PHP_EOL);
fclose($fp);
}
 */
echo $_POST["nombre"]; ?><br>
edad: <?php echo $_POST["edad"];
$fp = fopen("registro.xml","w+");
fwrite($fp, '<?xml version="1.0" encoding="UTF-8" ?> '. PHP_EOL);
fclose($fp);
?> <br>
<?php
echo "escrito";
 ?>




</body>
</html>

	




    
