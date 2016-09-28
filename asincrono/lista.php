<?php
	include('../crud/inc/conexion.php');
?>
<?php 
	$consulta=$conexion->query('SELECT p.* FROM persona p');
	while($fila=$consulta->fetch_assoc()){
 ?>
		$personas[]=$fila;
		

					<?php	
					}
				 ?>