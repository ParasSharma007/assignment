<!-- Author: paras -->
<!-- File: businesscontact.php -->
<!-- Business Contact Page-->
<!-- PHP File-->
<html>
<head>
<!-- Title of the Website -->
<title>Business Contact</title>

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
                <h1 id="login">  Access Denied </h1>
         
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
                
         <!-- Footer -->
        <div id="footer">
         	<p align="center"> Copyright &copy 2014;     My First Webpage  </p>
        </div>


</div>

</body>

</html>



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
				header('location:contact.php');
			}
			else{
				$_SESSION["isloggedin"] = false;
				$_SESSION["username"] = "guest";
				$_SESSION["error"]= "password incorrect";
         header('location:invalid.php');				
			}
		}
		else{
				$_SESSION["error"]= "username not recognized";
		
			echo"access denied";
		}
		}
		else{
			
		}
?>

