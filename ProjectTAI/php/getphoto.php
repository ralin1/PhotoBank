<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if (isset($_GET['id_photo'])) {
    $id_photo = $_GET['id_photo']; 
   
    include "dbconf.php"; 
    include "dbconnect.php";
    include "functions.php";
  
    echo get_photo($id_photo);
    
    //echo $folder_list;
    mysql_close($server);
}