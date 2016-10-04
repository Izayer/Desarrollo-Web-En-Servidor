<?php
   include("../userData.php");
   session_start();
   
    $sql = "SELECT listas.nombre AS lnombre, tareas.ID, tareas.nombre, tareas.descripcion, tareas.hecho, tareas.ID_listas, tareas.fechaFin
FROM todo.listas, todo.tareas, todo.usuarios_listas
WHERE tareas.ID_listas = listas.ID AND listas.ID = usuarios_listas.ID_listas AND usuarios_listas.ID_usuarios = " . $id . "
ORDER BY listas.ID;";
    
    
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      //$kontBi = 0;
      if($count >= 1) {
          $idList = $row['ID_listas'];
          header('Content-Type: application/json');
          echo '
          {
    "onSingleLine": false,
    "lists": [
        {
            "title": "' . $row['lnombre'] . '",
            "defaultStyle": "lobilist-info",
            "items": [
                {   "id": '.true.',
                    "title": "' . $row['nombre'] . '",
                    "description": "' . $row['descripcion'] . '",
                    "dueDate": "'. $row['fechaFin'] .'"
                }';
            
          
        while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
            if( ($row['ID_listas'] != $idList)){
                $idList = $row['ID_listas'];
                echo '
                ]
            },
                {
            "title": "' . $row['lnombre'] . '",
            "defaultStyle": "lobilist-info",
            "items": [
                {
                    "title": "' . $row['nombre'] .'",
                    "description": "' . $row['descripcion'] .'",
                    "dueDate": "'. $row['fechaFin'] .'"
                }'
            ;
            }
            else{
                echo '
                ,{
                    "title": "' . $row['nombre'] . '",
                    "description": "' . $row['descripcion'] . '",
                    "dueDate": "'. $row['fechaFin'] .'"
                } ';
            }
            
        }
        echo '
            ]
        }
    ]
   
}';
        
        
      }
      else{
          header('Content-Type: application/json');
        echo'
    {
    "onSingleLine": false,
    "lists": [
        {
            "title": "Kaixo hemen listaren izenburua",
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
