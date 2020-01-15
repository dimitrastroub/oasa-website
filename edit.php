<?php include ('Εύρεση-Βέλτιστης.php'); ?>
<!doctype html>
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
    <link rel="icon" type="image/png" href="img/logo.png">

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
                    <form action="#" method="get">
                        <input type="search" name="caviarSearch" id="search" placeholder="Search Your Desire Destinations or Events">
                        <input type="submit" class="d-none" value="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- ***** Header Area Start ***** -->
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
                                        <a class="dropdown-item" href="Δικαιολογητικά-Έκδοσης-Εισιτηρίων.php">Δικαιολογητικά Έκδοσης AthenaCard</a>
                                        <a class="dropdown-item" href="Τιμές-Εισιτηρίων.php">Τιμές Εισιτηρίων</a>
                                        <a class="dropdown-item" href="Σημεία-Έκδοσης-Επαναφόρτισης.php">Σημεία Έκδοσης/Επαναφόρτισης Καρτών/Εισιτηρίων</a>
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
                            <!-- Search btn -->
                            <div class="dorne-search-btn">
                                <a id="search-btn" href="#"><i class="fa fa-search" aria-hidden="true"></i>Αναζήτηση</a>
                            </div>
                            
                            <div class="content">
                                       <style>
                                       p{
                                           margin: 0;
                                       }
                                       </style>
                                        <?php if(isset($_SESSION["email"])): ?>
                                            <p><a style="color:white;">Καλωσήρθες</p> 
                                            <p><strong><?php echo $_SESSION['email']; ?></a></strong></p>
                                            <p><a href="Βέλτιστη-Διαδρομή.php?logout='0'" style="color:red;">Αποσύνδεση</a></p>
                                        <?php endif ?>
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
                      
                        <form id="wrapper" method="POST" action="">
                        
                            
                        <!-- Tabs Content -->
                        <section id="core">
			<div class="profileinfo" >
				<h2>Επεξεργασία Προφίλ&rarr;</h2>				
                <?php 
                        $db1=mysqli_connect('localhost','root','','sdi1600021');
                        $email=$_SESSION['email'];
                         
                        
                        $query3="SELECT * FROM users WHERE email='$email'"; 
                        $result5=mysqli_query($db1,$query3);
                        if (mysqli_num_rows($result5) > 0) {
                          // output data of each row
                        while($row = mysqli_fetch_assoc($result5)) {?>
                 <?php
                            $db=mysqli_connect('localhost','root','','sdi1600021');
                            $query42="SELECT `email` FROM `users` WHERE foititis='1'";
                            $result=mysqli_query($db,$query42);
                            if(mysqli_num_rows($result)==1){ ?>
                  <label style="font-size:15px; color:white;">Φοιτητής</label><input type="checkbox" name="check1" <?php echo 'checked="checked"'; ?> />   &nbsp; &nbsp;
                            <?php } else { ?>
                                
      
                <?php if(isset($_POST['check1'])){
                    $db=mysqli_connect('localhost','root','','sdi1600021');
            $query13="UPDATE `users` SET `foititis`='1' WHERE email='$email'";
            
            mysqli_query($db,$query13); ?>
            <label style="font-size:15px; color:white;">Φοιτητής</label><input type="checkbox" name="check1" <?php echo 'checked="checked"'; ?> />   &nbsp; &nbsp;
             
        <?php
        
        } else { ?>
        <label style="font-size:15px; color:white;">Φοιτητής</label><input type="checkbox" name="check1">  &nbsp; &nbsp;
        <?php } 
                            }
        ?>
        <!--amea-->
                 <?php
                            $db=mysqli_connect('localhost','root','','sdi1600021');
                            $query42="SELECT `email` FROM `users` WHERE amea='1'";
                            $result=mysqli_query($db,$query42);
                            if(mysqli_num_rows($result)==1){ ?>
                  <label style="font-size:15px; color:white;">ΑΜΕΑ</label><input type="checkbox" name="check2" <?php echo 'checked="checked"'; ?> />   &nbsp; &nbsp;
                            <?php } else { ?>
                                
      
                <?php if(isset($_POST['check2'])){
                    $db=mysqli_connect('localhost','root','','sdi1600021');
            $query13="UPDATE `users` SET `amea`='1' WHERE email='$email'";
            
            mysqli_query($db,$query13); ?>
            <label style="font-size:15px; color:white;">ΑΜΕΑ</label><input type="checkbox" name="check2" <?php echo 'checked="checked"'; ?> />   &nbsp; &nbsp;
             
        <?php
        
        } else { ?>
        <label style="font-size:15px; color:white;">ΑΜΕΑ</label><input type="checkbox" name="check2">  &nbsp; &nbsp;
        <?php } 
                            }
        ?>
        
        <!--anergos-->
                 <?php
                            $db=mysqli_connect('localhost','root','','sdi1600021');
                            $query42="SELECT `email` FROM `users` WHERE anergos='1'";
                            $result=mysqli_query($db,$query42);
                            if(mysqli_num_rows($result)==1){ ?>
                  <label style="font-size:15px; color:white;">Άνεργος</label><input type="checkbox" name="check3" <?php echo 'checked="checked"'; ?> />   &nbsp; &nbsp;
                            <?php } else { ?>
                                
      
                <?php if(isset($_POST['check3'])){
                    $db=mysqli_connect('localhost','root','','sdi1600021');
            $query13="UPDATE `users` SET `anergos`='1' WHERE email='$email'";
            
            mysqli_query($db,$query13); ?>
            <label style="font-size:15px; color:white;">Άνεργος</label><input type="checkbox" name="check3" <?php echo 'checked="checked"'; ?> />   &nbsp; &nbsp;
             
        <?php
        
        } else { ?>
        <label style="font-size:15px; color:white;">Άνεργος</label><input type="checkbox" name="check3">  &nbsp; &nbsp;
        <?php } 
                            }    ?>
				<div class="gear">
					<label id='label1'>Αρχικό E-Mail:</label>
					<input name="pemail" type="text" class="datainfo" style="color:black;" value="<?php echo $row["email"]; ?>"/>
                            
                            </div>			
				<div class="gear">
					<label id='label1'>Ονομα:</label>
					<input name="name" type="text" class="datainfo" style="color:black;" value="<?php echo  $row["name"]; ?>"/>
					
				</div>
                <div class="gear">
					<label id='label1'>Επίθετο:</label>
					<input name="hobbies" type="text" class="datainfo" style="color:black;" value="<?php echo  $row["hobbies"]; ?>"/>
					
				</div>
				
				<div class="gear">
					<label id='label1'>Γενέθλια:</label>
					<input name="birthday" type="text" class="datainfo" style="color:black;" value="<?php echo  $row["birthday"]; ?>"/>
					
				</div>
				
				<div class="gear">
                <label id='label1'>Αλλαγή κωδικού:</label>
					<input name="changepass" type="text" class="datainfo" style="color:black;" value="<?php echo  $row["password"]; ?>"/>
					
				</div>
                
                <div class="gear">
                <label id='label1'>Tηλέφωνο:</label>
					<input name="number" type="text" class="datainfo" style="color:black;" value="<?php echo  $row["number"]; ?>"/>
				</div>
                
                <?php
                        }
                        }
                        ?>
                    
               
                
                <button name="savechanges" type="submit" id="savebtn" style="color:white; font-style:normal; font-family:'Open sans',sans serif; font-size:14px; ">Αποθήκευση Αλλαγών
            </div>
		</section>
        </form>
 
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