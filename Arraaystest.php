<?php 
//criar um Array Indexado
$cidades =  ['Porto','Lisboa','Faro','Castelo de viana','Madeira'];

//esibir a cidades 
 foreach($cidades as $cidade) {
    echo $cidade . "<br>";
 }

 echo '<br>';

 //esibir a quantidades de cidade 
 $total = count($cidades);
 echo "Total das ciades e " . $total . " !" . "<br>";

 echo '<br>';
 echo '<hr>';

// selecionar uma cidade
 echo $cidades [3];
 echo '<hr>';

 // Vamos trabalhar com arrays sociativos 

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


//porcorer cada usuario de cada array
foreach($users as $user){
    foreach($user as $outro => $valor){
echo "$outro: $valor <br>";
}


}
echo '<br>';
echo '<hr>';


//exibir todos usuarios com foreach
foreach($users as $user){
    echo "id" . $user['id'] . "<br>";
     echo "name" . $user['name'] . "<br>";
      echo "email" . $user['email'] . "<br>";
       echo "role" . $user['role'] . "<br>";
}

echo '<br>';
 echo '<hr>';

 //exibir apenas o usuarios com funcao user 
 foreach ($users as $user) {
    if ($user['role'] === 'user') {
        echo "Nome: " . $user['name'] . " (User)<br>";
    }
} // nao percebi esta parte 

echo '<br>';
 echo '<hr>';

 foreach ($users as $user) {
    if (strpos($user['email'], '@example.com') !== false) {
        echo $user['email'] . "<br>";
    }
}






         


?>