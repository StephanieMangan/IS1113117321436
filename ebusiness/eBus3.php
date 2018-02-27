<?php
	session_start();
	?>
	<html>
	    <head>
	        <title>RECEIPT</title>
	             <style type = "text/css">
h1 {
    color: black;
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
li {
    display: inline;
}

	    #mainContent {
	        top:8em;
	        left:25em;
	        width:30em;
	        height:25em;
	       position:absolute;
	       border-style:groove;
	                 }
	             </style>
	         </head></PHP>
	    </head>
	    <body>
	        
	       <h1 align = "center" style="background-color:DodgerBlue;"  class="mainheading" > Your purchase reciept </h1>
        
        
      <ul>
  <li><a href="../homepage.html">Home    </a></li>
 <li><a href="../Interests/Sports.html">Interests    </a></li>
  <li><a href="../CV/CV_page1.html">CV    </a></li>
   <li><a href="../ebusiness/EBus1.php">EBusiness    </a></li>

  
</ul>
	        <br/>
	        <div id = "mainContent">
	        <?php
	        //Echo session varaibles that were set to the previous page
	        echo "Total Price is " .$_SESSION["total"] . "."; 
	        ?>
	        <br/>
	        <br/>

	         <?php
	        //Echo session varaibles that were set to the previous page
	        echo "Name: " .$_SESSION["name"] . ".";
	        ?>
	        	        <br/>
	        <br/>

	         <?php
	        //Echo session varaibles that were set to the previous page
	         echo "Email: " .$_SESSION["email"] . ".";
	        ?>
	       
	        </div>
	        
	        <br/>
	      
 
	    </body>
	</html>
