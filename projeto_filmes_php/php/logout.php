<?php 

    session_start();

    if((isset($_SESSION["autorizacao"])==true)){
        $_SESSION["autorizacao"]=false;
        unset($_SESSION["autorizacao"]);
        session_destroy();
        header("location:index.php");
    }

?>
