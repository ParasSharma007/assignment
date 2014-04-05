<!-- Author: Satheesh -->
<!-- File:contactme.html -->
<!--Contactpage -->
<!--website: http://sathfranc.cuccfree.com/contactme.html -->
<!--HTML file -->
<?php
session_start();
$dsn = 'mysql:host=localhost;dbname=login';
$username = 'root';
$password = '';

$db = new PDO($dsn, $username, $password);
?>


<?php
if(isset($_SESSION["isloggedin"])){
	if($_SESSION["isloggedin"])
	{
		echo "welcome " . $_SESSION["Username"];
	}
	else
	{
		echo "welcome guest";
	}
}

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

</script>
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
<div>  
     <aside>
       <article id="right">
       <form action="login.php" method="post">
       <h1>Sign in to find the conact details</h1>
	<table>
   <tr><td>Username:</td><td> <input type="text" name="username"><br /></td>
   </tr>
   <tr><td>Password:</td><td> <input type="password" name="password"><br /></td>
    </tr>
	<tr><td></td><td><input type="submit" value="submit"></td>
     </tr>
     </table> 
</form>
</div>
 <!--Logo-->             
<div id="logo">
<div align="center"><table cellpadding="0" width="400" cellspacing="0">
<tr><td><a href="https://www.facebook.com/satheesh.francis.9" target="_blank"><img src="http://api.ning.com/files/MDqSwhCErxpAQCHv4V6BYNGSo6HZtPRtmdNol8nUrh*9kn1SnIvLjlpZd6Ko*QzkrV*cTHhej40aypylc9FNyuGQpVsVCJyS/facebooks3_128.png" width="128" height="128" border="0"></a>
</td><td><a href="https://myspace.com/sathfranc" target="_blank"><img src="http://api.ning.com/files/DsEd0qFuUcwu-OqK9dBmlNVWoJnSrPzFfHychkrtcyfIjc3ClCHytCj7mN4-pm0ueyEsbXFWSsCmgbKKk87IKMBhWf9093Ba/myspaces3_128.png" alt="Check Us Out On MySpace" width="128" height="128" border="0"></a>
</td><td><a href="https://twitter.com/sathfranc" target="_blank"><img src="http://api.ning.com/files/DsEd0qFuUcyyy80lToFsf7IsEIyNbOEfUNaXKa1B3Jg6Oyf*PzQO3DZuQ3sltrfVqgifMzcq59A7ip8S0KYYtSYbsFhBFNrX/twitters3_128.png" alt="Follow Us On Twitter" width="128" height="128" border="0"></a></td></tr></table></div>
 </div>

       </article>
       </aside>
     </div>

 <!--Footer with copyright message-->
<div id="footer">
<p align="center"> Software Tester - sathfranc - copyrights reserved </p>
</div>
</body>
</html>
