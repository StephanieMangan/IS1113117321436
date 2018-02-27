<!DOCTYPEhtml>
	<html>
	    <head>
	        <title>Select Product</title>
	        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	        <script type = "text/javascript" src ="cost_calc.js"></script>
	        <style type = "text/css">
h1 {
    color: Black;
    font-family: verdana;
    font-size: 250%;
    top:10em;
	left:25em;
}


	 ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    background-color: #dddddd;
    font-size: 150%;
}
li {
	    float: left;
	     display: inline;
	}

	        #maincontent {
	                        top:13em;
	                        left:25em;
	                        width:30em;
	                        height:30em;
	                        position:absolute;
	                        border-style:groove;
	        }
	        #button1 {
	            top:24em;
	            left:3em;
	            position:absolute;
	        }
	        #button2 {
	            top:24em;
	            left:13em;
	            position:absolute;
	        }
	        #button3 {
	            top:26em;
	            left:9em;
	            position: absolute;
	        }
	       
	        input[type=text] {
	                           border: 2px solid black;
	                           border-radius: 4px;
	                           text-align:center;
	}
	       button[type=submit]:disabled {
	                           background-color: grey;
	                           border-radius: 2px;
	                           border:none;
	                           color: black;
	                           padding: 5px;
	                           cursor: pointer;
	                           
	       }
	       button[type=submit]:enabled {
	                          color: black;
	       }
	       button {
	            
	                           border-radius: 2px;
	                           border:none;
	                           color: black;
	                           padding: 5px;
	                           cursor: pointer;
	       }
	       button:hover {
	           color:black;
	       }
	       
	       
	        </style>
	    </head>
	    <body>
	        
	         <h1 align = "center" style="background-color:DodgerBlue;"  class="mainheading" > Select A Product </h1>
        
        
      <ul>
  <li><a href="homepage.html">Home</a></li>
  <li><a href="Interests/Sports.html">Interests</a></li>
  <li><a href="CV/CV_page1.html">CV</a></li>
   <li><a href="ebusiness/EBus1.php">EBusiness</a></li>
  <li><a href="CV/CV_page1.html">CV</a></li>
 
  
</ul>
	        
	        <div id ="maincontent">
	            <br>
	        <form method ="POST" action ="Ebus2.php">
	            <label for = "salesforce">
	            &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" id="salesforce" name="product"  onClick="disablebtnProceed()"/>
	            Salesforce @ $100
	            </label>
	            <br/><br>
	            <label for ="cloud9">
	               &nbsp;&nbsp;&nbsp;&nbsp;<input type = "radio" id ="cloud9" name = "product" onClick = "disablebtnProceed()"/>
	                Cloud 9 @ $200
	            </label>
	            <br><br>
	            <label for= "aws">
	             &nbsp;&nbsp;&nbsp;&nbsp;<input type = "radio" id="aws" name="product" onClick="disablebtnProceed()"/>
	                Amazon Web Services @ $300
	            </label>
	            <br><br>
	            <label for ="Gmail">
	              &nbsp;&nbsp;&nbsp;&nbsp;<input type = "radio" id ="Gmail" name = "product" onClick = "disablebtnProceed()"/>
	                Gmail @ $400
	            </label>
	            
	            <br><br><br>
	            <label for ="subtotal">
	            <Strong> &nbsp;  Sub Total:</Strong> 
	              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type = "text" id="subtotal" name="subtotal" value="0.00" readonly/>
	            </label>
	            <br><br>
	            <label for = "discount">
	                <strong>&nbsp; Discount @ 5%:</strong>
	                <input type = "text" id ="discount" name ="discount" readonly/>
	                <br> <strong> &nbsp;&nbsp;(-Discount)</strong>
	            </label>
	            <br><br>
	            <label for ="vat">
	                <strong>&nbsp; Vat @ 10%:</strong>
	               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type = "text" id ="vat" name ="vat" readonly />
	            </label>
	            
	            <br><br>
	            
	            <label for ="total">
	             <strong>  &nbsp; Total:</strong> 
	              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type ="text" id="total" name = "total" value="0.00" readonly/>
	            </label>
	            
	            <br><br>
	            <div id ="button1">
	            <button type = "submit" id="btnProceed" disable>Add to Shopping Cart</button>
	            </div>
	            </form> 
	            <div id ="button2">
	          <button onClick="calcSub();calcDisVatTotal()">Calculate Cost</button>
	          </div>
	          
	       
	        
	        <br/>
	        <div id ="button3">
	        <a href="Ebus1.php"><button>Clear Choice</a></button>
	        </div>
	        </div>
	    </body>
	</html>
