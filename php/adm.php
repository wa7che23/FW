<?php
function connect(){
    $_server="localhost";
    $username="root";
    $base="tp1";
    $pass="";
    try{
    $con=new PDO("mysql:host=$_server;dbname=$base",$username,$pass);
    return $con;
    
    }catch(PDOException $e)
    {
        die("erreeeeeeeur :".$e->getMessage());
    }
    }


?>