<?php
    include "../../php/dbconn.php";

    if(isset($_POST['search'])){

        $type = $_POST['type'];

        if ($type == 'incoming'){
            echo "<script> window.location= 'incomingAdmin.php' </script>";
        }
        else if ($type == 'outcoming'){
            echo "<script> window.location= 'outcomingAdmin.php' </script>";
        }
        else{
            echo "<script> window.location= 'minutemeetingAdmin.php' </script>";
        }
    }

?>