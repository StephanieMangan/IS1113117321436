<?php
	// start the session
	session_start();
	?>
	

	<html>
	    <head>
	        <title>Enter Details</title>
	        
	        <!--jQuery-->
	        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	         <style type = "text/css">
	             #maincontent {
	                  top:8em;
	                  left:25em;
	                  width:30em;
	                  height:25em;
	                  position:absolute;
	                  border-style:ridge;
	             }
	 
	h1 {
    color: black;
    font-family: courier;
    font-size: 250%;
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
	
	
	input[type=text] {
	                           border: 2px solid blue;
	                           border-radius: 4px;
	                           text-align:center;
	}
	input[type=password] {
	                           border: 2px solid blue;
	                           border-radius: 4px;
	                           text-align:center;
	}
	 button[type=submit]:disabled {
	                            border: 2px solid blue;
	                           border-radius: 4px;
	                           color: black;
	                           padding: 5px;
	                           cursor: pointer;
	                           
	       }
	        button[type=submit]:enabled {
	                           background-color: #42d7f4;
	                           border-radius: 2px;
	                           border:none;
	                           color: black;
	                           padding: 5px;
	                           cursor: pointer;
	                           
	       }
	         </style>
	         
	         
	         
	         </head>
	    </head>
	    <body>
	        
	        
	     <h1 align = "center" style="background-color:DodgerBlue;"  class="mainheading" > Enter Your Details </h1>
        
        
      <ul>
 <li><a href="../homepage.html">Home</a></li>
  <li><a href="../Interests/Sports.html">Interests</a></li>
  <li><a href="../CV/CV_page1.html">CV</a></li>
   <li><a href="myproduct.html">EBusiness</a></li>
  <li> <a href="https://github.com/StephanieMangan/IS1113117321436/graphs/commit-activity"> My Github</a></li>
 
  
</ul>
	   
	        <div id ="maincontent">
	            <form action="EBus3.php" method="POST">
	                    <br>
	                    <label for = "name">
	                        <strong> &nbsp; Name:</strong>
	                        <br>
	                        &nbsp;<input type ="text" id ="name" name = "name"/>
	                    </label>
	                    <br><br>
	                    <label for "email">
	                        <strong>&nbsp; Email:</strong>
	                        <br>
	                        &nbsp;<input type = "text" id ="email" name="email"/>
	                    </label>
	                    <br><br>
	                    &nbsp;&nbsp;<label for="user_pin"><strong>PIN:</strong></label>
	                    <br>
	                   &nbsp;<input type="password" id="user_pin" placeholder="Card PIN" maxlength="4">
	                    <br><br><br>
	                <button type="submit" id="btnPurchase" disabled>Proceed with Purchase</button>
	              
	            </form>
	            
	            <br>
	            <button onClick="validateDetails()">Validate</button>
	            
	        </div>
	        
	        <script type="text/javascript" src="eBus2_validator.js"></script>
	        
	        <?php
	        //Set session variables
	        $_SESSION["total"] = $_POST["total"];
	        $_SESSION["name"] = $_POST["name"];
	         $_SESSION["email"] = $_POST["email"];
	        ?>
	        
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
  	
	<!--</footer>-->
	        
	        </body>
	</html>

