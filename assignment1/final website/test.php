<!-- Author: paras -->
<!-- File: businesscontact.php -->
<!-- Business Contact Page-->
<!-- PHP File-->
<html>
<head>

<body>
<div class="container">

	<header id="navtop">
	
        <img id="guitar34" src="web-devept.jpg">	
               
        
        <a href="index.html" class="logo fleft">
		<link rel="stylesheet" href="css/style.css">	
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
				<li><a href="github.html" >Git-Hub</a></li>
				<li><a href="contact-me.html">Contact-me</a></li>
												<li><a href="test.php" class="navactive">login</a></li>
			</ul>
		</nav>
	</header>

<!-- Title of the Website -->
<title>login</title>

<!-- Link to CSS reference -->
<!--<link rel="stylesheet" type="text/css" href="css/businesscontact.css"/>
<link rel="shortcut icon" type="image/png" href="kp.png">-->
</head>

<!-- Body -->
<body>

	       <?php
                if(isset($_SESSION["error"]))
                {echo $_SESSION["error"]="Wrong Password";
                }
           ?>
<!-- Container --> 
<div id="Container">

		<!-- Header -->
		<div id="header">
             
        </div>
        
         <!-- Contain Area -->
        <div id="contain-area">
        
           <!-- Login Form -->
                <h1 id="login">  Login Form </h1>
                <form action="" method="post">
                	Username: <input type="text" name="username" id="username"> <br/> <br/>
                    Password: <input type="password" name="password" id="password"> <br/> <br/>
                    <input type="submit" value="Login" id="submit" name="submit">
                </form>
                
                <br/>
                
              



<?php
		session_start();
		$dsn= 'mysql:host=localhost;dbname=trading_card';
		$username = 'root';
		$password= '';
		
		try{
		$db= new PDO($dsn, $username, $password);
		}
		catch(PDOException $exception){
			echo "failed to connect";
		}
		
		$_SESSION["error"]= "";
		
		if(isset($_POST['submit']))
		{
		    $username = $_POST["username"];
		    $password1 = $_POST["password"];
		   
			$query = "SELECT * FROM `admin` WHERE `username` = '".$username."'";
			$records = $db->query($query);
			$userfound = false;
		foreach($records as $row)
		{
			$password = $row['password']; 
			$userfound = true;
		}
		
		if($userfound){
			if($password1 == $password)
			{
				$_SESSION["isloggedin"] = true;
				$_SESSION["username"] = $username;
				//echo $_SESSION["username"];
				
				header('location:businessscreen.php');
			}
			else{
				$_SESSION["isloggedin"] = false;
				
				$_SESSION["username"] = "guest";
		
				$_SESSION["error"]= "password incorrect";			 

				
		echo "<p align='center'> <font color=red  size='256pt'>ACCESS DENIED WRONG PASSWORD</font> </p>"; 
		}
		}
		else{
				$_SESSION["error"]= "username not recognized";
		
		 echo "<p align='center'> <font color=blue  size='256pt'>ACCESS DENIED WRONG USERNAME</font> </p>";  


		}
		}
		else{
			
		}
?>
          
         <!-- Footer -->
        <div id="footer">
         	<p align="center"> Copyright &copy 2014;     Paras Bussiness Webpage  </p>
        </div>



</div>

</body>

</html>   