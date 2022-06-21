<?php
    session_start();

    $_SESSION["username"] = $_POST["txUser"];

    if(isset($_POST["txUser"]) && !empty($_POST["txUser"]) && isset($_POST["txSenha"]) && !empty($_POST["txSenha"])){

        require 'sql/conexao-bd.php';
        require 'sql/Usuario.class.php';

        $usuario = new Usuario();

        $user = addslashes($_POST["txUser"]);
        $pass = addslashes($_POST["txSenha"]);

        if($usuario -> login($user, $pass)==true){
            if(isset($_SESSION['id_user'])){
                $_SESSION["autorizacao"] = true;
                header("Location:painel.php");
            }else{
                $_SESSION["autorizacao"] = false;
                unset($_SESSION["autorizacao"]);
                session_destroy();
                header("Location:index.php");
                }   
            }else{
            $_SESSION["autorizacao"] = false;
            unset($_SESSION["autorizacao"]);
            session_destroy();
            header("Location:index.php");
        }
    }

?>