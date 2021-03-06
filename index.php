<?php 

include("conf/controller.php");
$control = new Controller();
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>BSCW Gamification Login</title>
<link href="css/style.css" type="text/css" rel="stylesheet" rev="stylesheet" />
<script src="js/scripts.js"></script>
</head>

<body>
<div id="container">
	<div id="bgdiv-2"></div>
    <div id="header">
    	<header>
        
            <h1 class="logo"><a href="main.html">Tech <span class="blue-text">Crunch</span></a></h1>
            <nav>
            	<ul>
                	<li><a href="about.html">About</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Solutions</a></li>
                    <li><a href="#">Work</a></li>
                    <li><a href="#">Get to know us</a></li>
                </ul>
            </nav>
            
            <br style="clear:both;" />
            
            <div id="searchbox">
	            <input type="text" placeholder="search"/><img src="images/search.png" />
            </div>
            
            <br style="clear:both;" />            
            
        </header>
    </div>
    
    <div id="rotator-2">
    	<section id="rotator-wrapper-2">
        	<h1>Welcome to <span class="blue-text">BSCW Gamification</span> Module</h1>
        </section>
    </div>
 
 	<div id="sub-page-contents">
 		<section>
 		<form id="form_login" action="conf/controller.php?mode=login" method="post" onsubmit="return validate();">
	 		<table id="login" style="">
	 			<tr>
	 				<td>
	 					<h5>Kindly login below:</h5>
	 				</td>
	 			</tr>
	 			<tr>
	 				<td>
	 				 <br />
	 				</td>
	 			</tr>
	 			<tr>
	 				<td>
	 					<label>Username</label>
	 				</td>
	 				<td>
	 					<input type="text" id="username" name="username" placeholder="User Name" />
	 				</td>
	 			</tr>
	 			<tr>
	 				<td>
	 					<label>Password</label>
	 				</td>
	 				<td>
	 					<input type="password" id="user_password" name="user_password" placeholder="Password" />
	 				</td>
	 			</tr>
	 			<tr>
	 				<td>
	 				 <br />
	 				</td>
	 			</tr>
	 			<tr>
	 				<td>
	 				
	 				</td>
	 				<td>
	 					<input id="btn_login" type="submit" value="Login" />
	 				</td>
	 			</tr>
	 			<tr>
	 				<td>
	 					
	 				</td>
	 				<td>
	 				 <br />
	 				 <?php 
                           if(isset($_GET['msg'])){
	                           	if($_GET['msg']=="failed"){
	                           		echo "<label>Username or Password is incorrect!</label>";	
	                           	}
	                           	else if($_GET['msg']=="login"){
	                           		echo "<label>You are not login!</label>";	
	                           	}
                           }
					  ?>
	 				</td>
	 			</tr>
	 		</table>
 		</form>
 	</section>
    </div>
 
    <div id="footer">
    	<footer>
    		<p>&copy; Copy Rights 2013, Tech Crunch. All rights reserved. </p>
        </footer>
    </div>
    
</div>
</body>
</html>
