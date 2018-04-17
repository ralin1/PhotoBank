<?php

/* DEFINE('DB_USERNAME', 'root');
  DEFINE('DB_PASSWORD', '');
  DEFINE('DB_HOST', 'localhost');
  DEFINE('DB_DATABASE', 'projectTAI'); */
if (isset($_POST['login']) && (isset($_POST['pass']))) {
    $login = $_POST['login'];
    $pass_ = $_POST['pass'];
    $pass_ = md5($pass_);
    //echo "login=".$login."pass=".$pass;
    include "php/dbconf.php"; //echo $host;
    //echo $server;
    //$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
    include "php/dbconnect.php";
    //echo "connected";
    include "php/functions.php";
    $query = 'select id, surname from users where login="' . $login . '" and pass="' . $pass_ . '"';
    $result = mysql_query($query) or die(mysql_error());
    if ($result) {
        $user = mysql_fetch_assoc($result);
        $user_id = $user['id'];
        $user_surname = $user['surname'];
        $html = file_get_contents("html/main.html");
        //echo $html;
        $html = str_replace("{username}", $user_surname, $html);
        $html = str_replace("{id_user}", $user_id, $html);
        $folder_list = get_folder_list($user_id);
        $html = str_replace("{folder_list}", $folder_list, $html);
        echo $html;
    } else  {
        //echo $user['surname'];

        $html = file_get_contents("html/acces.html");

        echo $html;
    }
} else {
    //echo "not connect";
    $html = file_get_contents("html/acces.html");
    echo $html;
}






