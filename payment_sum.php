<?php
    session_start();
    
    $db=mysqli_connect('localhost','root','','test');
	echo "\n";	
	
	if(isset($_POST['plhrwmh'])){
		
	
		$sql = "SELECT Id, Eidos, Timh,Number FROM payment";
		$result = $db->query($sql);
	
		$txt1 = "inp";
		$txt2 = 1;

		while($txt2 < 57 ) {
			$temaxia = $_POST[$txt1 . $txt2];
			$sql1 = "UPDATE payment SET Number= $temaxia WHERE Id = $txt2" ;
			
			$db->query($sql1);
			$txt2++;
			
		}
		
		$sql = $db->query("SELECT SUM(Timh*Number)  AS value_sum FROM payment WHERE Number>0");
		$row = $sql->fetch_assoc();
		echo number_format((float)$row['value_sum'], 2, '.', '');
		
		header("Location: payment.php"); 
	}
	
	mysqli_close($db);
	
	
	?>