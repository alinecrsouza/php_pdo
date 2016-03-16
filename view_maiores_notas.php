<?php

require_once "conexao.php";

$query = "select a.* from alunos a join (select nota from alunos group by nota order by nota desc limit 3 ) a2 on a.nota = a2.nota order by nota DESC, nome ASC";
//ou
//$query = "select a.* from alunos a join (select distinct nota from alunos order by nota desc limit 3 ) a2 on a.nota = a2.nota order by nota DESC";



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
            <h1>Três maiores notas</h1><br><br>
            <a href="index_exemplo_alunos.php">Voltar</a>
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