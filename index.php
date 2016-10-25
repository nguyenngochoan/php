<?php


  $bibi = 'baba';
  if(TRUE)
  {
    print $bibi;
  }
  
$books = [
  // 1 élém $book
  [
    'title' =>'GOTLIB',
    'author' => [
      'name' => 'Gotlib',
      'birth' => '1934',
      'deceased' => FALSE
    ],
    'publication' => '1984',
    'available' => TRUE
  ],
  // 2 élém $book
  [
    'title' =>'CINEMASTOCK...',
    'author' => [
      'name' => 'Gotlib',
      'birth' => '1934',
      'deceased' => 2011
    ],
    'publication' => '1984',
    'available' => TRUE
  ],
  // 3 élém $book
  [
    'title' =>'GAI-LURON OU LA JOIE DE VIVRE',
    'author' => [
      'name' => 'Gotlib',
      'birth' => '1934',
      'deceased' => TRUE
    ],
    'publication' => '1984',
    'available' => TRUE
  ]
];


// code d'affichage
print '<section>';
foreach ($books as $book) {
 $titre =  show_title($book['title']);
 print $titre;
  foreach ($book['author'] as $key => $value) {
      //print ucfirst($key). ':' .$value .'<hr/>';
      show_authorDetail($key, $value);
  }
}
print '</section>';

/*
print '<aside>';
foreach($books as $key=>$value){
  print '<h2>'.$book['title'].'</h2>';
  foreach ($book['author'] as $key => $value) {
      //print ucfirst($key). ':' .$value .'<hr/>';
      auteur($book['author']);
  }
}
print '</aside>';
*/

function show_title($title){
    $markup = '<h2>'.$title.'</h2>';
    return $markup;
}


function auteur($author){
  foreach ($author as $key => $value) {
      print ucfirst($key). ':' .$value .'<hr/>';
  }
}

function show_authorDetail($key, $value){
      print ucfirst($key). ':' .$value.'<hr/>';
}

function authorDetail2(){
  if(($key == 'deceased') && (!$value)){
  }else{
    return  ucfirst($key). ':' .$value .'<hr/>';
  }
}

?>
