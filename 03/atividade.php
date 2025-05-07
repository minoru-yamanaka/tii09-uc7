<?php
/*
Crie um array com 4 nomes de alunos e exiba-os em uma lista <ul>
no navegador
*/

$alunos = ["Adenilsa", "Carlos", "Gustavo", "Gabriel"];
echo "<h2>Alunos</h2>";
    foreach($alunos as $aluno) {     
        echo "<li>$aluno</li>";
    }

$alunos2 = [
    ["nome" => "Adenilsa", "idade" => 20],
    ["nome" => "Carlos", "idade" => 22],
    ["nome" => "Gustavo", "idade" => 23],
    ["nome" => "Gabriel", "idade" => 24]
];

echo "<h2>Alunos 2</h2>";
foreach($alunos2 as $aluno) {
    echo "<li>Nome: {$aluno['nome']}, Idade: {$aluno['idade']}</li>";
}

$alunos3 = [
    ["nome" => "Adenilsa", "idade" => 20, "nota" => 8.5],
    ["nome" => "Carlos", "idade" => 22, "nota" => 7.0],
    ["nome" => "Gustavo", "idade" => 23, "nota" => 9.0],
    ["nome" => "Gabriel", "idade" => 24, "nota" => 6.5]
];

echo "<table border='1'>
        <th colspan='3'> Alunos 3</th>
        <tr>
            <th>Nome</th>
            <th>Idade</th>
            <th>Nota</th>
        </tr>";
?>  
<?php
    foreach($alunos3 as $aluno3) {
        echo "
                <tr>
                    <td>{$aluno3['nome']}</td>
                    <td>{$aluno3['idade']}</td></br> ".
                     "<td>" . number_format($aluno3['nota'], 2, ',','.') . "</td>
                </tr>
            ";
    }
?>



