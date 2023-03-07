<?php
require 'vendor/autoload.php' ;

Flight::route('/', function(){
    echo 'Cao Benjamine!' ;
});

Flight::start();
?>