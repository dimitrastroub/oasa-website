<?php
    session_start();
   
	echo "\n";	
	
	if(isset($_POST['anazhthsh'])){
		
		if(strcmp( mysqli_real_escape_string($db,$_POST['anaxwrhsh']), "Παλαιολόγου 83, Χαλάνδρι") == 0){
			
			if (strcmp( mysqli_real_escape_string($db,$_POST['proorismos']), "Πάρκο, Νέας Σμύρνης") == 0){
				header("Location: Χαλάνδρι-ΝέαΣμύρνη.php");
			}
			else if (strcmp( mysqli_real_escape_string($db,$_POST['proorismos']), "Θηβών 166, Περιστέρι") == 0){
				if(mysqli_real_escape_string($db,$_POST['time'][0]) > 0 && mysqli_real_escape_string($db,$_POST['time'][1])>3){
					header("Location: Χαλάνδρι-Περιστέρι-Νυχτερινό.php");
				}
				else {
					header("Location: Χαλάνδρι-Περιστέρι.php");
				}
				//echo mysqli_real_escape_string($db,$_POST['time'][0]);
				//echo mysqli_real_escape_string($db,$_POST['time'][1]);
				
			}
		}
		if(strcmp( mysqli_real_escape_string($db,$_POST['anaxwrhsh']), "Θηβών 166, Περιστέρι") == 0){
			if (strcmp( mysqli_real_escape_string($db,$_POST['proorismos']), "Παλαιολόγου 83, Χαλάνδρι") == 0){
				header("Location: Περιστέρι-Χαλάνδρι.php");
			}
			else if (strcmp( mysqli_real_escape_string($db,$_POST['proorismos']), "Πάρκο, Νέας Σμύρνης") == 0){
				header("Location: Περιστέρι-ΝέαΣμύρνη.php");
			}
		}
		if(strcmp( mysqli_real_escape_string($db,$_POST['anaxwrhsh']), "Πάρκο, Νέας Σμύρνης") == 0){
			if (strcmp( mysqli_real_escape_string($db,$_POST['proorismos']), "Θηβών 166, Περιστέρι") == 0){
				header("Location: ΝέαΣμύρνη-Περιστέρι.php");
			}
			else if (strcmp( mysqli_real_escape_string($db,$_POST['proorismos']), "Παλαιολόγου 83, Χαλάνδρι") == 0){
				header("Location: ΝέαΣμύρνη-Χαλάνδρι.php");
			}
		}
	}
		
?>