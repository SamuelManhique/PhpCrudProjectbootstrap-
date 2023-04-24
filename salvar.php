<?php
switch ($_REQUEST["acao"]) {
    case 'cadastrar':
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $dataNascimento = $POST["dataNascimento"];

        $sql = "INSERT INTO usuario (nome,email,senha, dataNascimento) VALUES
         ('{$nome}', '{$email}', '{$senha}', '{$dataNascimento}')";
        break;

    default:
        # code...
        break;
}
