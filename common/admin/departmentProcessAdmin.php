<?php
    include "../../php/dbconn.php";

    if(isset($_POST['search'])){

        $department = $_POST['department'];

        if ($department == 'MIS'){
            echo "<script> window.location= 'misAdmin.php' </script>";
        }
        else if ($department == 'EXTR'){
            echo "<script> window.location= 'extrAdmin.php' </script>";
        }
        else{
            echo "<script> window.location= 'manualmgtAdmin.php' </script>";
        }
    }

?>