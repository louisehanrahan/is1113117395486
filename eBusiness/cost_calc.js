/* global $ */

function calcSub(){
    
    var argSubTotal;
    
    if(document.getElementById('salesforce').checked) {
    argSubTotal = 100;
  }
  
    if(document.getElementById('cloud9').checked) {
        argSubTotal = 200;
    }
    
    if(document.getElementById('amazon web service').checked) {
        argSubTotal = 300;
    
  }
  if(document.getElementById('gmail').checked) {
        argSubTotal = 400;
  }

  display(argSubTotal);
}



function display(parm1){
    
    document.getElementById("subtotal").value = parm1;
    document.getElementById("total").value = parm1;
    document.getElementById("vat").value = parm1;
    document.getElementById("discount").value = parm1;
    
    enablebtnProceed();
}
    
    function calcDisVatTotal(){
    
   var parmSubTotal;
   var argSubTotal;
        if  argSubTotal = 100;
            parmSubTotal = 
            
        }
    }
    
    
    function enablebtnProceed(){
        $('#btnProceed').prop('disabled', false);
    }
    
    function disablebtnProceed(){
        $('#btnProceed').prop('disabled', true);
    }