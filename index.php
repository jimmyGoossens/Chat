<!DOCTYPE html>
<html>
    <head>


    </head>
    <body>
        
        <?php 
        
        $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8','root','');
          $reponse = $bdd->query('SELECT * FROM message');
            if  (isset($_POST['envoi'])){
                

      $envoi = $bdd->prepare('INSERT INTO message(message)VALUES (:msg)');
      $envoi->execute(array(
        'msg' => $_POST["msg"]
      
      ));
                
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