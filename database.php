<?php 
    $conn = mysqli_connect("localhost","root","asdf121","shoutIt"); 
    if (mysqli_connect_errno()) {
    	# code...
    	echo "failed to connect to MySQL".mysqli_connect_error();
    }

?>