<?php
$servername = getenv('IP');
            $username = getenv('C9_USER');
            $password = "";
            $database = "Fake";
            $dbport = 3306;
            $dbtype = "mysql";
            
            try {
                $pdo = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
            } catch (PDOException $e) {
                die($e->getMessage);
            
            }
            require_once 'vendor/fzaninotto/faker/src/autoload.php';
            // alternatively, use another PSR-0 compliant autoloader (like the Symfony2 ClassLoader for instance)
            //https://packagist.org/packages/fzaninotto/faker
            $faker = Faker\Factory::create('es_ES');
            for ($i=0; $i < 10; $i++){
                
                $id = $faker->randomNumber($nbDigits = NULL);
                
                $name = $faker->name;
                $name = utf8_encode("'".$name."'");
                
                $helbidea = $faker->address;
                $helbidea = utf8_encode("'".$helbidea."'");
                
                $statement = $pdo->prepare("INSERT INTO pertsona (id,izena,helbidea)
                VALUES ($id,$name,$helbidea);");
                var_dump($statement);
                $statement->execute();
                
                echo $id;
                echo "</br>";
                echo $name; 
                echo "</br>";
                echo $helbidea;
                echo "</br>";
            }
            