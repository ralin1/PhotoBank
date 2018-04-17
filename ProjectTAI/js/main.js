$(document).ready(function () {
    //$(document).on('#folder_list tr', 'click', function(){

    function add_edit_folder(oper) {

        var id_folder = $("#photo_list").attr("id_folder");
        var folder_name = $("#folder_oper form").serialize();
        var id_user = $("#photos h3").attr("id_user");
        //if (folder_name == '')
         //   exit();
        var s = "php/add_edit_folder.php?oper=" + oper + "&id_folder=" + id_folder + "&" + folder_name + "&id_user=" + id_user;
         //alert(s);

        $("#folder_list").load(s);
    };


    $(document).on('click', '#folder_list tr', function () {
        //alert(123);
        var id = $(this).attr("id_folder");
        var folder_name = $(this).attr("name_folder");
        //alert(id);
        $("#photo_list").load("php/list_photo.php?id_folder=" + id);
        $("#photo_list").attr("id_folder", id);
        $("#folder_name").val(folder_name);

        $("#photo_list").css("display", "block");
        $("#file_oper").css("display", "block");
        $("#cur_photo").css("display", "none");
    });

    $(document).on('click', '#folder_list .remove', function () {
        var id_folder = $(this).parent('td').parent('tr').attr('id_folder');
        //alert(id_folder);
        var id_user = $("#photos h3").attr("id_user");
        //alert(id_user);   
        var s = "php/remove_folder.php?id_folder=" + id_folder + "&id_user=" + id_user;

        $("#folder_list").load(s);
    });

    
    $(document).on('click', '#add_folder', function(){
        add_edit_folder('add');

    });

    $(document).on('click', '#edit_folder', function(){
        //alert(123);
        add_edit_folder('edit');

    });


    $(document).on('dblclick', '.widjet', function () {
                        
        var id_photo = $(this).attr("id_photo");//alert(id_photo);
        var np = $(this).children('p');
        var name_photo = $(np).html();
        
        //alert(name_photo);
        var s = "php/getphoto.php?id_photo=" + id_photo;
        $("#cur_photo").load(s);
        $('#file_name').attr('id_photo', id_photo);
        $('#file_name').val(name_photo);
       
        $("#photo_list").css("display", "none");
        $("#file_oper").css("display", "none");
        $("#cur_photo").css("display", "block");
    });
    /*$(document).on('click', '#photo_list', function(){
        alert(1);
        /*
        var id_photo = $(this).attr("id_photo");
        var name_photo = $(this+' p').html();
        alert('name_photo');
        var s = "php/getphoto.php?id_photo=" + id_photo;
        $("#cur_photo").load(s);
        $('#file_name').attr('id_photo', id_photo);
        $('#file_name').val('');
    });*/
    
    function add_edit_file(oper) {
        var id_file = $("#file_name").attr("id_file");
        var file_data = $("#file_oper form").serialize();
        var id_user = $("#photos h3").attr("id_user");
        //if (folder_name == '')
        //   exit();
        var s = "php/add_edit_file.php?oper=" + oper + "&id_file=" + id_file + "&" + file_data + "&id_user=" + id_user;
        //alert(s);

        $("#photo_list").load(s);
    };

    $('#add_file').on('click', function () {
        var file_data = $('#sortpicture').prop('files')[0];
        var form_data = new FormData();
        form_data.append('select_file', file_data);

        var id_folder=$("#photo_list").attr("id_folder");
        form_data.append('id_folder', id_folder);

        var title=$("#file_name").val();
        form_data.append('title', title);

        //alert(form_data);
        $.ajax({
            url: 'php/add_edit_file.php',
            dataType: 'text',
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
            type: 'post',
            success: function (php_script_response) {
                alert(php_script_response);
            }
        });
    });

   /* $(document).on('click', '#add_file', function () {
        add_edit_file('add');
    });*/

    $(document).on('click', '#edit_file', function () {
        add_edit_file('edit');
    });

});

