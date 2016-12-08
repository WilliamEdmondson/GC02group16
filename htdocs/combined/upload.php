<h1>Upload stage</h1>
<?php
session_start();
include '/Applications/XAMPP/xamppfiles/htdocs/site/htdocs/Backend/quexf-1.18.1/functions/functions.import.php';
include '/Applications/XAMPP/xamppfiles/htdocs/site/htdocs/Backend/quexf-1.18.1/functions/functions.database.php';
$targetpath = "/Applications/XAMPP/xamppfiles/htdocs/site/htdocs/combined/uploads";

move_uploaded_file( "file2.pdf" , "/uploads/file2.pdf" );

for( $i = 0 ; $i <= sizeof($_FILES['fileList']) ; $i++ ) {
        $temp_name = $_FILES['fileList']['tmp_name'][$i];
        $name = basename($_FILES['fileList']['name'][$i]);
        echo $name;
        echo move_uploaded_file( $temp_name , "$targetpath/$name" ) ? " Successfully Uploaded<br>" : " Failed <br>";
}

import_directory($targetpath);
assign_to($_SESSION['uid']);
echo "<br><br>form has been assigned to the current user";
//TODO write  a SQL query which sets the fid to the current users vid therefore allowing them access
?>
<br><br>
<form action="../Backend/quexf-1.18.1/verifyjs.php">
    <input type='submit' value='proceed to verification'/>
</form>

<!--header('Location: ../Backend/quexf-1.18.1/verifyjs.php');

