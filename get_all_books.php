<?php

  include('db.php');

  $query = $db->query("SELECT id, title, author, publish_date FROM book");
  // exécuter la requête dans la db
  $result = $query->execute();


  // récupérer mes données de la db
  $books = $query->fetchAll(PDO::FETCH_ASSOC); // constant static de la classse PDO

  // débuggage
  // var_dump($query->errorInfo());
  // var_dump($query);
  // var_dump($result);
  // print "<pre>";
  // var_dump($books);
  // print  "</pre>";
 ?>
