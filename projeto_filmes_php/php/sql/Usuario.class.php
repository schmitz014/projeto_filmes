<?php

    class Usuario{

        public function login($user, $pass){

            global $pdo;

            $sql = $pdo->prepare('SELECT * from `usuarios` where `nome_user` = :user and `senha`= :pass');
            $sql -> execute(array(':user' => $user, ':pass' => $pass));

            if($sql->rowCount() > 0){
                $dado = $sql -> fetch();

                $_SESSION['id_user'] = $dado['id_user'];
                return true;
            }else{
                return false;
            }
        }

    }


?>