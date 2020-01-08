<?php include ('payment_sum.php'); ?>
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
    <title>agora</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

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
											<a class="dropdown-item" href="agora.html">Ηλεκτρονική Αγορά/Επαναφόρτιση</a>
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
                                    <a class="nav-link" href="index.html" style=" font-weight: bold; font-size:18px;">Αρχική </a>
									<a class="nav-link" href="index.html"> > </a>
									<a class="nav-link" href="index.html" style=" font-weight: bold; font-size:18px;">Εισητήρια</a>
									<a class="nav-link" href="index.html"> ></a>
									<a class="nav-link" href="agora.php"><span style="color:rgba(0, 85, 132,1); font-weight: bold; font-size:18px; ">Ηλεκτρονική Αγορά/Επαναφόρτιση</span></a>
                    </nav>
                </div>
            </div>
        </div>
		
    </header>

    <!-- ***** Header Area End ***** -->

    <!-- ***** Welcome Area Start ***** -->
	<section class="dorne-editors-pick-area bg-img bg-overlay-9 section-padding-100" style="background-image: url(img/buy_ticket.jpg);">
    
    	<br><br>
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-12 col-md-10">
                   <!-- <div class="hero-content">
                        <h2>Discover places near you</h2>
                        <h4>This is the best guide of your city</h4>
                    </div>-->
                    <!-- Hero Search Form -->
                    <div class="hero-search-form">
                        <!-- Tabs -->
                        <div class="nav nav-tabs" id="heroTab" role="tablist">
						
                            <a class="nav-item nav-link active" id="nav-places-tab" data-toggle="tab" href="#nav-places" role="tab" aria-controls="nav-places" aria-selected="true" style="width: 50%">Αγορα</a>
                            <a class="nav-item nav-link" id="nav-events-tab" data-toggle="tab" href="#nav-events" role="tab" aria-controls="nav-events" aria-selected="false" style="width: 50%">Επαναφορτιση</a>
                        </div>
                        <!-- Tabs Content -->
						<form method="post" action="agora.php" style="font-size:15px;" >
						 
                        <div class="tab-content" id="nav-tabContent"  >
						
							
                            <div class="tab-pane fade show active" id="nav-places" role="tabpanel" aria-labelledby="nav-places-tab" method="post" action="agora.php">
                                <h6>Εισιτήρια μικρής διάρκειας (χωρίς μετακινήσεις προς Αεροδρόμιο)</h6>
								
										
								
										 <table style="width:80%">
											  <tr>
												<th></th>
												<th>Πολλαπλό εισιτήριο (Ολόκληρο)</th>
												<th>Τεμάχια</th>
												<th>Πολλαπλό εισιτήριο (Μειωμένο)</th>
											  </tr>
											  <tr>
												<td>Ένα εισιτήριο 90 λεπτών</td>
												<td>1.40 ευρώ</td>
												
												<th><input type="number" name="inp1" id="1" min="0" max="11" value="0" step="1" style="width:100%" ></th>
												<td>Χ</td>
											  </tr>
											  <tr>
												<td>Δύο εισιτήρια 90 λεπτών</td>
												<td>2.70 ευρώ</td>
												<th><input type="number" name="inp2" id="2" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>Χ</td>
											  </tr>
											  <tr>
												<td>Πέντε εισιτήρια 90 λεπτών</td>
												<td>6.50 ευρώ</td>
												<th><input type="number" name="inp3" id="3" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>Χ</td>
											  </tr>
											  <tr>
												<td>Έντεκα εισιτήρια 90 λεπτών(1 δωρεάν)</td>
												<td>13.50 ευρώ</td>
												<th><input type="number" name="inp4" id="4" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>Χ</td>
											  </tr>
											  <tr>
												<td>Εισιτήριο 24 ωρών</td>
												<td>4,5 ευρώ</td>
												<th><input type="number" name="inp5" id="5" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>Χ</td>
											  </tr>
											  <tr>
												<td>Εισιτήριο 5 ημερών</td>
												<td>9 ευρώ</td>
												<th><input type="number" name="inp6" id="6" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>Χ</td>
											  </tr>
										</table> 
                               
							   <br><br><br>
								<h6>Εισιτήρια μικρής διάρκειας (με μετακινήσεις προς Αεροδρόμιο)</h6>
								
								<table style="width:80%" color=#fff  >
											  <tr>
												<th></th>
												<th>Πολλαπλό εισιτήριο (Ολόκληρο)</th>
												<th>Τεμάχια</th>
												<th>Πολλαπλό εισιτήριο (Μειωμένο)</th>
											  </tr>
											  <tr>
												<td>Εισιτήριο Λεωφορείου Express για Αεροδρόμιο</td>
												<td>6 ευρώ</td>
												<th><input type="number" name="inp7" id="7" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>Χ</td>
											  </tr>
											  <tr>
												<td>Εισιτήριο Μετρό για Αεροδρόμιο</td>
												<td>10 ευρώ</td>
												<th><input type="number" name="inp8" id="8" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>Χ</td>
											  </tr>
											  <tr>
												<td>Εισιτήριο Μετρό μετ επιστροφής για Αεροδρόμιο (εντός 48 ωρών)</td>
												<td>18 ευρώ</td>
												<th><input type="number" name="inp9" id="9" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>Χ</td>
											  </tr>
											  <tr>
												<td>Εισιτήριο Μετρό μεταξύ Αεροδρομίου & Παλλήνη-Κάντζα-Κορωπί</td>
												<td>6 ευρώ</td>
												<th><input type="number" name="inp10" id="10" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>Χ</td>
											  </tr>
											  <tr>
												<td>Τουριστικό εισιτήριο 3 ημερών (περιλαμβάνει μετακινήσεις προς Αεροδρόμιο)</td>
												<td>22 ευρώ</td>
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
                            <div class="tab-pane fade" id="nav-events" role="tabpanel" aria-labelledby="nav-events-tab">
                                <h6>Εισιτήρια μικρής διάρκειας (χωρίς μετακινήσεις προς Αεροδρόμιο)</h6>
                                <table style="width:80%" color=#fff  >
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
												<td>1.40 ευρώ</td>
												<th><input type="number" name="inp12" id="12" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>Χ</td>
												<td>1.40 ευρώ</td>
												<th><input type="number" name="inp13" id="13" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>0.60 ευρώ</td>
												<th><input type="number" name="inp14" id="14" min="0" max="11" value="0" step="1" style="width:100%"></th>
											  </tr>
											  <tr>
												<td>Δύο εισιτήρια 90 λεπτών</td>
												<td>2.70 ευρώ</td>
												<th><input type="number" name="inp15" id="15" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>Χ</td>
												<td>2.70 ευρώ</td>
												<th><input type="number" name="inp16" id="16" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>1.20 ευρώ</td>
												<th><input type="number" name="inp17" id="17" min="0" max="11" value="0" step="1" style="width:100%"></th>
											  </tr>
											  <tr>
												<td>Πέντε εισιτήρια 90 λεπτών</td>
												<td>6.50 ευρώ</td>
												<th><input type="number" name="inp18" id="18" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>Χ</td>
												<td>6.50 ευρώ</td>
												<th><input type="number" name="inp19" id="19" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>3.00 ευρώ</td>
												<th><input type="number" name="inp20" id="20" min="0" max="11" value="0" step="1" style="width:100%"></th>
											  </tr>
											  <tr>
												<td>Έντεκα εισιτήρια 90 λεπτών(1 δωρεάν)</td>
												<td>13.50 ευρώ</td>
												<th><input type="number" name="inp21" id="21" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>Χ</td>
												<td>13.50 ευρώ</td>
												<th><input type="number" name="inp22" id="22" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>6.00 ευρώ</td>
												<th><input type="number" name="inp23" id="23" min="0" max="11" value="0" step="1" style="width:100%"></th>
											  </tr>
											  <tr>
												<td>Εισιτήριο 24 ωρών</td>
												<td>4,5 ευρώ</td>
												<th><input type="number" name="inp24" id="24" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>Χ</td>
												<td>4,5 ευρώ</td>
												<th><input type="number" name="inp25" id="25" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>Χ </td>
												<th></th>

											  </tr>
											  <tr>
												<td>Εισιτήριο 5 ημερών</td>
												<td>9 ευρώ</td>
												<th><input type="number" name="inp26" id="26" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>Χ</td>
												<td>9 ευρώ</td>
												<th><input type="number" name="inp27" id="27" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>Χ</td>
												<th></th>

											  </tr>
										</table> 
										
										<br><br><br>
										<h6>Εισιτήρια μικρής διάρκειας (με μετακινήσεις προς Αεροδρόμιο)</h6>
										
										<table style="width:80%" color=#fff  >
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
												<td>6 ευρώ</td>
												<th><input type="number" name="inp28" id="28" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>Χ</td>
												<td>6 ευρώ</td>
												<th><input type="number" name="inp29" id="29" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>3 ευρώ</td>
												<th><input type="number" name="inp30" id="30" min="0" max="11" value="0" step="1" style="width:100%"></th>
											</tr>
											<tr>
												<td>Εισιτήριο Μετρό για Αεροδρόμιο</td>
												<td>10 ευρώ</td>
												<th><input type="number" name="inp31" id="31" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>Χ</td>
												<td>10 ευρώ</td>
												<th><input type="number" name="inp32" id="32" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>5 ευρώ</td>
												<th><input type="number" name="inp33" id="33" min="0" max="11" value="0" step="1" style="width:100%"></th>
											</tr>
											<tr>
												<td>Εισιτήριο Μετρό μετ επιστροφής για Αεροδρόμιο (εντός 48 ωρών)</td>
												<td>18 ευρώ</td>
												<th><input type="number" name="inp34" id="34" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>Χ</td>
												<td>18 ευρώ</td>
												<th><input type="number" name="inp35" id="35" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>Χ</td>
												<th></th>
											</tr>
											<tr>
												<td>Εισιτήριο Μετρό μεταξύ Αεροδρομίου & Παλλήνη-Κάντζα-Κορωπί</td>
												<td>6 ευρώ</td>
												<th><input type="number" name="inp36" id="36" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>Χ</td>
												<td>6 ευρώ</td>
												<th><input type="number" name="inp37" id="37" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>3 ευρώ</td>
												<th><input type="number" name="inp38" id="38" min="0" max="11" value="0" step="1" style="width:100%"></th>
											</tr>
											<tr>
												<td>Τουριστικό εισιτήριο 3 ημερών (περιλαμβάνει μετακινήσεις προς Αεροδρόμιο)</td>
												<td>22 ευρώ</td>
												<th><input type="number" name="inp39" id="39" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>Χ</td>
												<td>22 ευρώ</td>
												<th><input type="number" name="inp40" id="40" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>Χ</td>
												<th></th>
											</tr>
										</table> 
										
										<br><br><br>
										<h6>Εισιτήρια μεγάλης διάρκειας</h6>
										
										<table style="width:80%" color=#fff  >
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
												<td>30 ευρώ</td>
												<th><input type="number" name="inp41" id="41" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>15 ευρώ</td>
												<th><input type="number" name="inp42" id="42" min="0" max="11" value="0" step="1" style="width:100%"></th>
											</tr>
											<tr>
												<td>Εισιτήριο 30 ημερών (με μετακινήσεις προς Αεροδρόμιο)</td>
												<td>Χ</td>
												<td>Χ</td>
												<td>49 ευρώ</td>
												<th><input type="number" name="inp43" id="43" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>25 ευρώ</td>
												<th><input type="number" name="inp44" id="44" min="0" max="11" value="0" step="1" style="width:100%"></th>
											</tr>
											<tr>
												<td>Εισιτήριο 90 ημερών (χωρίς μετακινήσεις προς Αεροδρόμιο)</td>
												<td>Χ</td>
												<td>Χ</td>
												<td>85 ευρώ</td>
												<th><input type="number" name="inp45" id="45" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>43 ευρώ</td>
												<th><input type="number" name="inp46" id="46" min="0" max="11" value="0" step="1" style="width:100%"></th>
											</tr>
											<tr>
												<td>Εισιτήριο 90 ημερών (με μετακινήσεις προς Αεροδρόμιο)</td>
												<td>Χ</td>
												<td>Χ</td>
												<td>142 ευρώ</td>
												<th><input type="number" name="inp47" id="47" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>71 ευρώ</td>
												<th><input type="number" name="inp48" id="48" min="0" max="11" value="0" step="1" style="width:100%"></th>
											</tr>
											<tr>
												<td>Εισιτήριο 180 ημερών (χωρίς μετακινήσεις προς Αεροδρόμιο)</td>
												<td>Χ</td>
												<td>Χ</td>
												<td>170 ευρώ</td>
												<th><input type="number" name="inp49" id="49" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>85 ευρώ</td>
												<th><input type="number" name="inp50" id="50" min="0" max="11" value="0" step="1" style="width:100%"></th>
											</tr>
											<tr>
												<td>Εισιτήριο 180 ημερών (με μετακινήσεις προς Αεροδρόμιο)</td>
												<td>Χ</td>
												<td>Χ</td>
												<td>250 ευρώ</td>
												<th><input type="number" name="inp51" id="51" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>125 ευρώ</td>
												<th><input type="number" name="inp52" id="52" min="0" max="11" value="0" step="1" style="width:100%"></th>
											</tr>
											<tr>
												<td>Εισιτήριο 365 ημερών (χωρίς μετακινήσεις προς Αεροδρόμιο)</td>
												<td>Χ</td>
												<td>Χ</td>
												<td>330 ευρώ</td>
												<th><input type="number" name="inp53" id="53" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>165 ευρώ</td>
												<th><input type="number" name="inp54" id="54" min="0" max="11" value="0" step="1" style="width:100%"></th>
											</tr>
											<tr>
												<td>Εισιτήριο 365 ημερών (με μετακινήσεις προς Αεροδρόμιο)</td>
												<td>Χ</td>
												<td>Χ</td>
												<td>490 ευρώ</td>
												<th><input type="number" name="inp55" id="55" min="0" max="11" value="0" step="1" style="width:100%"></th>
												<td>245 ευρώ</td>
												<th><input type="number" name="inp56" id="56" min="0" max="11" value="0" step="1" style="width:100%"></th>
											</tr>
										</table> 	
										
										<br>
										<input type="button" onclick="myFunction()" value="Εμφάνιση του έως τώρα συνολικού ποσού πληρωμής" />
										<p id="demo1" style="color:white" >  </p>
									<!--	<input type="button" name="plhrwmh" onclick="location.href='payment.html';" value="Μεταφορά στη διαδικασία πληρωμής" />-->
										<button name="plhrwmh" type="submit" onclick="location.href='payment.html';" >Μεταφορά στη διαδικασία πληρωμής</button>
									
                            </div>
							
                        </div>
						</form>
                    </div>
                </div>
            </div>
        </div>
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
											
		document.getElementById("demo").innerHTML  = text + "<br/>" + "Το Συνολικό ποσό έως τώρα είναι: " + x.toFixed(2) + "&nbsp" + "ευρώ";
		document.getElementById("demo1").innerHTML  = text + "<br/>" + "Το Συνολικό ποσό έως τώρα είναι: " + x.toFixed(2) + "&nbsp" + "ευρώ";
		
		
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