<?php 

session_start();
if(isset($_SESSION['username'])){
	$x = new SimpleXmlElement($_SESSION['user_rss_data']);	
}
else {
	echo '<meta http-equiv=refresh content='."0".';URL=index.php?msg=login'.'>';
}

	

?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>BSCW Gamification Home</title>
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
                    <li><a href="#">Logout</a></li>
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
        	<h3>Welcome  <span class="blue-text"><?php echo $_SESSION['username']; ?></span> </h3>
        </section>
    </div>
 
 	<div id="sub-page-contents">
 		<section>
 			<?php 
 				foreach($x->channel->item as $entry) {
				//echo "<a href='$entry->link' title='$entry->title'>" . $entry->title . "</a><br />";
					echo "Link:".$entry->link."<br /> Title:".$entry->title."<br /> Description:".$entry->description."<br /><br /><br />";
				
				}
				echo "</ul>";
 			?>
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
