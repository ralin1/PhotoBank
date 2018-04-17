<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$server = mysql_connect($host, $user, $pass) or
            die("Can't connected to server");
//if($server){

    mysql_select_db($dbname) or die("can't select db");
    mysql_set_charset('utf8');

 