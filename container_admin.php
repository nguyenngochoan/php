<?php
  include('get_all_books.php');
 ?>
<div class="container main">
  <!-- Example row of columns -->
  <div class="table-responsive">
  <table class="table">

     <thead>
      <tr>
         <th>#</th>
         <th>Titre</th>
         <th>Auteur</th>
         <th>Date de publication</th>
      </tr>
     </thead>

     <tbody>

<?php
/* Méthode 1 :
foreach($books as $book){
  print '<tr>';
  print '<td>' . $book['id'] . '</td>';
  print '<td>' . $book['title'] . '</td>';
  print '<td>' . $book['author'] . '</td>';
  print '<td>' . $book['publish_date'] . '</td>';
  print '</tr>';
};
 */?>

   <?php foreach($books as $book) : ?>
    <tr>
      <td><?php print  $book['id']; ?></td>
      <td><?php print  $book['title']; ?> </td>
      <td><?php print  $book['author']; ?></td>
      <td><?php print  date('d/m/Y',$book['publish_date']); ?></td>
      <td>
        <a class="btn_btn-info" href="add_book.php?id=<?php print $book['id']; ?>">Modifier</a>
      </td>
    </tr>
  <?php endforeach; ?>


     </tbody>

  </table>
</div>
</div>
