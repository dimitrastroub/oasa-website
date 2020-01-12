<?php include ('Εύρεση-Βέλτιστης.php'); ?>
<!DOCTYPE html>
<html lang="el">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>ΟΑΣΑ</title>

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
                                <li class="nav-item active">
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
                                <a onclick="document.getElementById('id01').style.display='block'" style="font-style:normal; color:white; font-weight:600;">Είσοδος/Εγγραφή</a>
                             </div>
						
                        <!--login-->
								<div id="id01" class="modal">
								  
								  <form class="modal-content animate">
									<div class="imgcontainer">
									  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
									  
									</div>
                                    <i style="font-weight:400; font-style:normal; font-size:20px; padding-left:18px;">Δεν είσαι μέλος;<a onclick="document.getElementById('id02').style.display='block'"><i style="color:lightblue; font-style:normal; font-size:20px;"> Εγγραφή</i></a></i>
									<div class="container">
                                      
									  <label for="uname" style="font-weight:400; font-size:20px;"><b>E-mail</b></label>
									  <input id='input1' type="text" name="uname" required>

									  <label for="psw" style="font-weight:400; font-size:20px;"><b>Κωδικός</b></label>
									  <input id='input2' type="password" name="psw" required>
										
									  <button id='signup-button' type="submit" style="font-weight:400; font-size:20px;">Σύνδεση</button>
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
                            <div id="id02" class="modal">
								  
								  <form class="modal-content animate">
									<div class="imgcontainer">
									  <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
									  
									</div>
                                    
									<div class="container">
                                      
									  <label for="uname" style="font-weight:400; font-size:20px;"><b>E-mail</b></label>
									  <input id='input1' type="text" style ="font-style: italic; color: rgb(169,169,169)" placeholder="name@example.com" name="uname" required>

									  <label for="psw" style="font-weight:400; font-size:20px;"><b>Κωδικός</b></label>
									  <label for="psw" style="font-weight:300; font-size:13px; font-style: italic";><b>(τουλάχιστον 8 χαρακτήρες , τουλάχιστον 1 αριθμός)</b></label>
									  <input id='input2' type="password" style ="font-style: italic; color: rgb(169,169,169)" placeholder="*********" name="psw" required>
										
									  <label for="psw" style="font-weight:400; font-size:20px;"><b>Επαλήθευση κωδικού</b></label>
									   <input id='input2' type="password" style ="font-style: italic; color: rgb(169,169,169)" placeholder="*********" name="psw" required>
									  
									  <button id='signup-button' type="submit" value="" style="font-weight:400; font-size:20px;">Εγγραφή</button>
									  <br>
                                        
										<input type="checkbox" name="remember"><i style="font-weight:400; font-style:normal; font-size:20px;"> Θυμήσου με!</i>
									</div>

									<div class="container" style="background-color:#f1f1f1">
                                      
									  <button id='cancelbtn' type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Ακύρωση</button>
                                    
									</div>
								  </form>
								</div>
						
								
		<script>
		// Get the modal
		var modal = document.getElementById('id01');

		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
			if (event.target == modal) {
				modal.style.display = "none";
			}
		}

		var modal = document.getElementById('id02');

		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
			if (event.target == modal) {
				modal.style.display = "none";
			}
		}
		</script>
                            
                           
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
                                <h2><i class="fa fa-road" aria-hidden="true"></i>Βέλτιστη διαδρομή</h2> 
								&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  <label style="color: white;" >Αναχώρηση:</label>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <label style="color: white;"> Προορισμός:</label style="color: white;">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <label style="color: white;"> Ώρα αναχώρησης:</label><br>
								
								<form method="post" action="Βέλτιστη-Διαδρομή.php" >
									<i class="fa fa-location-arrow" style="color: white;" aria-hidden="true"></i>&nbsp &nbsp 
								
									<select name="anaxwrhsh" style="width: 24%; font-size: 13px;">
										<option selected>Από...</option>
										<option value="Θηβών 166, Περιστέρι">Θηβών 166, Περιστέρι</option>
										<option value="Παλαιολόγου 83, Χαλάνδρι">Παλαιολόγου 83, Χαλάνδρι</option>
										<option value="Πάρκο, Νέας Σμύρνης">Πάρκο, Νέας Σμύρνης</option>
									</select> 
								
									&nbsp &nbsp <i class="fa fa-map-marker"style="color: white; aria-hidden="true" ></i>&nbsp &nbsp
								
									<select name="proorismos" style="width: 24%; font-size: 13px;">
										<option selected>Προς...</option>
										<option value="Παλαιολόγου 83, Χαλάνδρι">Παλαιολόγου 83, Χαλάνδρι</option>
										<option value="Θηβών 166, Περιστέρι">Θηβών 166, Περιστέρι</option>
										<option value="Πάρκο, Νέας Σμύρνης">Πάρκο, Νέας Σμύρνης</option>
									</select> 
									&nbsp &nbsp <i class="fa fa-clock-o" style="color: white; aria-hidden="true"></i>&nbsp &nbsp
									
								<input name="time" type="time"> &nbsp
								<button type="submit" name="anazhthsh" class="btn dorne-btn"><i class="fa fa-search pr-2" aria-hidden="true"></i> Αναζήτηση</button>
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
    <section class="dorne-catagory-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="all-catagories">
                        <div class="row">
							<!-- Single Catagory Area -->
                            <div class="col-12 col-sm-6 col-md">
                                <div class="single-catagory-area wow fadeInUpBig" data-wow-delay="0.6s">
                                    <div class="catagory-content">
                                        <img src="img/fa-mmm.png" alt="">
                                        <a href="ΜΜΜ.php">
                                            <h6>Μέσα Μαζικής Μεταφοράς</h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Catagory Area -->
                            <div class="col-12 col-sm-6 col-md">
                                <div class="single-catagory-area wow fadeInUpBig" data-wow-delay="0.2s">
                                    <div class="catagory-content">
                                        <img src="img/travel.png" alt="">
                                        <a href="#">
                                            <h6>Μετακίνηση στη πόλη</h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Catagory Area -->
                            <div class="col-12 col-sm-6 col-md">
                                <div class="single-catagory-area wow fadeInUpBig" data-wow-delay="0.4s">
                                    <div class="catagory-content">
                                        <img src="img/ancient.png" alt="">
                                        <a href="#">
                                            <h6>Σημεία Τουριστικού Ενδιαφέροντος</h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Catagory Area -->
                            <div class="col-12 col-sm-6 col-md">
                                <div class="single-catagory-area wow fadeInUpBig" data-wow-delay="0.6s">
                                    <div class="catagory-content">
                                        <img src="img/mmm.png" alt="">
                                        <a href="#">
                                            <h6>Σταθμοί Μετεπιβίβασης</h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Catagory Area End ***** -->
 

    

    <!-- ***** Clients Area Start ***** -->
    <div class="dorne-clients-area section-padding-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="clients-logo d-md-flex align-items-center justify-content-around">
                        <img src="img/osy.png" alt="">
                        <img src="img/stasy.png" alt="">
                        <img src="img/trainose.png" alt="">
                        <img src="img/ath.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Clients Area End ***** -->

    <!-- ****** Footer Area Start ****** -->
    <footer class="dorne-footer-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 d-md-flex align-items-center justify-content-between">
                    <div class="footer-text">
                        <p>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved </a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                    <div class="footer-social-btns">
                        <a href="#"><i class="fa fa-linkedin" aria-haspopup="true"></i></a>
                        <a href="#"><i class="fa fa-google" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-twitter" aria-haspopup="true"></i></a>
                        <a href="#"><i class="fa fa-facebook" aria-haspopup="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ****** Footer Area End ****** -->
	
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