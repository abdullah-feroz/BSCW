<?php

$control = new Controller();

if(isset($_GET['mode'])){
	
	if($_GET['mode']=="login"){
		
			$data = $control->authenticate();
		
		    if($data!="false"){
		    	session_start();
				
				$_SESSION['username'] = $_POST['username'];
				$_SESSION['user_rss_data'] = $data;
				echo '<meta http-equiv=refresh content='."0".';URL=../home.php?user='.$_POST['username'].'>';
			}
			else{
				echo '<meta http-equiv=refresh content='."0".';URL='.$_SERVER['HTTP_REFERER'].'?msg=failed'.'>';
			}
				
	 }		
	 else if($_GET['mode']=="logout"){
	 	 logout();
		 echo '<meta http-equiv=refresh content='."0".';URL=../index.php?msg=logout'.'>';
	 }
}

class Controller
{
	//private $data;
	public function __construct(){
		//$data = new DataLayer();
		//echo "I am contructor";
	}
	
	
	public function authenticate(){
		$url = "http://merkur.informatik.rwth-aachen.de/bscw/bscw.cgi/3496028?op=rss";
		$username = $_POST['username'];
		$password = $_POST['user_password'];
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
		
		if($statusCode =="200"){
			return $response;
		}
		else {
			return "false";
		}
	}
	
	public function logout(){
		 session_start();
		 if(isset($_SESSION['username'])){
	 	 unset($_SESSION['username']);
		 unset($_SESSION['user_rss_data']);
		 }
	}

}

?>
