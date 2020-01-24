<?php
include("conexao.php");
$crud = selectIdPessoa($_POST["id"]);
?>
<meta charset="UTF-8">
<style>
    .demo {
        border: 1px solid #C0C0C0;
        border-collapse: collapse;
        padding: 5px;
    }

    .demo th {
        border: 1px solid #C0C0C0;
        padding: 5px;
        background: #F0F0F0;
    }

    .demo td {
        border: 1px solid #C0C0C0;
        padding: 5px;
    }
</style>
<form name="dadospessoa" action="conexao.php" method="POST">

    <table class="demo">

        <tbody>



            <tr>
                <td>Id</td>
                <td><input type="text" name="id" value="<?= $crud["id"] ?>" /> </td>
            </tr>

            <tr>
                <td>Nome</td>
                <td><input type="text" name="nome" value="<?= $crud["Nome"] ?>" size="20" /></td>
            </tr>


            <tr>
                <td>Salario</td>
                <td><input type="decimal" name="salario" value="<?= $crud["salario"] ?>" /></td>
            </tr>

            <tr>
                <td><input type="submit" value="Enviar" name="Enviar" /></td>
            </tr>
        </tbody>
    </table>

</form>