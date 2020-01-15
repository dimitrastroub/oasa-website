<?php include ('Εύρεση-Βέλτιστης.php'); ?>
<!DOCTYPE html>
<html lang="el">
<head>
    <title>Πληρωμή</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="img/logo.png">

	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
 <link rel="stylesheet"  href="style.css?v=<?php echo time(); ?>">

    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive/responsive.css?v=<?php echo time(); ?>">
   </head>
   
   <style>
   .error{
		width: 92%;
		margin: 0px auto;
		padding: 10px;
		border: 1px solid gray;
		color: gray;
		background: red;
		border-radius: 5px;
		text-align: left;
		display: block;
}
   </style>
<body>
  
    
		<!-- ***** Search Form Area ***** -->
    <div class="dorne-search-form d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="search-close-btn" id="closeBtn">
                        <i class="pe-7s-close-circle" aria-hidden="true"></i>
                    </div>
                    <form  autocomplete="off" style="width:300px;" action="#" method="get" >
					<a id="search-btn" href="#"><i class="fa fa-search" aria-hidden="true" style="color: white;" > Αναζήτηση</i></a>
							<input type="input" name="myCountry" id="myInput" placeholder="Αναζήτηση.." onchange="location = this.value + '.php';">
							<input type="submit" class="d-none" value="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- ***** Header Area Start ***** -->
    <header class="header_area" id="header">
		
       <div class="container-fluid h-100">
            <div class="row h-100">
                <div class="col-12 h-100">
                    <nav class="h-100 navbar navbar-expand-lg">
                        <a class="navbar-brand" href="Βέλτιστη-Διαδρομή.php"><img src="img/logo.png" style="width:4em; height:4em;"></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#dorneNav" aria-controls="dorneNav" aria-expanded="false" aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
                        <!-- Nav -->
                        <div class="collapse navbar-collapse" id="dorneNav">
                            <ul class="navbar-nav mr-auto" id="dorneMenu">
                                
                                 <a class="nav-link" href="Βέλτιστη-Διαδρομή.php">Αρχική <span class="sr-only">(current)</span></a>
                                
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Δρομολόγια <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Μετρό <i class="fa fa-angle-down" aria-hidden="true"></i></a>
											<div class="dropdown-menu" x-placement="right-start" style="position: absolute; transform: translate3d(230px, 0px, 0px); top: 4px; left: 0px; will-change: transform;" >
                                            	<a class="dropdown-item" href="Μετρό-Στάσεις.php">Στάσεις</a>
												<a class="dropdown-item" href="Μετρό-Ωράριο.php">Ωράριο</a>
											</div>
										</a>
                                        <a class="dropdown-item" href="Υπo-κατασκευή.html">Τραμ</a>
                                        <a class="dropdown-item" href="Υπo-κατασκευή.html">Ηλεκτρικός Σιδηρόδρομος</a>
                                        <a class="dropdown-item" href="Υπo-κατασκευή.html">Προαστιακός</a>
                                        <a class="dropdown-item" href="Υπo-κατασκευή.html">Τρόλεϊ</a>
										<a class="dropdown-item" href="Υπo-κατασκευή.html">Λεωφορεία</a>
                                        
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
									<div class="nav-item active">
										<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Εισιτήρια <i class="fa fa-angle-down" aria-hidden="true"></i></a>
										<div class="dropdown-menu" aria-labelledby="navbarDropdown2">
											<a class="dropdown-item" href="Αγορά-Επαναφόρτιση.php">Ηλεκτρονική Αγορά/Επαναφόρτιση</a>
											<a class="dropdown-item" href="Δικαιολογητικά-Έκδοσης-Εισιτηρίων.php">Δικαιολογητικά Έκδοσης AthenaCard</a>
											<a class="dropdown-item" href="Τιμές-Εισιτηρίων.php">Τιμές Εισιτηρίων</a>
											<a class="dropdown-item" href="Σημεία-Έκδοσης-Επαναφόρτισης.php">Σημεία Έκδοσης/Επαναφόρτισης Καρτών/Εισιτηρίων</a>
										</div>
									</div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ΑΜΕΑ <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
										<a class="dropdown-item" href="amea.php">Πληροφορίες για ΑΜΕΑ</a>
                                        <a class="dropdown-item" href="Υπo-κατασκευή.html">Ανελκυστήρες</a>
                                       <a class="dropdown-item" <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Στάσεις με Προεξοχές <i class="fa fa-angle-down" aria-hidden="true"></i></a>
											<div class="dropdown-menu" x-placement="right-start" style="position: absolute; transform: translate3d(230px, 30px, 0px); top: 4px; left: 35px; will-change: transform;" >
                                                <form action="#" method="get">
												<select  class="sel" size=10 onchange="window.location = this.value;" >
													<option value="#" selected>Επιλέξτε Δήμο...</option>
													<option value="Υπo-κατασκευή.html">Δήμος Αγίας Βαρβάρας</option>
													<option value="Υπo-κατασκευή.html">Δήμος Αγίου Δημήτριου</option>
													<option value="Υπo-κατασκευή.html">Δήμος Αθηνών</option>
													<option value="Υπo-κατασκευή.html">Δήμος Ελληνικού-Αργυρούπολης</option>
													<option value="Υπo-κατασκευή.html">Δήμος Αχαρνών</option>
													<option value="Υπo-κατασκευή.html">Δήμος Βύρωνα</option>
													<option value="Υπo-κατασκευή.html">Δήμος Γλυφάδας</option>
													<option value="Υπo-κατασκευή.html">Δήμος Δάφνης-Υμηττού</option>
													<option value="Υπo-κατασκευή.html">Δήμος Ζωγράφου</option>
													<option value="ΑΜΕΑ-ΣτάσειςΜεΠροεξοχές-Ηλιούπολη.php">Δήμος Ηλιούπολης</option> 
													<option value="ΑΜΕΑ-ΣτάσειςΜεΠροεξοχές-Καισαριανή.php">Δήμος Καισαριανής</option>
													<option value="Υπo-κατασκευή.html">Δήμος Καλλιθέας</option>
													<option value="Υπo-κατασκευή.html">Δήμος Μελλισίων</option>
													<option value="Υπo-κατασκευή.html">Δήμος Νέας Σμύρνης</option>
													<option value="Υπo-κατασκευή.html">Δήμος Νέας Χαλκηδόνας-Νέας Φιλαδέφλιας</option>
													<option value="Υπo-κατασκευή.html">Δήμος Νίκαιας</option>
													<option value="ΑΜΕΑ-ΣτάσειςΜεΠροεξοχές-Παπάγος.php">Δήμος Παπάγου-Χολαργού</option>
													<option value="Υπo-κατασκευή.html">Δήμος Παλαιού Φαλήρου</option>
													<option value="Υπo-κατασκευή.html">Δήμος Πειραιά</option>
													<option value="Υπo-κατασκευή.html">Δήμος Περάματος</option>
													<option value="Υπo-κατασκευή.html">Δήμος Περιστερίου</option>
													<option value="Υπo-κατασκευή.html">Δήμος Πετρούπολης</option>
												</select>
                                            </form>   
											</div>
                                        <a class="dropdown-item" href="Υπo-κατασκευή.html">Οδηγίες Προσέγγισης στα ΜΜΜ</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="Υπo-κατασκευή.html">Ανακοινώσεις</a>
                                </li>
                                
                                <li class="nav-item">
                                    <a class="nav-link" href="Υπo-κατασκευή.html">Επικοινωνία</a>
                                </li>
                            </ul>
                            <?php
                            $db=mysqli_connect('localhost','root','','sdi1600021');
                            $query42="SELECT `email` FROM `users` WHERE flag='1' ";
                            $result=mysqli_query($db,$query42);
                            if(mysqli_num_rows($result)==1){
                                
                            ?>
                            <div class="dorne-search-btn">
                                <a id="search-btn" href="#"><i class="fa fa-search" aria-hidden="true"></i>Αναζήτηση</a>
                            </div>
                            <div class="content">
                                       <style>
                                       p{
                                           margin: 0;
                                       }
                                       </style>
                                      
                                            <p><a style="color:white;">Καλωσήρθες</p> 
                                            <p><strong><?php echo $_SESSION['email']; ?></a></strong></p>
                                            <p><a href="Βέλτιστη-Διαδρομή.php?logout='0' " style="color:red;">Αποσύνδεση</a></p>
                                            <p><a href="edit.php" name="edit" style="color:navy;" >Επεξεργασία Προφίλ</a></p>
                            </div>
							
						</div>
					 </nav>
					
                            <?php } else { ?>
                            <!-- Search btn -->
                            <?php 
                            if(isset($_POST['login'])){ ?>
                                <div class="dorne-search-btn">
                                <a id="search-btn" href="#"><i class="fa fa-search" aria-hidden="true"></i>Αναζήτηση</a>
                            </div>
                            
                            
                            <div class="content" method="post" action="">
                                       <style>
                                       p{
                                           margin: 0;
                                       }
                                       </style>
                                        <?php if(isset($_SESSION["email"])): ?>
                                            <p><a style="color:white;">Καλωσήρθες</p> 
                                            <p><strong><?php echo $_SESSION['email']; ?></a></strong></p>
                                            <p><a href="Βέλτιστη-Διαδρομή.php" style="color:red;">Αποσύνδεση</a></p>
                                            <p><a href="edit.php" name="edit" style="color:navy;" >Επεξεργασία Προφίλ</a></p>
                                        <?php endif ?>
							</div>
						
                            <?php 
                            }
                            else { ?>
                            <div class="dorne-search-btn">
                                <a id="search-btn" href="#"><i class="fa fa-search" aria-hidden="true"></i>Αναζήτηση</a>
                            </div>
                            <!-- Signin btn -->
                            <div class="dorne-signin-btn">
                                <a onclick="document.getElementById('id01').style.display='block'" style="font-style:normal; color:white; font-weight:600; cursor: default;">Είσοδος/Εγγραφή</a>
                            </div> 
						
                        <!--login-->
								<div id="id01" class="modal1">
								  
								  <form class="modal1-content animate" method="post" action="payment.php">
									<div class="imgcontainer">
									  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
									
									</div>
                                    <i style="font-weight:400; font-style:normal; font-size:20px; padding-left:18px;">Δεν είσαι μέλος;<a onclick="document.getElementById('id02').style.display='block'"><i style="color:lightblue; font-style:normal; font-size:20px;"> Εγγραφή</i></a></i>
									<div class="container">
                                      
									  <label for="uname" style="font-weight:400; font-size:20px;"><b>E-mail</b></label>
									  <input class="input1" type="text" style="color:lightgray" name="email" required>

									  <label for="psw" style="font-weight:400; font-size:20px;"><b>Κωδικός</b></label>
									  <input class="input1" type="password" id="psw1" name="password" required>
                                      <input type="checkbox" id="pwcheck"><i style="font-weight:400; font-size:20px; font-style:normal;">Δείξε μου τον κωδικό!</i></input>
                                      <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
                                      <script>
$(document).ready(function(){

    $("#psw1").focus();

    $("#pwcheck").click(function(){
        if ($("#pwcheck").is(":checked"))
        {
            $("#psw1").clone()
            .attr("type", "text").insertAfter("#psw1")
            .prev().remove();
        }
        else
        {
            $("#psw1").clone()
            .attr("type","password").insertAfter("#psw1")
            .prev().remove();
        }
    });
});
</script>
										
									  <button id='signup-button' type="submit" name="login" style="font-weight:400; font-size:20px;">Σύνδεση</button>
									  <br>
                                        
										<input type="checkbox" name="remember"><i style="font-weight:400; font-style:normal; font-size:20px;"> Θυμήσου με!</i>
                                        
									
									</div>

									<div class="container" style="background-color:#f1f1f1">
                                      
									  <button id='cancelbtn' type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Ακύρωση</button>
                                     
									  <span class="psw" >Ξέχασες τον <a href="#">κωδικό</a> σου;</span>
									</div>
								  </form>
								</div>
                            </div>
                            
                            <!--signup-->
                            <div id="id02" class="modal1">
								  
								  <form class="modal1-content animate" method="post" action="payment.php"
                                  oninput='password2.setCustomValidity(password2.value != password1.value ? "Οι κωδικοί δεν ταιριάζουν." : "")'>
									<div class="imgcontainer">
									  <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
									  
									</div>
                                    
									<div class="container">
                                      
									  <label for="email" style="font-weight:400; font-size:20px;"><b>E-mail:</b></label>
									  <input class="input1" type="text" style="color:lightgray; color: rgb(169,169,169)" placeholder="name@example.com" name="email" required>

									  <label for="psw" style="font-weight:400; font-size:20px;"><b>Κωδικός:</b></label>
                                      <input type="password" id="psw" class="input1" name="password1" required>
									<div id="message" style="margin: 0;">
  <i style="font-style:normal; font-size:18px; font-family:'Open sans',sans serif;">Ο κωδικός πρέπει να περιέχει τα ακόλουθα:</i>
  
  <p style="margin:0;" id="letter" class="invalid">Ένα μικρό γράμμα</p>
  <p style="margin:0;" id="capital" class="invalid">Ένα κεφαλαίο γράμμα</p>
  <p style="margin:0;" id="number" class="invalid">Έναν αριθμό</p>
  <p style="margin:0;" id="length" class="invalid">Τουλάχιστον 8 χαρακτήρες</p>
  </div>
<script>
var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
}

  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }

  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>

									  <label for="psw" style="font-weight:400; font-size:20px;"><b>Επαλήθευση κωδικού:</b></label>
									   <input class="input1" type="password" name="password2" required>
									  
									  <button id='signup-button' name="register" type="submit" style="font-weight:400; font-size:20px;">Εγγραφή</button>
									  <br>
                                        
										<input type="checkbox" name="remember"><i style="font-weight:400; font-style:normal; font-size:20px;"> Θυμήσου με!</i>
									</div>

									<div class="container" style="background-color:#f1f1f1">
                                      
									  <button id='cancelbtn' type="button" onclick="document.getElementById('id02').style.display='none'" style="color:black;" class="cancelbtn">Ακύρωση</button>
                                    
									</div>
                                    
								  </form>
								</div>
                            
                            <!-- Add listings btn -->
                            
                        </div>
                    </nav> 
					
					 <?php 
                            } 
                            ?>
					<?php } ?>
					
					<nav class="h-30 navbar navbar-expand-lg" style="margin-bottom: 20px">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#dorneNav" aria-controls="dorneNav" aria-expanded="false" aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
                        <!-- Nav -->
                        <div class="collapse navbar-collapse" id="dorneNav"  >
                            <ul class="navbar-nav mr-auto" id="dorneMenu">
                                    <a class="nav-link" href="Βέλτιστη-Διαδρομή.php"style=" font-weight: bold; font-size:18px;">Αρχική </a>
									<a class="nav-link" href="#"> > </a>
									<a class="nav-link" href="#" style=" font-weight: bold; font-size:18px;">Εισιτήρια</a>
									<a class="nav-link" href="#"> ></a>
									<a class="nav-link" href="Αγορά-Επαναφόρτιση.php" style="font-weight: bold; font-size:18px;">Ηλεκτρονική Αγορά/Επαναφόρτιση</a>
									<a class="nav-link" href="#"> ></a>
									<a class="nav-link" href="payment.php"><span style="color:rgba(0, 85, 132,1); font-weight: bold; font-size:18px;">Πληρωμή</span></a>
                    </nav>
					
					
					             
					
                </div>
            </div>
        </div>
		
    </header>

    <!-- ***** Header Area End ***** -->
	<?php
    $db=mysqli_connect('localhost','root','','sdi1600021');
                            $query42="SELECT `email` FROM `users` WHERE flag='1' ";
                            $result=mysqli_query($db,$query42);
                            if(mysqli_num_rows($result) >0){ ?>
		<section class="dorne-welcome-area bg-img" style="background-image: url(img/buy_ticket.jpg);">
	
		<div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-12 col-md-10">
                    <!-- Hero Search Form -->
                    <div class="hero-search-form" >
                        <!-- Tabs -->
                        <div class="nav nav-tabs" id="heroTab" role="tablist">
						
							
                            <a class="nav-item nav-link active" id="nav-places-tab" data-toggle="tab" href="#nav-places" role="tab" aria-controls="nav-places" aria-selected="true" style="width: 50%">Χρεωστικη/Πιστωτικη Καρτα</a>
                            <a class="nav-item nav-link" id="nav-events-tab" data-toggle="tab" href="#nav-events" role="tab" aria-controls="nav-events" aria-selected="false" style="width: 50%">PayPal</a>
                        </div>
                        <!-- Tabs Content -->
                        <div class="tab-content" id="nav-tabContent">
						
						
                            <div class="tab-pane fade show active" id="nav-places" role="tabpanel" aria-labelledby="nav-places-tab">
								
								
	
						<h3 style="color:white">Το Συνολικό ποσό πληρωμής είναι:
								<?php	 $db=mysqli_connect('localhost','root','','sdi1600021');
							$sql = $db->query("SELECT SUM(Timh*Number)  AS value_sum FROM payment WHERE Number>0");
							$row = $sql->fetch_assoc();
							echo number_format((float)$row['value_sum'], 2, '.', '');
							mysqli_close($db);
					?> € <br> <br>
					</h3>
                    <?php 
                        $db1=mysqli_connect('localhost','root','','sdi1600021');
                        $email=$_SESSION['email'];
                        $query3="SELECT * FROM users WHERE email='$email'"; 
                        $result5=mysqli_query($db1,$query3);
                        if (mysqli_num_rows($result5) > 0) {
                          // output data of each row
                        while($row = mysqli_fetch_assoc($result5)) {?>
								<a style="color:white; font-size: 20px; padding-right:150px"> Όνομα*:</a>
								<input type="text" id="name" name="e-mail" style="color:black; font-size:12px; padding-right:177px" value="<?php echo $row["name"]; ?>" placeholder="ΓΙΑΝΝΗΣ" style="width: 40%" >
								<br>
								<a style="color:white; font-size: 20px; padding-right:125px"> Επώνυμο*:</a>
								<input type="text" id="Name" name="e-mail" style="color:black; font-size:12px; padding-right:177px" value="<?php echo $row["hobbies"]; ?>" placeholder="ΠΑΠΑΔΟΠΟΥΛΟΣ" style="width: 40%">
								<br>
								<a style="color:white; font-size: 20px; padding-right:155px"> Κάρτα*:</a>
								<img src="img/card.png" style="width:5em; height:1.5em;">
								<select id="card_type">
								<img src="img/background.png" style="width:35em; height:40em;">
								<option value="1" >VISA</option>
								<option value="2" >Master Card</option>
								<option value="3" >American Express</option>
								<option value="4" >Discover Card</option>
								</select>
								<br>
								
								<a style="color:white; font-size: 20px; padding-right:60px"> Αριθμός Κάρτας*:</a>
								<input type="text" id="card" name="e-mail" style="color:rgb(128,128,128); font-size:12px; padding-right:177px" value="" placeholder="1111 2222 3333 4444" style="width: 40%" >
								<br>
								<a style="color:white; font-size: 20px; padding-right:177px"> CVV*:</a> 
								<input type="text" id="CVV" name="cvv" style="color:rgb(128,128,128); font-size:12px; padding-right:177px" value="" placeholder="352" style="width: 40%" >
								<br>
								<a style="color:white; font-size: 12px; padding-right:177px">*4 τελευταία ψηφία για American Express:</a> 
								<br>
								<a style="color:white; font-size: 20px; padding-right:34px"> Ημερομηνία Λήξης*:</a>
								<input type="month" id="date" name="expmonth" min="2020-01" max="2050-01" value="" style="width: 40.5%" >
								
								<br>
								<a style="color:white; font-size: 20px; padding-right:167px"> E-Mail:</a>
								<input type="text" name="e-mail" style="color:black; font-size:12px; padding-right:177px" value="<?php echo $row["email"]; ?>" placeholder=" name@example.com" style="width: 40%">
								<br>
								<a style="color:white; font-size: 20px; padding-right:27px"> Αριθμός Τηλεφώνου:</a>
								<input type="text" name="number" value="+30"style="width: 10%">
								<input type="text" name="number" style="width: 30.3%" value="<?php echo $row["number"]; ?>">
								<br><br>
								<a style="color:white; font-size: 20px;"</a>
								<input type="radio" name="gender" id="op1" value="1" > Επιθυμώ να μου σταλεί η απόδειξη στο e-mail<br>
								<input type="radio" name="gender" id="op2" value="2" > Εμφάνιση απόδειξης <br>
								
								<input type="button"  onclick="myFunction()" value="Ολοκλήρωση αγοράς" style="width: 30%">
								
								<p id="demo1" style="color:white" ></p>
						
							</div>
                          
	</section>
    <?php
                        }
                        }
                    
                        ?>
    <?php
                        } else {
                        
                    
                        ?>
    	
    

	
	<section class="dorne-editors-pick-area bg-img bg-overlay-9 section-padding-100" style="background-image: url(img/buy_ticket.jpg);">
	
		<div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center" style=" margin-top: 50px;">
                <div class="col-12 col-md-10">
                    <!-- Hero Search Form -->
                    <div class="hero-search-form" >
                        <!-- Tabs -->
                        <div class="nav nav-tabs" id="heroTab" role="tablist">
						
							
                            <a class="nav-item nav-link active" id="nav-places-tab" data-toggle="tab" href="#nav-places" role="tab" aria-controls="nav-places" aria-selected="true" style="width: 50%">Χρεωστικη/Πιστωτικη Καρτα</a>
                            <a class="nav-item nav-link" id="nav-events-tab" data-toggle="tab" href="#nav-events" role="tab" aria-controls="nav-events" aria-selected="false" style="width: 50%">PayPal</a>
                        </div>
                        <!-- Tabs Content -->
                        <div class="tab-content" id="nav-tabContent">
						
						
                            <div class="tab-pane fade show active" id="nav-places" role="tabpanel" aria-labelledby="nav-places-tab">
								
								
	
						<h3 style="color:white">Το Συνολικό ποσό πληρωμής είναι:
								<?php	 $db=mysqli_connect('localhost','root','','sdi1600021');
							$sql = $db->query("SELECT SUM(Timh*Number)  AS value_sum FROM payment WHERE Number>0");
							$row = $sql->fetch_assoc();
							echo number_format((float)$row['value_sum'], 2, '.', '');
							mysqli_close($db);
					?> € <br>
					</h3>
					<div class="dorne-signin-btn">
						<a style="color:white; font-size: 20px;">Εάν θέλετε να συνδεθείτε ως χρήστης πατήστε: </a>
						<a onclick="document.getElementById('id01').style.display='block'" style="font-style:normal; color:white; font-weight:600; font-size: 20px; text-decoration: underline; cursor: default;">Είσοδος/Εγγραφή</a>
						 
                    </div>
						<br> 	
							
								<a style="color:white; font-size: 20px; padding-right:150px"> Όνομα*:</a>
								<input type="text" id="name" name="e-mail" style="color:rgb(128,128,128); font-size:12px; padding-right:177px" value="" placeholder="ΓΙΑΝΝΗΣ" style="width: 40%" >
								<br>
								<a style="color:white; font-size: 20px; padding-right:125px"> Επώνυμο*:</a>
								<input type="text" id="Name" name="e-mail" style="color:rgb(128,128,128); font-size:12px; padding-right:177px" value="" placeholder="ΠΑΠΑΔΟΠΟΥΛΟΣ" style="width: 40%">
								<br>
								<a style="color:white; font-size: 20px; padding-right:155px"> Κάρτα*:</a>
								<img src="img/card.png" style="width:5em; height:1.5em;">
								<select id="card_type">
								<img src="img/background.png" style="width:35em; height:40em;">
								<option value="1" >VISA</option>
								<option value="2" >Master Card</option>
								<option value="3" >American Express</option>
								<option value="4" >Discover Card</option>
								</select>
								<br>
								
								<a style="color:white; font-size: 20px; padding-right:60px"> Αριθμός Κάρτας*:</a>
								<input type="text" id="card" name="e-mail" style="color:rgb(128,128,128); font-size:12px; padding-right:177px" value="" placeholder="1111 2222 3333 4444" style="width: 40%" >
								<br>
								<a style="color:white; font-size: 20px; padding-right:177px"> CVV*:</a> 
								<input type="text" id="CVV" name="cvv" style="color:rgb(128,128,128); font-size:12px; padding-right:177px" value="" placeholder="352" style="width: 40%" >
								<br>
								<a style="color:white; font-size: 12px; padding-right:177px">*4 τελευταία ψηφία για American Express:</a> 
								<br>
								<a style="color:white; font-size: 20px; padding-right:34px"> Ημερομηνία Λήξης*:</a>
								<input type="month" id="date" name="expmonth" min="2020-01" max="2050-01" value="" style="width: 40.5%" >
								
								<br>
								<a style="color:white; font-size: 20px; padding-right:167px"> E-Mail:</a>
								<input type="text" name="e-mail" style="color:rgb(128,128,128); font-size:12px; padding-right:177px" placeholder=" name@example.com" style="width: 40%">
								<br>
								<a style="color:white; font-size: 20px; padding-right:27px"> Αριθμός Τηλεφώνου:</a>
								<input type="text" name="number" value="+30"style="width: 10%">
								<input type="text" name="number" value=""style="width: 30.3%">
								<br><br>
								<a style="color:white; font-size: 20px;"</a>
								<input type="radio" name="gender" id="op1" value="1" > Επιθυμώ να μου σταλεί η απόδειξη στο e-mail<br>
								<input type="radio" name="gender" id="op2" value="2" > Εμφάνιση απόδειξης <br>
								
								<input type="button"  onclick="myFunction()" value="Ολοκλήρωση αγοράς" style="width: 30%">
								
								<p id="demo1" style="color:white" >  </p>
								
							</div>
	</section>
                        <?php } ?>
    
		
	
	<div id="dropDownSelect1"></div>
	
	<script src="js/main.js"></script>
	
	
		<script>
	
	
	function myFunction() {
		
		document.getElementById("demo1").style.backgroundColor="rgba(252, 29, 29,0.45)";
		document.getElementById("demo1").style.width="70%";
		document.getElementById("demo1").style.fontWeight= "bold";
		document.getElementById("demo1").style.fontFamily= "Open sans,sans-serif";
		document.getElementById("demo1").style.fontSize="14px";
		document.getElementById("demo1").style.borderRadius="25px";
		document.getElementById("demo1").style.paddingLeft="15px";
		document.getElementById("demo1").style.marginTop="10px";
	
		var i,j,text="";
		var y=document.getElementById("card_type");
		var x=document.getElementById("CVV");
		
		
		if(document.getElementById("name").value==""){
			text=text + "! Συμπληρώστε σωστά το Όνομα " + "<br/>";
		
		}
		if(document.getElementById("Name").value==""){
			text=text + "! Συμπληρώστε σωστά το Επίθετο " + "<br/>";
			
		}
		
		if(document.getElementById("card").value.length !=19) {
			text= text+ "! Συμπληρώστε σωστά τον Αριθμό Κάρτας. Η σωστή μορφή: 1111 2222 3333 4444" + "<br/>";
		}
		else{
			
			for (i = 0; i < document.getElementById("card").value.length; i++){
			
				if(i==4 || i==9 || i==14){
					if(document.getElementById("card").value.charCodeAt(i) != 32){
						text= text+ "! Συμπληρώστε σωστά τον Αριθμό Κάρτας. Η σωστή μορφή: 1111 2222 3333 4444" + "<br/>";
						break;
					}			
					
				}
				else{
					if(document.getElementById("card").value.charCodeAt(i)<48 || document.getElementById("card").value.charCodeAt(i)>57){
						text= text+ "! Συμπληρώστε σωστά τον Αριθμό Κάρτας. Η σωστή μορφή: 1111 2222 3333 4444" + "<br/>";
						break;
					}
				}
			}
		}
		
		if( x.value.length!=3  && x.value.length != 4 ) {
			text=text + "! Συμπληρώστε σωστά τον αριθμό CVV. 3 ψηφία ή 4 για MasterCard " + "<br/>";
		}
		else if(x.value.length==4 && y.value != 3){
			text=text + "! Συμπληρώστε σωστά τον αριθμό CVV. 3 ψηφία ή 4 για MasterCard " + "<br/>";
		}
		else if(x.value.length==3 && y.value==3){
			text=text + "! Συμπληρώστε σωστά τον αριθμό CVV. 3 ψηφία ή 4 για MasterCard " + "<br/>";
		}
		else{
			for(j=0 ;j<x.value.length; j++){
				if(x.value.charCodeAt(j)<48 || x.value.charCodeAt(j)>57){
					text=text + "! Συμπληρώστε σωστά τον αριθμό CVV. 3 ψηφία ή 4 για MasterCard " + "<br/>";

				}
			}
		}
		
		
		if(document.getElementById("date").value==""){
			text=text + "! Συμπληρώστε σωστά την Ημερομηνία Λήξης ";
			document.getElementById("demo1").innerHTML = text;
			return;
		}
			
		
		if(i==19 ){
			if (document.getElementById('op1').checked) {
				document.getElementById("demo1").innerHTML = "option1 was checked";
				
			}else if(document.getElementById('op2').checked) {
				document.getElementById("demo1").innerHTML = "option2 was checked";
				window.open("receipt.php");
			}
			window.alert("Ολοκλήρωση πληρωμής με επιτυχία!\n Επιστροφή στην αρχική σελίδα");
			document.location="Βέλτιστη-Διαδρομή.php";
		}
		else{
			document.getElementById("demo1").innerHTML = text;
		}
		
		
	}
	
	function autocomplete(inp, arr) {
  
  var currentFocus;
  
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
     
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      
      this.parentNode.appendChild(a);
      
      for (i = 0; i < arr.length; i++) {
        
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          
          b = document.createElement("DIV");
          
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          
          b.addEventListener("click", function(e) {
              
              inp.value = this.getElementsByTagName("input")[0].value;
              
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        
        currentFocus++;
       
        addActive(x);
      } else if (e.keyCode == 38) { //up
        
        currentFocus--;
        
        addActive(x);
      } else if (e.keyCode == 13) {
        
        e.preventDefault();
        if (currentFocus > -1) {
         
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
   
    if (!x) return false;
    
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
   
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
   
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
  });
}

var countries = ["Μετρό-Ωράριο","Τραμ", "ΜΜΜ","ΑΜΕΑ-ΣτάσειςΜεΠροεξοχές-Καισαριανή","Μετρό-Στάσεις","Αγορά-Επαναφόρτιση", "Τιμές-Εισιτηρίων","ΑΜΕΑ-ΣτάσειςΜεΠροεξοχές-Παπάγος","ΑΜΕΑ-ΣτάσειςΜεΠροεξοχές-Ηλιούπολη","Βέλτιστη-Διαδρομή"];


autocomplete(document.getElementById("myInput"), countries);
	
	</script>
	
	
	<!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap-4 js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/others/plugins.js"></script>
    <!-- Active JS -->
    <script src="js/active.js"></script>
</body>

</html>