<!DOCTYPE html>
<html lang="el">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>tram</title>

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
									<a class="dropdown-item" href="amea.html">Πληροφορίες για ΑΜΕΑ</a>	
                                        <a class="dropdown-item" href="#">Ανελκυστήρες</a>
											<a class="dropdown-item" <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Στάσεις με Προεξοχές <i class="fa fa-angle-down" aria-hidden="true"></i></a>
											<div class="dropdown-menu" x-placement="right-start" style="position: absolute; transform: translate3d(230px, 30px, 0px); top: 4px; left: 35px; will-change: transform;" >
                                                <a class="dropdown-item" href="hlioupolh.php">Δήμος Αγίας Βαρβάρας</a>
												<a class="dropdown-item" href="hlioupolh.php">Δήμος Αγίου Δημήτριου</a>
												<a class="dropdown-item" href="hlioupolh.php">Δήμος Αθηνών</a>
												<a class="dropdown-item" href="hlioupolh.php">Δήμος Ελληνικού-Αργυρούπολης</a>
												<a class="dropdown-item" href="hlioupolh.php">Δήμος Αχαρνών</a>
												<a class="dropdown-item" href="hlioupolh.php">Δήμος Βύρωνα</a>
												<a class="dropdown-item" href="hlioupolh.php">Δήμος Γλυφάδας</a>
												<a class="dropdown-item" href="hlioupolh.php">Δήμος Δάφνης-Υμηττού</a>
												<a class="dropdown-item" href="hlioupolh.php">Δήμος Ζωγράφου</a>
												<a class="dropdown-item" href="ΑΜΕΑ-ΣτάσειςΜεΠροεξοχές-Ηλιούπολη.php">Δήμος Ηλιούπολης</a>
												<a class="dropdown-item" href="ΑΜΕΑ-ΣτάσειςΜεΠροεξοχές-Καισαριανή.php">Δήμος Καισαριανής</a>
												<a class="dropdown-item" href="hlioupolh.php">Δήμος Καλλιθέας</a>
												<a class="dropdown-item" href="hlioupolh.php">Δήμος Μελλισίων</a>
												<a class="dropdown-item" href="hlioupolh.php">Δήμος Νέας Σμύρνης</a>
												<a class="dropdown-item" href="hlioupolh.php">Δήμος Νέας Χαλκηδόνας-Νέας Φιλαδέφλιας</a>
												<a class="dropdown-item" href="hlioupolh.php">Δήμος Νίκαιας</a>
												<a class="dropdown-item" href="ΑΜΕΑ-ΣτάσειςΜεΠροεξοχές-Παπάγος.php">Δήμος Παπάγου-Χολαργού</a>
												<a class="dropdown-item" href="hlioupolh.php">Δήμος Παλαιού Φαλήρου</a>
												<a class="dropdown-item" href="hlioupolh.php">Δήμος Πειραιά</a>
												<a class="dropdown-item" href="hlioupolh.php">Δήμος Περάματος</a>
												<a class="dropdown-item" href="hlioupolh.php">Δήμος Περιστερίου</a>
												<a class="dropdown-item" href="hlioupolh.php">Δήμος Πετρούπολης</a>
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
									<a class="nav-link" href="ΜΜΜ.php" style="font-weight: bold; font-size:18px;">Μέσα Μαζικής Μεταφοράς </a>
									<a class="nav-link" href=""> > </a>
									<a class="nav-link" href="Τραμ.php"><span style="color:rgba(0, 85, 132,1); font-weight: bold; font-size:18px;">ΤΡΑΜ</span></a>
                    </nav>
					
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
	
	
		<!-- ***** Features Events Area Start ***** -->
	<section class="dorne-editors-pick-area bg-img bg-overlay-9 section-padding-100" style="background-image: url(img/lines6.jpg);">
    
		
		<div class="section-heading text-center">
			<h4>Γραμμες Τραμ</h4>
         </div>
		
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-12 col-md-10">
                   
                    <div class="hero-search-form">
                        <!-- Tabs -->
                        <div class="nav nav-tabs" id="heroTab" role="tablist">
						
                            <a class="nav-item nav-link active" id="nav-places-tab" data-toggle="tab" href="#nav-places" role="tab" aria-controls="nav-places" aria-selected="true" style="width: 33%">Γραμμη 3 </a>
                            <a class="nav-item nav-link" id="nav-events-tab" data-toggle="tab" href="#nav-events" role="tab" aria-controls="nav-events" aria-selected="false" style="width: 34%">Γραμμη 4 </a>
                            <a class="nav-item nav-link" id="nav-places2-tab" data-toggle="tab" href="#nav-places2" role="tab" aria-controls="nav-places2" aria-selected="false" style="width: 33%">Γραμμη 5 </a>
                        </div>
	
						
						<div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-places" role="tabpanel" aria-labelledby="nav-places-tab" style="text-align:center">
                                <h6>Γραμμή 3 "Θουκυδίδης" <br> Στάδιο Ειρήνης και Φιλίας - Ασκληπιείο Βούλας</h6>
                                    <img id="myImg" src="img/tram-grammi3.png"  style="width:200px;height:200px; align:right;">
									<ul style="list-style-type:disc; color: white; text-align: center;">
                                    &nbsp;
									  <li>Στάδιο Ειρήνης και Φιλίας – σύνδεση με τη γραμμή 1 του μετρό (Η.Σ.Α.Π.)</li>
									  <li>Νέο Φάληρο</li>
									  <li>Μοσχάτο</li>
									  <li>Καλλιθέα</li>
									  <li>Τζιτζιφιές</li>
									  <li>Δέλτα Φαλήρου</li>
									  <li>Αγία Σκέπη</li>
									  <li>Τροκαντερό</li>
									  <li>Πάρκο Φλοίσβου</li>
									  <li>Φλοίσβος</li>
									  <li>Μπάτης</li>
									  <li>Έδεμ</li>
									  <li>Πικροδάφνη</li>
									  <li>Μαρίνα Αλίμου</li>
									  <li>Καλαμάκι</li>
									  <li>Ζέφυρος</li>
									  <li>Λουτρά Αλίμου</li>
									  <li>Ελληνικό</li>
									  <li>1η Αγίου Κοσμά</li>
									  <li>2η Αγίου Κοσμά</li>
									  <li>Άγιος Αλέξανδρος</li>
									  <li>Ελλήνων Ολυμπιονικών</li>
									  <li>Κέντρο Ιστιοπλοΐας</li>
									  <li>Πλατεία Βεργωτή</li>
									  <li>Παραλία Γλυφάδας</li>
									  <li>Παλαιό Δημαρχείο</li>
									  <li>Πλατεία Βάσως Κατράκη</li>
									  <li>Αγγέλου Μεταξά</li>
									  <li>Πλατεία Εσπερίδων</li>
									  <li>Κολυμβητήριο</li>
									  <li>Ασκληπιείο Βούλας</li>
                                      
                                      
									</ul> 
									
										
							</div>
							<div class="tab-pane fade" id="nav-events" role="tabpanel" aria-labelledby="nav-events-tab" style="text-align:center">
                                <h6>Γραμμή 4 "Αριστοτέλης" <br> Σύνταγμα - Στάδιο Ειρήνης και Φιλίας </h6>
									<img id="myImg1" src="img/tram-grammi4.png"  style="width:200px;height:200px; align:right;">
									<ul style="list-style-type:disc; color: white; text-align: center;">
										&nbsp;
										<li>Σύνταγμα – σύνδεση με τις γραμμές 2 και 3 του μετρό</li>
										<li>Ζάππειο</li>
										<li>Λεωφόρος Βουλιαγμένης</li>
										<li>Φιξ – σύνδεση με τη γραμμή 2 του μετρό</li>
										<li>Κασομούλη</li>
										<li>Νέος Κόσμος – σύνδεση με τη γραμμή 2 του μετρό</li>
										<li>Μπακνανά</li>
										<li>Αιγαίου</li>
										<li>Αγίας Φωτεινής-Πλατεία</li>
										<li>Μεγάλου Αλεξάνδρου</li>
										<li>Αγία Παρασκευή</li>
										<li>Μηδείας-Μυκάλης</li>
										<li>Ευαγγελική Σχολή</li>
										<li>Αχιλλέως</li>
										<li>Αμφιθέας</li>
										<li>Παναγίτσα</li>
										<li>Μουσών</li>
										<li>Μπάτης</li>
										<li>Φλοίσβος</li>
										<li>Πάρκο Φλοίσβου</li>
										<li>Τροκαντερό</li>
										<li>Αγία Σκέπη</li>
										<li>Δέλτα Φαλήρου</li>
										<li>Τζιτζιφιές</li>
										<li>Καλλιθέα</li>
										<li>Μοσχάτο</li>
										<li>Νέο Φάληρο</li>
										<li>Στάδιο Ειρήνης και Φιλίας – σύνδεση με γραμμή 1 του μετρό (Η.Σ.Α.Π.)</li>
									</ul>
								
							</div>
							<div class="tab-pane fade" id="nav-places2" role="tabpanel" aria-labelledby="nav-places2-tab" style="text-align:center">
                                <h6>Γραμμή 5 "Πλάτωνας" <br> Σύνταγμα - Ασκληπιείο Βούλας </h6>
									<img id="myImg2" src="img/tram-grammi5.png"  style="width:200px;height:200px; align:right;">
									<ul style="list-style-type:disc; color: white; text-align: center;">
										&nbsp;
										<li>Σύνταγμα – σύνδεση με τις γραμμές 2 και 3 του μετρό</li>
										<li>Ζάππειο</li>
										<li>Λεωφόρος Βουλιαγμένης</li>
										<li>Φιξ – σύνδεση με τη γραμμή 2 του μετρό</li>
										<li>Κασομούλη</li>
										<li>Νέος Κόσμος – σύνδεση με τη γραμμή 2 του μετρό</li>
										<li>Μπακνανά</li>
										<li>Αιγαίου</li>
										<li>Αγίας Φωτεινής-Πλατεία</li>
										<li>Μεγάλου Αλεξάνδρου</li>
										<li>Αγία Παρασκευή</li>
										<li>Μηδείας-Μυκάλης</li>
										<li>Ευαγγελική Σχολή</li>
										<li>Αχιλλέως</li>
										<li>Αμφιθέας</li>
										<li>Παναγίτσα</li>
										<li>Μουσών</li>
										<li>Έδεμ</li>
										<li>Πικροδάφνη</li>
										<li>Μαρίνα Αλίμου</li>
										<li>Καλαμάκι</li>
										<li>Ζέφυρος</li>
										<li>Λουτρά Αλίμου</li>
										<li>Ελληνικό</li>
										<li>1η Αγίου Κοσμά</li>
										<li>2η Αγίου Κοσμά</li>
										<li>Άγιος Αλέξανδρος</li>
										<li>Ελλήνων Ολυμπιονικών</li>
										<li>Κέντρο Ιστιοπλοΐας</li>
										<li>Πλατεία Βεργωτή</li>
										<li>Παραλία Γλυφάδας</li>
										<li>Παλαιό Δημαρχείο</li>
										<li>Πλατεία Βάσως Κατράκη</li>
										<li>Αγγέλου Μεταξά</li>
										<li>Πλατεία Εσπερίδων</li>
										<li>Κολυμβητήριο</li>
										<li>Ασκληπιείο Βούλας</li>
									</ul>
						
							</div>
							
							
						</div>
					</div>
				</div>
			</div>
		</div>
	
		
		
		<div id="myModal" class="modal">
		  <span class="close">&times;</span>
		  <img class="modal-content" id="img01">
		  <div id="caption"></div>
		</div>
		
		<script>
		// Get the modal
		var modal = document.getElementById("myModal");

		// Get the image and insert it inside the modal - use its "alt" text as a caption
		var img = document.getElementById("myImg");
		var modalImg = document.getElementById("img01");
		var captionText = document.getElementById("caption");
		img.onclick = function(){
		  modal.style.display = "block";
		  modalImg.src = this.src;
		  captionText.innerHTML = this.alt;
		}
		
		var img1 = document.getElementById("myImg1");
		var modalImg = document.getElementById("img01");
		var captionText = document.getElementById("caption");
		img1.onclick = function(){
		  modal.style.display = "block";
		  modalImg.src = this.src;
		  captionText.innerHTML = this.alt;
		}
		
		var img2 = document.getElementById("myImg2");
		var modalImg = document.getElementById("img01");
		var captionText = document.getElementById("caption");
		img2.onclick = function(){
		  modal.style.display = "block";
		  modalImg.src = this.src;
		  captionText.innerHTML = this.alt;
		}

		// Get the <span> element that closes the modal
		var span = document.getElementsByClassName("close")[0];

		// When the user clicks on <span> (x), close the modal
		span.onclick = function() { 
		  modal.style.display = "none";
		}
		</script>

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

var countries = ["Μετρό-Ωράριο","Τραμ", "ΜΜΜ","ΑΜΕΑ-ΣτάσειςΜεΠροεξοχές-Καισαριανή","Μετρό-Στάσεις","Αγορά-Επαναφόρτιση", "Τιμές-Εισιτηρίων","ΑΜΕΑ-ΣτάσειςΜεΠροεξοχές-Παπάγος","ΑΜΕΑ-ΣτάσειςΜεΠροεξοχές-Ηλιούπολη"];


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