<?php
  // var_dump($_GET);

  if(isset($_GET['id'])){
    $book_id = $_GET['id'];
  }else{
    $book_id  = FALSE;
  }

  include('get_book.php');
  // include('db.php');
  // $query = $db->prepare('SELECT * FROM book WHERE id=:id');
  // $query-> bindValue(':id', $book_id);
  // // exécuter la requête dans la db
  // $result = $query->execute();  // récupérer mes données de la db
  // $book = $query->fetch(PDO::FETCH_ASSOC); // constant static de la classse PDO
  // // print '<pre>'; var_dump($book);print '</pre>';
  include('process_book.php');
 ?>

<div class="container main">
  <!-- Example row of columns -->
  <form class="form-horizontal" action="save_book.php" method="POST">
    <div class="form-group">
      <label for="title" class="col-sm-2 control-label">Titre</label>
      <div class="col-sm-10">
        <input type="text" name="title" value="<?php print $title; ?>" class="form-control" id="title" placeholder="titre" required="">
      </div>
    </div>
    <div class="form-group">
      <label for="author" class="col-sm-2 control-label">Auteur</label>
      <div class="col-sm-10">
        <input type="text" name="author"  value="<?php print $author; ?>"  class="form-control" id="author" placeholder="auteur">
      </div>
    </div>
    <div class="form-group">
      <label for="publish_date" class="col-sm-2 control-label">Date de publication</label>
      <div class="col-sm-10">
        <input type="date" name="publish_date" value="<?php print $publish_date; ?>"  class="form-control" id="publish_date" placeholder="Date">
      </div>
    </div>
    <div class="form-group">
      <label for="body" class="col-sm-2 control-label">Description</label>
      <div class="col-sm-10">
        <textarea type="text" name="body"   class="form-control" id="body" placeholder="Description" rows="5" cols="50" ><?php print $body; ?> </textarea>
      </div>
    </div>

<input type="hidden" name="book_id" value="<?php print $book_id?>">
<input type="hidden" name="op" value="<?php print $op?>">



    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Valider</button>
      </div>
    </div>
  </form>
</div>
