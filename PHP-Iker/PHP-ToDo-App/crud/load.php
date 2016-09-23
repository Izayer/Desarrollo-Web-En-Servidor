<?php
   include("../userData.php");
   session_start();
   
    $sql = "SELECT listas.nombre AS lnombre, tareas.ID, tareas.nombre, tareas.descripcion, tareas.hecho, tareas.ID_listas
FROM todo.listas, todo.tareas, todo.usuarios_listas
WHERE tareas.ID_listas = listas.ID AND listas.ID = usuarios_listas.ID_listas AND usuarios_listas.ID_usuarios = " . $id . "
ORDER BY listas.ID;";
    
    
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      if($count >= 1) {
          $lnombre1 = $row['lnombre'];
          header('Content-Type: application/json');
          echo '
          {
    "onSingleLine": false,
    "lists": [
        {
            "title": "' . $lnombre1 . '",
            "defaultStyle": "lobilist-info",
            "items": [
                {
                    "title": "' . $row['nombre'] . '",
                    "description": "' . $row['descripcion'] . '"
                }
            ]
        }
    ]
}';
          
        while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
            
        }
      }
      else{
          header('Content-Type: application/json');
        echo'
    {
    "onSingleLine": false,
    "lists": [
        {
            "title": "Kaixo Hemen listaren izenburua",
            "defaultStyle": "lobilist-info",
            "items": [
                {
                    "title": "Zereginaren izenburua",
                    "description": "Zereginaren nondik norakoak"
                }
            ]
        }
    ]
}';
      }
?>
