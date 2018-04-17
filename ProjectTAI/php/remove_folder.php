<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//echo 112;
if (isset($_GET['id_folder']) && isset($_GET['id_user'])) {
    $id_folder = $_GET['id_folder']; //echo $id_folder;
    $id_user = $_GET['id_user'];
    include "dbconf.php"; //echo $host;
    include "dbconnect.php";
    include "functions.php";
    
    $query = 'delete from  photos where id_folder= ' . $id_folder;
    $result = mysql_query($query) or die(mysql_error());
    
    $query = 'delete from  folders where id= ' . $id_folder;
    $result = mysql_query($query) or die(mysql_error());
    
    
    echo get_folder_list($id_user);
    
    //echo $folder_list;
    mysql_close($server);
}