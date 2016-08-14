<?php
	// Get the part of the URL after 'redirect.php'
	$url_suffix = $_SERVER['PATH_INFO'];

	// Split it up around "/" characters assuming there is a scheme being passed
	$parts = explode("/",$url_suffix);
	$number = count($parts);

	// Basic error checking for format
	if(($number > 1) && (strlen($parts[1]) > 0)){
		$url = "".$parts[1]."://";
		if($number > 2){
			$url = $url.$parts[2];
			for($i = 3; $i < $number; $i++){
				$url = $url."/".$parts[$i];
			}
		}
		if(strlen($_SERVER['QUERY_STRING']) >0){
			$url = $url."?".$_SERVER['QUERY_STRING'];
		}
		// Redirect to new location "permanently"
		//error_log("Patterson script: This script couldn't redirect because the input didn't look like what was expected</h3>");
		//error_log("Patterson script: This is the protocol: </td><td>".$_SERVER['SERVER_PROTOCOL']."</td></tr>");
		//error_log("Patterson script: This is the server that was reached: </td><td>".$_SERVER['SERVER_NAME']."</td></tr>");
		//error_log("Patterson script: This is the location and name of the script that was executed: </td><td>".$_SERVER['SCRIPT_NAME']."</td></tr>");
		//error_log("Patterson script: This was the path sent to the script: </td><td>".$_SERVER['PATH_INFO']."</td></tr>");
		//error_log("Patterson script: This was the query string: </td><td>".$_SERVER['QUERY_STRING']."</td></tr>");
		//error_log("Patterson script: ".$url);
		header('Location: '.$url,true,301);

	}
	else{

		print("<h2>PROBLEM</h2>");
		print("<h3>This script couldn't redirect because the input didn't look like what was expected</h3>");
		print("<table>");
		print("<tr><td>This is the protocol: </td><td>".$_SERVER['SERVER_PROTOCOL']."</td></tr>");
		print("<tr><td>This is the server that was reached: </td><td>".$_SERVER['SERVER_NAME']."</td></tr>");
		print("<tr><td>This is the location and name of the script that was executed: </td><td>".$_SERVER['SCRIPT_NAME']."</td></tr>");
		print("<tr><td>This was the path sent to the script: </td><td>".$_SERVER['PATH_INFO']."</td></tr>");
		print("<tr><td>This was the query string: </td><td>".$_SERVER['QUERY_STRING']."</td></tr>");
		print("</table>");
		print("<h4>I am expecting something like this:</h4>");
		print("http://djp3.westmont.edu/classes/2015-coursera-live/redirect.php/myscheme/thing.com<br/>");
	}
	exit();
?>


