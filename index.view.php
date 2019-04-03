<!DOCTYPE html>
<html lang='en'>

  <head>
    <meta charset='utf-8'>
    <title>Document</title>
  </head>

  <body>
    
    <ul>
<<<<<<< HEAD

      <?php foreach($tasks as $task) : ?>
       <li>

        <?php if($task->completed) : ?>

        <strike><?= $task->description; ?></strike 
          <?php else: ?>

          <?= $task->description; ?>
        <?php endif; ?>

      </li>
=======
    <?php foreach ($names as $name) : ?>
    <li>
    
      <?= $name->firstName ".$name->lastName."; ?>
>>>>>>> 13-pdo
      <?php endforeach; ?>
      </li>
    
    </ul>
    
    
  </body>

</html>
