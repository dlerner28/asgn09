<!DOCTYPE html>
<html lang='en'>

  <head>
    <meta charset='utf-8'>
    <title>Document</title>
  </head>

  <body>
    
    <ul>
    <li>
    <?php foreach ($tasks as $task) : ?>
      <strike><?= $task->description; ?></strike>
      <?php else: ?>
      <?= $task->description; ?>
      <?php endif; ?>
      </li>
      <?php endforeach; ?>
    
    </ul>
    
    
  </body>

</html>
