<?php
    session_start();
    
    $db=mysqli_connect('localhost','root','','test');
	echo "\n";	
	
	if(isset($_POST['anazhthsh'])){
		
		if(strcmp( mysqli_real_escape_string($db,$_POST['anaxwrhsh']), "Παλαιολόγου 83, Χαλάνδρι") == 0){
			
			if (strcmp( mysqli_real_escape_string($db,$_POST['proorismos']), "Πάρκο, Νέας Σμύρνης") == 0){
				header("Location: Χαλάνδρι-ΝέαΣμύρνη.php");
			}
			else if (strcmp( mysqli_real_escape_string($db,$_POST['proorismos']), "Θηβών 166, Περιστέρι") == 0){
				if(mysqli_real_escape_string($db,$_POST['time'][0]) == 0 && mysqli_real_escape_string($db,$_POST['time'][1])<5){
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
	
	 $email="";
    $errors=array();
    
    if(isset($_POST['register'])){
        $email= mysqli_real_escape_string($db,$_POST['email']);
        $password1= mysqli_real_escape_string($db,$_POST['password1']);
        $password2= mysqli_real_escape_string($db,$_POST['password2']);

   
        /*$password=md5($password1);*/
        $password=$password1;
        $query1= "INSERT INTO users(email,password) VALUES ('$email','$password')";
        
        mysqli_query($db,$query1);
        $_SESSION['email']=$email;
    }
    
    if(isset($_POST['login'])){
        $email= mysqli_real_escape_string($db,$_POST['email']);
        $password= mysqli_real_escape_string($db,$_POST['password']);
        
        $query="UPDATE `users` SET `flag`='1' WHERE email='$email'";
        mysqli_query($db,$query);
        
        $query2="SELECT * FROM users WHERE email='$email' AND password='$password'";
        $result=mysqli_query($db,$query2);
        if(mysqli_num_rows($result)==1){
            $_SESSION['email']=$email;
           
        }
    }
        if(isset($_POST['savechanges'])){
        $pemail= mysqli_real_escape_string($db,$_POST['pemail']);
        $name= mysqli_real_escape_string($db,$_POST['name']);
        $birthday= mysqli_real_escape_string($db,$_POST['birthday']);
        $hobbies= mysqli_real_escape_string($db,$_POST['hobbies']);
        $changepass= mysqli_real_escape_string($db,$_POST['changepass']);
        $number= mysqli_real_escape_string($db,$_POST['number']);
        

        
        $query8="UPDATE `users` SET `name`='$name',`birthday`='$birthday',`hobbies`='$hobbies',`number`='$number',`password`='$changepass' WHERE email='$pemail' ";
        /*$query="UPDATE 'users' SET 'name'='dfbgak' AND 'birthday'='$birthday' AND 'hobbies'='$hobbies' AND 'password'='$changepass' WHERE 'email'='$pemail'";
        */
        mysqli_query($db,$query8);
        
        }
    
    
    
    if(isset($_GET['logout'])){
        $email=$_SESSION['email'];
 
        $query12="UPDATE `users` SET `flag`='0' WHERE email='$email'";
        mysqli_query($db,$query12);
        unset($_SESSION['email']);
        
        header('location: Βέλτιστη-Διαδρομή.php');
    }
    
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