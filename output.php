
	<?php

	echo "<h1><center>LOCAL HEALTH BOARD<center></h1>";
	echo "<h1><center>BARANGAY HEALTH WORKER REGISTRATION ACCREDITATION FORM<center></h1>";

	echo "<h3><center>A.IDENTIFICATION</h3>";

	$R1 =$_GET['Region'];
	$R2 =$_GET['Province'];
	$R3 =$_GET['Municip'];
	$R4 =$_GET['Brgy'];
	$R5 =$_GET['Regis'];
	$R6 =$_GET['Dofreg'];
	$R7 =$_GET['Pofreg'];
	$R8 =$_GET['Acnum'];
	$R9 =$_GET['DofAcc'];
	$R10 =$_GET['PofAcc'];
	$R11 =$_GET['LName'];
	$R12 =$_GET['FName'];
	$R13 =$_GET['MName'];
	$R14 =$_GET['PofAcc'];
	$R15 =$_GET['Anum'];
	$R16 =$_GET['ASt'];
	$R17 =$_GET['Abrgy'];
	$R18 =$_GET['AMun'];
	$R19 =$_GET['APro'];
	$R20 =$_GET['DateofB'];
	$R21 =$_GET['Aofreg'];
	$Gender =$_GET['Gender'];
	$Status =$_GET['Status'];
	$R22 =$_GET['total'];
	$Name1 =$_GET['Name1'];
	$Name2 =$_GET['SecName'];
	$Name3 =$_GET['ThirdName'];
	$Name4 =$_GET['FrthName'];
	$Name5 =$_GET['FthName'];
	$Name6 =$_GET['SxthName'];
	$Check1 =$_GET['Check1'];
	$Check2 =$_GET['Check2'];
	$Check3 =$_GET['Check3'];
	$Check4 =$_GET['Check4'];
	$Check5 =$_GET['Check5'];
	$Check6 =$_GET['Check6'];
	$R23 =$_GET['date1'];
	$R24 =$_GET['date2'];
	$R25 =$_GET['date3'];
	$R26 =$_GET['date4'];
	$R27 =$_GET['date5'];
	$R28 =$_GET['date6'];
	$R29 =$_GET['specify'];
	$R30 =$_GET['DNumber1'];
	$R31 =$_GET['DNumber2'];
	$R32 =$_GET['DNumber3'];
	$R33 =$_GET['DNumber4'];
	$R34 =$_GET['DNumber5'];
	$R35 =$_GET['DNumber6'];
	$R36 =$_GET['Station1'];
	$R37 =$_GET['Station2'];
	$R38 =$_GET['Station3'];
	$R39 =$_GET['household'];
	$Places =$_GET['Places'];
	$R40 =$_GET['supervisor'];
	$R41 =$_GET['What'];
	$R42 =$_GET['agency'];
	$R43 =$_GET['Title1'];
	$R44 =$_GET['Title2'];
	$R45 =$_GET['Title3'];
	$R46 =$_GET['Title4'];
	$R47 =$_GET['Title5'];
	$R48 =$_GET['Title6'];
	$R49 =$_GET['Datenum1'];
	$R50 =$_GET['Datenum2'];
	$R51 =$_GET['Datenum3'];
	$R52 =$_GET['Datenum4'];
	$R53 =$_GET['Datenum5'];
	$R54 =$_GET['Datenum6'];
	$R55 =$_GET['Conductor1'];
	$R56 =$_GET['Conductor2'];
	$R57 =$_GET['Conductor3'];
	$R58 =$_GET['Conductor4'];
	$R59 =$_GET['Conductor5'];
	$R60 =$_GET['Conductor6'];
	$Bloodtype=$_GET['Bloodtype'];
	$R61 =$_GET['Accomplished'];



	


	echo "<b>A1. Region :</b> $R1 <br/>";
	echo "<b>A2. Province: </b>$R2<br/>";
	echo "<b>A3. Municipality/City: </b>$R3<br/>";
	echo "<b>A4. Barangay: </b>$R4<br/>";
	echo "<b>A5. Registration form:</b> $R5<br/>";
	echo "<b>A6. Date of Registration:</b> $R6<br/>";
	echo "<b>A7. Place of Registration:</b> $R7<br/>";
	echo "<b>A5. Accreditation number: </b>$R8<br/>";
	echo "<b>A6. Date of Accreditation:</b> $R9<br/>";
	echo "<b>A7. Place of Accreditation: </b>$R10<br/>";

	echo "<h3><center>B.BHW PROFILE</h3>";

	echo "<b>B1.NAME OF BHW :</b>  $R11 $R12 $R13<br/> ";
	echo "<b>B2. COMPLETE ADDRESS : </b>$R15 $R16 $R17 $R18 $R19<br/>";
	echo "<b>B2.DATE OF BIRTH :</b> $R20<br/> ";
	echo "<b>B4.AGE of Registration :</b> $R21 <br/> ";

	foreach ($_GET['Gender'] as $Gender){
	echo '<b>B5. SEX :</b>'.$Gender. '<br/>';
	}

	foreach ($_GET['Status'] as $Status){
	echo '<b>B6. CIVIL STATUS :</b>' .$Status. '<br/><br/>';
	}

	echo "<b>B7. DEPENDENTS </b>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;";
	echo "<b>Total Number of Dependents :</b>$R22<br/><br/>";
	echo "<b>Name of Dependent&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Relationship to BHW&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Date of Birth</b><br/><br/> ";
	echo "$Name1&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;";

	foreach ($Check1 as $Check1) {
		echo '' . $Check1. '&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;';
		
	}
	echo "$R23 <br/>";

	echo "$Name2&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;";

	foreach ($Check2 as $Check2) {
		echo '' . $Check2. '&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;';
		
	}
	echo "$R24 <br/>";

	echo "$Name3&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;";

	foreach ($Check3 as $Check3) {
		echo '' . $Check3. '&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;';
		
	}
	echo "$R25 <br/>";



