<?php


if (isset($_POST["acao"])) {
    if ($_POST["acao"] == "inserir") {
        inserirPessoa();
    }

    if ($_POST["acao"] == "alterar") {
        alterarPessoa();
    }
    if ($_POST["acao"] == "excluir") {
        excluirPessoa();
    }
}

function abrirBanco()
{
    $conexao = new mysqli("localhost", "root", "", "test");
    return $conexao;
}

function inserirPessoa()
{

    $banco = abrirBanco();
    $sql = "INSERT INTO crud(Nome, salario)"
        . " VALUES ('{$_POST["nome"]}','{$_POST["salario"]}')";

    $banco->query($sql);
    $banco->close();
    voltarIndex();
}

function excluirPessoa()
{

    $banco = abrirBanco();
    $sql = "DELETE FROM crud WHERE  id='{$_POST["id"]}'";
    $banco->query($sql);
    $banco->close();
    voltarIndex();
}



function alterarPessoa()
{

    $banco = abrirBanco();
    $sql = " UPDATE crud SET Nome='{$_POST["nome"]}',"
        . "salario='{$_POST["salario"]}' WHERE id='{$_POST["id"]}'";

    $banco->query($sql);
    $banco->close();
    voltarIndex();
}



function selectAllcrud()
{

    $banco = abrirBanco();
    $sql = "SELECT * FROM crud ORDER BY nome";
    $resultado = $banco->query($sql);
    $banco->close();
    while ($row = mysqli_fetch_array($resultado)) {
        $grupo[] = $row;
    }
    return $grupo;
}

function selectIdPessoa($id)
{

    $banco = abrirBanco();
    $sql = "SELECT * FROM pessoa WHERE id =" . $id;
    $resultado = $banco->query($sql);
    $crud = mysqli_fetch_assoc($resultado);
    return $crud;
}

function voltarIndex()
{
    header("location:index.php");
}
