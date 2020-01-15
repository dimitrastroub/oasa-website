<!DOCTYPE html>
<html lang="el">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Απόδειξη</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link href="style.css" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="css/responsive/responsive.css" rel="stylesheet">

</head>

<body>

<?php
    session_start();
		
	
	$db=mysqli_connect('localhost','root','','sdi1600021');
		

		$sql = "SELECT Id, Eidos, Timh,Number FROM payment";
		$result = $db->query($sql);
		
		echo "<br>";
	
		?> <pre style="font-size: 28px;"><?php echo "\t\t\t\t\t"; echo "ΑΠΟΔΕΙΞΗ ΣΥΝΑΛΛΑΓΗΣ"; ?> </pre>
		
		<div class="col-16 col-sm-8 col-lg-90" style="width: 7%; height: 7%; margin-right: 10px">
				<div class="single-features-area mb-50">
					<img src="img/logo.png" alt="">
         
				</div>
			</div>
		
		<pre style="font-size: 18px;"> <?php echo "ΗΜΕΡΟΜΗΝΙΑ ΣΥΝΑΛΛΑΓΗΣ: " . date("d/m/Y") ; ?> </pre>
		
		
		<p id="demo"></p>

		<script>
		 var x = Math.floor((Math.random() * 100000) + 1);
		 document.write("&nbsp ΑΡΙΘΜΟΣ ΣΥΝΑΛΛΑΓΗΣ: #" + x);
		</script>
		

		
		 <pre ><?php echo  "<br>"; echo "ΤΕΜΑΧΙΑ"; echo "\t\t"; echo "ΕΙΣΙΤΗΡΙΟ"; echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t"; echo "     ΤΙΜΗ"; ?> </pre>
		
		<?php
		while($row = $result->fetch_assoc() ) {
			
			if($row["Number"] >0){
				
				if($row["Id"]== 1 || $row["Id"]==2 || $row["Id"]==5 || $row["Id"]== 6){
			
					?> <pre ><?php echo " " .$row["Number"] ; echo "\t\t";	echo   $row["Eidos"] ; echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";	echo "     " . $row["Timh"]*$row["Number"]. "€"; ?> </pre>
					<?php
				}
				else if($row["Id"]== 3 || $row["Id"]==8){
			
					?> <pre ><?php echo " " . $row["Number"] ; echo "\t\t";	echo   $row["Eidos"] ; echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";	echo "     " . $row["Timh"]*$row["Number"]. "€"; ?> </pre>
					<?php
				}
				else if($row["Id"]== 4){
					?> <pre ><?php echo " " . $row["Number"] ; echo "\t\t";	echo   $row["Eidos"] ; echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";	echo "    " .$row["Timh"]*$row["Number"]. "€"; ?> </pre>
					<?php
				}
				else if($row["Id"]== 9 || $row["Id"]==10){
					?> <pre ><?php echo " " .$row["Number"] ; echo "\t\t";	echo   $row["Eidos"] ; echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";	echo "     " . $row["Timh"]*$row["Number"]. "€"; ?> </pre>
					<?php
				}
				else if($row["Id"]== 7){
					?> <pre ><?php echo " " .$row["Number"] ; echo "\t\t";	echo   $row["Eidos"] ; echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";	echo "     " . $row["Timh"]*$row["Number"]. "€"; ?> </pre>
					<?php
				}
				else if($row["Id"]== 11 ){
					?> <pre ><?php echo " " .$row["Number"] ; echo "\t\t";	echo   $row["Eidos"] ; echo "\t\t\t\t\t\t\t\t\t\t\t";	echo "     " . $row["Timh"]*$row["Number"]. "€"; ?> </pre>
					<?php
				}
				else if($row["Id"]== 12 || $row["Id"]==15 || $row["Id"]==18 || $row["Id"]==25 || $row["Id"]==27 || $row["Id"]== 31){
					?> <pre ><?php echo " " .$row["Number"] ; echo "\t\t";	echo   $row["Eidos"] ; echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";	echo "     " . $row["Timh"]*$row["Number"]. "€"; ?> </pre>
					<?php
				}
				else if($row["Id"]== 13 || $row["Id"]==14 || $row["Id"]==16 || $row["Id"]==17 || $row["Id"]==19 || $row["Id"]==20){
					?> <pre ><?php echo " " .$row["Number"] ; echo "\t\t";	echo   $row["Eidos"] ; echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";	echo "     " . $row["Timh"]*$row["Number"]. "€"; ?> </pre>
					<?php
				}
				else if($row["Id"]== 22 ){
					?> <pre ><?php echo " " .$row["Number"] ; echo "\t\t";	echo   $row["Eidos"] ; echo "\t\t\t\t\t\t\t\t\t\t\t\t";	echo "    " . $row["Timh"]*$row["Number"]. "€"; ?> </pre>
					<?php
				}
				else if( $row["Id"]==23 || $row["Id"]==28 ){
					?> <pre ><?php echo " " .$row["Number"] ; echo "\t\t";	echo   $row["Eidos"] ; echo "\t\t\t\t\t\t\t\t\t\t\t\t";	echo "     " . $row["Timh"]*$row["Number"]. "€"; ?> </pre>
					<?php
				}
				else if($row["Id"]== 24 || $row["Id"]==26 ){
					?> <pre ><?php echo " " .$row["Number"] ; echo "\t\t";	echo   $row["Eidos"] ; echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";	echo "     " . $row["Timh"]*$row["Number"]. "€"; ?> </pre>
					<?php
				}
				else if($row["Id"]== 29 || $row["Id"]==30 ){
					?> <pre ><?php echo " " .$row["Number"] ; echo "\t\t";	echo   $row["Eidos"] ; echo "\t\t\t\t\t\t\t\t\t\t\t";	echo "     " . $row["Timh"]*$row["Number"]. "€"; ?> </pre>
					<?php
				}
				else if($row["Id"]== 33 || $row["Id"]==32 ){
					?> <pre ><?php echo " " .$row["Number"] ; echo "\t\t";	echo   $row["Eidos"] ; echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";	echo "     " . $row["Timh"]*$row["Number"]. "€"; ?> </pre>
					<?php
				}
				else if($row["Id"]== 39   ){
					?> <pre ><?php echo " " .$row["Number"] ; echo "\t\t";	echo   $row["Eidos"] ; echo "\t\t\t\t\t\t\t\t";	echo "     " . $row["Timh"]*$row["Number"]. "€"; ?> </pre>
					<?php
				}
				else if($row["Id"]==40){
					?> <pre ><?php echo " " .$row["Number"] ; echo "\t\t";	echo   $row["Eidos"] ; echo "\t\t\t\t\t\t\t";	echo "     " .$row["Timh"]*$row["Number"]. "€"; ?> </pre>
					<?php
				}
				else if($row["Id"]== 34 || $row["Id"]== 36 || $row["Id"]== 43 || $row["Id"]== 44 || $row["Id"]== 47 || $row["Id"]== 48 || $row["Id"]==51 || $row["Id"]==52 || $row["Id"]==55 || $row["Id"]==56 ){
					?> <pre ><?php echo " " .$row["Number"] ; echo "\t\t";	echo   $row["Eidos"] ; echo "\t\t\t\t\t\t\t\t\t\t";	echo "     " . $row["Timh"]*$row["Number"]. "€"; ?> </pre>
					<?php
				}
				else if($row["Id"]== 35 || $row["Id"]== 37 || $row["Id"]== 38 || $row["Id"]== 41 || $row["Id"]== 42 ||$row["Id"]== 45 || $row["Id"]== 46 || $row["Id"]== 49 || $row["Id"]== 50 || $row["Id"]== 53 || $row["Id"]==54 ){
					?> <pre ><?php echo " " .$row["Number"] ; echo "\t\t";	echo   $row["Eidos"] ; echo "\t\t\t\t\t\t\t\t\t";	echo "     " . $row["Timh"]*$row["Number"] . "€"; ?> </pre>
					<?php
				}
				else {
					?> <pre ><?php echo " " .$row["Number"] ; echo "\t\t";	echo   $row["Eidos"] ; echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";	echo "    " . $row["Timh"]*$row["Number"]. "€"; ?> </pre>
					<?php
				}
			}
			
		}
		
		
		$sql = $db->query("SELECT SUM(Timh*Number)  AS value_sum FROM payment WHERE Number>0");
		$row = $sql->fetch_assoc();
		
		
		echo "<br>";
		?> <pre > <?php echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t"; echo "ΣΥΝΟΛΟ  "; echo number_format((float)$row['value_sum'], 2, '.', '') . "€"; ?> </pre>
	
			<div class="col-16 col-sm-8 col-lg-90" style="width: 20%; height: 10%; margin-right: 10px">
				<div class="single-features-area mb-50">
					<img src="img/barcode.jpg" alt="">
         
				</div>
			</div>
	 
	

	<?php
		
		
		
	
	mysqli_close($db);
	
	
	?>
	
	
	</body>

</html>