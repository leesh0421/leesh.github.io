<?php
	$name = "../chrome/default.txt";	
	if (isset($_GET['name'])) {
		$name = $_GET['name'];
	}
	header("Content-Type: application/octet-stream; name=\"readme.txt\"");	
	if (isset($_GET['utf8'])) {
		header("Content-Disposition: attachment; filename*=UTF-8''".$name);	
	} else {
		header("Content-Disposition: attachment; filename=\"".$name."\"");	
	}
?>
Hello, world content.