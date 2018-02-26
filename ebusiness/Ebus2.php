<?php
//start the session
session_start();
?>
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
        
        <title> Enter Details</title>
        
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        
        <script type="text/javascript" src ="eBus2_validator.js"></script>
    </head>
    
    <body>
        
     <h1 style="background-color:DodgerBlue;" style="color:Navy;" class="mainheading" > Enter your details.  </h1>

 <ul>
  <li><a href="homepage.html">Home</a></li>
  <li><a href="Interests/Sports.html">Interests</a></li>
  <li><a href="CV/CV_page1.html">CV</a></li>
   <li><a href="myproduct.html">My Products</a></li>
  <li><a href="https://github.com/StephanieMangan/IS1113117321436/graphs/commit-activity">GitHub</a></li>
 
  
</ul>
        
        <h4 align = "center">Please enter your payment details.</h4>
        
            <br />
            <div align = "center">
            <form method="POST" action="eBus3.php">
                
                <label for="user_pin">
                     PIN 
                </label>
                
                <input type="password" id="user_pin" placeholder="Card Pin" maxlength="4">
                    
               <button onClick="validateDetails()"> Validate </button>
               
               <br/>
               <br/>
                
                <label for="name">
                     Name 
                </label>
                
                <input type="name" id="name">
                
                 <br/>
               <br/>
                
                 <label for="email">
                     Email 
                </label>
                
                <input type="name" id="email">
            </form>
            
            <br />
            
         <button type="Submit" id="btnPurchase" disabled> 
                    Proceed with Purchase 
                </button>

        <?php
        //set variables for the session
        $_SESSION["total"] = $_POST["total"];
        ?>
        
        </div>
    </body>
    
    
    
</html>