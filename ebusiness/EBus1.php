<!DOCTYPE html>
<html>
    <head>
        <style>
        h1 {
    color: navy;
    font-family: verdana;
    font-size: 300%;
}
 h2 {
    color: black;
    font-family: courier;
    font-size: 150%;
 }
p  {
    color: black;
    font-family: courier;
    font-size: 160%;
}
            ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    background-color: #dddddd;
    font-size: 100%;
}
li {
    display: inline;
}
        </style>
        
        <title>Select Product</title>
        
    <!--jQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="cost_calc.js"></script>
    
    </head>
    
    <body>
             <h1 style="background-color:DodgerBlue;" style="color:Navy;" class="mainheading" > My products </h1>
   
           
      <ul>
  <li><a href="../homepage.html">Home</a></li>
  <li><a href="../Interests/Sports.html">Interests</a></li>
  <li><a href="../CV/CV_page1.html">CV</a></li>
  <li><a href="myproduct.html">My Products</a></li>
  <li><a href="https://github.com/StephanieMangan/IS1113117321436/graphs/commit-activity">GitHub</a></li>
 
  
</ul>
        
        <h2 align ="center">Select A Product </h2>
        
        <br/>
        <div align = "center" > 
        <form method="POST" action="Ebus2.php">
        
       ><label for="Sales Force">
<input type="radio" id="Salesforce" name="product" checked onClick="disablebtnProceed()"/> 
Sales Force @ $100
</label>

<br/>
<br/>

<label for="Cloud 9">
<input type="radio" id="AWS" name="product" checked onClick="disablebtnProceed()"/> 
Cloud9 @ $300
</label>

<br/>
<br/>

<label for="Amazon">
<input type="radio" id="Amazon" name="product" checked onClick="disablebtnProceed()"/> 
Amazon @ $200
</label>

<br/>
<br/>

<label for="Gmail">
<input type="radio" id="Gmail" name="product" checked onClick="disablebtnProceed()"/> 
Gmail @ $150
</label>

<br/>
<br/>

<label for="subtotal">
Sub Total
<input type="text" id="subtotal" value="0.00" readonly/>
</label>
<br/>
<br/>
<label for="discount">
Discount @ 5%
<input type="text" id="discount" value="0.00" readonly/>
</label>
<br/>
<br/>

<label for="vat">
Vat @ 10%
<input type="text" id="vat" value="0.00" readonly/>
</label>
<br/>
<br/>
<label for="total">
Total
<input type="text" id="total" name="total" value="0.00" readonly/>
</label>
<br/>
<br/>
<button type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>

</form>

        <br/>
        <br/>
        
        <br/>
        <br/>
        <button onClick="calcSub()">Calculate Cost</button>
          <a role="button" href="Ebus1.php">Clear Choice</a>
       </div>
       
    </body>
</html>