<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if (isset($_GET['id_folder'])) {
    $id_folder = $_GET['id_folder'];
    include "dbconf.php"; //echo $host;
    include "dbconnect.php";

    $query = 'select id, title, dt, photo_small from photos where id_folder= ' . $id_folder;
    $result = mysql_query($query) or die(mysql_error());
    $photo_list = "";
    while ($photo = mysql_fetch_assoc($result)) {
        $photo_list .= "<div class='widjet' id_photo=".$photo['id']."><img src='images/".$photo['photo_small']."'/><p>" 
                    . $photo['title'] . " " . $photo['dt']."</p> </div>";
    }
    echo $photo_list;
    mysql_close($server);
}