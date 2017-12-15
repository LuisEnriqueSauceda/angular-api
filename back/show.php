<?php
  require_once "conec.php";
  $id = $_GET["id"];
  $conn = conecta();
  $sql = "SELECT * FROM perros WHERE id = ". $id ." limit 1";
  $result = $conn->query($sql);
  $resp = array();
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          $resp["id"] = $row["id"];
          $resp["nombre"] = $row["nombre"];
          $resp["edad"] = $row["edad"];
          $resp["raza"] = $row["raza"];
          $resp["color"] = $row["color"];
        }
    } 
  print(json_encode($resp));
  $conn->close();
?>