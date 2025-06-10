<?php 
$users = [
    [
        'id' => 1,
        'name' => 'Alice Dupont',
        'email' => 'alice.dupont@example.com',
        'role' => 'admin'
    ],
    [
        'id' => 2,
        'name' => 'Bob Martin',
        'email' => 'bob.martin@example.com',
        'role' => 'editor'
    ],
    [
        'id' => 3,
        'name' => 'Chloé Bernard',
        'email' => 'chloe.bernard@example.com',
        'role' => 'user'
    ],
    [
        'id' => 4,
        'name' => 'Salvador Goncalves',
        'email' => 'Salvador_Gomes@hotmail.com',
        'role' => 'user'

        
    ],
];

// listar um id em arrays Multidimensionais
echo "LISTAR IDS EM ARRAYS MULTIDIMENSIONAIS" . "<br><br>";
 echo $users [3]['name'] . "<br>";
 echo $users [2]['email'] . "<br>";
 echo $users [1]['email'] . "<br>";
 echo $users [1]['name'] . "<br>";
 echo "<hr>";

// porcorrer todos ids em buble foreach arrays multidimensionais
echo "PORCORRER TODOS IDS DUBLE FOREACH" . "<br><br>"; 

foreach($users as $use){
    foreach($use as $chave => $valor){
     echo "$chave: $valor<br>";
    }
}
echo "<hr>";
echo "PORCORRER TODOS IDS UM FOREACH" . "<br><br>";
foreach($users as $user){
    echo "ID" . $user['id'] . "<br>";
    echo "NOME" . $user['name'] . "<br>";
    echo "EMAIL" . $user['email'] . "<br>";
    echo "ROLE" . $user['role'] . "<br><br>";
}

echo "<hr>";


//apresentar numa tabela 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table{
        width: 40%;
        border-collapse: collapse;
        margin: 20px auto;
    }

    th,td{
        border: solid 2px  black;
        padding: 2px;
        text-align: center;
    }

    th {
        background-color:rgb(186, 184, 184);
    }
</style>
<body>

<h1>Criar Tabela</h1>

<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Role</th>
    </tr>

    <?php 
    foreach($users as $user){
        echo "<tr>";
        echo "<td>" . $user['id'] . "</td>";
        echo "<td>" . $user['name'] . "</td>";
        echo "<td>" . $user['email'] . "</td>";
        echo "<td>" . $user['role'] . "</td>";
        echo "</tr>";
    }

    ?>
</table>

<hr>

<?php
// Informações do banco de dados
$host = 'localhost';
$dbname = 'france';
$user = 'root';
$pass = 'root';

try {
    // Conexão usando PDO
    $pdo = new PDO("mysql:host=localhost;dbname=france", 'root', 'root');
    
    // Definindo o modo de erro do PDO para exceções
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Conexão bem-sucedida!";
} catch (PDOException $e) {
    echo "Erro na conexão: " . $e->getMessage();
}

$req = $pdo ->query("SELECT ville_nom, ville_code_postal, ville_population_1999, ville_population_2010, ville_population_2012 
FROM villes_france_free
LIMIT 100;");
$villes = $req->fetchALL(PDO::FETCH_ASSOC);

?>
<h1>Consulta Banco de Dados</h1>

<table>
    <tr>
        <th>Nome</th>
        <th>C Postal</th>
        <th>N Habitates99</th>
        <th>N Habitates10</th>
        <th>N Habitates12</th>
        
    </tr>

    <?php
    foreach($villes as $ville){
        echo "<tr>";
        echo "<td>" . $ville['ville_nom'] . "</th>";
        echo "<td>" . $ville['ville_code_postal'] . "</th>";
        echo "<td>" . $ville['ville_population_1999'] . "</th>";
        echo "<td>" . $ville['ville_population_2010'] . "</th>";
        echo "<td>" . $ville['ville_population_2012'] . "</th>";
        echo "</tr>";
    }

    ?>
</table>




    
</body>
</html>