<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function get_folder_list($user_id) {
    $query = 'select id, name, dt from folders where id_user=' . $user_id;
    $result = mysql_query($query) or die(mysql_error());
    $folder_list = "<table>";
    while ($folder = mysql_fetch_assoc($result)) {
        $folder_list .= "<tr id_folder='" . $folder['id'] . "' name_folder='".$folder['name']."'>
                            <td>" . $folder['name'] . "</td>
                            <td class=\"col2\">" . $folder['dt'] . "</td>
                            <td class=\"col3\"><button class='remove'>-</button></td>
                        </tr>";
    }
    $folder_list .= "</table>";
    return $folder_list;
}

function get_photo($id_photo) {
    
    $html = '<img src="../images/empty.jpg">';
    $query = 'select photo from photos where id=' . $id_photo;
    $result = mysql_query($query) or die(mysql_error());
    if ($result) {
        $photo = mysql_fetch_assoc($result);
        $html = '<img src="images/'.$photo['photo'].'">';
    }

    
    return $html;
}


?>