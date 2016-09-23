<?php
   include("userData.php");
   session_start();
   
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Lobilist - jQuery plugin for todo lists. Supports drag & drop issues. Multiple lists with different colors.
        Support for communication to backend</title>
    
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <!--Default installation-->
    <link rel="stylesheet" href="lib/jquery/jquery-ui.min.css"/>
    <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="dist/lobilist.min.css">

    <!--Installation using bower. Preferred!!! -->
    <!--<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css"/>-->
    <!--<link rel="stylesheet" href="bower_components/jquery-ui/themes/ui-lightness/jquery-ui.min.css"/>-->
    <!--<link rel="stylesheet" href="bower_components/lobilist/dist/lobilist.min.css"/>-->

    <link rel="stylesheet" href="lib/lobibox/css/lobibox.min.css">
    <link rel="stylesheet" href="lib/highlight/github.css">
    <link rel="stylesheet" href="css/lists.css">
</head>
<body>

<div class="container">
    
                    
                    <div id="actions-by-ajax"></div>
               
        
</div>


<!--Default installation-->
<script src="lib/jquery/jquery.min.js"></script>
<script src="lib/jquery/jquery-ui.min.js"></script>
<script src="lib/jquery/jquery.ui.touch-punch-improved.js"></script>
<script src="lib/bootstrap/js/bootstrap.min.js"></script>
<script src="dist/lobilist.js"></script>

<!--Installation using bower. Preferred!!! -->
<!--<script src="bower_components/jquery/dist/jquery.min.js"></script>-->
<!--<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>-->
<!--<script src="bower_components/jquery-ui-touch-punch-improved/jquery.ui.touch-punch-improved.js"></script>-->
<!--<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>-->
<!--<script src="bower_components/lobilist/dist/lobilist.min.js"></script>-->

<script src="lib/lobibox/js/lobibox.min.js"></script>
<script src="lib/highlight/highlight.pack.js"></script>
<script src="js/lobilistAjax.js"></script>

</body>
</html>