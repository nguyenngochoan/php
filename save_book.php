<?php

  // vérifier la valeur de retour
  var_dump($_POST);

  if(empty($_POST['title'])){
    header('location: add_book.php');
  }

  $date1 = strtotime($_POST['publish_date']);

  include('db.php');

  //préparation de la requête
  // cmd + maj + / : pour les commentaires
  $query = $db->prepare("INSERT INTO book (title, author, publish_date, body ) VALUES (:title, :author, :publish_date, :body )");
  // ajouter les valeurs
  $query->bindValue(':title', $_POST['title']);
  $query->bindValue(':author',$_POST['author']);
  $query->bindValue(':publish_date', $date1);
  $query->bindValue(':body',$_POST['body']);
  // exécute pour envoyer les données dans la base de données
  $result = $query->execute();

// Débuggage
var_dump($query->errorInfo());
var_dump($query);
var_dump($result);

//On redirige l'utilisateur vers la page du formulaire
// TODO: redirige vers la page save book
    header('location: add_book.php');

 ?>
