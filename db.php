<?php

 $db = new PDO("mysql:host=127.0.0.1;dbname=aston;",
              "root",
              "");

// $book = [
//   'title'=>'Gotlib3',
//   'author'=>'Gotlib3',
//   'publish_date'=> 1234331,
//   'body'=>'un libre humuouristique de Gotlib'
// ];
//préparation de la requête
// cmd + maj + / : pour les commentaires
// $query = $db->prepare("INSERT INTO book (title, author, publish_date, body ) VALUES (:title, :author, :publish_date, :body )");
// // ajouter les valeurs
// $query->bindValue(':title', $book['title']);
// $query->bindValue(':author', $book['author']);
// $query->bindValue(':publish_date', $book['publish_date']);
// $query->bindValue(':body', $book['body']);
// // exécute pour envoyer les données dans la base de données
// $result = $query->execute();
// //afficher les erreurs
// print_r($query->errorInfo());
// // observer le contenu de la variable;
// var_dump($query);
// var_dump($result);
?>
