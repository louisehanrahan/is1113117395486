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
             <h>Here is your receipt</h> 
<br>
       
      <?php
            //Echo session variables that were set on previous page
            echo "Subtotal is " . $_SESSION["subtotal"]; ?>
            <br/>
           <?php echo "VAT is " . $_SESSION["VAT"]; ?>
            <br/>
           <?php echo "Discount is " . $_SESSION["discount"]; ?>
            <br/>
            <?php echo "Total is " . $_SESSION["total"] . "."; ?>
        </div>   

   </body>
</html>

 