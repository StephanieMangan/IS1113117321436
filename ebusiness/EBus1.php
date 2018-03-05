<!DOCTYPEhtml>
	<html>
	    <head>
	        <title>Select Product</title>
	        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	        <script type = "text/javascript" src ="cost_calc.js"></script>
	        <style type = "text/css">
h1 {
    color: Black;
    font-family: courier;
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
    display: inline;
}
ul li a:hover{
  color:black;
  background:blue;
}

ul li{
  list-style: none;
  display: inline;
position: relative;  
margin-left:130px;
transform:translate(20%,30%);
font-size:22px;
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
  <li><a href="../homepage.html">Home</a></li>
  <li><a href="../Interests/Sports.html">Interests</a></li>
  <li><a href="../CV/CV_page1.html">CV</a></li>
   <li><a href="myproduct.html">EBusiness</a></li>
  <li> <a href="https://github.com/StephanieMangan/IS1113117321436/graphs/commit-activity"> My Github</a></li>
 
  
</ul>
	        
	        <div id ="maincontent">
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
	        <a href="EBus1.php"><button>Clear Choice</a></button>
	        </div>
	        </div>
	        
	        <br/>
       <br/>
       <br/>
       <br/>
       <br/>
       <br/>
       <br/>

       
       <!-- Contact Section -->
    <section id="contact" class="container content-section text-center">
        <div  align = "center" class="row">

            <div align = "center"  class="col-lg-8 col-lg-offset-2">
                <h2>Contact Me</h2>
                <p></p>
                <p><a href="mailto:117321436@umail.ucc.ie">117321436@umail.ucc.ie</a>
                </p>
                <ul class="list-inline banner-social-buttons">
                    <li>
                        <a href="https://twitter.com/" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                    </li>
                    <li>
                        <a href="https://plus.google.com/+Startbootstrap/posts" class="btn btn-default btn-lg"><i class="fa fa-google-plus fa-fw"></i> <span class="network-name">Google+</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
       
       <br/>
       <br/>
       <br/>

       <!--<footer>-->
	<div id="footerCV">
		<div align = "center" id="social_media_icons" >
		<ul>
			<li><a href="http://www.facebook.com/" >
				<img src=images/facebook.png id="icon_size" alt="facebook">
			</a></li>	
			<li><a href="https://www.instagram.com/" >
				<img src=images/instagram.png id="icon_size" alt="instagram">
			</a></li>					
			<li><a href="https://www.linkedin.com/in/" >
				<img src=images/linkedin.png id="icon_size" alt="linkedin">
			</a></li>	
			<li><a href="https://twitter.com/" >
				<img src=images/twitter.png id="icon_size" alt="twitter">
			</a></li>						
		</ul>	
		</div>
		
		<br/>
		<br/>
		<br/>
		
		<div align = "Center" id="copyright">
  		&copy; Stephanie Mangan
  		<p></p>
	</div>
  	</div>
  	
	<!--</footer>-->S
	    </body>
	</html>
