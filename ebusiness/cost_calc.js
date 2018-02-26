/* global $ */
 var argSubTotal;
 
function calcSub(){
    
   
    
    if(document.getElementById("Salesforce").checked) { 
    argSubTotal = 100;
    
   } else if  (document.getElementById("AWS").checked) { 
     argSubTotal = 300;
     
    } else if  (document.getElementById("Amazon").checked) { 
     argSubTotal = 400;
     
     } else  {
         argSubTotal = 200;
}

calcDisVatTotal(argSubTotal);

}

function calcDisVatTotal(parmSubTotal){
    var SubTotal = argSubTotal;
    var argVat;
    var argDiscount;
     var argtotal;
     
     argDiscount = argSubTotal * 0.05;
     argVat = argSubTotal * 0.1;
     argtotal = ((argSubTotal - argDiscount) + argVat);
     
     display(argSubTotal, argDiscount, argVat, argtotal);
}
 
 
 function display(parm1, parm2, parm3, parm4){
     
 document.getElementById("SubTotal").value=parm1;
 document.getElementById("Discount").value=parm2;
  document.getElementById("Vat").value=parm3;
 document.getElementById("total").value=parm4;

 
 enablebtnProceed();
 
 }
 
function enablebtnProceed(){
     $('#btnProceed').prop('disabled', false);
     
 }
 
 function disabledbtnProceed() {
     $('#btnProceed').prop('disabled', true);
     
 }
 
 
 
