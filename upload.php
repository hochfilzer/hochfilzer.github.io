<?php
/*if (isset($_FILES['file'])) {
    $file = $_FILES['file'];


    // File properties
    $file_name = $file['name'];
    $file_temp = $file['tmp_name'];
    $file_size = $file['size'];
    $file_error = $file['error'];
    // Work out file extension
    $file_ext = explode('.', $file_name);
    $file_ext = strtolower(end($file_ext));

    $allowed = array('jpg', 'jpeg', 'png');

    if(in_array($file_ext, $allowed)){
        if($file_error===0){
            if($file_size <= 2097152){
                $file_name_new = uniqid('', true). '.' . $file_ext;
                $newPath = $_POST['photoCat'];
                mkdir("Pictures/".$newPath,0777,TRUE);
                $file_destination = 'Pictures/'. $newPath .'/'. $file_name_new;

                if (move_uploaded_file($file_temp, $file_destination)){
                    header("Location:BlogEditor.php");
                    echo "file uploaded";
                }
            }
        }
    }
}*/


if( isset($_FILES['fileUpload']['name'])) {

    $newdir = $_POST['photoCat'];
    if(is_dir($newdir)==false){
        mkdir("Pictures/".$newdir,0777,TRUE);
    }
    $target_dir = 'Pictures/'.$newdir."/";
    $total_files = count($_FILES['fileUpload']['name']);

    for($key = 0; $key < $total_files; $key++) {
        // Check if file is selected
        if(isset($_FILES['fileUpload']['name'][$key])
            && $_FILES['fileUpload']['size'][$key] > 0) {

            $original_filename = $_FILES['fileUpload']['name'][$key];
            $target = $target_dir . basename($original_filename);
            $tmp  = $_FILES['fileUpload']['tmp_name'][$key];
            move_uploaded_file($tmp, $target);
        }

    }
    header("Location:BlogEditor.php");
}

