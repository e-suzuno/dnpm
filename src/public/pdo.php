<?php


try {

    $dbh = new PDO('mysql:host=db;port=3306;dbname=homestead', 'homestead', 'secret');


    echo "success!";

} catch (Exception $exception) {

    echo $exception->getMessage();

}





