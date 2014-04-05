<!-- Author: paras -->
<!-- File: businessscreen.php -->
<!-- Business Screen Page-->
<!-- PHP File-->
<html>
<head>
<!-- Title of the Website -->
<title>Business Screen</title>

<!-- Link to CSS reference -->
<link rel="stylesheet" type="text/css" href="css/businessscreen.css"/>
<link rel="shortcut icon" type="image/png" href="kp.png">
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

	     
<!-- Container --> 
<div id="Container">

		<!-- Header -->
		<div id="header">
             <div>
                <img align="left" src="image.png" name="pic"  id="pic"> <h1 id="Welcome">Welcome To My WebPage.</h1>
             </div>
     
      <!-- Menu Navigation -->
             <ul id="menu">
                 <li><a href="home.html">Home</a></li>
                 <li><a href="aboutme.html">About Me </a></li>        
                 <li><a href="project.html">Project</a></li>
                 <li><a href="service.html">Service</a></li>
                 <li><a href="https://github.com/Khilan/Khilan" target="_blank">GitHub</a></li>
                 <li><a href="contactme.html">Contact Me</a></li>
                 <li><a href="businesscontact.php" class="businesscontact">Business Contact</a></li>
              </ul>
        </div>
        
         <!-- Contain Area -->
        <div id="contain-area">
                
                <div>
               		 <h1 id="contact"> Contacts </h1>
                     <a href="businesscontact.php?login=false">
                     	<input type="button" value="Logout" id="logout" >
                     </a>
                     
                </div>
                
                <!-- First property  -->
                <div id="c1">
                <h1 id="mukesh">  1. Mukesh Ambani </h1>
                <input type="button" value="Show Detail" id="show" class="show" >
                <input type="button" value="Hide Detail" id="hide" class="hide" > 
                 <div id="desc" class="hidden">
                     <img src="mukesh.jpg" id="mpic">
                     <p> Name: Mukesh Ambani </p>
                     <p> Address: India </p>
                     <p> Contact Number: +91 800577997</p>
                     <p> Company: Reliance </p>
        		 </div>
                </div>
                
                <!-- Second Contact -->
                <div id="c2"> 
                 <h1 id="bill">  2. Bill Gates </h1>
                 <input type="button" value="Show Detail" id="show1" class="show1" >
                 <input type="button" value="Hide Detail" id="hide1" class="hide1" >  
                 <div id="desc1" class="hidden1">
                 	 <img src="bill.jpg" id="bpic">
                     <p> Name: Bill Gates </p>
                     <p> Address: America </p>
                     <p> Contact Number: +1 416-856-7520</p>
                     <p> Company: Microsoft </p>
        		 </div>
                 </div>
                 
                 <!-- Third Contact -->
                 <div id="c3">
                 <h1 id="darren">  3. Darren Entwistle </h1>
                 <input type="button" value="Show Detail" id="show2" class="show2" >
                 <input type="button" value="Hide Detail" id="hide2" class="hide2" >  
                 <div id="desc2" class="hidden2">
                     <img src="darren.jpg" id="dpic">
                     <p> Name: Darren Entwistle </p>
                     <p> Address: Canada </p>
                     <p> Contact Number: +1 647-567-9461</p>
                     <p> Company: Telus </p>
        		 </div>
        	     </div>
                 
                 <!-- Forth Contact -->
                 <div id="c4">
                 <h1 id="tim">  4. Tim Cook </h1>
                 <input type="button" value="Show Detail" id="show3" class="show3" >
                 <input type="button" value="Hide Detail" id="hide3" class="hide3" >  
                 <div id="desc3" class="hidden3">
                     <img src="tim.jpg" id="tpic">
                     <p> Name: Tim Cook </p>
                     <p> Address: America </p>
                     <p> Contact Number: +1 416-854-6985</p>
                     <p> Company: Apple </p>
        		 </div>
        	     </div>   
         
                <br/>
                <br/>
                <br/>
               
         </div>     
         <!-- Footer -->
        <div id="footer">
         	<p align="center"> Copyright &copy 2014;     My First Webpage  </p>
        </div>


</div>

</body>

</html>


