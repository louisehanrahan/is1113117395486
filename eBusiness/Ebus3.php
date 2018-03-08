<?php
//Start the session
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>RECEIPT</title>
        
    
    </head>
   <body background="desk.jpeg">
                


<br>
<br>
        <div id="receipt">
             <h2 style="color:white;">This is your receipt</h2> 
<br>
       
      <?php
            //Echo session variables that were set on previous page
            echo "Subtotal is " . $_SESSION["subtotal"]; ?>
            <br/>
           <?php echo "Name is " . $_SESSION["user_name"]; ?>
            <br/>
           <?php echo "email is " . $_SESSION["user_email"]; ?>
            <br/>
            <?php echo "Total is " . $_SESSION["total"] . "."; ?>
        </div>   

   </body>
</html>

 