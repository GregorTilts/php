<?php

require_once('connection.php');

$id = $_GET['id'];

$stmt = $pdo->prepare('SELECT * FROM books WHERE id = :id');
$stmt->execute(['id' => $id]);
$book = $stmt->fetch();

$stmt = $pdo->prepare('SELECT * FROM authors WHERE LEFT JOIN book_authors ON authors.id=book_authors.author_id WHERE  = :id');
$stmt->execute(['id' => $id]);

 var_dump($book);

 ?>;

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$book['title'];?></title>
 </head>
 <body>
    <h1><?=$book['title'];?></h1>
    <h2>Release date: <?=$book['release_date'];?></h2>
    <h2>Language: <?=$book['language'];?></h2>
    <h2>Language: <?=$book['language'];?></h2>
    <h2>Summary: <?=$book['summary'];?></h2>
    <h2>Price: <?=$book['price'];?>€</h2>
    <h2>In stock: <?=$book['stock_saldo'];?></h2>
    <h2>Pages: <?=$book['pages'];?></h2>
    <h2>Type: <?=$book['type'];?></h2>
 </body>
 </html>