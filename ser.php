<?php
    session_start();
	
    $db=mysqli_connect('localhost','root','','atoma');
		
        $sql= "SELECT * FROM kaisariani";
		$result = $db->query($sql);
		
        mysqli_query($db,$sql);
		header("location: kais.php"); 
?>