echo "$Name4&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;";

	foreach ($Check4 as $Check4) {
		echo '' . $Check4. '&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;';
		
	}
	echo "$R26 <br/>";

	echo "$Name5&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;";

	foreach ($Check5 as $Check5) {
		echo '' . $Check5. '&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;';
		
	}
	echo "$R27 <br/>";

	echo "$Name6&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;";

	foreach ($Check6 as $Check6) {
		echo '' . $Check6. '&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;';
		
	}
	echo "$R28 <br/>";


	echo "<h3><center>C. SERVICE RECORD</h3>";
	echo "<b>C1. INCLUSIVE DATES: </b>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;";
	echo "<b>C2. STATION/PLACE OF ASSIGNMENT</b><br/><br/>";
	echo "<b>FROM&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;TO</b><br/>";

	echo "$R30&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$R31&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$R36<br/>";

	echo "$R32&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$R33&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$R37<br/>";

	echo "$R34&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$R35&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$R38<br/><br/>";

	echo "<b>C3.Number of households presently covered:</b> $R39<br/>";

	foreach ($Places as $Places) {
		echo '<b>C3.Number of households presently covered:</b>' .$Places. '<br/>';
	}

	echo "<b>C5.Technical Supervisor Name:</b>$R40&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;";
	echo "<b>Position:</b>$R41<br/>";
	echo "&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<b>Agency/Office:</b>$R42";

	echo "<h3><center>D. TRAININGS ATTENDED</h3>";
	echo "<b>D1. Title of Training;&emsp;&emsp;&emsp;&emsp;D2. Date&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;D3. Conducted by </b><br/><br/> ";
	echo "$R43&emsp;&emsp;&emsp;&emsp;$R49&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$R55<br/> ";
	echo "$R44&emsp;&emsp;&emsp;&emsp;$R50&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$R56<br/> ";
	echo "$R45&emsp;&emsp;&emsp;&emsp;$R51&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$R57<br/> ";
	echo "$R46&emsp;&emsp;&emsp;&emsp;$R52&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$R58<br/> ";
	echo "$R47&emsp;&emsp;&emsp;&emsp;$R53&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$R59<br/> ";
	echo "$R48&emsp;&emsp;&emsp;&emsp;$R54&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;$R60<br/> ";

	echo "<h3><center>E. OTHER INFORMATION</h3>";
	foreach ($Bloodtype as $Bloodtype) {
		echo '<b>B2. BLOOD TYPE:&nbsp;' .$Bloodtype. '<br/>';

	}

	echo "<b>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Date Accomplished:</b>$R61";







	if (isset($_GET['sub'])) {
		
		
		# code...
	}
	


	?>
