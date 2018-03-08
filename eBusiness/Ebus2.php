<?php
//start the session
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        
        <title> Enter Details</title>
        
        
        <!--jQuery-->
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        
        <style>
        
  
    </style>
    
    </head>
    
    <body  background="desk.jpeg">
        
        <br>
        <br>
        <br>
        <h1 style="color:white;">Please enter your payment details</h1>
        
            <br>
            <br>
            
            <form method = "POST" action = "Ebus3.php">
                
                <label for="user_pin">
                     PIN:
                </label>
                
                <input type="password" id="user_pin" placeholder="Card Pin" maxlength="4" required>
                <br/>
                <br/>
                 <form method = "POST" action = "Ebus3.php">
                     
                <label for="user_name">
                    Name:
                </label>
                    
                <input type="text" id="user_name" placeholder="Name" required>
                <br/>
                <br/>
                 <form method = "POST" action = "Ebus3.php">
                     
                <label for="user_email">
                    Email:
                </label>
                
                <input type="text" id="user_email" placeholder="email" required>
                <br/>
                <br/> 
                
                <!--Adding button to form-->
                
                <button type="Submit" id="btnPurchase" disabled> 
                    Proceed with Purchase 
                </button>
         
            <br>
            
             <!--Adding button to form-->
             
            <button onClick="validateDetails()"> Validate </button>
        </form>
        <script src="ebus2_validator.js"></script>
        
        <?php
        //Set session variables
        $_SESSION["subtotal"] = $_POST["subtotal"];
        $_SESSION["VAT"] = $_POST["VAT"];
        $_SESSION["discount"] = $_POST["discount"];
        $_SESSION["total"] = $_POST["total"];
        ?>
    </div> 
    

    </body>
    
    
    
</html>

