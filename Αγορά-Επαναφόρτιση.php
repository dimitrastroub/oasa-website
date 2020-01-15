<?php include ('Εύρεση-Βέλτιστης.php'); ?>
<!DOCTYPE html>

<html lang="el">
<style>
	table, th, td {
	border: 1px solid white;
	color:white;
	text-align: center;
	}
</style>

<head>


    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Αγορά-Επαναφόρτιση</title>

    <!-- Favicon -->
    <link rel="icon" href="img/logo.png">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>" >

    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive/responsive.css?v=<?php echo time(); ?>">

</head>

	

<body>
   <!-- <!-- Preloader -->
    <div id="preloader">
        <div class="dorne-load"></div>
    </div>

	
		
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
                                <li>
                                    <a class="nav-link" href="Βέλτιστη-Διαδρομή.php">Αρχική <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Δρομολόγια <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Μετρό <i class="fa fa-angle-down" aria-hidden="true"></i></a>
											<div class="dropdown-menu" x-placement="right-start" style="position: absolute; transform: translate3d(230px, 0px, 0px); top: 4px; left: 0px; will-change: transform;" >
                                                <a class="dropdown-item" href="Μετρό-Στάσεις.php">Στάσεις</a>
												<a class="dropdown-item" href="Μετρό-Ωράριο.php">Ωράριο</a>
											</div>
										</a>
                                        <a class="dropdown-item" href="#">Τραμ</a>
                                        <a class="dropdown-item" href="#">Ηλεκτρικός Σιδηρόδρομος</a>
                                        <a class="dropdown-item" href="#">Προαστιακός</a>
                                        <a class="dropdown-item" href="#">Τρόλεϊ</a>
										<a class="dropdown-item" href="#">Λεωφορεία</a>
                                        
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
                                        <a class="dropdown-item" href="#">Ανελκυστήρες</a>
										
										<a class="dropdown-item" <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Στάσεις με Προεξοχές <i class="fa fa-angle-down" aria-hidden="true"></i></a>
											<div class="dropdown-menu" x-placement="right-start" style="position: absolute; transform: translate3d(230px, 30px, 0px); top: 4px; left: 35px; will-change: transform;" >
											
											<form action="#" method="get">
												<select  class="sel" size=10 onchange="window.location = this.value;" >
													<option value="#" selected>Επιλέξτε Δήμο...</option>
													<option value="#">Δήμος Αγίας Βαρβάρας</option>
													<option value="#">Δήμος Αγίου Δημήτριου</option>
													<option value="#">Δήμος Αθηνών</option>
													<option value="#">Δήμος Ελληνικού-Αργυρούπολης</option>
													<option value="#">Δήμος Αχαρνών</option>
													<option value="#">Δήμος Βύρωνα</option>
													<option value="#">Δήμος Γλυφάδας</option>
													<option value="#">Δήμος Δάφνης-Υμηττού</option>
													<option value="#">Δήμος Ζωγράφου</option>
													<option value="ΑΜΕΑ-ΣτάσειςΜεΠροεξοχές-Ηλιούπολη.php">Δήμος Ηλιούπολης</option> 
													<option value="ΑΜΕΑ-ΣτάσειςΜεΠροεξοχές-Καισαριανή.php">Δήμος Καισαριανής</option>
													<option value="#">Δήμος Καλλιθέας</option>
													<option value="#">Δήμος Μελλισίων</option>
													<option value="#">Δήμος Νέας Σμύρνης</option>
													<option value="#">Δήμος Νέας Χαλκηδόνας-Νέας Φιλαδέφλιας</option>
													<option value="#">Δήμος Νίκαιας</option>
													<option value="ΑΜΕΑ-ΣτάσειςΜεΠροεξοχές-Παπάγος.php">Δήμος Παπάγου-Χολαργού</option>
													<option value="#">Δήμος Παλαιού Φαλήρου</option>
													<option value="#">Δήμος Πειραιά</option>
													<option value="#">Δήμος Περάματος</option>
													<option value="#">Δήμος Περιστερίου</option>
													<option value="#">Δήμος Πετρούπολης</option>
												</select>
                                            </form>   
											</div>
										
                                        <a class="dropdown-item" href="#">Οδηγίες Προσέγγισης στα ΜΜΜ</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Ανακοινώσεις</a>
                                </li>
                                
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Επικοινωνία</a>
                                </li>
                            </ul>
                            <?php
                            $db=mysqli_connect('localhost','root','','sdi1600021');
                            $query42="SELECT `email` FROM `users` WHERE flag='1'";
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
                                            <p><a href="Βέλτιστη-Διαδρομή.php?logout='0' " style="color:red;">Αποσύνδεση</a></p>
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
								  
								  <form class="modal1-content animate" method="post" action="Βέλτιστη-Διαδρομή.php">
									<div class="imgcontainer">
									  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
									
									</div>
                                    <i style="font-weight:400; font-style:normal; font-size:20px; padding-left:18px;">Δεν είσαι μέλος;<a onclick="document.getElementById('id02').style.display='block'"><i style="color:lightblue; font-style:normal; font-size:20px; cursor: default;"> Εγγραφή</i></a></i>
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
								  
								  <form class="modal1-content animate" method="post" action="Βέλτιστη-Διαδρομή.php"
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
							
					<nav class="h-30 navbar navbar-expand-lg">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#dorneNav" aria-controls="dorneNav" aria-expanded="false" aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
                        <!-- Nav -->
                        <div class="collapse navbar-collapse" id="dorneNav"  >
                            <ul class="navbar-nav mr-auto" id="dorneMenu">
                                    <a class="nav-link" href="Βέλτιστη-Διαδρομή.php" style=" font-weight: bold; font-size:18px;">Αρχική </a>
									<a class="nav-link" href="#"> > </a>
									<a class="nav-link" href="#" style=" font-weight: bold; font-size:18px;">Εισητήρια</a>
									<a class="nav-link" href="#"> ></a>
									<a class="nav-link" href="Αγορά-Επαναφόρτιση.php"><span style="color:rgba(0, 85, 132,1); font-weight: bold; font-size:18px; ">Ηλεκτρονική Αγορά/Επαναφόρτιση</span></a>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <!-- ***** Welcome Area Start ***** -->
	<section class="dorne-editors-pick-area bg-img bg-overlay-9 section-padding-100" style="background-image: url(img/buy_ticket.jpg);">
    
    	<br><br>
		
		<?php
		$db=mysqli_connect('localhost','root','','sdi1600021');
        $query42="SELECT amea,foititis,anergos FROM `users` WHERE flag='1'";
        $result=mysqli_query($db,$query42);
        if(mysqli_num_rows($result)==1){
         ?> 
			<br><br>
			<h2 style="text-align: center; font-size: 20px; " >Δικαιούσαι μειωμένο εισιτήριο!! </h2>
			<h2 style="text-align: center; font-size: 15px;" >Επαναφόρτισε την προσωποποιημένη κάρτα σου </h2>
			<h2 style="text-align: center; font-size: 15px;" >Ή δες πού μπορείς να εκδόσεις άμεσα νέα κάρτα: </h2>
			
			<h2 onclick= document.location="Σημεία-Έκδοσης-Επαναφόρτισης.php"  style=" text-align: center; text-decoration: underline; font-size: 14px; font-weight:600; cursor: default;">Σημεία Έκδοσης/Επαναφόρτισης Καρτών/Εισιτηρίων</h2>
           
		   
			<div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-12 col-md-10">
                   <!-- <div class="hero-content">
                        <h2>Discover places near you</h2>
                        <h4>This is the best guide of your city</h4>
                    </div>-->
                    <!-- Hero Search Form -->
                    <div class="hero-search-form" >
                        <!-- Tabs -->
						<form method="post" action="Αγορά-Επαναφόρτιση.php" style="font-size:15px; " >
                        <div class="nav nav-tabs" id="heroTab" role="tablist" >
						
                            <a class="nav-item nav-link active" id="nav-places-tab" data-toggle="tab" href="#nav-places" role="tab" aria-controls="nav-places" aria-selected="true" style="width: 50%">Επαναφορτιση</a>
                            <a class="nav-item nav-link" id="nav-events-tab" data-toggle="tab" href="#nav-events" role="tab" aria-controls="nav-events" aria-selected="false" style="width: 50%">Αγορα</a>
                        </div>
                        <!-- Tabs Content -->
						
						 
                        <div class="tab-content" id="nav-tabContent" style="margin-top: 0px" >
						
							
                            <div class="tab-pane fade show active" id="nav-places" role="tabpanel" aria-labelledby="nav-places-tab" style= "text-align: center;" >
                                
								<h6>Εισιτήρια μικρής διάρκειας (χωρίς μετακινήσεις προς Αεροδρόμιο)</h6>
                                <table style="width:80%; margin-left:auto; margin-right:auto;">
											  <tr>
												<th></th>
												<th>Ανώνυμη κάρτα (Ολόκληρο)</th>
												<th>Τεμάχια</th>
												<th>Ανώνυμη κάρτα (Μειωμένο)</th>
												<th>Προσωποποιημένη κάρτα (Ολόκληρο)</th>
												<th>Τεμάχια</th>
												<th style="font-size: 18px; color: rgb(33, 186, 198);">Προσωποποιημένη κάρτα (Μειωμένο)</th>
												<th>Τεμάχια</th>
											  </tr>
											  <tr>
												<td>Ένα εισιτήριο 90 λεπτών</td>
												<td>1.40 €</td>
												<th><input type="number" name="inp12" id="12" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>Χ</td>
												<td>1.40 €</td>
												<th><input type="number" name="inp13" id="13" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>0.60 €</td>
												<th><input type="number" name="inp14" id="14" min="0" max="11" value="0" step="1" style="width:100%"></th>
											  </tr>
											  <tr>
												<td>Δύο εισιτήρια 90 λεπτών</td>
												<td>2.70 €</td>
												<th><input type="number" name="inp15" id="15" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>Χ</td>
												<td>2.70 €</td>
												<th><input type="number" name="inp16" id="16" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>1.20 €</td>
												<th><input type="number" name="inp17" id="17" min="0" max="11" value="0" step="1" style="width:100%"></th>
											  </tr>
											  <tr>
												<td>Πέντε εισιτήρια 90 λεπτών</td>
												<td>6.50 €</td>
												<th><input type="number" name="inp18" id="18" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>Χ</td>
												<td>6.50 €</td>
												<th><input type="number" name="inp19" id="19" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>3.00 €</td>
												<th><input type="number" name="inp20" id="20" min="0" max="11" value="0" step="1" style="width:100%"></th>
											  </tr>
											  <tr>
												<td>Έντεκα εισιτήρια 90 λεπτών(1 δωρεάν)</td>
												<td>13.50 €</td>
												<th><input type="number" name="inp21" id="21" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>Χ</td>
												<td>13.50 €</td>
												<th><input type="number" name="inp22" id="22" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>6.00 €</td>
												<th><input type="number" name="inp23" id="23" min="0" max="11" value="0" step="1" style="width:100%"></th>
											  </tr>
											  <tr>
												<td>Εισιτήριο 24 ωρών</td>
												<td>4,5 €</td>
												<th><input type="number" name="inp24" id="24" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>Χ</td>
												<td>4,5 €</td>
												<th><input type="number" name="inp25" id="25" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>Χ </td>
												<th></th>

											  </tr>
											  <tr>
												<td>Εισιτήριο 5 ημερών</td>
												<td>9 €</td>
												<th><input type="number" name="inp26" id="26" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>Χ</td>
												<td>9 €</td>
												<th><input type="number" name="inp27" id="27" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>Χ</td>
												<th></th>

											  </tr>
										</table> 
										
										<br><br><br>
										<h6>Εισιτήρια μικρής διάρκειας (με μετακινήσεις προς Αεροδρόμιο)</h6>
										
										<table style="width:80%; margin-left:auto; margin-right:auto;">
											<tr>
												<th></th>
												<th>Ανώνυμη κάρτα (Ολόκληρο)</th>
												<th>Τεμάχια</th>
												<th>Ανώνυμη κάρτα (Μειωμένο)</th>
												<th>Προσωποποιημένη κάρτα (Ολόκληρο)</th>
												<th>Τεμάχια</th>
												<th style="font-size: 18px; color: rgb(33, 186, 198);">Προσωποποιημένη κάρτα (Μειωμένο)</th>
												<th>Τεμάχια</th>
											 </tr>
											  
											<tr>
												<td>Εισιτήριο Λεωφορείου Express για Αεροδρόμιο</td>
												<td>6 €</td>
												<th><input type="number" name="inp28" id="28" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>Χ</td>
												<td>6 €</td>
												<th><input type="number" name="inp29" id="29" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>3 €</td>
												<th><input type="number" name="inp30" id="30" min="0" max="11" value="0" step="1" style="width:100%"></th>
											</tr>
											<tr>
												<td>Εισιτήριο Μετρό για Αεροδρόμιο</td>
												<td>10 €</td>
												<th><input type="number" name="inp31" id="31" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>Χ</td>
												<td>10 €</td>
												<th><input type="number" name="inp32" id="32" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>5 €</td>
												<th><input type="number" name="inp33" id="33" min="0" max="11" value="0" step="1" style="width:100%"></th>
											</tr>
											<tr>
												<td>Εισιτήριο Μετρό μετ επιστροφής για Αεροδρόμιο (εντός 48 ωρών)</td>
												<td>18 €</td>
												<th><input type="number" name="inp34" id="34" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>Χ</td>
												<td>18 €</td>
												<th><input type="number" name="inp35" id="35" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>Χ</td>
												<th></th>
											</tr>
											<tr>
												<td>Εισιτήριο Μετρό μεταξύ Αεροδρομίου & Παλλήνη-Κάντζα-Κορωπί</td>
												<td>6 €</td>
												<th><input type="number" name="inp36" id="36" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>Χ</td>
												<td>6 €</td>
												<th><input type="number" name="inp37" id="37" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>3 €</td>
												<th><input type="number" name="inp38" id="38" min="0" max="11" value="0" step="1" style="width:100%"></th>
											</tr>
											<tr>
												<td>Τουριστικό εισιτήριο 3 ημερών (περιλαμβάνει μετακινήσεις προς Αεροδρόμιο)</td>
												<td>22 €</td>
												<th><input type="number" name="inp39" id="39" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>Χ</td>
												<td>22 €</td>
												<th><input type="number" name="inp40" id="40" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>Χ</td>
												<th></th>
											</tr>
										</table> 
										
										<br><br><br>
										<h6>Εισιτήρια μεγάλης διάρκειας</h6>
										
										<table style="width:80%; margin-left:auto; margin-right:auto;">
											<tr>
												<th></th>
												<th>Ανώνυμη κάρτα (Ολόκληρο)</th>
												<th>Ανώνυμη κάρτα (Μειωμένο)</th>
												<th>Προσωποποιημένη κάρτα (Ολόκληρο)</th>
												<th>Τεμάχια</th>
												<th style="font-size: 18px; color: rgb(33, 186, 198);">Προσωποποιημένη κάρτα (Μειωμένο)</th>
												<th>Τεμάχια</th>
											</tr>
											<tr>
												<td>Εισιτήριο 30 ημερών (χωρίς μετακινήσεις προς Αεροδρόμιο)</td>
												<td>Χ</td>
												<td>Χ</td>
												<td>30 €</td>
												<th><input type="number" name="inp41" id="41" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>15 €</td>
												<th><input type="number" name="inp42" id="42" min="0" max="11" value="0" step="1" style="width:100%"></th>
											</tr>
											<tr>
												<td>Εισιτήριο 30 ημερών (με μετακινήσεις προς Αεροδρόμιο)</td>
												<td>Χ</td>
												<td>Χ</td>
												<td>49 €</td>
												<th><input type="number" name="inp43" id="43" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>25 €</td>
												<th><input type="number" name="inp44" id="44" min="0" max="11" value="0" step="1" style="width:100%"></th>
											</tr>
											<tr>
												<td>Εισιτήριο 90 ημερών (χωρίς μετακινήσεις προς Αεροδρόμιο)</td>
												<td>Χ</td>
												<td>Χ</td>
												<td>85 €</td>
												<th><input type="number" name="inp45" id="45" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>43 €</td>
												<th><input type="number" name="inp46" id="46" min="0" max="11" value="0" step="1" style="width:100%"></th>
											</tr>
											<tr>
												<td>Εισιτήριο 90 ημερών (με μετακινήσεις προς Αεροδρόμιο)</td>
												<td>Χ</td>
												<td>Χ</td>
												<td>142 €</td>
												<th><input type="number" name="inp47" id="47" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>71 €</td>
												<th><input type="number" name="inp48" id="48" min="0" max="11" value="0" step="1" style="width:100%"></th>
											</tr>
											<tr>
												<td>Εισιτήριο 180 ημερών (χωρίς μετακινήσεις προς Αεροδρόμιο)</td>
												<td>Χ</td>
												<td>Χ</td>
												<td>170 €</td>
												<th><input type="number" name="inp49" id="49" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>85 €</td>
												<th><input type="number" name="inp50" id="50" min="0" max="11" value="0" step="1" style="width:100%"></th>
											</tr>
											<tr>
												<td>Εισιτήριο 180 ημερών (με μετακινήσεις προς Αεροδρόμιο)</td>
												<td>Χ</td>
												<td>Χ</td>
												<td>250 €</td>
												<th><input type="number" name="inp51" id="51" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>125 €</td>
												<th><input type="number" name="inp52" id="52" min="0" max="11" value="0" step="1" style="width:100%"></th>
											</tr>
											<tr>
												<td>Εισιτήριο 365 ημερών (χωρίς μετακινήσεις προς Αεροδρόμιο)</td>
												<td>Χ</td>
												<td>Χ</td>
												<td>330 €</td>
												<th><input type="number" name="inp53" id="53" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>165 €</td>
												<th><input type="number" name="inp54" id="54" min="0" max="11" value="0" step="1" style="width:100%"></th>
											</tr>
											<tr>
												<td>Εισιτήριο 365 ημερών (με μετακινήσεις προς Αεροδρόμιο)</td>
												<td>Χ</td>
												<td>Χ</td>
												<td>490 €</td>
												<th><input type="number" name="inp55" id="55" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>245 €</td>
												<th><input type="number" name="inp56" id="56" min="0" max="11" value="0" step="1" style="width:100%"></th>
											</tr>
										</table> 	
										
										<br>
										<input type="button" onclick="myFunction()" value="Εμφάνιση του έως τώρα συνολικού ποσού πληρωμής" />
										<p id="demo1" style="color:white" >  </p>
									<!--	<input type="button" name="plhrwmh" onclick="location.href='payment.html';" value="Μεταφορά στη διαδικασία πληρωμής" />-->
										<br>
										<button name="plhrwmh" type="submit" onclick="location.href='payment.php';" >Μεταφορά στη διαδικασία πληρωμής</button>
									
                            </div>
                            <div class="tab-pane fade" id="nav-events" role="tabpanel" aria-labelledby="nav-events-tab" style= "text-align: center;">
							
								<h6>Εισιτήρια μικρής διάρκειας (χωρίς μετακινήσεις προς Αεροδρόμιο)</h6>
								
										 <table style="width:80%; margin-left:auto; margin-right:auto;">
											  <tr>
												<th></th>
												<th>Πολλαπλό εισιτήριο (Ολόκληρο)</th>
												<th>Τεμάχια</th>
												<th>Πολλαπλό εισιτήριο (Μειωμένο)</th>
											  </tr>
											  <tr>
												<td>Ένα εισιτήριο 90 λεπτών</td>
												<td>1.40 €</td>
												
												<th><input type="number" name="inp1" id="1" min="0" max="11" value="0" step="1" style="width:100%" ></th>
												<td>Χ</td>
											  </tr>
											  <tr>
												<td>Δύο εισιτήρια 90 λεπτών</td>
												<td>2.70 €</td>
												<th><input type="number" name="inp2" id="2" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>Χ</td>
											  </tr>
											  <tr>
												<td>Πέντε εισιτήρια 90 λεπτών</td>
												<td>6.50 €</td>
												<th><input type="number" name="inp3" id="3" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>Χ</td>
											  </tr>
											  <tr>
												<td>Έντεκα εισιτήρια 90 λεπτών(1 δωρεάν)</td>
												<td>13.50 €</td>
												<th><input type="number" name="inp4" id="4" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>Χ</td>
											  </tr>
											  <tr>
												<td>Εισιτήριο 24 ωρών</td>
												<td>4,5 €</td>
												<th><input type="number" name="inp5" id="5" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>Χ</td>
											  </tr>
											  <tr>
												<td>Εισιτήριο 5 ημερών</td>
												<td>9 €</td>
												<th><input type="number" name="inp6" id="6" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>Χ</td>
											  </tr>
										</table> 
                               
							   <br><br><br>
								<h6>Εισιτήρια μικρής διάρκειας (με μετακινήσεις προς Αεροδρόμιο)</h6>
								
								<table style="width:80%; margin-left:auto; margin-right:auto;">
											  <tr>
												<th></th>
												<th>Πολλαπλό εισιτήριο (Ολόκληρο)</th>
												<th>Τεμάχια</th>
												<th>Πολλαπλό εισιτήριο (Μειωμένο)</th>
											  </tr>
											  <tr>
												<td>Εισιτήριο Λεωφορείου Express για Αεροδρόμιο</td>
												<td>6 €</td>
												<th><input type="number" name="inp7" id="7" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>Χ</td>
											  </tr>
											  <tr>
												<td>Εισιτήριο Μετρό για Αεροδρόμιο</td>
												<td>10 €</td>
												<th><input type="number" name="inp8" id="8" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>Χ</td>
											  </tr>
											  <tr>
												<td>Εισιτήριο Μετρό μετ επιστροφής για Αεροδρόμιο (εντός 48 ωρών)</td>
												<td>18 €</td>
												<th><input type="number" name="inp9" id="9" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>Χ</td>
											  </tr>
											  <tr>
												<td>Εισιτήριο Μετρό μεταξύ Αεροδρομίου & Παλλήνη-Κάντζα-Κορωπί</td>
												<td>6 €</td>
												<th><input type="number" name="inp10" id="10" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>Χ</td>
											  </tr>
											  <tr>
												<td>Τουριστικό εισιτήριο 3 ημερών (περιλαμβάνει μετακινήσεις προς Αεροδρόμιο)</td>
												<td>22 €</td>
												<th><input type="number" name="inp11" id="11" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>Χ</td>
											  </tr>
										</table> 
										
										
										
										<br>
										
										
									<!--	<button type="button" onclick="myFunction()">Submit</button>-->
										<input type="button" onclick="myFunction()" value="Εμφάνιση του έως τώρα συνολικού ποσού πληρωμής" />
										<p id="demo" style="color:white" >  </p>
									<!--	<input type="button" name="plhrwmh"  value="Μεταφορά στη διαδικασία πληρωμής" />
										onclick="location.href='payment.html';"-->
										<br>
										<button name="plhrwmh" type="submit"  >Μεταφορά στη διαδικασία πληρωμής</button>
								
                            </div>
							
                        </div>
						</form>
                    </div>
                </div>
            </div>
        </div>
		   
		<?php				
		}
		else{
        ?>
	
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-12 col-md-10">
                   <!-- <div class="hero-content">
                        <h2>Discover places near you</h2>
                        <h4>This is the best guide of your city</h4>
                    </div>-->
                    <!-- Hero Search Form -->
                    <div class="hero-search-form" >
                        <!-- Tabs -->
						<form method="post" action="Αγορά-Επαναφόρτιση.php" style="font-size:15px; " >
                        <div class="nav nav-tabs" id="heroTab" role="tablist" >
						
                            <a class="nav-item nav-link active" id="nav-places-tab" data-toggle="tab" href="#nav-places" role="tab" aria-controls="nav-places" aria-selected="true" style="width: 50%">Αγορα</a>
                            <a class="nav-item nav-link" id="nav-events-tab" data-toggle="tab" href="#nav-events" role="tab" aria-controls="nav-events" aria-selected="false" style="width: 50%">Επαναφορτιση</a>
                        </div>
                        <!-- Tabs Content -->
						
						 
                        <div class="tab-content" id="nav-tabContent" style="margin-top: 0px" >
						
							
                            <div class="tab-pane fade show active" id="nav-places" role="tabpanel" aria-labelledby="nav-places-tab" style= "text-align: center;" >
                                <h6>Εισιτήρια μικρής διάρκειας (χωρίς μετακινήσεις προς Αεροδρόμιο)</h6>
								
										
								
										 <table style="width:80%; margin-left:auto; margin-right:auto;">
											  <tr>
												<th></th>
												<th>Πολλαπλό εισιτήριο (Ολόκληρο)</th>
												<th>Τεμάχια</th>
												<th>Πολλαπλό εισιτήριο (Μειωμένο)</th>
											  </tr>
											  <tr>
												<td>Ένα εισιτήριο 90 λεπτών</td>
												<td>1.40 €</td>
												
												<th><input type="number" name="inp1" id="1" min="0" max="11" value="0" step="1" style="width:100%" ></th>
												<td>Χ</td>
											  </tr>
											  <tr>
												<td>Δύο εισιτήρια 90 λεπτών</td>
												<td>2.70 €</td>
												<th><input type="number" name="inp2" id="2" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>Χ</td>
											  </tr>
											  <tr>
												<td>Πέντε εισιτήρια 90 λεπτών</td>
												<td>6.50 €</td>
												<th><input type="number" name="inp3" id="3" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>Χ</td>
											  </tr>
											  <tr>
												<td>Έντεκα εισιτήρια 90 λεπτών(1 δωρεάν)</td>
												<td>13.50 €</td>
												<th><input type="number" name="inp4" id="4" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>Χ</td>
											  </tr>
											  <tr>
												<td>Εισιτήριο 24 ωρών</td>
												<td>4,5 €</td>
												<th><input type="number" name="inp5" id="5" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>Χ</td>
											  </tr>
											  <tr>
												<td>Εισιτήριο 5 ημερών</td>
												<td>9 €</td>
												<th><input type="number" name="inp6" id="6" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>Χ</td>
											  </tr>
										</table> 
                               
							   <br><br><br>
								<h6>Εισιτήρια μικρής διάρκειας (με μετακινήσεις προς Αεροδρόμιο)</h6>
								
								<table style="width:80%; margin-left:auto; margin-right:auto;">
											  <tr>
												<th></th>
												<th>Πολλαπλό εισιτήριο (Ολόκληρο)</th>
												<th>Τεμάχια</th>
												<th>Πολλαπλό εισιτήριο (Μειωμένο)</th>
											  </tr>
											  <tr>
												<td>Εισιτήριο Λεωφορείου Express για Αεροδρόμιο</td>
												<td>6 €</td>
												<th><input type="number" name="inp7" id="7" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>Χ</td>
											  </tr>
											  <tr>
												<td>Εισιτήριο Μετρό για Αεροδρόμιο</td>
												<td>10 €</td>
												<th><input type="number" name="inp8" id="8" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>Χ</td>
											  </tr>
											  <tr>
												<td>Εισιτήριο Μετρό μετ επιστροφής για Αεροδρόμιο (εντός 48 ωρών)</td>
												<td>18 €</td>
												<th><input type="number" name="inp9" id="9" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>Χ</td>
											  </tr>
											  <tr>
												<td>Εισιτήριο Μετρό μεταξύ Αεροδρομίου & Παλλήνη-Κάντζα-Κορωπί</td>
												<td>6 €</td>
												<th><input type="number" name="inp10" id="10" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>Χ</td>
											  </tr>
											  <tr>
												<td>Τουριστικό εισιτήριο 3 ημερών (περιλαμβάνει μετακινήσεις προς Αεροδρόμιο)</td>
												<td>22 €</td>
												<th><input type="number" name="inp11" id="11" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>Χ</td>
											  </tr>
										</table> 
										
										
										
										<br>
										
										
									<!--	<button type="button" onclick="myFunction()">Submit</button>-->
										<input type="button" onclick="myFunction()" value="Εμφάνιση του έως τώρα συνολικού ποσού πληρωμής" />
										<p id="demo" style="color:white" >  </p>
									<!--	<input type="button" name="plhrwmh"  value="Μεταφορά στη διαδικασία πληρωμής" />
										onclick="location.href='payment.html';"-->
										
										<button name="plhrwmh" type="submit"  >Μεταφορά στη διαδικασία πληρωμής</button>
										
										
							
							
							

                            </div>
                            <div class="tab-pane fade" id="nav-events" role="tabpanel" aria-labelledby="nav-events-tab" style= "text-align: center;">
                                <h6>Εισιτήρια μικρής διάρκειας (χωρίς μετακινήσεις προς Αεροδρόμιο)</h6>
                                <table style="width:80%; margin-left:auto; margin-right:auto;">
											  <tr>
												<th></th>
												<th>Ανώνυμη κάρτα (Ολόκληρο)</th>
												<th>Τεμάχια</th>
												<th>Ανώνυμη κάρτα (Μειωμένο)</th>
												<th>Προσωποποιημένη κάρτα (Ολόκληρο)</th>
												<th>Τεμάχια</th>
												<th>Προσωποποιημένη κάρτα (Μειωμένο)</th>
												<th>Τεμάχια</th>
											  </tr>
											  <tr>
												<td>Ένα εισιτήριο 90 λεπτών</td>
												<td>1.40 €</td>
												<th><input type="number" name="inp12" id="12" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>Χ</td>
												<td>1.40 €</td>
												<th><input type="number" name="inp13" id="13" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>0.60 €</td>
												<th><input type="number" name="inp14" id="14" min="0" max="11" value="0" step="1" style="width:100%"></th>
											  </tr>
											  <tr>
												<td>Δύο εισιτήρια 90 λεπτών</td>
												<td>2.70 €</td>
												<th><input type="number" name="inp15" id="15" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>Χ</td>
												<td>2.70 €</td>
												<th><input type="number" name="inp16" id="16" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>1.20 €</td>
												<th><input type="number" name="inp17" id="17" min="0" max="11" value="0" step="1" style="width:100%"></th>
											  </tr>
											  <tr>
												<td>Πέντε εισιτήρια 90 λεπτών</td>
												<td>6.50 €</td>
												<th><input type="number" name="inp18" id="18" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>Χ</td>
												<td>6.50 €</td>
												<th><input type="number" name="inp19" id="19" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>3.00 €</td>
												<th><input type="number" name="inp20" id="20" min="0" max="11" value="0" step="1" style="width:100%"></th>
											  </tr>
											  <tr>
												<td>Έντεκα εισιτήρια 90 λεπτών(1 δωρεάν)</td>
												<td>13.50 €</td>
												<th><input type="number" name="inp21" id="21" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>Χ</td>
												<td>13.50 €</td>
												<th><input type="number" name="inp22" id="22" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>6.00 €</td>
												<th><input type="number" name="inp23" id="23" min="0" max="11" value="0" step="1" style="width:100%"></th>
											  </tr>
											  <tr>
												<td>Εισιτήριο 24 ωρών</td>
												<td>4,5 €</td>
												<th><input type="number" name="inp24" id="24" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>Χ</td>
												<td>4,5 €</td>
												<th><input type="number" name="inp25" id="25" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>Χ </td>
												<th></th>

											  </tr>
											  <tr>
												<td>Εισιτήριο 5 ημερών</td>
												<td>9 €</td>
												<th><input type="number" name="inp26" id="26" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>Χ</td>
												<td>9 €</td>
												<th><input type="number" name="inp27" id="27" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>Χ</td>
												<th></th>

											  </tr>
										</table> 
										
										<br><br><br>
										<h6>Εισιτήρια μικρής διάρκειας (με μετακινήσεις προς Αεροδρόμιο)</h6>
										
										<table style="width:80%; margin-left:auto; margin-right:auto;">
											<tr>
												<th></th>
												<th>Ανώνυμη κάρτα (Ολόκληρο)</th>
												<th>Τεμάχια</th>
												<th>Ανώνυμη κάρτα (Μειωμένο)</th>
												<th>Προσωποποιημένη κάρτα (Ολόκληρο)</th>
												<th>Τεμάχια</th>
												<th>Προσωποποιημένη κάρτα (Μειωμένο)</th>
												<th>Τεμάχια</th>
											 </tr>
											  
											<tr>
												<td>Εισιτήριο Λεωφορείου Express για Αεροδρόμιο</td>
												<td>6 €</td>
												<th><input type="number" name="inp28" id="28" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>Χ</td>
												<td>6 €</td>
												<th><input type="number" name="inp29" id="29" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>3 €</td>
												<th><input type="number" name="inp30" id="30" min="0" max="11" value="0" step="1" style="width:100%"></th>
											</tr>
											<tr>
												<td>Εισιτήριο Μετρό για Αεροδρόμιο</td>
												<td>10 €</td>
												<th><input type="number" name="inp31" id="31" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>Χ</td>
												<td>10 €</td>
												<th><input type="number" name="inp32" id="32" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>5 €</td>
												<th><input type="number" name="inp33" id="33" min="0" max="11" value="0" step="1" style="width:100%"></th>
											</tr>
											<tr>
												<td>Εισιτήριο Μετρό μετ επιστροφής για Αεροδρόμιο (εντός 48 ωρών)</td>
												<td>18 €</td>
												<th><input type="number" name="inp34" id="34" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>Χ</td>
												<td>18 €</td>
												<th><input type="number" name="inp35" id="35" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>Χ</td>
												<th></th>
											</tr>
											<tr>
												<td>Εισιτήριο Μετρό μεταξύ Αεροδρομίου & Παλλήνη-Κάντζα-Κορωπί</td>
												<td>6 €</td>
												<th><input type="number" name="inp36" id="36" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>Χ</td>
												<td>6 €</td>
												<th><input type="number" name="inp37" id="37" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>3 €</td>
												<th><input type="number" name="inp38" id="38" min="0" max="11" value="0" step="1" style="width:100%"></th>
											</tr>
											<tr>
												<td>Τουριστικό εισιτήριο 3 ημερών (περιλαμβάνει μετακινήσεις προς Αεροδρόμιο)</td>
												<td>22 €</td>
												<th><input type="number" name="inp39" id="39" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>Χ</td>
												<td>22 €</td>
												<th><input type="number" name="inp40" id="40" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>Χ</td>
												<th></th>
											</tr>
										</table> 
										
										<br><br><br>
										<h6>Εισιτήρια μεγάλης διάρκειας</h6>
										
										<table style="width:80%; margin-left:auto; margin-right:auto;">
											<tr>
												<th></th>
												<th>Ανώνυμη κάρτα (Ολόκληρο)</th>
												<th>Ανώνυμη κάρτα (Μειωμένο)</th>
												<th>Προσωποποιημένη κάρτα (Ολόκληρο)</th>
												<th>Τεμάχια</th>
												<th>Προσωποποιημένη κάρτα (Μειωμένο)</th>
												<th>Τεμάχια</th>
											</tr>
											<tr>
												<td>Εισιτήριο 30 ημερών (χωρίς μετακινήσεις προς Αεροδρόμιο)</td>
												<td>Χ</td>
												<td>Χ</td>
												<td>30 €</td>
												<th><input type="number" name="inp41" id="41" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>15 €</td>
												<th><input type="number" name="inp42" id="42" min="0" max="11" value="0" step="1" style="width:100%"></th>
											</tr>
											<tr>
												<td>Εισιτήριο 30 ημερών (με μετακινήσεις προς Αεροδρόμιο)</td>
												<td>Χ</td>
												<td>Χ</td>
												<td>49 €</td>
												<th><input type="number" name="inp43" id="43" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>25 €</td>
												<th><input type="number" name="inp44" id="44" min="0" max="11" value="0" step="1" style="width:100%"></th>
											</tr>
											<tr>
												<td>Εισιτήριο 90 ημερών (χωρίς μετακινήσεις προς Αεροδρόμιο)</td>
												<td>Χ</td>
												<td>Χ</td>
												<td>85 €</td>
												<th><input type="number" name="inp45" id="45" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>43 €</td>
												<th><input type="number" name="inp46" id="46" min="0" max="11" value="0" step="1" style="width:100%"></th>
											</tr>
											<tr>
												<td>Εισιτήριο 90 ημερών (με μετακινήσεις προς Αεροδρόμιο)</td>
												<td>Χ</td>
												<td>Χ</td>
												<td>142 €</td>
												<th><input type="number" name="inp47" id="47" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>71 €</td>
												<th><input type="number" name="inp48" id="48" min="0" max="11" value="0" step="1" style="width:100%"></th>
											</tr>
											<tr>
												<td>Εισιτήριο 180 ημερών (χωρίς μετακινήσεις προς Αεροδρόμιο)</td>
												<td>Χ</td>
												<td>Χ</td>
												<td>170 €</td>
												<th><input type="number" name="inp49" id="49" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>85 €</td>
												<th><input type="number" name="inp50" id="50" min="0" max="11" value="0" step="1" style="width:100%"></th>
											</tr>
											<tr>
												<td>Εισιτήριο 180 ημερών (με μετακινήσεις προς Αεροδρόμιο)</td>
												<td>Χ</td>
												<td>Χ</td>
												<td>250 €</td>
												<th><input type="number" name="inp51" id="51" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>125 €</td>
												<th><input type="number" name="inp52" id="52" min="0" max="11" value="0" step="1" style="width:100%"></th>
											</tr>
											<tr>
												<td>Εισιτήριο 365 ημερών (χωρίς μετακινήσεις προς Αεροδρόμιο)</td>
												<td>Χ</td>
												<td>Χ</td>
												<td>330 €</td>
												<th><input type="number" name="inp53" id="53" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>165 €</td>
												<th><input type="number" name="inp54" id="54" min="0" max="11" value="0" step="1" style="width:100%"></th>
											</tr>
											<tr>
												<td>Εισιτήριο 365 ημερών (με μετακινήσεις προς Αεροδρόμιο)</td>
												<td>Χ</td>
												<td>Χ</td>
												<td>490 €</td>
												<th><input type="number" name="inp55" id="55" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>245 €</td>
												<th><input type="number" name="inp56" id="56" min="0" max="11" value="0" step="1" style="width:100%"></th>
											</tr>
										</table> 	
										
										<br>
										<input type="button" onclick="myFunction()" value="Εμφάνιση του έως τώρα συνολικού ποσού πληρωμής" />
										<p id="demo1" style="color:white" >  </p>
									<!--	<input type="button" name="plhrwmh" onclick="location.href='payment.html';" value="Μεταφορά στη διαδικασία πληρωμής" />-->
										<button name="plhrwmh" type="submit" onclick="location.href='payment.php';" >Μεταφορά στη διαδικασία πληρωμής</button>
									
                            </div>
							
                        </div>
						</form>
                    </div>
                </div>
            </div>
        </div>
		
		<?php				
		}
		
        ?>
        <!-- Hero Social Btn -->
        <div class="hero-social-btn">
            <div class="social-title d-flex align-items-center">
                <h6>Follow us on Social Media</h6>
                <span></span>
            </div>
            <div class="social-btns">
                <a href="#"><i class="fa fa-linkedin" aria-haspopup="true"></i></a>
                <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter" aria-haspopup="true"></i></a>
                <a href="#"><i class="fa fa-facebook" aria-haspopup="true"></i></a>
            </div>
        </div>
		
									
    </section>
    <!-- ***** Welcome Area End ***** -->
	
	
	
	<script src="search.js">
	</script>


	<script>
	
	
	
	function myFunction() {
		var x=0, text="";

		// Get the value of the input field with id="numb"
												  
										  
		if (document.getElementById("1").value > 0) {
			text = text + "Ένα εισιτήριο 90 λεπτών" + "  X " + document.getElementById("1").value + "<br/>";
			x = x + document.getElementById("1").value*1.40;
		}
		if (document.getElementById("2").value > 0) {
			text = text + "Δύο εισιτήρια 90 λεπτών" + "  X " + document.getElementById("2").value + "<br/>";
			x = x + document.getElementById("2").value*2.70;
		}
		if (document.getElementById("3").value > 0) {
			text = text + "Πέντε εισιτήρια 90 λεπτών" + "  X " + document.getElementById("3").value + "<br/>";
			x = x + document.getElementById("3").value*6.50;
		}
		if (document.getElementById("4").value > 0) {
			text = text + "Έντεκα εισιτήρια 90 λεπτών(1 δωρεάν)" + "  X " + document.getElementById("4").value + "<br/>";
			x = x + document.getElementById("4").value*13.50;
		}
		if (document.getElementById("5").value > 0) {
			text = text + "Εισιτήριο 24 ωρών" + "  X " + document.getElementById("5").value + "<br/>";
			x = x + document.getElementById("5").value*4.50;
		}
		if (document.getElementById("6").value > 0) {
			text = text + "Εισιτήριο 5 ημερών" + "  X " + document.getElementById("6").value + "<br/>";
			x = x + document.getElementById("6").value*9;
		}
		if (document.getElementById("7").value > 0) {
			text = text + "Εισιτήριο Λεωφορείου Express για Αεροδρόμιο" + "  X " + document.getElementById("7").value + "<br/>";
			x = x + document.getElementById("7").value*6;
		}
		if (document.getElementById("8").value > 0) {
			text = text + "Εισιτήριο Μετρό για Αεροδρόμιο" + "  X " + document.getElementById("8").value + "<br/>";
			x = x + document.getElementById("8").value*10;
		}
		if (document.getElementById("9").value > 0) {
			text = text + "Εισιτήριο Μετρό μετ επιστροφής για Αεροδρόμιο (εντός 48 ωρών)" + "  X " + document.getElementById("9").value + "<br/>";
			x = x + document.getElementById("9").value*18;
		}
		if (document.getElementById("10").value > 0) {
			text = text + "Εισιτήριο Μετρό μεταξύ Αεροδρομίου & Παλλήνη-Κάντζα-Κορωπί" + "  X " + document.getElementById("10").value + "<br/>";
			x = x + document.getElementById("10").value*6;
		}
		if (document.getElementById("11").value > 0) {
			text = text + "Τουριστικό εισιτήριο 3 ημερών (περιλαμβάνει μετακινήσεις προς Αεροδρόμιο)" + "  X " + document.getElementById("11").value + "<br/>";
			x = x + document.getElementById("11").value*22;
		}
		if (document.getElementById("12").value > 0) {
			text = text + "Ένα εισιτήριο 90 λεπτών Ανώνυμη κάρτα (Ολόκληρο)" + "  X " + document.getElementById("12").value + "<br/>";
			x = x + document.getElementById("12").value*1.40;
		}
		if (document.getElementById("13").value > 0) {
			text = text + "Ένα εισιτήριο 90 λεπτών Προσωποποιημένη κάρτα (Ολόκληρο)" + "  X " + document.getElementById("13").value + "<br/>";
			x = x + document.getElementById("13").value*1.40;
		}
		if (document.getElementById("14").value > 0) {
			text = text + "Ένα εισιτήριο 90 λεπτών Προσωποποιημένη κάρτα (Μειωμένο)" + "  X " + document.getElementById("14").value + "<br/>";
			x = x + document.getElementById("14").value*0.60;
		}
		if (document.getElementById("15").value > 0) {
			text = text + "Δύο εισιτήρια 90 λεπτών Ανώνυμη κάρτα (Ολόκληρο)" + "  X " + document.getElementById("15").value + "<br/>";
			x = x + document.getElementById("15").value*2.70;
		}
		if (document.getElementById("16").value > 0) {
			text = text + "Δύο εισιτήρια 90 λεπτών Προσωποποιημένη κάρτα (Ολόκληρο)" + "  X " + document.getElementById("16").value + "<br/>";
			x = x + document.getElementById("16").value*2.70;
		}
		if (document.getElementById("17").value > 0) {
			text = text + "Δύο εισιτήρια 90 λεπτών Προσωποποιημένη κάρτα (Μειωμένο)" + "  X " + document.getElementById("17").value + "<br/>";
			x = x + document.getElementById("17").value*1.20;
		}
		if (document.getElementById("18").value > 0) {
			text = text + "Πέντε εισιτήρια 90 λεπτών Ανώνυμη κάρτα (Ολόκληρο)" + "  X " + document.getElementById("18").value + "<br/>";
			x = x + document.getElementById("18").value*6.50;
		}
		if (document.getElementById("19").value > 0) {
			text = text + "Πέντε εισιτήρια 90 λεπτών Προσωποποιημένη κάρτα (Ολόκληρο)" + "  X " + document.getElementById("19").value + "<br/>";
			x = x + document.getElementById("19").value*6.50;
		}
		if (document.getElementById("20").value > 0) {
			text = text + "Πέντε εισιτήρια 90 λεπτών Προσωποποιημένη κάρτα (Μειωμένο)" + "  X " + document.getElementById("20").value + "<br/>";
			x = x + document.getElementById("20").value*3;
		}
		if (document.getElementById("21").value > 0) {
			text = text + "Έντεκα εισιτήρια 90 λεπτών(1 δωρεάν) Ανώνυμη κάρτα (Ολόκληρο)" + "  X " + document.getElementById("21").value + "<br/>";
			x = x + document.getElementById("21").value*13.50;
		}
		if (document.getElementById("22").value > 0) {
			text = text + "Έντεκα εισιτήρια 90 λεπτών(1 δωρεάν) Προσωποποιημένη κάρτα (Ολόκληρο)" + "  X " + document.getElementById("22").value + "<br/>";
			x = x + document.getElementById("22").value*13.50;
		}
		if (document.getElementById("23").value > 0) {
			text = text + "Έντεκα εισιτήρια 90 λεπτών(1 δωρεάν) Προσωποποιημένη κάρτα (Μειωμένο)" + "  X " + document.getElementById("23").value + "<br/>";
			x = x + document.getElementById("23").value*6;
		}
		if (document.getElementById("24").value > 0) {
			text = text + "Εισιτήριο 24 ωρών Ανώνυμη κάρτα (Ολόκληρο)" + "  X " + document.getElementById("24").value + "<br/>";
			x = x + document.getElementById("24").value*4.50;
		}
		if (document.getElementById("25").value > 0) {
			text = text + "Εισιτήριο 24 ωρών Προσωποποιημένη κάρτα (Ολόκληρο)" + "  X " + document.getElementById("25").value + "<br/>";
			x = x + document.getElementById("25").value*4.50;
		}
		if (document.getElementById("26").value > 0) {
			text = text + "Εισιτήριο 5 ημερών Ανώνυμη κάρτα (Ολόκληρο)" + "  X " + document.getElementById("26").value + "<br/>";
			x = x + document.getElementById("26").value*9;
		}
		if (document.getElementById("27").value > 0) {
			text = text + "Εισιτήριο 5 ημερών Προσωποποιημένη κάρτα (Ολόκληρο)" + "  X " + document.getElementById("27").value + "<br/>";
			x = x + document.getElementById("27").value*9;
		}
		if (document.getElementById("28").value > 0) {
			text = text + "Εισιτήριο Λεωφορείου Express για Αεροδρόμιο Ανώνυμη κάρτα (Ολόκληρο)" + "  X " + document.getElementById("28").value + "<br/>";
			x = x + document.getElementById("28").value*6;
		}
		if (document.getElementById("29").value > 0) {
			text = text + "Εισιτήριο Λεωφορείου Express για Αεροδρόμιο Προσωποποιημένη κάρτα (Ολόκληρο)" + "  X " + document.getElementById("29").value + "<br/>";
			x = x + document.getElementById("29").value*6;
		}
		if (document.getElementById("30").value > 0) {
			text = text + "Εισιτήριο Λεωφορείου Express για Αεροδρόμιο Προσωποποιημένη κάρτα (Μειωμένο)" + "  X " + document.getElementById("30").value + "<br/>";
			x = x + document.getElementById("30").value*3;
		}
		if (document.getElementById("31").value > 0) {
			text = text + "Εισιτήριο Μετρό για Αεροδρόμιο Ανώνυμη κάρτα (Ολόκληρο)" + "  X " + document.getElementById("31").value + "<br/>";
			x = x + document.getElementById("31").value*10;
		}
		if (document.getElementById("32").value > 0) {
			text = text + "Εισιτήριο Μετρό για Αεροδρόμιο Προσωποποιημένη κάρτα (Ολόκληρο)" + "  X " + document.getElementById("32").value + "<br/>";
			x = x + document.getElementById("32").value*10;
		}
		if (document.getElementById("33").value > 0) {
			text = text + "Εισιτήριο Μετρό για Αεροδρόμιο Προσωποποιημένη κάρτα (Μειωμένο)" + "  X " + document.getElementById("33").value + "<br/>";
			x = x + document.getElementById("33").value*5;
		}
		if (document.getElementById("34").value > 0) {
			text = text + "Εισιτήριο Μετρό μετ επιστροφής για Αεροδρόμιο (εντός 48 ωρών) Ανώνυμη κάρτα (Ολόκληρο)" + "  X " + document.getElementById("34").value + "<br/>";
			x = x + document.getElementById("34").value*18;
		}
		if (document.getElementById("35").value > 0) {
			text = text + "Εισιτήριο Μετρό μετ επιστροφής για Αεροδρόμιο (εντός 48 ωρών) Προσωποποιημένη κάρτα (Ολόκληρο)" + "  X " + document.getElementById("35").value + "<br/>";
			x = x + document.getElementById("35").value*18;
		}
		if (document.getElementById("36").value > 0) {
			text = text + "Εισιτήριο Μετρό μεταξύ Αεροδρομίου & Παλλήνη-Κάντζα-Κορωπί Ανώνυμη κάρτα (Ολόκληρο)" + "  X " + document.getElementById("36").value + "<br/>";
			x = x + document.getElementById("36").value*6;
		}
		if (document.getElementById("37").value > 0) {
			text = text + "Εισιτήριο Μετρό μεταξύ Αεροδρομίου & Παλλήνη-Κάντζα-Κορωπί Προσωποποιημένη κάρτα (Ολόκληρο)" + "  X " + document.getElementById("37").value + "<br/>";
			x = x + document.getElementById("37").value*6;
		}
		if (document.getElementById("38").value > 0) {
			text = text + "Εισιτήριο Μετρό μεταξύ Αεροδρομίου & Παλλήνη-Κάντζα-Κορωπί Προσωποποιημένη κάρτα (Μειωμένο)" + "  X " + document.getElementById("38").value + "<br/>";
			x = x + document.getElementById("38").value*3;
		}
		if (document.getElementById("39").value > 0) {
			text = text + "Τουριστικό εισιτήριο 3 ημερών (περιλαμβάνει μετακινήσεις προς Αεροδρόμιο) Ανώνυμη κάρτα (Ολόκληρο)" + "  X " + document.getElementById("39").value + "<br/>";
			x = x + document.getElementById("39").value*22;
		}
		if (document.getElementById("40").value > 0) {
			text = text + "Τουριστικό εισιτήριο 3 ημερών (περιλαμβάνει μετακινήσεις προς Αεροδρόμιο) Προσωποποιημένη κάρτα (Ολόκληρο)" + "  X " + document.getElementById("40").value + "<br/>";
			x = x + document.getElementById("40").value*22;
		}
		if (document.getElementById("41").value > 0) {
			text = text + "Εισιτήριο 30 ημερών (χωρίς μετακινήσεις προς Αεροδρόμιο) Προσωποποιημένη κάρτα (Ολόκληρο)" + "  X " + document.getElementById("41").value + "<br/>";
			x = x + document.getElementById("41").value*30;
		}
		if (document.getElementById("42").value > 0) {
			text = text + "Εισιτήριο 30 ημερών (χωρίς μετακινήσεις προς Αεροδρόμιο) Προσωποποιημένη κάρτα (Μειωμένο)" + "  X " + document.getElementById("42").value + "<br/>";
			x = x + document.getElementById("42").value*15;
		}
		if (document.getElementById("43").value > 0) {
			text = text + "Εισιτήριο 30 ημερών (με μετακινήσεις προς Αεροδρόμιο) Προσωποποιημένη κάρτα (Ολόκληρο)" + "  X " + document.getElementById("43").value + "<br/>";
			x = x + document.getElementById("43").value*49;
		}
		if (document.getElementById("44").value > 0) {
			text = text + "Εισιτήριο 30 ημερών (με μετακινήσεις προς Αεροδρόμιο) Προσωποποιημένη κάρτα (Μειωμένο)" + "  X " + document.getElementById("44").value + "<br/>";
			x = x + document.getElementById("44").value*25;
		}
		if (document.getElementById("45").value > 0) {
			text = text + "Εισιτήριο 90 ημερών (χωρίς μετακινήσεις προς Αεροδρόμιο) Προσωποποιημένη κάρτα (Ολόκληρο)" + "  X " + document.getElementById("45").value + "<br/>";
			x = x + document.getElementById("45").value*85;
		}
		if (document.getElementById("46").value > 0) {
			text = text + "Εισιτήριο 90 ημερών (χωρίς μετακινήσεις προς Αεροδρόμιο) Προσωποποιημένη κάρτα (Μειωμένο)" + "  X " + document.getElementById("46").value + "<br/>";
			x = x + document.getElementById("46").value*43;
		}
		if (document.getElementById("47").value > 0) {
			text = text + "Εισιτήριο 90 ημερών (με μετακινήσεις προς Αεροδρόμιο) Προσωποποιημένη κάρτα (Ολόκληρο)" + "  X " + document.getElementById("47").value + "<br/>";
			x = x + document.getElementById("47").value*142;
		}
		if (document.getElementById("48").value > 0) {
			text = text + "Εισιτήριο 90 ημερών (με μετακινήσεις προς Αεροδρόμιο) Προσωποποιημένη κάρτα (Μειωμένο)" + "  X " + document.getElementById("48").value + "<br/>";
			x = x + document.getElementById("48").value*71;
		}
		if (document.getElementById("49").value > 0) {
			text = text + "Εισιτήριο 180 ημερών (χωρίς μετακινήσεις προς Αεροδρόμιο) Προσωποποιημένη κάρτα (Ολόκληρο)" + "  X " + document.getElementById("49").value + "<br/>";
			x = x + document.getElementById("49").value*170;
		}
		if (document.getElementById("50").value > 0) {
			text = text + "Εισιτήριο 180 ημερών (χωρίς μετακινήσεις προς Αεροδρόμιο) Προσωποποιημένη κάρτα (Μειωμένο)" + "  X " + document.getElementById("50").value + "<br/>";
			x = x + document.getElementById("50").value*85;
		}
		if (document.getElementById("51").value > 0) {
			text = text + "Εισιτήριο 180 ημερών (με μετακινήσεις προς Αεροδρόμιο) Προσωποποιημένη κάρτα (Ολόκληρο)" + "  X " + document.getElementById("51").value + "<br/>";
			x = x + document.getElementById("51").value*250;
		}
		if (document.getElementById("52").value > 0) {
			text = text + "Εισιτήριο 180 ημερών (με μετακινήσεις προς Αεροδρόμιο) Προσωποποιημένη κάρτα (Μειωμένο)" + "  X " + document.getElementById("52").value + "<br/>";
			x = x + document.getElementById("52").value*125;
		}
		if (document.getElementById("53").value > 0) {
			text = text + "Εισιτήριο 365 ημερών (χωρίς μετακινήσεις προς Αεροδρόμιο) Προσωποποιημένη κάρτα (Ολόκληρο)" + "  X " + document.getElementById("53").value + "<br/>";
			x = x + document.getElementById("53").value*330;
		}
		if (document.getElementById("54").value > 0) {
			text = text + "Εισιτήριο 365 ημερών (χωρίς μετακινήσεις προς Αεροδρόμιο) Προσωποποιημένη κάρτα (Μειωμένο)" + "  X " + document.getElementById("54").value + "<br/>";
			x = x + document.getElementById("54").value*165;
		}
		if (document.getElementById("55").value > 0) {
			text = text + "Εισιτήριο 365 ημερών (με μετακινήσεις προς Αεροδρόμιο) Προσωποποιημένη κάρτα (Ολόκληρο)" + "  X " + document.getElementById("55").value + "<br/>";
			x = x + document.getElementById("55").value*490;
		}
		if (document.getElementById("56").value > 0) {
			text = text + "Εισιτήριο 365 ημερών (με μετακινήσεις προς Αεροδρόμιο) Προσωποποιημένη κάρτα (Μειωμένο)" + "  X " + document.getElementById("56").value + "<br/>";
			x = x + document.getElementById("56").value*245;
		}
											
		document.getElementById("demo").innerHTML  = text + "<br/>" + "Το Συνολικό ποσό έως τώρα είναι: " + x.toFixed(2) + "&nbsp" + "€";
		document.getElementById("demo1").innerHTML  = text + "<br/>" + "Το Συνολικό ποσό έως τώρα είναι: " + x.toFixed(2) + "&nbsp" + "€";
		
		
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

var countries = ["Μετρό-Ωράριο","Τραμ", "ΜΜΜ","ΑΜΕΑ-ΣτάσειςΜεΠροεξοχές-Καισαριανή","Μετρό-Στάσεις","Αγορά-Επαναφόρτιση", "Τιμές-Εισιτηρίων","ΑΜΕΑ-ΣτάσειςΜεΠροεξοχές-Παπάγος","ΑΜΕΑ-ΣτάσειςΜεΠροεξοχές-Ηλιούπολη", "Βέλτιστη-Διαδρομή","Δικαιολογητικά-Έκδοσης-Εισιτηρίων","Σημεία-Έκδοσης-Επαναφόρτισης"];


autocomplete(document.getElementById("myInput"), countries);
	</script>
	
	
	
	<!--<script src="search.js"></script>-->
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