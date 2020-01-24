<!DOCTYPE html>

<?php include("conexao.php");
    $grupo = selectAllcrud();
?>

<html>

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>

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

    <h2> CRUD </h2>

    <a href="inserir.php">Cadastrar novo</a>

    <table class="demo">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Salario</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($grupo as $crud) { ?>
                <tr>
                    <td><?= $crud["id"] ?></td>
                    <td><?= $crud["Nome"] ?></td>
                    <td><?= $crud["salario"] ?></td>
                    <td>
                        <form name="alterar" action="alterar.php" method="POST">
                            <input type="hidden" name="id" value=<?= $crud["id"] ?> />
                            <input type="submit" value="Editar" name="editar" />

                        </form>

                    </td>
                    <td>
                        <form name="excluir" action="conexao.php" method="POST">
                            <input type="hidden" name="id" value="<?= $crud["id"] ?>" />
                            <input type="hidden" name="acao" value="excluir" />
                            <input type="submit" value="Excluir" name="excluir" />
                        </form>
                    </td>
                </tr>
            <?php  }


            ?>
        </tbody>
    </table>


</body>

</html>