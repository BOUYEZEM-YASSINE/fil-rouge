<?php
    $db_server="localhost";
    $db_username="root";
    $db_password="";
    $db_name="projet_fil_rouge";
    $connection_query=mysqli_connect($db_server,$db_username ,$db_password,$db_name);
    if(!$connection_query){
        echo "La connexion à la base de données est échoué";
    }
?> 