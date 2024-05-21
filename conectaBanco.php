<?php
    $banco = new mysqli("localhost", "root", "preCadastro","3307");
        if ($banco->connect_errno){
            echo "Erro ao conectar no banco de dados";

        }
        else{
            echo "Conectado com Sucesso!";
            
        }
?>