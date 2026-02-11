<?php
     $conn = new mysqli ("localhost", "jcode_user", "jcode2026", "jcode_db");
 
 if (mysqli_connect_errno()){
    printf ("connect failed: %s\n", mysqli_connect_error());
    exit ();
 }
?>
