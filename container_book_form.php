<div class="container main">
  <!-- Example row of columns -->
  <form class="form-horizontal" action="save_book.php" method="POST">
    <div class="form-group">
      <label for="title" class="col-sm-2 control-label">Titre</label>
      <div class="col-sm-10">
        <input type="text" name="title" class="form-control" id="inputEmail3" placeholder="titre" required="">
      </div>
    </div>
    <div class="form-group">
      <label for="author" class="col-sm-2 control-label">Auteur</label>
      <div class="col-sm-10">
        <input type="text" name="author" class="form-control" id="author" placeholder="auteur">
      </div>
    </div>
    <div class="form-group">
      <label for="publish_date" class="col-sm-2 control-label">Date de publication</label>
      <div class="col-sm-10">
        <input type="date" name="publish_date" class="form-control" id="publish_date" placeholder="Date">
      </div>
    </div>
    <div class="form-group">
      <label for="body" class="col-sm-2 control-label">Description</label>
      <div class="col-sm-10">
        <textarea type="text" name="body" class="form-control" id="body" placeholder="Description" rows="5" cols="50" ></textarea>
      </div>
    </div>

    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Valider</button>
      </div>
    </div>
  </form>
</div>
