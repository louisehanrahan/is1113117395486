<!DOCTYPE html>
<html>
    <head>
        <title>Select Project</title>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
        
    </head>
    
    
        
        <body background-color: #F08080;

        
        <h4 style="color:black;">Select a Product</h4>
        
        <br/>
        
        <form method="POST" action="Ebus2.php">
            
            <label for="salesforce">
                <input type="radio" id="salesforce" name="product" Checked onClick="disablebtnProceed()"/>
                SalesForce @ $100
            </label>
            
            <br/>
            
             <label for="cloud9">
                <input type="radio" id="cloud9" name="product" Checked onClick="disablebtnProceed()"/>
                cloud9 @ $200
            </label>
            
            <br/>
            
             <label for="amazon web service">
                <input type="radio" id="amazon web service" name="product" Checked onClick="disablebtnProceed()"/>
                amazon web service @ $300
            </label>
            
            <br/>
            
             <label for="gmail">
                <input type="radio" id="gmail" name="product" Checked onClick="disablebtnProceed()"/>
                gmail @ $400
            </label>
            
            <br/>
            <br/>
            
            <label for="subtotal">
                Sub Total
                <input type="text" id="subtotal" value="0.00" readonly/>
            </label>
            
            <br/>
            
            <label for="discount">
                discount @ 5%
                <input type="text" id="discount" value="0.00" readonly/>
            </label>
            
            <br/>
            
            <label for="vat">
                vat @ 10%
                <input type="text" id="vat" value="0.00" readonly/>
            </label>
            
            <br/>
            
            <label for="total">
                Total
                <input type="hidden" id="total" name="total" value="0.00" />
            </label>
            
            <br/>
            
            <button type="submit" id="btnProceed" disabled>Add to shopping cart</button>
            
        </form>
        
        <br/>
        <button onClick="calcSub()"Calculate Cost</button>
        <a role="button" href="Ebus1.php">Clear Choice</a>
        <a href="Ebus2.php" class="btn btn-success">Next</a>
        
    </body>
    
</html>