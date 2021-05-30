<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "greenproprties";


    //create connection

    $conn = new mysqli($servername ,$username ,$password ,  $dbname);

    //check connetion
    if (!$conn ){
         echo "error";
    }




?>