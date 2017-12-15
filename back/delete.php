<?php
	require_once 'conec.php';
	if (!empty($_POST["id"])){
		$id = $_POST["id"];
		$conn = conecta();
		$sql = "delete from perros where id = ".$id;
		if ($conn->query($sql) === TRUE) {
			print("{respuesta:true}");
		} else {
			print("{respuesta:false}");
		}
	}else{
		print("{respuesta:false}");
	}
	$conn->close();
?>