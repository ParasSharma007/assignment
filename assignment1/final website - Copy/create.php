<?php
include 'connect.php';

?>
<html>
<head>
<!--Title of the website -->
<title>
  MY WEB PAGE
</title>
<!--Stylesheet and Javascript reference -->
<link href = "CSS/business.css" rel="stylesheet" type="text/css"/>
<script src = "Javascript/javascript.js" type="text/javascript"> </script> 
<script src="Javascript/jquery.js"></script>
<!--<script>
$(document).ready(function(){
  $("#Hide").click(function(){
    $("#contain_area").hide();
  });
  $("#Show").click(function(){
    $("#contain_area").show();
  });
});
</script> -->

<body>
</head>
<!--Container -->
<div id = "container">
<!--Header -->
<div id = "header">
<br>
<div>
<img src="LogoSath.jpg" align="Left" name="logo" id="logo">
<h1> "SAFRANC's PROFILE"</h1>
</div>
<div>
<!--Menu Navigation -->
<ul id = Navigation> 
<li><a href="home1.html">HOME</a></li> 
<li><a href="aboutme.html">ABOUT ME</a></li> 
<li><a href="projects.html">PROJECT</a></li> 
<li><a href="services.html">SERVICES</a></li> 
<li><a href="https://github.com/safranc/Sathproject/tree/master/Project" target="_blank">GITHUB</a></li>
<li><a href="contactme.html">CONTACT ME</a></li>
<li><a href="Businesscontact.html" class="Trade">TRADE CONTACTS </a></li>
</ul> 
<div id="contain_area">
<!--contain Area -->

<a href="login.php?login=false"><h1>Please log out</h1></a>


<!-- First Contact -->
                 <div id="c1">
                 <div>
                 <h1 id="mukesh">  1. Cherry </h1>
                  <form method="post" action="" >
                 <input type="submit" value="Show Detail" id="show1" class="show1" name="show1" >
                 <input type="submit" value="Hide Detail" id="hide" class="hide" >     
                 </form>
                 <div>
                 
                 <?php
							$dsn= 'mysql:host=localhost;dbname=login';
							$username = 'root';
							$password= '';
							try{
							$db= new PDO($dsn, $username, $password);
							}
							catch(PDOException $exception){
								echo "failed to connect";
							} 
				
                             
                          if(isset($_POST['show1']))
                            {
                            
                            $query="select * from address where id='2'";
                            $result=$db->query($query);
                            $row = $result->fetch();
                           
						     echo $row["name"];  echo("\n<br/>"); 
							 echo $row["phone"];  echo("\n<br/>"); 
							 echo $row["email"]; echo("\n<br/>"); 
							
                            
							}
			 
				?>
               
                
                 
                 </div>
                 
                 
                 </div>    
                   
        		  
        	     </div>





<!-- Second Contact -->
                 <div id="c1">
                 <div>
                 <h1 id="mukesh">  2. KHILAN </h1>
                  <form method="post" action="" >
                 <input type="submit" value="Show Detail" id="show" class="show" name="show" >
                 <input type="submit" value="Hide Detail" id="hide" class="hide" >     
                 </form>
                 <div>
                 
                 <?php
							$dsn= 'mysql:host=localhost;dbname=login';
							$username = 'root';
							$password= '';
							try{
							$db= new PDO($dsn, $username, $password);
							}
							catch(PDOException $exception){
								echo "failed to connect";
							} 
				
                             
                          if(isset($_POST['show']))
                            {
                            
                            $query="select * from address where id='3'";
                            $result=$db->query($query);
                            $row = $result->fetch();
                           
						     echo $row["name"];  echo("\n<br/>"); 
							 echo $row["phone"];  echo("\n<br/>"); 
							 echo $row["email"]; echo("\n<br/>"); 
							
                            
							}
			 
				?>
               
                
                 
                 </div>
                 
                 
                 </div>    
                   
        		  
        	     </div>




<!-- Third Contact -->
                 <div id="c1">
                 <div>
                 <h1 id="mukesh">  3. Satheesh </h1>
                  <form method="post" action="" >
                 <input type="submit" value="Show Detail" id="show2" class="show2" name="show2" >
                 <input type="submit" value="Hide Detail" id="hide" class="hide" >     
                 </form>
                 <div>
                 
                 <?php
							$dsn= 'mysql:host=localhost;dbname=login';
							$username = 'root';
							$password= '';
							try{
							$db= new PDO($dsn, $username, $password);
							}
							catch(PDOException $exception){
								echo "failed to connect";
							} 
				
                             
                          if(isset($_POST['show2']))
                            {
                            
                            $query="select * from address where id='6'";
                            $result=$db->query($query);
                            $row = $result->fetch();
                           
						     echo $row["name"];  echo("\n<br/>"); 
							 echo $row["phone"];  echo("\n<br/>"); 
							 echo $row["email"]; echo("\n<br/>"); 
							
                            
							}
			 
				?>
               
                
                 
                 </div>
                 
                 
                 </div>    
                   
        		  
        	     </div>















     
</div>

 <!--Footer with copyright message-->
<div id="footer">
<p align="center"> Software Tester - sathfranc - copyrights reserved </p>
</div>
</body>
</html>
