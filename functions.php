<?php

function connectToDb()
{

try {

  return new PDO('mysql:host=localhost; dbname=daniell9_testing', 'daniell9_testing', 'DBA2019');
  
} catch (PDOException $e) {
  die($e->getMessage());
}
}

function fetchAllNames($pdo)
{

$statement = $pdo->prepare('select * from personnel');

$statement->execute();

return $statement->fetchAll(PDO::FETCH_OBJ);
}


function dd($data) {
  echo '<pre>';
  die(var_dump($data));
  echo '</pre>';
}


  