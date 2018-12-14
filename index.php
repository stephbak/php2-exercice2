<?php
$isEasy = false;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css" />
  <title>php partie2</title>
</head>
<body>
  <p>
    <?php
    if ($isEasy)
    {
      echo 'C\'est facile!!';
    }else{
      echo 'C\'est difficile!!!';
    }
    ?>
  </p>
  <p>
    <?php
    if ($isEasy != false)
    {
      echo 'C\'est facile!!';
    }else{
      echo 'C\'est difficile!!!';
    }
    ?>
  </p>
  <p>
    <?php
    if (!$isEasy)
    {
      echo 'C\'est difficile!!!';
    }else{
      echo 'C\'est facile!!';
    }
      ?>
  </p>
  <!--Ternaire-->
  <p><?= ($isEasy != true) ? 'C\'est difficile!!!' : 'C\'est facile!!';/*echo : prend en compte ce qu'il y a après le ?*/ ?></p>
</body>
</html>
