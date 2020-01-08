<?php  ?>
<!DOCTYPE html>
<html lang="el">
<head>
    <title>payment</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>

	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
 <!-- Core Stylesheet -->
    <link href="style.css" rel="stylesheet">

    <!-- Responsive CSS -->
 
   <link href="css/responsive/responsive.css" rel="stylesheet">
   </head>
<body>
  
    
		<!-- ***** Search Form Area ***** -->
    <div class="dorne-search-form d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="search-close-btn" id="closeBtn">
                        <i class="pe-7s-close-circle" aria-hidden="true"></i>
                    </div>
                    <form action="#" method="get">
                        <input type="search" name="caviarSearch" id="search" placeholder="Search Your Desire Destinations or Events">
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
                        <a class="navbar-brand" href="index.html"><img src="img/logo.png" style="width:4em; height:4em;"></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#dorneNav" aria-controls="dorneNav" aria-expanded="false" aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
                        <!-- Nav -->
                        <div class="collapse navbar-collapse" id="dorneNav">
                            <ul class="navbar-nav mr-auto" id="dorneMenu">
                                
                                 <a class="nav-link" href="index.html">Αρχική <span class="sr-only">(current)</span></a>
                                
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Δρομολόγια <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Μετρό <i class="fa fa-angle-down" aria-hidden="true"></i></a>
											<div class="dropdown-menu" x-placement="right-start" style="position: absolute; transform: translate3d(230px, 0px, 0px); top: 4px; left: 0px; will-change: transform;" >
                                            	<a class="dropdown-item" href="Στάσεις.html">Στάσεις</a>
												<a class="dropdown-item" href="Ωράριο.html">Ωράριο</a>
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
											<a class="dropdown-item" href="agora.php">Ηλεκτρονική Αγορά/Επαναφόρτιση</a>
											<a class="dropdown-item" href="explore.html">Δικαιολογητικά Έκδοσης AthenaCard</a>
											<a class="dropdown-item" href="listing.html">Τιμές Εισιτηρίων</a>
											<a class="dropdown-item" href="single-listing.html">Σημεία Έκδοσης/Επαναφόρτισης και Εισιτηρίων</a>
										</div>
									</div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ΑΜΕΑ <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                                        <a class="dropdown-item" href="index.html">Ανελκυστήρες</a>
                                       <a class="dropdown-item" <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Στάσεις με Προεξοχές <i class="fa fa-angle-down" aria-hidden="true"></i></a>
											<div class="dropdown-menu" x-placement="right-start" style="position: absolute; transform: translate3d(230px, 30px, 0px); top: 4px; left: 35px; will-change: transform;" >
                                                <a class="dropdown-item" href="agiavarvara.html">Δήμος Αγίας Βαρβάρας</a>
												<a class="dropdown-item" href="agiosdimitrios.html">Δήμος Αγίου Δημήτριου</a>
												<a class="dropdown-item" href="athinwn.html">Δήμος Αθηνών</a>
												<a class="dropdown-item" href="ellhniko-argyroupolh.html">Δήμος Ελληνικού-Αργυρούπολης</a>
												<a class="dropdown-item" href="aharnwn.html">Δήμος Αχαρνών</a>
												<a class="dropdown-item" href="vyrwna.html">Δήμος Βύρωνα</a>
												<a class="dropdown-item" href="glyfada.html">Δήμος Γλυφάδας</a>
												<a class="dropdown-item" href="dafnh.html">Δήμος Δάφνης-Υμηττού</a>
												<a class="dropdown-item" href="zwgrafou.html">Δήμος Ζωγράφου</a>
												<a class="dropdown-item" href="hlioupolh.html">Δήμος Ηλιούπολης</a>
												<a class="dropdown-item" href="kais.html">Δήμος Καισαριανής</a>
												<a class="dropdown-item" href="kallithea.html">Δήμος Καλλιθέας</a>
												<a class="dropdown-item" href="melissia.html">Δήμος Μελλισίων</a>
												<a class="dropdown-item" href="neasminrni.html">Δήμος Νέας Σμύρνης</a>
												<a class="dropdown-item" href="halkhdona.html">Δήμος Νέας Χαλκηδόνας-Νέας Φιλαδέφλιας</a>
												<a class="dropdown-item" href="nikaia.html">Δήμος Νίκαιας</a>
												<a class="dropdown-item" href="papagos.html">Δήμος Παπάγου-Χολαργού</a>
												<a class="dropdown-item" href="palaiofalhro.html">Δήμος Παλαιού Φαλήρου</a>
												<a class="dropdown-item" href="peiraias.html">Δήμος Πειραιά</a>
												<a class="dropdown-item" href="peramatos.html">Δήμος Περάματος</a>
												<a class="dropdown-item" href="peristeri.html">Δήμος Περιστερίου</a>
												<a class="dropdown-item" href="petroupolh.html">Δήμος Πετρούπολης</a>
											</div>
                                        <a class="dropdown-item" href="listing.html">Οδηγίες Προσέγγισης στα ΜΜΜ</a>
                                        <a class="dropdown-item" href="single-listing.html">Ανακοινώσεις</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.html">Ανακοινώσεις</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.html">Οργανισμός</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.html">Βοήθεια&Επικοινωνία</a>
                                </li>
                            </ul>
                            <!-- Search btn -->
                            <div class="dorne-search-btn">
                                <a id="search-btn" href="#"><i class="fa fa-search" aria-hidden="true"></i>Αναζήτηση</a>
                            </div>
                            <!-- Signin btn -->
                            <div class="dorne-signin-btn">
                                <a href="login.html">Είσοδος/Εγγραφή</a>
                            </div>
                            <!-- Add listings btn -->
                            <div class="dorne-add-listings-btn">
                                <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i>Αγαπημένα</a>
                            </div>
                        </div>
                    </nav>
					
					<nav class="h-30 navbar navbar-expand-lg">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#dorneNav" aria-controls="dorneNav" aria-expanded="false" aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
                        <!-- Nav -->
                        <div class="collapse navbar-collapse" id="dorneNav"  >
                            <ul class="navbar-nav mr-auto" id="dorneMenu">
                                    <a class="nav-link" href="index.html"style=" font-weight: bold; font-size:18px;">Αρχική </a>
									<a class="nav-link" href="index.html"> > </a>
									<a class="nav-link" href="index.html" style=" font-weight: bold; font-size:18px;">Εισητήρια</a>
									<a class="nav-link" href="index.html"> ></a>
									<a class="nav-link" href="agora.php" style="font-weight: bold; font-size:18px;">Ηλεκτρονική Αγορά/Επαναφόρτιση</a>
									<a class="nav-link" href="index.html"> ></a>
									<a class="nav-link" href="agora.html"><span style="color:rgba(0, 85, 132,1); font-weight: bold; font-size:18px;">Πληρωμή</span></a>
                    </nav>
                </div>
            </div>
        </div>
		
    </header>

    <!-- ***** Header Area End ***** -->
	
	<?php
					/*			$db=mysqli_connect('localhost','root','','test');
								$sql = $db->query("SELECT SUM(Timh*Number)  AS value_sum FROM payment WHERE Number>0");
								$row = $sql->fetch_assoc();
								echo number_format((float)$row['value_sum'], 2, '.', '');*/
							?>
	
    

	
	<section class="dorne-welcome-area bg-img" style="background-image: url(img/buy_ticket.jpg);">
	
		<div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-12 col-md-10">
                    <!-- Hero Search Form -->
                    <div class="hero-search-form">
                        <!-- Tabs -->
                        <div class="nav nav-tabs" id="heroTab" role="tablist">
						
							
                            <a class="nav-item nav-link active" id="nav-places-tab" data-toggle="tab" href="#nav-places" role="tab" aria-controls="nav-places" aria-selected="true" style="width: 50%">Χρεωστικη/Πιστωτικη Καρτα</a>
                            <a class="nav-item nav-link" id="nav-events-tab" data-toggle="tab" href="#nav-events" role="tab" aria-controls="nav-events" aria-selected="false" style="width: 50%">PayPal</a>
                        </div>
                        <!-- Tabs Content -->
                        <div class="tab-content" id="nav-tabContent">
						
						
                            <div class="tab-pane fade show active" id="nav-places" role="tabpanel" aria-labelledby="nav-places-tab">
								
								
	<!--							<form action="payment.php" method="get">
		Name: <input type="text" name="name"><br>
		<input type="submit">
		<button name="plhrwmh_sum" type="submit"  >Εμφάνιση συνολικού πληρωμής</button>
					
					</form>
		-->
						<h3 style="color:white">Το Συνολικό ποσό πληρωμής είναι:
								<?php	 $db=mysqli_connect('localhost','root','','test');
							$sql = $db->query("SELECT SUM(Timh*Number)  AS value_sum FROM payment WHERE Number>0");
							$row = $sql->fetch_assoc();
							echo number_format((float)$row['value_sum'], 2, '.', '');
							mysqli_close($db);
					?> <br> <br>
					</h3>
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
								<input type="month" id="date" name="expmonth" min="2020-01" max="2050-01" value="" style="width: 40%" >
								
								<br>
								<a style="color:white; font-size: 20px; padding-right:167px"> E-Mail:</a>
								<input type="text" name="e-mail" style="color:rgb(128,128,128); font-size:12px; padding-right:177px" placeholder=" name@example.com" style="width: 40%">
								<br>
								<a style="color:white; font-size: 20px; padding-right:27px"> Αριθμός Τηλεφώνου:</a>
								<input type="text" name="number" value="+30"style="width: 10%">
								<input type="text" name="number" value=""style="width: 29.5%">
								<br><br>
								<a style="color:white; font-size: 20px;"</a>
								<input type="radio" name="gender" value="1" checked > Επιθυμώ να μου σταλεί η απόδειξη στο e-mail<br>
								<input type="radio" name="gender" value="2" >Εμφάνιση απόδειξης <br>
								<input type="button" onclick="myFunction()" value="Ολοκλήρωση αγοράς" style="width: 30%">
								<p id="demo1" style="color:white" >  </p>
								
							</div>
	</section>
		
	
	<div id="dropDownSelect1"></div>
	
	<script src="js/main.js"></script>
	
	<script>
	
	
	function myFunction() {
	
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
			document.getElementById("demo1").innerHTML = "aa";
			window.alert("Ολοκλήρωση πληρωμής με επιτυχία!\n Επιστροφή στην αρχική σελίδα");
			document.location="index.html";
		}
		else{
			document.getElementById("demo1").innerHTML = text;
		}
		
		
	}
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