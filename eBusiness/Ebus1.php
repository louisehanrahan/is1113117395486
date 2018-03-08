<!DOCTYPE html>
<html>
    <head>
        <title>Select Project</title>
        
        <!--jQuery-->
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="cost_calc.js"></script>
        
      <style>
            
       
    button1{
    
    
    color: black;
    
}

button{
    
    color: black;
    
}
</style>
    </head>
    <body background="desk.jpeg">
        
        <form method="POST" action="Ebus2.php">
            
            <br>
           <h3 style="color:white;">Please Select A Product</h3>
        <br> 
        <br>
        
        
        
            <label for="salesforce">
                <input type="radio" id="salesforce" name="product" Checked onClick="disablebtnProceed()"/>
                SalesForce @ &euro; 100
            </label>
            
            <br>
            
            <label for="amazon web service">
                <input type="radio" id="amazon web service" name="product" Checked onClick="disablebtnProceed()"/>
                amazon web service @ &euro; 300
            </label>
            
            <br>
            
             <label for="cloud9">
                <input type="radio" id="cloud9" name="product" Checked onClick="disablebtnProceed()"/>
                cloud9 @ &euro; 200
            </label>
            
            <br>
            
             <label for="gmail">
                <input type="radio" id="gmail" name="product" Checked onClick="disablebtnProceed()"/>
                gmail @ &euro; 400
            </label>
            
            <br>
            
            <label for="subtotal">
                Sub Total:
                <input type="text" id="subtotal" name="subtotal" value="0.00" readonly/>
            </label>
            
            <br>
            
            <label for="VAT">
                VAT:
                
                <input type="text" id="VAT" name="VAT" value="0.00" readonly/>
            </label>
            
            <br>
            
            <label for="discount">
                discount:
                <input type="text" id="discount" name="discount" value="0.00" readonly/>
            </label>
            
            <br>
            
            <label for="total">
                Total:
                <input type="text" id="total" name="total" value="0.00" readonly/>
                <br>
            </label>
                <br>
                <br>
                
                  <button type ="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
             <br/>
        
        <button onClick="calcSub();">Calculate Cost</button>
        <a role="button" href="Ebus1.php">Clear Choice</a>
        
       
        </form>
        
        
        
    </body>
    
</html>