<?php

function connectToDb()
{

try {

  return new PDO('mysql:host=127.0.0.1:8889; dbname=mytodo', 'root', 'root');
  
} catch (PDOException $e) {
  die($e->getMessage());
}
}

function fetchAllTasks($pdo)
{

$statement = $pdo->prepare('select * from todos');

$statement->execute();

return $statement->fetchAll(PDO::FETCH_OBJ);
}


function dd($data) {
  echo '<pre>';
  die(var_dump($data));
  echo '</pre>';
}


  