<?php
  require "conec.php";
  $conn = conecta();
  $sql = "SELECT * FROM perros";
  $result = $conn->query($sql);

  $resp = array();
  $fila = array();
  if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $fila["id"] = $row["id"];
        $fila["nombre"] = $row["nombre"];
        $fila["edad"] = $row["edad"];
        $fila["raza"] = $row["raza"];
        $fila["color"] = $row["color"];
        array_push($resp,$fila);
      }
  } 
  print(json_encode($resp));
  $conn->close();
?>