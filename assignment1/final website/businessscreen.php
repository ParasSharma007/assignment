<!-- Author: paras -->
<!-- File: businessscreen.php -->
<!-- Business Screen Page-->
<!-- PHP File-->

<html>
<head>

<body>
<div class="container">

	<header id="navtop">
	<div>
               		 
                     <a href="logout.php">
                     	<input type="button" value="Logout" id="logout" >
                     </a>
                     
                </div>
  	
        <img id="guitar1" src="paras.jpg">	
               
        
        <a href="index.html" class="logo fleft">
			<img id="paras1" src="paraslogo1.jpg">
		</a>
		
		<nav class="fright">
        		
		<ul>
				<li><a href="index.html">Home</a></li>
				<li><a href="about-me.html">About-me</a></li>
			</ul>
			<ul>
				<li><a href="projects.html">Projects</a></li>
				<li><a href="services.html">Services</a></li>
			</ul>
			<ul>
				<li><a href="github.html">Git-Hub</a></li>
				<li><a href="contact-me.html">Contact-me</a></li>
			<li><a href="businessscreen.php" class="navactive">bussiness contact</a></li>
			</ul>
		</nav>
	</header>
      <h1 id="contact"> MY Bussiness Contacts </h1>

	<div class="blog-page main grid-wrap">

		
		
				
		<section class="grid col-three-quarters mq2-col-two-thirds mq3-col-full">
					
			
			
					
		
		</section>

		


<!-- Title of the Website -->
<title>my bussiness screen</title>

<!-- Link to CSS reference -->
<link rel="stylesheet" href="css/style.css">

<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script> 
<!-- First Contact property  -->
<script>
$(function(){
	$('#desc').hide('hidden');
$('.show').click(function() {
    $('#desc').show("slow");
});
});
</script>
<script>
$(function(){
	$('#desc').hide('hidden');
$('.hide').click(function() {
    $('#desc').hide("slow");
});
});
</script>


<!-- Second Contact property  -->
<script>
$(function(){
	$('#desc1').hide('hidden1');
$('.show1').click(function() {
    $('#desc1').show("slow");
});
});
</script>
<script>
$(function(){
	$('#desc1').hide('hidden1');
$('.hide1').click(function() {
    $('#desc1').hide("slow");
});
});
</script>

<!-- Third Contact property  -->
<script>
$(function(){
	$('#desc2').hide('hidden2');
$('.show2').click(function() {
    $('#desc2').show("slow");
});
});
</script>
<script>
$(function(){
	$('#desc2').hide('hidden2');
$('.hide2').click(function() {
    $('#desc2').hide("slow");
});
});
</script>

<!-- Forth Contact property  -->
<script>
$(function(){
	$('#desc3').hide('hidden3');
$('.show3').click(function() {
    $('#desc3').show("slow");
});
});
</script>
<script>
$(function(){
	$('#desc3').hide('hidden3');
$('.hide3').click(function() {
    $('#desc3').hide("slow");
});
});
</script>

</head>

<!-- Body -->
<body>

	     

        
         <!-- Contain Area -->

                
                </br>
				</br>
				</br>
				</br>
                <!-- first Contact -->
                <div id="c2"> 
                 <h1 id="bill">  <h1>1. Sameer sharma</h1>
				 <form method="post" action="" >
                 <input type="submit" value="Show Detail" id="show1" class="show1" name="show1" >
                 <input type="submit" value="Hide Detail" id="hide1" class="hide1" >     
                 
                  
                 </form>
                 
        		 </div>
                </br>
				
				 <?php
							session_start();
							if(isset($_SESSION["username"]))
							{ 
							$dsn= 'mysql:host=localhost;dbname=trading_card';
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
                            
                            $query="select * from contact where id='1'";
                            $result=$db->query($query);
                            $row = $result->fetch();
							$image=$row["image"];
							$path = "";
							
							$imageurl = $path.$image;
                           
						     echo $row["name"];  echo("\n<br/>"); 
							 echo $row["address"];  echo("\n<br/>"); 
							 echo $row["contactno"]; echo("\n<br/>"); 
							 echo $row["company"]; echo("\n<br/>"); ?>
								<img id="photo" src="<?php echo $imageurl?>">
				<?php
							}
			 
				?>
               
				
				
				
				
				
				
				
</br>
</br>
</br>				
                 <!-- second Contact -->
                 <div id="c3">
                 <h1 id="darren"><h1>2.rozell disuza </h1>
                 <form method="post" action="" >
                 <input type="submit" value="Show Detail" id="show2" class="show2" name="show2" >
                 <input type="submit" value="Hide Detail" id="hide2" class="hide2" >     
                 </br>
				 </br>
				 </br>
				 </br>
				 <?php
							$dsn= 'mysql:host=localhost;dbname=trading_card';
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
                            
                            $query="select * from contact where id='2'";
                            $result=$db->query($query);
                            $row = $result->fetch();
							$image=$row["image"];
							$path = "";
							
							$imageurl = $path.$image;
                           
						     echo $row["name"];  echo("\n<br/>"); 
							 echo $row["address"];  echo("\n<br/>"); 
							 echo $row["contactno"]; echo("\n<br/>"); 
							 echo $row["company"]; echo("\n<br/>"); ?>
								<img id="photo" src="<?php echo $imageurl?>">
				<?php
							}
			 
				?>
               
				 
        		 </div>
        	     </div>
                 </br>
				 </br>
	</br>			 
                 <!-- third Contact -->
                 <div id="c4">
                 <h1 id="tim"><h1>3.Money sharma</h1>
  <form method="post" action="" >
                 <input type="submit" value="Show Detail" id="show3" class="show3" name="show3" >
                 <input type="submit" value="Hide Detail" id="hide3" class="hide3" >   
</br>
</br>
</br>				 
                              
 <?php
							$dsn= 'mysql:host=localhost;dbname=trading_card';
							$username = 'root';
							$password= '';
							try{
							$db= new PDO($dsn, $username, $password);
							}
							catch(PDOException $exception){
								echo "failed to connect";
							} 
				
                             
                          if(isset($_POST['show3']))
                            {
                            
                            $query="select * from contact where id='3'";
                            $result=$db->query($query);
                            $row = $result->fetch();
							$image=$row["image"];
							$path = "";
							
							$imageurl = $path.$image;
                           
						     echo $row["name"];  echo("\n<br/>"); 
							 echo $row["address"];  echo("\n<br/>"); 
							 echo $row["contactno"]; echo("\n<br/>"); 
							 echo $row["company"]; echo("\n<br/>"); ?>
								<img id="photo" src="<?php echo $imageurl?>">
				<?php
							}
			 
				?>
               
							  
							  
							  
							  
							  
			    </div>
        	     </div>   
         
                <br/>
                <br/>
                <br/>
               
			   
			   
			   
			   
			   
			   
         </div>     
         <!-- Footer -->
        <div id="footer">
         	<p align="center"> Copyright &copy 2014;   Paras bussiness contact webpage </p>
        </div>


</div>

</body>


</html>
<?php }else{
header('location:test.php');
}?>

