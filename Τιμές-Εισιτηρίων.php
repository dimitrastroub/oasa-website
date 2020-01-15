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
    <title>Τιμές Εισιτηρίων</title>

    <!-- Favicon -->
    <link rel="icon" href="img/logo.png">

    <!-- Core Stylesheet -->
    <link rel="stylesheet"  href="style.css?v=<?php echo time(); ?>">

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
                            
                            
                        </div>
                    </nav>
					<?php 
                            } 
                            ?>
                            <?php 
                            } 
                            ?>
					<nav class="h-30 navbar navbar-expand-lg">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#dorneNav" aria-controls="dorneNav" aria-expanded="false" aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
                        <!-- Nav -->
                        <div class="collapse navbar-collapse" id="dorneNav">
                            <ul class="navbar-nav mr-auto" id="dorneMenu">
                                    <a class="nav-link" href="Βέλτιστη-Διαδρομή.php" style="font-weight: bold; font-size:18px; ">Αρχική </a>
									<a class="nav-link" href="#"> > </a>
									<a class="nav-link" href="#" style="font-weight: bold; font-size:18px; ">Εισιτήρια </a>
									<a class="nav-link" href="#"> > </a>
									<a class="nav-link" href="Τιμές-Εισιτηρίων.php"><span style="color:rgba(0, 85, 132,1); font-weight: bold; font-size:18px; ">Τιμές εισιτηρίων</span></a>
						</div>
                    </nav>
                    
                </div>
            </div>
        </div>
    </header>

    <section class="dorne-editors-pick-area bg-img bg-overlay-9 section-padding-100" style="background-image: url(img/buy_ticket.jpg);">
  
		<br><br>
	
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-12 col-md-10">
                   
                    <div class="hero-search-form" >
                        <!-- Tabs -->
						<form method="post" action="Αγορά-Επαναφόρτιση.php" style="font-size:15px; " >
                        <div class="nav nav-tabs" id="heroTab" role="tablist" >
						
                            <a class="nav-item nav-link active" id="nav-places-tab" data-toggle="tab" href="#nav-places" role="tab" aria-controls="nav-places" aria-selected="true" style="width: 50%">Αγορα</a>
                            <a class="nav-item nav-link" id="nav-events-tab" data-toggle="tab" href="#nav-events" role="tab" aria-controls="nav-events" aria-selected="false" style="width: 50%">Επαναφορτιση</a>
                        </div>
                       
                        <div class="tab-content" id="nav-tabContent" style="margin-top: 0px" >
							
                            <div class="tab-pane fade show active" id="nav-places" role="tabpanel" aria-labelledby="nav-places-tab" style= "text-align: center;">
                                <h6>Εισιτήρια μικρής διάρκειας (χωρίς μετακινήσεις προς Αεροδρόμιο)</h6>
								
										 <table style="width:80%; margin-left:auto; margin-right:auto;">
											  <tr>
												<th></th>
												<th>Πολλαπλό εισιτήριο (Ολόκληρο)</th>
												<th>Πολλαπλό εισιτήριο (Μειωμένο)</th>
											  </tr>
											  <tr>
												<td>Ένα εισιτήριο 90 λεπτών</td>
												<td>1.40 €</td>
												<td>Χ</td>
											  </tr>
											  <tr>
												<td>Δύο εισιτήρια 90 λεπτών</td>
												<td>2.70 €</td>
												<td>Χ</td>
											  </tr>
											  <tr>
												<td>Πέντε εισιτήρια 90 λεπτών</td>
												<td>6.50 €</td>
												<td>Χ</td>
											  </tr>
											  <tr>
												<td>Έντεκα εισιτήρια 90 λεπτών(1 δωρεάν)</td>
												<td>13.50 €</td>
												<td>Χ</td>
											  </tr>
											  <tr>
												<td>Εισιτήριο 24 ωρών</td>
												<td>4,5 €</td>
												<td>Χ</td>
											  </tr>
											  <tr>
												<td>Εισιτήριο 5 ημερών</td>
												<td>9 €</td>
												<td>Χ</td>
											  </tr>
										</table> 
                               
							   <br><br><br>
								<h6>Εισιτήρια μικρής διάρκειας (με μετακινήσεις προς Αεροδρόμιο)</h6>
								
								 <table style="width:80%; margin-left:auto; margin-right:auto;">
											  <tr>
												<th></th>
												<th>Πολλαπλό εισιτήριο (Ολόκληρο)</th>
												<th>Πολλαπλό εισιτήριο (Μειωμένο)</th>
											  </tr>
											  <tr>
												<td>Εισιτήριο Λεωφορείου Express για Αεροδρόμιο</td>
												<td>6 €</td>
												<td>Χ</td>
											  </tr>
											  <tr>
												<td>Εισιτήριο Μετρό για Αεροδρόμιο</td>
												<td>10 €</td>
												<td>Χ</td>
											  </tr>
											  <tr>
												<td>Εισιτήριο Μετρό μετ επιστροφής για Αεροδρόμιο (εντός 48 ωρών)</td>
												<td>18 €</td>
												<td>Χ</td>
											  </tr>
											  <tr>
												<td>Εισιτήριο Μετρό μεταξύ Αεροδρομίου & Παλλήνη-Κάντζα-Κορωπί</td>
												<td>6 €</td>
												<td>Χ</td>
											  </tr>
											  <tr>
												<td>Τουριστικό εισιτήριο 3 ημερών (περιλαμβάνει μετακινήσεις προς Αεροδρόμιο)</td>
												<td>22 €</td>
												<td>Χ</td>
											  </tr>
										</table> 
										
										<br>
										
										
									<button type="submit" onclick="location.href='Αγορά-Επαναφόρτιση.php';" >Μεταφορά στη διαδικασία Αγοράς-Επαναφόρτισης</button>
									

                            </div>
                            <div class="tab-pane fade" id="nav-events" role="tabpanel" aria-labelledby="nav-events-tab" style= "text-align: center;">
                                <h6>Εισιτήρια μικρής διάρκειας (χωρίς μετακινήσεις προς Αεροδρόμιο)</h6>
                                 <table style="width:80%; margin-left:auto; margin-right:auto;">
											  <tr>
												<th></th>
												<th>Ανώνυμη κάρτα (Ολόκληρο)</th>
												<th>Ανώνυμη κάρτα (Μειωμένο)</th>
												<th>Προσωποποιημένη κάρτα (Ολόκληρο)</th>
												<th>Προσωποποιημένη κάρτα (Μειωμένο)</th>
											  </tr>
											  <tr>
												<td>Ένα εισιτήριο 90 λεπτών</td>
												<td>1.40 €</td>
												<td>Χ</td>
												<td>1.40 €</td>
												<td>0.60 €</td>
											  </tr>
											  <tr>
												<td>Δύο εισιτήρια 90 λεπτών</td>
												<td>2.70 €</td>
												<td>Χ</td>
												<td>2.70 €</td>
												<td>1.20 €</td>
											  </tr>
											  <tr>
												<td>Πέντε εισιτήρια 90 λεπτών</td>
												<td>6.50 €</td>
												<td>Χ</td>
												<td>6.50 €</td>
												<td>3.00 €</td>
											  </tr>
											  <tr>
												<td>Έντεκα εισιτήρια 90 λεπτών(1 δωρεάν)</td>
												<td>13.50 €</td>
												<td>Χ</td>
												<td>13.50 €</td>
												<td>6.00 €</td>
											  </tr>
											  <tr>
												<td>Εισιτήριο 24 ωρών</td>
												<td>4,5 €</td>
												<td>Χ</td>
												<td>4,5 €</td>
												<td>Χ </td>
												<th></th>

											  </tr>
											  <tr>
												<td>Εισιτήριο 5 ημερών</td>
												<td>9 €</td>
												<td>Χ</td>
												<td>9 €</td>
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
												<th>Ανώνυμη κάρτα (Μειωμένο)</th>
												<th>Προσωποποιημένη κάρτα (Ολόκληρο)</th>
												<th>Προσωποποιημένη κάρτα (Μειωμένο)</th>
											 </tr>
											  
											<tr>
												<td>Εισιτήριο Λεωφορείου Express για Αεροδρόμιο</td>
												<td>6 €</td>
												<td>Χ</td>
												<td>6 €</td>
												<td>3 €</td>
											</tr>
											<tr>
												<td>Εισιτήριο Μετρό για Αεροδρόμιο</td>
												<td>10 €</td>
												<td>Χ</td>
												<td>10 €</td>
												<td>5 €</td>
											</tr>
											<tr>
												<td>Εισιτήριο Μετρό μετ επιστροφής για Αεροδρόμιο (εντός 48 ωρών)</td>
												<td>18 €</td>
												<td>Χ</td>
												<td>18 €</td>
												<td>Χ</td>
												<th></th>
											</tr>
											<tr>
												<td>Εισιτήριο Μετρό μεταξύ Αεροδρομίου & Παλλήνη-Κάντζα-Κορωπί</td>
												<td>6 €</td>
												<td>Χ</td>
												<td>6 €</td>
												<td>3 €</td>
											</tr>
											<tr>
												<td>Τουριστικό εισιτήριο 3 ημερών (περιλαμβάνει μετακινήσεις προς Αεροδρόμιο)</td>
												<td>22 €</td>
												<td>Χ</td>
												<td>22 €</td>
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
												<th>Προσωποποιημένη κάρτα (Μειωμένο)</th>
											</tr>
											<tr>
												<td>Εισιτήριο 30 ημερών (χωρίς μετακινήσεις προς Αεροδρόμιο)</td>
												<td>Χ</td>
												<td>Χ</td>
												<td>30 €</td>
												<td>15 €</td>
											</tr>
											<tr>
												<td>Εισιτήριο 30 ημερών (με μετακινήσεις προς Αεροδρόμιο)</td>
												<td>Χ</td>
												<td>Χ</td>
												<td>49 €</td>
												<td>25 €</td>
											</tr>
											<tr>
												<td>Εισιτήριο 90 ημερών (χωρίς μετακινήσεις προς Αεροδρόμιο)</td>
												<td>Χ</td>
												<td>Χ</td>
												<td>85 €</td>
												<td>43 €</td>
											</tr>
											<tr>
												<td>Εισιτήριο 90 ημερών (με μετακινήσεις προς Αεροδρόμιο)</td>
												<td>Χ</td>
												<td>Χ</td>
												<td>142 €</td>
												<td>71 €</td>
											</tr>
											<tr>
												<td>Εισιτήριο 180 ημερών (χωρίς μετακινήσεις προς Αεροδρόμιο)</td>
												<td>Χ</td>
												<td>Χ</td>
												<td>170 €</td>
												<td>85 €</td>
											</tr>
											<tr>
												<td>Εισιτήριο 180 ημερών (με μετακινήσεις προς Αεροδρόμιο)</td>
												<td>Χ</td>
												<td>Χ</td>
												<td>250 €</td>
												<td>125 €</td>
											</tr>
											<tr>
												<td>Εισιτήριο 365 ημερών (χωρίς μετακινήσεις προς Αεροδρόμιο)</td>
												<td>Χ</td>
												<td>Χ</td>
												<td>330 €</td>
												<td>165 €</td>
											</tr>
											<tr>
												<td>Εισιτήριο 365 ημερών (με μετακινήσεις προς Αεροδρόμιο)</td>
												<td>Χ</td>
												<td>Χ</td>
												<td>490 €</td>
												<td>245 €</td>
											</tr>
										</table> 	
										
										<br>
										<button type="submit" onclick="location.href='Αγορά-Επαναφόρτιση.php';" >Μεταφορά στη διαδικασία Αγοράς-Επαναφόρτισης</button>
									
                            </div>
							
                        </div>
						</form>
                    </div>
                </div>
            </div>
        </div>
	</section>
	
	<script>
	
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