<?php
session_start();
$name = $_REQUEST['name'];
$email =$_REQUEST['email'];
?>
	<html>
	    <head>
	        <title>RECEIPT</title>
	        <!--Adding style-->
	             <style type = "text/css">
h1 {
    color: Black;
    font-family: courier;
    font-size: 250%;
    top:10em;
	left:25em;
	text-align:center;
}
p {
   text-align:center;
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
	         </head>
	    </head>
	    <body>
	        <!--Adding a heading-->
	       <h1 style="background-color:DodgerBlue;"  class="mainheading" > Your purchase reciept </h1>
        
        
     <!--Adding the nav bar-->
 <ul>
  <li><a href="../homepage.html">Home</a></li>
  <li><a href="../Interests/Sports.html">Interests</a></li>
  <li><a href="../CV/CV_page1.html">CV</a></li>
   <li><a href="myproduct.html">EBusiness</a></li>
  <li> <a href="https://github.com/StephanieMangan/IS1113117321436/graphs/commit-activity"> My Github</a></li>

  
</ul>
	        <br/>
	       
	     
	      <div id = "mainContent">
        <?php
        //Echo session varaibles that were set to the previous page
        echo("<strong>Name: </strong>". $name);
        echo("<br><br><strong>Email: </strong>". $email);
        echo "<br><br><strong>Total Price is $</strong>" .$_SESSION["total"] . "."; 

        ?>

        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        

<br/>
<p><img src = "https://az616578.vo.msecnd.net/files/2017/02/21/636232341000937145-2058526602_technology.jpg"  style="width:70px;height:70px;"></p>
<br/>
<br/>
<p> Thank you for choosing SM Technologies.
<br/>
<br/>
<a href = "homepage.html" class = "btn btn-dark">  Back To Home.</a>

</p>
        </div>
        
        <br/>
       <br/>
       <br/>
      <br/>
       <br/>
       <br/>
       <br/>
       <br/>
       <br/>
       <br/>

       <br/>
       <br/>
       <br/>
       <br/>
       <br/>
       <br/>
       <br/>
       <br/>
       <br/>
       <br/>
       <br/>
       <br/>
       <br/>

         <br/>
       <br/>
       <br/>
       <br/>
       <br/>
       <br/>
       <br/>

       
        <!-- Contact Section -->
    <section id="contact" class="container content-section text-center">
        <div class="row">

            <div class="col-lg-8 col-lg-offset-2">
                <h2>Contact Me</h2>
                <p></p>
                <p><a href="mailto:117321436@umail.ucc.ie">117321436@umail.ucc.ie</a>
                </p>
                
                <br/>
                <br/>
              
            </div>
        </div>
    </section>
       
       <br/>
       <br/>
       <br/>
 <!--<footer>-->
	<div id="footerCV">
		<div id="social_media_icons" >
		<ul>
			<li>
				<img src="https://seeklogo.com/images/F/facebook-logo-39A76724E4-seeklogo.com.png" alt ="logo" style="width:30px;height:30px;">
			</li>	
			<li>
				<img src="https://upload.wikimedia.org/wikipedia/commons/3/30/The_Instagram_Logo.jpg" alt ="logo" style="width:30px;height:30px;">
		</li>					
			<li>
				<img src="https://cdn.worldvectorlogo.com/logos/twitter-4.svg" alt ="logo" style="width:30px;height:30px;">
		</li>						
		</ul>	
		</div>
		
		<br/>
		<br/>
		<br/>
		
		<div id="copyright">
  		&copy; Stephanie Mangan
  		<p></p>
	</div>
  	</div>
  	
	<!--</footer>-->
	    </body>
	</html>
