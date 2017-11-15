<?php
  define('View', 'View/');
  define('Controller', 'Controller/');
?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Chat-Box</title>
    <link rel="stylesheet" href="./View/css/style.css">
  </head>

  <body>
    <?php
      include(View . 'header.php');

      $page = isset($_GET['page']) ? htmlentities($_GET['page']) : 'default';
      switch ($page) {
        case 'home':
          include(Controller . 'homeController.php');
          $controller = new homeController();
          $controller->run();
          break;
        case 'inscription':
          include(Controller . 'inscriptionController.php');
          $controller = new inscriptionController();
          $controller->run();
          break;
        case 'connection':
          include(Controller . 'connectionController.php');
          $controller = new connectionController();
          $controller->run();
          break;
      }

    ?>
  </body>
</html>
