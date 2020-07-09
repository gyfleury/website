<?php include 'head.php'; ?>

<div class="right-section">
      <form action="contact.php" method="post">
          <label for="pseudo">Pseudo</label>
          <input type="text" name="pseudo"><br>
          <label for="email">Email </label>                       
          <input type="text" name="email"><br>
          <textarea name="txt"> </textarea><br>
                 
          <input type="submit" value="Print">
      </form>

            <?php
            echo $_POST['pseudo'] . '<br>';
            echo $_POST['email'] . '<br>';
            echo $_POST['txt'] . '<br>';
            ?>
<?php include 'footer.php'; ?>
