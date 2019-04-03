<!DOCTYPE html>
<html lang='en'>

  <head>
    <meta charset='utf-8'>
    <title>Document</title>
  </head>

  <body>
    
    <ul>
    <?php foreach ($names as $name) : ?>
    <li>
    
      <?= $name->firstName ".$name->lastName."; ?>
      <?php endforeach; ?>
      </li>
    
    </ul>
    
    
  </body>

</html>
