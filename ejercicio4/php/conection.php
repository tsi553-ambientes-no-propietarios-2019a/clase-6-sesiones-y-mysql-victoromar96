<?php
$conn = new mysqli('localhost', 'root', '', 'BDquejas');
	if($conn->connect_error){
		header('Location: ../pagina1.php?error_message=Ocurrió un error'.$conn->connect_error);
		exit;
	}
?>

