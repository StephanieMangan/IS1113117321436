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
	         </head>
	    </head>
	    <body>
	        
	       <h1 align = "center" style="background-color:DodgerBlue;"  class="mainheading" > Your purchase reciept </h1>
        
        
      <ul>
  <li><a href="../homepage.html">Home</a></li>
  <li><a href="../Interests/Sports.html">Interests</a></li>
  <li><a href="../CV/CV_page1.html">CV</a></li>
   <li><a href="myproduct.html">EBusiness</a></li>
  <li> <a href="https://github.com/StephanieMangan/IS1113117321436/graphs/commit-activity"> My Github</a></li>

  
</ul>
	        <br/>
	       
	     
	     <div id = "maincontent">
        <?php
        //Echo session varaibles that were set to the previous page
        echo "Total Price is $" .$_SESSION["total"] . "."; 
       ?>
        <br>
        <?php
        //Echo session varaibles that were set to the previous page
        echo "Name:" .$_SESSION["name"] . ".";
        ?>
       <br> 
        <?php
        //Echo session varaibles that were set to the previous page
        echo "Email:" .$_SESSION["email"] . ".";
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
<p align = "center"><img src = "https://az616578.vo.msecnd.net/files/2017/02/21/636232341000937145-2058526602_technology.jpg"  style="width:70px;height:70px;"></p>
<br/>
<br/>
<p align = "center"> Thank you for choosing SM Technologies.

</p>
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
  	
	<!--</footer>-->
	    </body>
	</html>
