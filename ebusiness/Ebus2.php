<?php
	// start the session
	session_start();
	?>
	

	<html>
	    <head>
	        <title>Enter Details</title>
	        
	        <!--jQuery-->
	        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	         <PHP><head><link href="Ebus.css" rel="stylesheet" type="text/css">
	         <style type = "text/css">
	             #content {
	                  top:8em;
	                  left:25em;
	                  width:30em;
	                  height:25em;
	                  position:absolute;
	                  border-style:ridge;
	             }
	 
	 h1 {
    color: navy;
    font-family: verdana;
    font-size: 250%;
}            
	 ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    background-color: #dddddd;
    font-size: 150%;
}
	
	li{
	    float: left;
	     display: inline;
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
	         
	         
	         
	         </head></PHP>
	    </head>
	    <body>
	        
	        
	     <h1 align = "center" style="background-color:DodgerBlue;"  class="mainheading" > Enter Your Details </h1>
        
        
      <ul>
  <li><a href="../homepage.html">Home</a></li>
  <li><a href="../Interests/Sports.html">Interests</a></li>
  <li><a href="../CV/CV_page1.html">CV</a></li>
   <li><a href="ebusiness/EBus1.php">EBusiness</a></li>
  
 
  
</ul>
	   
	        <div id ="content">
	            <form action="Ebus3.php" method="POST">
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
	        
	        <script type="text/javascript" src="ebus2_validator.js"></script>
	        
	        <?php
	        //Set session variables
	        $_SESSION["total"] = $_POST["total"];
	        $_SESSION["name"] = $_POST["name"];
	         $_SESSION["email"] = $_POST["email"];
	        ?>
	        
	        </body>
	</html>

