<?php
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
        
        <title>Reciept</title>
    </head>
    <body>
       <h1 style="background-color:DodgerBlue;" style="color:Navy;" class="mainheading" > Reciept </h1>
   
           
      <ul>
  <li><a href="homepage.html">Home</a></li>
  <li><a href="Interests/Sports.html">Interests</a></li>
  <li><a href="CV/CV_page1.html">CV</a></li>
   <li><a href="myproduct.html">My Products</a></li>
  <li><a href="https://github.com/StephanieMangan/IS1113117321436/graphs/commit-activity">GitHub</a></li>
 
  
</ul>
        
        <h2 align ="center">This is your official reciept</h2>
        
        
        <?php
        //Echo session variables that were set on a previous page
        echo "Name: " . $_SESSION["name"] . ".";
        echo "Email: " . $_SESSION["email"] . ".";
        echo "Total is " . $_SESSION["total"] . ".";
       
        ?>
        
        <p align = "center"> Thank you for purchasing a product from SM Technoloiges.  </p>
     </body>
</html>
