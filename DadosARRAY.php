<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    table, tr, td, th{
        border: 1px solid black;
        border-collapse: collapse
    }
</style>
<body>

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

?> 

<h1>Liste utilisatoures</h1>

<table>
    <thead>
      <tr>
            <th>Id</th>
            <th>Nom</th>
            <th>Email</th>
            <th>Role</th>
      </tr>
      
    </thead>
   
    


  <?php foreach($users as $users) : ?>
    <tr>
        <td><?= $users['id']; ?></td>
        <td><?= $users['name']; ?></td>
        <td><?= $users['email']; ?></td>
        <td><?= $users['role']; ?></td>
    </tr>

    <?php endforeach; ?> 
    <!-- melhor forma  -->
</table>
  

    
</body>
</html>