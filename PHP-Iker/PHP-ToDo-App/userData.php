<?php
   include("config.php");
   session_start();
   
   $sql = "SELECT * FROM usuarios WHERE ID = " . $_SESSION['id'] . ";";
    		$resultAll = mysqli_query($db,$sql);
    		
    		$rowAll = mysqli_fetch_array($resultAll,MYSQLI_ASSOC);
    		   //id
    		   $id = $_SESSION['id'];
    		   //username
    		   $_SESSION['username'] = $rowAll['username'];
    		   $username = $_SESSION['username'];
    		   //password
    		   $_SESSION['password'] = $rowAll['password'];
    		   $password = $_SESSION['password'];
    		   //nombre
    		   $_SESSION['nombre'] = $rowAll['nombre'];
    		   $nombre = $_SESSION['nombre'];
    		   //apellidos
    		   $_SESSION['apellidos'] = $rowAll['apellidos'];
    		   $apellidos = $_SESSION['apellidos'];
    		   //telefono
    		   $_SESSION['telefono'] = $rowAll['telefono'];
    		   $telefono = $_SESSION['telefono'];
    		   //email
    		   $_SESSION['email'] = $rowAll['email'];
    		   $email = $_SESSION['email'];
    		   
    		   header('Content-Type: application/json');
    		   $jsonUser = json_encode($rowAll);
    		   echo $jsonUser;
    		   /*
    		   $data = array(
               (object)array(
                  'oV' => 'ID',
                  'oT' => $id,
               ),
               (object)array(
                  'oV' => 'username',
                  'oT' => '"' . $username .'"',
               ),
               (object)array(
                  'oV' => 'password',
                  'oT' => '"' . $password .'"',
               ),
               (object)array(
                  'oV' => 'nombre',
                  'oT' => '"' . $nombre .'"',
               ),
               (object)array(
                  'oV' => 'apellidos',
                  'oT' => '"' . $apellidos .'"',
               ),
               (object)array(
                  'oV' => 'telefono',
                  'oT' => '"' . $telefono .'"',
               ),
               (object)array(
                  'oV' => 'email',
                  'oT' => '"' . $email .'"',
               ),
            );
            */
            //var_dump($data);
            //$jsonUser = json_encode($data);
            //echo $jsonUser;
   ?>