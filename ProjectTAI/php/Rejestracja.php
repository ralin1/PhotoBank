<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//echo 111;
if (isset($_GET['login']) && isset($_GET['surname']) && isset($_GET['email']) && isset($_GET['pass'])) {
    $login = $_GET['login']; //echo $id_folder;
    $surname = $_GET['surname'];
    $pass = $_GET['pass'];
    $email = $_GET['email'];
    include "dbconf.php"; //echo $host;
    include "dbconnect.php";
    
    
    $query = "INSERT INTO `users` ( `surname`, `login`, `pass`, `email`)"
            . "VALUES ( '".$login."', '".$surname."', '".$pass."', '".$email."')";
    echo $query;
    //$result = mysql_query($query) or die(mysql_error());
    
    
    
    
    //$html = file_get_contents("/html/acces.html");
    
    //echo $html;
    //mysql_close($server);
}