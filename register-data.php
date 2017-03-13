

<?php
   include("connect_db.php");
  
   if (isset($_GET["id"] ) && $_GET["id"] != "") {

      $id = $_GET["id"];
      // Selecteer de user record op basis van het id
      $query = "SELECT * FROM `users` WHERE id = " . $id;

      // Vuur de query af op de database
      $resource = mysqli_query($conn, $query);

      if ( mysqli_num_rows($resource) > 0) {

      

      // Maak een associatief array van het opgehaalde record
      $record = mysqli_fetch_array($resource, MYSQLI_ASSOC);

      // Haal de eerste drie letters van de voornaam     
      $first3OfFirstname = substr($record["firstname"], 0, 3);

      // Haal de laatste vier letters van de achternaam
      $last4OfLastname = substr($record["lastname"], (strlen($record["lastname"]) - 4), 4);

      // Haal de datum en tijd op
      $date = date("d-m-Y H:i:s");

      // Plak de voorafgaande drie variabelen aan elkaar
      $tempPassword = $first3OfFirstname.$date.$last4OfLastname;
      
      // Maak er een sha1 hash van (32 bits)
      $tempPassword = sha1($tempPassword);

      if ( $record["activate"] == "false" )
      {
            $query = "UPDATE `users` SET `password` = '" . $tempPassword . "' WHERE `id` = " . $id;

            mysqli_query($conn, $query);
       
      
            $to = $id."@student.mboutrecht.nl";
            $subject = "Activatielink voor inloggen";
            $message = "<!DOCTYPE html>
                        <html>
                              <head>
                                    <title>Registratie</title>
                                    <style>
                                    body
                                    {
                                          font-family: Verdana, Arial;
                                          font-size: 1em;
                                          color: rgb(30, 30, 30);
                                          
                                    }
                                    </style>
                              </head>
                              <body>
                                    <p>Geachte mevrouw/heer ".$record["firstname"]." ".$record["infix"]." ".$record["lastname"]."</p>".
                                    "Bedankt voor het registreren. Om het registratieproces<br>". 
                                    "te voltooien moet u op de onderstaande link klikken<br>". 
                                    "<a href='http://www.bpv-regis.nl/index.php?content=register-activate&id=".$id."&pw=".$tempPassword."'>registratielink</a> <br>".
                                    "<p>Met vriendelijke groet,</p>".
                                    "Administrator                        
                              </body>
                        </html>";
            $headers = "Content-Type: text/html; charset=UTF-8"."\r\n";
            $headers .= "Cc: admin@gmail.com, root@gmail.com"."\r\n";
            $headers .= "Bcc: belastingdienst@gmail.com"."\r\n";
            $headers .= "From: admin@gmail.com";

            mail($to, $subject, $message, $headers);
            echo "succes";
      } else {
            echo "al geactiveerd";
      }
   } else {
            echo "studentnummer_error";
   }
} else {
      echo "id_error";
}
?>

