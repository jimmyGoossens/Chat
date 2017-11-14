<!DOCTYPE html>
<html>
    <head>
        <style>
            section{height:100px;width:80%; border:3px solid black;overflow: scroll;}
        </style>
    </head>
    <body>

        <?php
          $bdd = new PDO('mysql:host=10.20.0.158;dbname=test;charset=utf8','user','root');
          $reponse = $bdd->query('SELECT * FROM message');
          if  (isset($_GET['envoi'])){

              $envoi = $bdd->prepare('INSERT INTO message(message)VALUES (:msg)');
              $envoi->execute(array(
                'msg' => $_GET["msg"]));
          }
        ?>

      <header>
          <p>login</p>
          <p>register</p>
      </header>

      <section>
          <?php
            while ($donnees = $reponse->fetch()){

          ?>
          <p><?php echo $donnees['message'] ;?> </p>
          <?php
            }
          ?>

      </section>

      <form method="post" action="index.php">
          <textarea name="msg" id="id"></textarea>
          <input type="submit" name="envoi" value="envoi">
      </form>
      
    </body>
</html>
