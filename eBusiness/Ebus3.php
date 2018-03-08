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
             <h1 style="color:white;">This is your receipt</h1> 
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
        
<a href="../homepage.html" class="btn btn-success">Return to Cloud Homepage</a>
   </body>
</html>

 