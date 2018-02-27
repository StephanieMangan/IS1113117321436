<?php
	session_start();
	?>
	<html>
	    <head>
	        <title>RECEIPT</title>
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
  <li><a href="../homepage.html">Home</a></li>
  <li><a href="../Interests/Sports.html">Interests</a></li>
  <li><a href="../CV/CV_page1.html">CV</a></li>
   <li><a href="../ebusiness/myproduct.html">EBusiness</a></li>
  <li> <a href="../https://github.com/StephanieMangan/IS1113117321436/graphs/commit-activity"> My Github</a></li>

  
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
