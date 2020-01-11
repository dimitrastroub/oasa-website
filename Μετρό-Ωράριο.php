<!DOCTYPE html>
<html lang="el">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Ωράριο</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link href="style.css" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="css/responsive/responsive.css" rel="stylesheet">

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
                    <form  autocomplete="off" style="width:450px;" action="#" method="get" >
						<a id="search-btn" href="#"><i class="fa fa-search" aria-hidden="true" style="color: white;" > Αναζήτηση</i></a>
							<input type="input" name="myCountry" id="myInput" placeholder="Αναζήτηση.." onchange="location = this.value + '.php';">
							<input type="submit" class="d-none" value="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>

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
                               
                                <div class="nav-item dropdown">
									<li class="nav-item active">
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
								</div>
                                <li class="nav-item dropdown">
									
									<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Εισιτήρια <i class="fa fa-angle-down" aria-hidden="true"></i></a>
									<div class="dropdown-menu" aria-labelledby="navbarDropdown2">
										<a class="dropdown-item" href="Αγορά-Επαναφόρτιση.php">Ηλεκτρονική Αγορά/Επαναφόρτιση</a>
										<a class="dropdown-item" href="explore.html">Δικαιολογητικά Έκδοσης AthenaCard</a>
										<a class="dropdown-item" href="Τιμές-Εισιτηρίων.php">Τιμές Εισιτηρίων</a>
										<a class="dropdown-item" href="single-listing.html">Σημεία Έκδοσης/Επαναφόρτισης και Εισιτηρίων</a>
									</div>
								</li>
								
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ΑΜΕΑ <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                                        <a class="dropdown-item" href="index.html">Ανελκυστήρες</a>										<a class="dropdown-item" <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Στάσεις με Προεξοχές <i class="fa fa-angle-down" aria-hidden="true"></i></a>
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
                        <div class="collapse navbar-collapse" id="dorneNav">
                            <ul class="navbar-nav mr-auto" id="dorneMenu">
                                    <a class="nav-link" href="index.html" style="font-weight: bold; font-size:18px; ">Αρχική </a>
									<a class="nav-link" href="index.html"> > </a>
									<a class="nav-link" href="" style="font-weight: bold; font-size:18px; ">Δρομολόγια </a>
									<a class="nav-link" href=""> > </a>
									<a class="nav-link" href="" style="font-weight: bold; font-size:18px; ">Μετρό </a>
									<a class="nav-link" href=""> > </a>
									<a class="nav-link" href="Μετρό-Ωράριο.php"><span style="color:rgba(0, 85, 132,1); font-weight: bold; font-size:18px; ">Ωράριο</span></a>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
	
	
	
	<section class="dorne-editors-pick-area bg-img bg-overlay-9 section-padding-100" style="background-image: url(img/metro.jpg);">
    	
		<div class="container h-100" style="margin-top:20px">
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
						
                            <a class="nav-item nav-link active" id="nav-places-tab" data-toggle="tab" href="#nav-places" role="tab" aria-controls="nav-places" aria-selected="true" style="width: 50%">Γραμμή2</a>
							<a class="nav-item nav-link" id="nav-events-tab" data-toggle="tab" href="#nav-events" role="tab" aria-controls="nav-events" aria-selected="false" style="width: 50%">Γραμμή3</a>
                        </div>


						<div class="tab-content" id="nav-tabContent" >

							<div class="tab-pane fade show active" id="nav-places" role="tabpanel" aria-labelledby="nav-places-tab" >
									
									<pre style="color:white; font-weight:bold; font-size:20px; "><?php echo "&nbsp  ΚΑΤΕΥΘΥΝΣΗ ΠΡΟΣ ΣΤΑΘΜΟ ΕΛΛΗΝΙΚΟ" ; echo "\t"; echo  " &nbsp ΚΑΤΕΥΘΥΝΣΗ ΠΡΟΣ ΣΤΑΘΜΟ ΑΝΘΟΥΠΟΛΗ" ; ?></pre>
									
									<pre style="color:white; font-weight:bold; font-size:18px; "><?php echo "&nbsp   ΑΠΟ ΣΤΑΘΜΟ" ; echo "\t\t"; echo  " &nbsp ΔΡΟΜΟΛΟΓΙΑ" ; echo "\t\t"; echo "   ΑΠΟ ΣΤΑΘΜΟ" ; echo "\t"; echo  "      ΔΡΟΜΟΛΟΓΙΑ" ; ?></pre>
									
									<pre style="color:white; font-weight:bold; font-size:18px; "><?php echo "\t\t\t"; echo "ΠΡΩΤΟ    &nbsp  ΤΕΛΕΥΤΑΙΟ" ; echo "\t\t\t"; echo "  ΠΡΩΤΟ   ΤΕΛΕΥΤΑΙΟ" ; ?></pre>
									
									<pre style="color:white; font-weight:bold; font-size:15px; "><?php echo "\t\t\t"; echo "&nbspΔΕΥ-ΠΑΡ   Σ/Κ" ; ?></pre>
									
									
									<h3 style="color:white; margin-top:50px; margin-right:20px">
									<?php
								
								
									$db=mysqli_connect('localhost','root','','test');
									
							
									$sql = "SELECT id, station, time1,time2,time3, station2, time4,time5 FROM wrario2";
									$result = $db->query($sql);
									while($row = $result->fetch_assoc()) { 
										
										
										if( $row["id"]==5){ ?>
											<pre style="color:white; font-size:18px;"><?php  echo "&nbsp  " . $row["station"]; echo "\t"; echo "&nbsp &nbsp " .  $row["time1"] . "&nbsp &nbsp". $row["time2"] .  "&nbsp &nbsp" .$row["time3"]; echo "\t"; echo  "&nbsp &nbsp" . $row["station2"]; echo "&nbsp" . $row["time4"]; echo "  " . $row["time5"]; ?></pre>
										<?php
										}
										
										else if($row["id"]== 16 ){ ?>
											<pre style="color:white; font-size:18px;"><?php  echo "&nbsp  " . $row["station"]; echo  "    " . $row["time1"] . "&nbsp &nbsp". $row["time2"] .  "&nbsp &nbsp" .$row["time3"]; echo "\t"; echo  "&nbsp &nbsp" . $row["station2"]; echo "\t"; echo "&nbsp" . $row["time4"]; echo "\t"; echo "" . $row["time5"]; ?></pre>
										<?php
										}
										else{ ?>
										<pre style="color:white; font-size:18px;"><?php  echo "&nbsp  " . $row["station"]; echo "\t"; echo "&nbsp &nbsp " .  $row["time1"] . "&nbsp &nbsp". $row["time2"] .  "&nbsp &nbsp" .$row["time3"]; echo "\t"; echo  "&nbsp &nbsp" . $row["station2"]; echo "\t"; echo "&nbsp" . $row["time4"]; echo "\t"; echo "" . $row["time5"]; ?></pre>
									<?php 
										}
									}
						
								mysqli_close($db);
								?>

								</h3>
							</div>
							
							<div class="tab-pane fade" id="nav-events" role="tabpanel" aria-labelledby="nav-events-tab">
							
								<pre style="color:white; font-weight:bold; font-size:20px; "><?php echo "&nbsp  ΚΑΤΕΥΘΥΝΣΗ ΠΡΟΣ ΣΤΑΘΜΟ ΕΛΛΗΝΙΚΟ" ; echo "\t"; echo  " &nbsp ΚΑΤΕΥΘΥΝΣΗ ΠΡΟΣ ΣΤΑΘΜΟ ΑΝΘΟΥΠΟΛΗ" ; ?></pre>
									
									<pre style="color:white; font-weight:bold; font-size:18px; "><?php echo "&nbsp   ΑΠΟ ΣΤΑΘΜΟ" ; echo "\t\t"; echo  " &nbsp ΔΡΟΜΟΛΟΓΙΑ" ; echo "\t\t"; echo "   ΑΠΟ ΣΤΑΘΜΟ" ; echo "\t"; echo  "      ΔΡΟΜΟΛΟΓΙΑ" ; ?></pre>
									
									<pre style="color:white; font-weight:bold; font-size:18px; "><?php echo "\t\t\t"; echo "ΠΡΩΤΟ &nbsp  ΤΕΛΕΥΤΑΙΟ" ; echo "\t\t\t"; echo "  ΠΡΩΤΟ   ΤΕΛΕΥΤΑΙΟ" ; ?></pre>
									
									
									<h3 style="color:white; margin-top:50px; margin-right:20px">
									<?php
								
								
								$db=mysqli_connect('localhost','root','','test');
									
							
									$sql = "SELECT id, station, time1,time2, station2, time4,time5 FROM wrario3";
									$result = $db->query($sql);
									while($row = $result->fetch_assoc()) { 
										
										
										if( $row["id"]==8 || $row["id"]==14 || $row["id"]==15 || $row["id"]==17){ ?>
											<pre style="color:white; font-size:18px;"><?php  echo "&nbsp  " . $row["station"]; echo "\t"; echo   $row["time1"] . "&nbsp &nbsp". $row["time2"] .  "&nbsp &nbsp" ; echo "\t"; echo   $row["station2"]; echo "\t"; echo "&nbsp" . $row["time4"]; echo "\t"; echo "" . $row["time5"]; ?></pre>
										<?php
										}
										
										else if($row["id"]== 1 ){ ?>
											<pre style="color:white; font-size:18px;"><?php  echo "&nbsp  " . $row["station"]; echo "\t\t"; echo   $row["time1"] . "&nbsp &nbsp". $row["time2"] .  "&nbsp &nbsp" ; echo "\t"; echo   $row["station2"];  echo "&nbsp" . $row["time4"]; echo "\t"; echo "" . $row["time5"]; ?></pre>
										<?php
										}
										else if($row["id"]== 16 ){ ?>
											<pre style="color:white; font-size:18px;"><?php  echo "&nbsp  " . $row["station"]; echo "\t\t"; echo   $row["time1"] . "&nbsp &nbsp". $row["time2"] .  "&nbsp &nbsp" ; echo "\t"; echo   $row["station2"]; echo "\t\t"; echo "&nbsp" . $row["time4"]; echo "\t"; echo "" . $row["time5"]; ?></pre>
										<?php
										}
										else{ ?>
										<pre style="color:white; font-size:18px;"><?php  echo "&nbsp  " . $row["station"]; echo "\t\t"; echo   $row["time1"] . "&nbsp &nbsp". $row["time2"] .  "&nbsp &nbsp" ; echo "\t"; echo   $row["station2"]; echo "\t"; echo "&nbsp" . $row["time4"]; echo "\t"; echo "" . $row["time5"]; ?></pre>
									<?php 
										}
									}
						
								mysqli_close($db);
								?>

								</h3>
							</div>
						</div>
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

var countries = ["Μετρό-Ωράριο","Τραμ", "ΜΜΜ","ΑΜΕΑ-ΣτάσειςΜεΠροεξοχές-Καισαριανή","Μετρό-Στάσεις","Αγορά-Επαναφόρτιση", "Τιμές-Εισιτηρίων"];


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