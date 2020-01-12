<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>ΑΜΕΑ</title>

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
                        <a class="navbar-brand" href="Βέλτιστη-Διαδρομή.php"><img src="img/logo.png" style="width:4em; height:4em;"></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#dorneNav" aria-controls="dorneNav" aria-expanded="false" aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
                        <!-- Nav -->
                        <div class="collapse navbar-collapse" id="dorneNav">
                            <ul class="navbar-nav mr-auto" id="dorneMenu">
                                
                                    <a class="nav-link" href="Βέλτιστη-Διαδρομή.php">Αρχική <span class="sr-only">(current)</span></a>
                               
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
										<a class="dropdown-item" href="#">Δικαιολογητικά Έκδοσης AthenaCard</a>
										<a class="dropdown-item" href="Τιμές-Εισιτηρίων.php">Τιμές Εισιτηρίων</a>
										<a class="dropdown-item" href="#">Σημεία Έκδοσης/Επαναφόρτισης και Εισιτηρίων</a>
									</div>
								</li>
								
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ΑΜΕΑ <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
										<a class="dropdown-item" href="amea.php">Πληροφορίες για ΑΜΕΑ</a>	
                                        <a class="dropdown-item" href="#">Ανελκυστήρες</a>										<a class="dropdown-item" <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Στάσεις με Προεξοχές <i class="fa fa-angle-down" aria-hidden="true"></i></a>
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
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
 	    <section class="dorne-welcome-area bg-img" style="background-image: url(img/background.jpg);">
		        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-12 col-md-10">
                    <div class="hero-content">
                    </div>
                    <!-- Hero Search Form -->
                    <div class="hero-search-form">
                        <!-- Tabs -->
                        <div class="nav nav-tabs" id="heroTab" role="tablist">
                        </div>
                        <!-- Tabs Content -->
                        <div class="tab-content1" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-places" role="tabpanel" aria-labelledby="nav-places-tab">
							<h2 style="text-align: justify;"> Η κακή ποιότητα των  παρεχομένων υπηρεσιών δημιουργούν συνθήκες αποκλεισμού των ατόμων με ανάγκες στη καθημερινή τους ζωή. Ο σχεδιασμός και η ανάπτυξη των μέσων μεταφοράς δεν καλύπτει μόνο τις υπάρχουσες ανάγκες μιας μετακίνησης του πληθυσμού αλλά σχεδιάζεται να προσελκύει όλο και περισσότερες ομάδες νέων επιβατών, απαλείφοντας προβλήματα κοινωνικού αποκλεισμού και προσφέροντας καλύτερες υπηρεσίες σε  όλους τους χρήστες. </h2>
								<br>
								<h2 style ="color: red; text-align: justify;">ΝΕΑ ΓΡΑΜΜΗ ΑΠΟΚΛΕΙΣΤΙΚΗΣ ΕΞΥΠΗΡΕΤΗΣΗΣ ΑΤΟΜΩΝ ΜΕ ΑΝΑΠΗΡΙΑ</h2>
								<h2 style="color: white; text-align: justify;" >Για την άμεση και αποκλειστική εξυπηρέτηση των ατόμων με αναπηρία ο ΟΑΣΑ έχει θέση σε λειτουργία νέα τηλεφωνική γραμμή 210 82 00 887 που λειτουργεί από 06:30 - 22:30 τις καθημερινές και από 07:30 - 22:30 τα Σ/Κ. </h2>
                                </form>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>

    <!-- ***** Welcome Area Start ***** -->

        <!-- Hero Social Btn -->
        <div class="hero-social-btn">
            <div class="social-title d-flex align-items-center">
                <h6>Follow us on Social Media</h6>
                <span></span>
            </div>
            <div class="social-btns">
                <a href="#"><i class="fa fa-linkedin" aria-haspopup="true"></i></a>
                <a href="#"><i class="fa fa-google" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter" aria-haspopup="true"></i></a>
                <a href="#"><i class="fa fa-facebook" aria-haspopup="true"></i></a>
            </div>
        </div>
    </section>
    <!-- ***** Welcome Area End ***** -->

    <!-- ***** Catagory Area Start ***** -->

    <!-- ***** Catagory Area End ***** -->
 

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

var countries = ["Μετρό-Ωράριο","Τραμ", "ΜΜΜ","ΑΜΕΑ-ΣτάσειςΜεΠροεξοχές-Καισαριανή","Μετρό-Στάσεις","Αγορά-Επαναφόρτιση", "Τιμές-Εισιτηρίων","ΑΜΕΑ-ΣτάσειςΜεΠροεξοχές-Παπάγος","ΑΜΕΑ-ΣτάσειςΜεΠροεξοχές-Ηλιούπολη", "Βέλτιστη-Διαδρομή"];


autocomplete(document.getElementById("myInput"), countries);

</script>


    <!-- ***** Clients Area Start ***** -->

    <!-- ***** Clients Area End ***** -->

    <!-- ****** Footer Area Start ****** -->

    <!-- ****** Footer Area End ****** -->

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