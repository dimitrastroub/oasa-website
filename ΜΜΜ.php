<!DOCTYPE html>
<html lang="el">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>ΜΜΜ</title>

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
                              
                                <div class="nav-item dropdown">
									
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
									</div>
                                
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Εισιτήρια <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                                        <a class="dropdown-item" href="Αγορά-Επαναφόρτιση.php">Ηλεκτρονική Αγορά/Επαναφόρτιση</a>
                                        <a class="dropdown-item" href="#">Δικαιολογητικά Έκδοσης AthenaCard</a>
                                        <a class="dropdown-item" href="Τιμές-Εισιτηρίων.php">Τιμές Εισιτηρίων</a>
                                        <a class="dropdown-item" href="#">Σημεία Έκδοσης/Επαναφόρτισης και Εισιτηρίων</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ΑΜΕΑ <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
									<a class="dropdown-item" href="amea.php">Πληροφορίες για ΑΜΕΑ</a>	
                                        <a class="dropdown-item" href="#">Ανελκυστήρες</a>
											<a class="dropdown-item" <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Στάσεις με Προεξοχές <i class="fa fa-angle-down" aria-hidden="true"></i></a>
											<div class="dropdown-menu" x-placement="right-start" style="position: absolute; transform: translate3d(230px, 30px, 0px); top: 4px; left: 35px; will-change: transform;" >
                                                <a class="dropdown-item" href="#">Δήμος Αγίας Βαρβάρας</a>
												<a class="dropdown-item" href="#">Δήμος Αγίου Δημήτριου</a>
												<a class="dropdown-item" href="#">Δήμος Αθηνών</a>
												<a class="dropdown-item" href="#">Δήμος Ελληνικού-Αργυρούπολης</a>
												<a class="dropdown-item" href="#">Δήμος Αχαρνών</a>
												<a class="dropdown-item" href="#">Δήμος Βύρωνα</a>
												<a class="dropdown-item" href="#">Δήμος Γλυφάδας</a>
												<a class="dropdown-item" href="#">Δήμος Δάφνης-Υμηττού</a>
												<a class="dropdown-item" href="#">Δήμος Ζωγράφου</a>
												<a class="dropdown-item" href="ΑΜΕΑ-ΣτάσειςΜεΠροεξοχές-Ηλιούπολη.php">Δήμος Ηλιούπολης</a>
												<a class="dropdown-item" href="ΑΜΕΑ-ΣτάσειςΜεΠροεξοχές-Καισαριανή.php">Δήμος Καισαριανής</a>
												<a class="dropdown-item" href="#">Δήμος Καλλιθέας</a>
												<a class="dropdown-item" href="#">Δήμος Μελλισίων</a>
												<a class="dropdown-item" href="#">Δήμος Νέας Σμύρνης</a>
												<a class="dropdown-item" href="#">Δήμος Νέας Χαλκηδόνας-Νέας Φιλαδέφλιας</a>
												<a class="dropdown-item" href="#">Δήμος Νίκαιας</a>
												<a class="dropdown-item" href="ΑΜΕΑ-ΣτάσειςΜεΠροεξοχές-Παπάγος.php">Δήμος Παπάγου-Χολαργού</a>
												<a class="dropdown-item" href="#">Δήμος Παλαιού Φαλήρου</a>
												<a class="dropdown-item" href="#">Δήμος Πειραιά</a>
												<a class="dropdown-item" href="#">Δήμος Περάματος</a>
												<a class="dropdown-item" href="#">Δήμος Περιστερίου</a>
												<a class="dropdown-item" href="#">Δήμος Πετρούπολης</a>
											</div>
                                        <a class="dropdown-item" href="#">Οδηγίες Προσέγγισης στα ΜΜΜ</a>
                                        <a class="dropdown-item" href="#">Ανακοινώσεις</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Ανακοινώσεις</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Οργανισμός</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Βοήθεια&Επικοινωνία</a>
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
                                    <a class="nav-link" href="Βέλτιστη-Διαδρομή.php" style="font-weight: bold; font-size:18px;">Αρχική </a>
									<a class="nav-link" href=""> > </a>
									<a class="nav-link" href="ΜΜΜ.php"><span style="color:rgba(0, 85, 132,1); font-weight: bold; font-size:18px;">Μέσα Μαζικής Μεταφοράς</span></a>
                    </nav>
					
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
	
	
		<!-- ***** Features Events Area Start ***** -->
		<section class="dorne-editors-pick-area bg-img bg-overlay-9 section-padding-100" style="background-image: url(img/lines6.jpg);">
    
   <!-- <section class="dorne-features-events-area bg-img bg-overlay-9 section-padding-100-50" style="background-image: url(img/bg-img/hero-3.jpg)">-->
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center" style="margin-bottom:0px">
                        <h4>Μεσα Μαζικης Μεταφορας</h4>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="single-feature-events-area d-sm-flex align-items-center wow fadeInUpBig"  style="margin-top: 0px" data-wow-delay="0.2s">
                        <div class="feature-events-thumb">
                            <img src="img/metro2.jpg" alt="">
                            
                        </div>
                        <div class="feature-events-content">
                            <h5>ΜΕΤΡΟ</h5>
                            <h6>Σταθερή Συγκοινωνία</h6>
                        </div>
                        <div class="feature-events-details-btn">
                            <a href="#">+</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="single-feature-events-area d-sm-flex align-items-center wow fadeInUpBig" data-wow-delay="0.3s" >
                        <div class="feature-events-thumb">
                            <img src="img/tram.jpg" alt="">
                            
                        </div>
                        <div class="feature-events-content">
							<h5>  ΤΡΑΜ</h5>
                            <h6>Σταθερή Συγκοινωνία</h6>
                        </div>
                        <div class="feature-events-details-btn">
                            <a href="Τραμ.php">+</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="single-feature-events-area d-sm-flex align-items-center wow fadeInUpBig" data-wow-delay="0.4s" >
                        <div class="feature-events-thumb">
                            <img src="img/hsap.jpg" alt="">
                            
                        </div>
                        <div class="feature-events-content">
                            <h5>ΗΛΕΚΤΡΙΚΟΣ ΣΙΔΗΡΟΔΡΟΜΟΣ</h5>
                            <h6>Σταθερή Συγκοινωνία</h6>
                        </div>
                        <div class="feature-events-details-btn">
                            <a href="#">+</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="single-feature-events-area d-sm-flex align-items-center wow fadeInUpBig" data-wow-delay="0.5s">
                        <div class="feature-events-thumb">
                            <img src="img/proastiakos.jpg" alt="">
                            
                        </div>
                        <div class="feature-events-content">
                            <h5>ΠΡΟΑΣΤΙΑΚΟΣ</h5>
                            <h6>Σταθερή Συγκοινωνία</h6>
                        </div>
                        <div class="feature-events-details-btn">
                            <a href="#">+</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="single-feature-events-area d-sm-flex align-items-center wow fadeInUpBig" data-wow-delay="0.2s" >
                        <div class="feature-events-thumb">
                            <img src="img/trolei.jpg" alt="">
                            
                        </div>
                        <div class="feature-events-content">
                            <h5>ΤΡΟΛΕΪ</h5>
                            <h6>Οδική Συγκοινωνία</h6>
                        </div>
                        <div class="feature-events-details-btn">
                            <a href="#">+</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="single-feature-events-area d-sm-flex align-items-center wow fadeInUpBig" data-wow-delay="0.3s">
                        <div class="feature-events-thumb">
                            <img src="img/bus.jpg" alt="">
                            
                        </div>
                        <div class="feature-events-content">
                            <h5>ΛΕΩΦΟΡΕΙΟ</h5>
                            <h6>Οδική Συγκοινωνία</h6>
                        </div>
                        <div class="feature-events-details-btn">
                            <a href="#">+</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
		
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