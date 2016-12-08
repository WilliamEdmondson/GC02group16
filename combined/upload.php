<?php
foreach ($_FILES['upfiles'] as $index => $file ) {
    echo $file['name'];

}
    /*
    $target_path = "uploads/";
    $target_path = $target_path . basename($_FILES['upfiles']['name']);

    if (move_uploaded_file($_FILES['upfiles']['tmp_name'], $target_path)) {
        echo "The file " . basename($_FILES['upfiles']['name']) .
            " has been uploaded<br>";
    } else {
        echo "There was an error uploading the file, please try again!<br>";
    }
}*/
?>