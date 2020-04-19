<!DOCTYPE html>
<html>
   <body>
      <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
         Name: <input type="text" name="fname">
         <input type="submit">
      </form>
      <?php
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
             // collect value of input field
             $car = $_POST['fname'];
             switch($car)
         {
             case "Audi":
                 echo "Audi is amazing";
                 break;
             case "Mercedes":
                 echo "Mercedes is mindblowing";
                 break;
             case "Jaguar":
                 echo "Jaguar is the best";
                 break;
             default:
                 echo "$car is Ok";
         }
         }
         ?>
   </body>
</html>
