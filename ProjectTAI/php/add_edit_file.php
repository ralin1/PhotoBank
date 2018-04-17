<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if (0 < $_FILES['select_file']['error']) {
    echo 'Error: ' . $_FILES['select_file']['error'] . '<br>';
} else {
    $id_folder=$_POST['id_folder'];
    $title=$_POST['title'];
    $file_name=$_FILES['select_file']['name'];

    move_uploaded_file( $_FILES['select_file']['tmp_name'], '../images/'.$file_name );

    include "dbconf.php"; 
    include "dbconnect.php";
 	$query = 'insert into photos(title, id_folder, photo_small, photo, dt) 
 	          values("'.mysql_real_escape_string($title).'", '. $id_folder.',"'.$file_name.'", "'.$file_name.'", "'.date("Y-m-d H:i:s").'")';
    $result = mysql_query($query) or die(mysql_error());

    echo 'File added!';
}
