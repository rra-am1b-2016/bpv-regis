   <?php
   if ( isset($_POST["submit"]) )
   {
         // Maak contact met mysql-server en database
         include("./connect_db.php");
         // Maak een query die het record behorende bij het meegegeven id selecteerd.
         $sql = "SELECT * FROM `users` WHERE `id` = ".$_POST["id"];
         // Vuur de query af op de database
         $result = mysqli_query($conn, $sql);
         // Zet de resource om naar een associatief array
         $record = mysqli_fetch_array($result, MYSQLI_ASSOC);
         // Wanneer de via de url meegegeven id - pw combinatie gelijk is aan die in de database...
         if (!strcmp($_POST["pw"], $record["password"]))
         {
             
               
                  if (strcmp($_POST["password"], $_POST["verification_password"]) == 0)
                  {
                        // dan updaten we het password veld naar de nieuwe waarde en zetten we activate op true.
                        $sql = "UPDATE `users` SET `password` = '".sha1($_POST["password"])."',
                                                      `activate` = 'true'
                              WHERE              `id` = ".$_POST["id"].";";
                        $result = mysqli_query($conn, $sql);
                        if ($result)
                        {
                              echo "Uw account is geactiveerd en uw password gewijzigd.";
                              header("refresh: 4; url=index.php?content=login_form&email=".$record["id"]."@student.mboutrecht.nl");
                        }
                  }
                  else
                  {
                        echo "De twee ingevoerde wachtwoorden komen niet overeen. Probeer het nog een keer.<br>";
                        echo "U wordt doorgestuurd naar de betreffende pagina";
                        header("refresh: 4; url=index.php?content=register-activate&id=".$_POST["id"]."&pw=".$_POST["pw"]);
                  }
              
         }
         else
         {
               // Wanneer de via de url meegegeven id - pw combinatie niet gelijk is aan die in de database...
               // Dan melden we de onderstaande tekst en sturen we door naar de homepage.
               if ($record["activate"] )
               {
                     echo "Uw account is al geactiveerd. U wordt nu doorgestuurd naar de homepage.";
                     header("refresh: 4; url=index.php?content=login_form&email=".$record["id"]."@student.mboutrecht.nl");
               }
               else
               {
                  echo "U heeft geen rechten op deze pagina, u wordt doorgestuurd naar de homepage";
                  header("refresh: 400; url=index.php?content=home");
               }
         }
   }
   else
   {
?>

        
<div class="page-header">
   <h1>Wijzig uw wachtwoord</h1>
</div>
<p class="lead">
<form action="./index.php?content=register-activate" method="post" class="form-horizontal">
   <div class="form-group">
      <label for="password" class="col-sm-2 control-label">Wachtwoord: </label>
      <div class="col-sm-5">
         <input type="password" name="password" id="password" required class="form-control" placeholder="wachtwoord">
      </div>
      <div class="col-sm-5">
      </div>
   </div>
   <div class="form-group">
      <label for="verification_password" class="col-sm-2 control-label">Tik opnieuw in: </label>
      <div class="col-sm-5">
         <input type="password" name="verification_password" id="verification_password" required class="form-control" placeholder="wachtwoord">
      </div>
      <div class="col-sm-5">
      </div>
   </div>
   <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
         <button type="submit" class="btn btn-default" name="submit" value="wijzig">Wijzig wachtwoord</button>
         <input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>">
         <input type="hidden" name="pw" value="<?php echo $_GET["pw"]; ?>">
      </div>
   </div>
</form>
</p>
<?php
   }
?>