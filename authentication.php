<?php
$url = "http://merkur.informatik.rwth-aachen.de/bscw/bscw.cgi/3496028?op=rss";
$username = "gamification";
$password = "gami123++";
//echo "username";
//echo $username;
// create a new cURL resource
$myRequest = curl_init($url);

// do a POST request, using application/x-www-form-urlencoded type
//curl_setopt($myRequest, CURLOPT_POST, TRUE);
curl_setopt ($myRequest, CURLOPT_FOLLOWLOCATION, 1);
// credentials
curl_setopt($myRequest, CURLOPT_USERPWD, "$username:$password");
// returns the response instead of displaying it
curl_setopt($myRequest, CURLOPT_RETURNTRANSFER, 1);

// do request, the response text is available in $response
$response = curl_exec($myRequest);

//echo $response;
//print_r ($response);
// status code, for example, 200
$statusCode = curl_getinfo($myRequest, CURLINFO_HTTP_CODE);

// close cURL resource, and free up system resources
curl_close($myRequest);
?>


<?php 
//echo $response;

/////////////////////////////////////////////////////


//$content = file_get_contents($response);
	
	$x = new SimpleXmlElement($response);
	
	
	
	foreach($x->channel->item as $entry) {
		//echo "<a href='$entry->link' title='$entry->title'>" . $entry->title . "</a><br />";
		echo "Link:".$entry->link."<br /> Title:".$entry->title."<br /> Description:".$entry->description."<br /><br /><br />";
		
		}
	echo "</ul>";
/////////////////////////////////////////////////////

 ?>
