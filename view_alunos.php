<?php

$query = "SELECT * FROM alunos ORDER BY nome";

$stmt = $conexao->query($query);
$resultado = $stmt->fetchAll(PDO::FETCH_CLASS);

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Notas dos Alunos</title>
    </head>
    <body>
        <header>
            <h1>Notas dos Alunos</h1><br><br>
            <a href="view_maiores_notas.php">Três maiores notas</a>
        </header>
        <main>
            <table>
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Nota</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($resultado as $aluno):?>
                        <tr>
                            <td><?=$aluno->nome?></td>
                            <td><?=$aluno->nota?></td>
                        </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
        </main>
        <footer>

        </footer>
    </body>
</html>

