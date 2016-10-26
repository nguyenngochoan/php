<?php
include('db.php');

$query = $db->prepare('SELECT * FROM book WHERE id=:id');
$query-> bindValue(':id', $book_id);
// exécuter la requête dans la db
$result = $query->execute();

// récupérer mes données de la db
$book = $query->fetch(PDO::FETCH_ASSOC); // constant static de la classse PDO

 ?>
