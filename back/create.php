<?php
  require_once "conec.php";
  $conn = conecta();
  $nombre = $_POST['nombre'];
  $edad = $_POST['edad'];
  $raza = $_POST['raza'];
  $color = $_POST['color'];

  $sql = "INSERT INTO perros VALUES(default,'".$nombre."',".$edad.",'".$raza."','".$color."')";
  //print $sql;
  $result = $conn->query($sql);

  if ($conn->query($sql) === TRUE) {
    print "{true}";
  } 
  else {
    print "{false}";
  }

  $conn->close();
?>