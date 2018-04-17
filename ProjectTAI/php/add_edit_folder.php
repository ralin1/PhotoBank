<?php



if (isset($_GET['oper']) && isset($_GET['id_folder']) && isset($_GET['id_user']) && isset($_GET['name_folder'])) {
    $id_folder = $_GET['id_folder']; //echo $id_folder;
    $id_user = $_GET['id_user'];
    $oper = $_GET['oper'];
    $name_folder =$_GET['name_folder'];
    
    //echo "oper=".$oper."name_folder=".$name_folder;
    include "dbconf.php"; //echo $host;
    include "dbconnect.php";
    include "functions.php";
    
    switch ($oper){
        case 'add':
            $query = "insert into folders(name, dt, id_user) values('".$name_folder."', '".date("Y.m.d H:i:s")."',".$id_user.")" ;
            break;
        case 'edit':
            $query = 'update folders set name="'. $name_folder.'" where id='.$id_folder;
            break;
    }
    //echo $query;
    mysql_query($query) or die(mysql_error());
    echo get_folder_list($id_user);
    
    //echo $folder_list;
    mysql_close($server);
}

?>