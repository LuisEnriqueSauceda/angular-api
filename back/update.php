<?php
  require_once "conec.php";
  $conn = conecta();
  $nombre = $_POST['nombre'];
  $edad = $_POST['edad'];
  $raza = $_POST['raza'];
  $color = $_POST['color'];
  $id = $_POST['id'];
  $sql = "UPDATE perros SET ";
  if (!empty($_POST["nombre"])){ $sql = $sql."nombre = '".$nombre."',"; }
  if (!empty($_POST["edad"])){ $sql = $sql."edad = ".$edad.","; }
  if (!empty($_POST["raza"])){ $sql = $sql."raza = '".$raza."',"; }
  if (!empty($_POST["color"])){ $sql = $sql."color = '".$color."',"; }
  $sql = substr($sql, 0, -1);
   $sql = $sql." where id = ".$id;
  //print $sql;
  $result = $conn->query($sql);

  if ($conn->query($sql) === TRUE) {	
    print "{true}";
  } else {
    print "{false}";
  }

  $conn->close();
?>