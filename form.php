<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>
<body align="center" >
	
	<form  action="output.php" method="get">
		<h6 align="right"  >BHW Registration Accreditation Form 1b</h6>
		 <h1><center><b> LOCAL HEALTH BOARD</b></center></h1>
	 <h1><center><b>BARANGAY HEALTH WORKER REGISTRATION ACCREDITATION FORM</b></center> </h1>
	 <br>
	 <center>
	 	 <table border="1px" width="1500px">
	 	<tr>
	 		<td><h3><center><b>A.IDENTIFICATION</b></center></h3></td>
	 	</tr>

	 	<tr>
			<td>&emsp;A1. Region: &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="Number" name="Region" >
				
				<br><br>
				&emsp;A2. Province: &nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="text" name="Province" size="80" >
				<table border="2" align="right" width="400px" height="400px">
					<tr>
						<td></td>
					</tr>
				</table>
				<br><br>
				&emsp;A3. Municipality/City:&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="text" name="Municip" size="80" >
				<br><br>
				&emsp;A4. Barangay:&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="text" name="Brgy" size="80" > 
				<br><br>
				&emsp;A5. Registration form:&emsp;&emsp;&nbsp;&nbsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="text" name="Regis" size="80" >
				<br><br>
				&emsp;A6. Date of Registration: &nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="date" name="Dofreg" size="80" >
				<br><br>
				&emsp;A7. Place of Registration: &nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="text" name="Pofreg" size="80" >
				<br><br>
				&emsp;A8. Accreditation Number: &nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="Number" name="Acnum" >
				<br><br>
				&emsp;A9. Date of Accreditation: &nbsp;&nbsp;;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="date" name="DofAcc" size="80" >
				<br><br>
				&emsp;A10. Place of Accreditation:&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="text" name="PofAcc" size="80" >
				
			</td>
			<tr>
				<td><h3><center><b>B. BHW PROFILE</b></center></h3></td>
				<tr>
					<td>
						<br>
						&emsp;B1. NAME OF BHW:&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="text" name="LName" placeholder="LAST NAME" size="30" >&emsp;&emsp;
						<input type="text" name="FName" placeholder=" FIRST NAME" size="30">&emsp;&emsp;
						<input type="text" name="MName" placeholder="MIDDLE NAME" size="30">
						<br><br>
						&emsp;B2.COMPLETE ADRRESS:&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
						<input type="Number" name="Anum" placeholder="Number">&emsp;
						<input type="text" name="ASt" placeholder="Street" size="22">&emsp;
						<input type="text" name="Abrgy" placeholder="Barangay" size="22">&emsp;
						<input type="text" name="AMun" placeholder="Municipality/City" size="22">&emsp;
						<input type="text" name="APro" placeholder="Province" size="22">
						<br><br>
						&emsp;B3.DATE OF BIRTH:&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
						<input type="date" name="DateofB" placeholder="Date">&emsp;&emsp;
						&emsp;B4.AGE of Registration:&emsp;&emsp;
						<input type="number" name="Aofreg" placeholder="Age" size="5">
						<br><br>
						&emsp;B5.SEX &emsp;&emsp; &emsp;&emsp;&emsp;&emsp; &emsp;&emsp;
						<input type="checkbox" name="Gender[]" value="Male" >Male&emsp;&emsp;
						<input type="checkbox" name="Gender[]" value="Female">Female&emsp;&emsp;&emsp;&emsp; &emsp;&emsp;
						B6.CIVIL STATUS&emsp;&emsp;
						<input type="checkbox" name="Status[]" value="Single">Single&emsp;&emsp;
						<input type="checkbox" name="Status[]" value="Married">Married&emsp;&emsp;
						<input type="checkbox" name="Status[]" value="Widowed">Widowed&emsp;&emsp;
						<input type="checkbox" name="Status[]" value="Separated">Separated
						<br><br>
						&emsp;B7.DEPENDENTS:&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
						Total Number of Dependents&nbsp;<input type="number" name="total" >
						
						<table border="1" width="1500">
							<tr>
							<td>
								&emsp;&emsp;&emsp;No.&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Name of Dependent&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Relationship to BHW&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Date of Birth
								<br>
								<tr>
									<td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;1&emsp;&emsp;&emsp;&emsp;2&emsp;&emsp;&emsp;&emsp;3&emsp;&emsp;&emsp;&emsp;4&emsp;&emsp;&emsp;&emsp;5&emsp;&emsp;&emsp;&emsp;6</td>
								</tr>
								<tr>
									<td>
									&emsp;&emsp;&emsp;1&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
									<input type="text" name="Name1" size="50">&emsp;&emsp;&emsp;&emsp;
									<input type="checkbox" name="Check1[]" value="Son">&emsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;
									<input type="checkbox" name="Check1[]" value="Daughter">&emsp;&nbsp;&nbsp;&nbsp;&emsp;
									<input type="checkbox" name="Check1[]" value="Grandchild">&emsp;&nbsp;&nbsp;&emsp;&emsp;
									<input type="checkbox" name="Check1[]" value="Niece/Nephew">&emsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;
									<input type="checkbox" name="Check1[]" value="Adopted">&emsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;
									<input type="checkbox" name="Check1[]" value="Others">
								&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
								<input type="date" name="date1" >
								<br>
								&emsp;&emsp;&emsp;2&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
								<input type="text" name="SecName" size="50" >&emsp;&emsp;&emsp;&emsp;
									<input type="checkbox" name="Check2[]" value="Son">&emsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;
									<input type="checkbox" name="Check2[]" value="Daughter">&emsp;&nbsp;&nbsp;&nbsp;&emsp;
									<input type="checkbox" name="Check2[]" value="Grandchild">&emsp;&nbsp;&nbsp;&emsp;&emsp;
									<input type="checkbox" name="Check2[]" value="Niece/Nephew">&emsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;
									<input type="checkbox" name="Check2[]" value="Adopted">&emsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;
									<input type="checkbox" name="Check2[]" value="Others">
								&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
								<input type="date" name="date2" >
								<br>
								&emsp;&emsp;&emsp;3&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
								<input type="text" name="ThirdName" size="50">&emsp;&emsp;&emsp;&emsp;
									<input type="checkbox" name="Check3[]" value="Son">&emsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;
									<input type="checkbox" name="Check3[]" value="Daughter">&emsp;&nbsp;&nbsp;&nbsp;&emsp;
									<input type="checkbox" name="Check3[]" value="Grandchild">&emsp;&nbsp;&nbsp;&emsp;&emsp;
									<input type="checkbox" name="Check3[]" value="Niece/Nephew">&emsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;
									<input type="checkbox" name="Check3[]" value="Adopted">&emsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;
									<input type="checkbox" name="Check3[]" value="Others">
								&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
								<input type="date" name="date3" >
								<br>
								&emsp;&emsp;&emsp;4&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
								<input type="text" name="FrthName" size="50">&emsp;&emsp;&emsp;&emsp;
									<input type="checkbox" name="Check4[]" value="Son">&emsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;
									<input type="checkbox" name="Check4[]" value="Daughter">&emsp;&nbsp;&nbsp;&nbsp;&emsp;
									<input type="checkbox" name="Check4[]" value="Grandchild">&emsp;&nbsp;&nbsp;&emsp;&emsp;
									<input type="checkbox" name="Check4[]" value="Niece/Nephew">&emsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;
									<input type="checkbox" name="Check4[]" value="Adopted">&emsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;
									<input type="checkbox" name="Check4[]" value="Others">
								&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
								<input type="date" name="date4" >
								<br>
								&emsp;&emsp;&emsp;5&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
								<input type="text" name="FthName" size="50">&emsp;&emsp;&emsp;&emsp;
									<input type="checkbox" name="Check5[]" value="Son">&emsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;
									<input type="checkbox" name="Check5[]" value="Daughter">&emsp;&nbsp;&nbsp;&nbsp;&emsp;
									<input type="checkbox" name="Check5[]" value="Grandchild">&emsp;&nbsp;&nbsp;&emsp;&emsp;
									<input type="checkbox" name="Check5[]" value="Niece/Nephew">&emsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;
									<input type="checkbox" name="Check5[]" value="Adopted">&emsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;
									<input type="checkbox" name="Check5[]" value="Others">
								&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
								<input type="date" name="date5" >
								<br>
								&emsp;&emsp;&emsp;6&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
								<input type="text" name="SxthName" size="50">&emsp;&emsp;&emsp;&emsp;
									<input type="checkbox" name="Check6[]" value="Son">&emsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;
									<input type="checkbox" name="Check6[]" value="Daughter">&emsp;&nbsp;&nbsp;&nbsp;&emsp;
									<input type="checkbox" name="Check6[]" value="Grandchild">&emsp;&nbsp;&nbsp;&emsp;&emsp;
									<input type="checkbox" name="Check6[]" value="Niece/Nephew">&emsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;
									<input type="checkbox" name="Check6[]" value="Adopted">&emsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;
									<input type="checkbox" name="Check6[]" value="Others">
								&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
								<input type="date" name="date6" >
								</td>
								</tr>
								<br>
								<tr>
									<td>
										&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;1 Son
										&emsp;&emsp;2 Daughter
										&emsp;&emsp;3 Grandchild
										&emsp;&emsp;4 Niece/Nephew
										&emsp;&emsp;5 Adopted/Foster Child
										&emsp;&emsp;6 Others
										&emsp;&emsp;Please Specify&nbsp;<input type="text" name="specify" size="40">

									</td>
								</tr>
						<tr>
							<td>
								<h3><center><b>C.SERVICE RECORD</b></center></h3>
							</td>
							<tr>
								<td>&emsp;C1.INCLUSIVE DATES&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;C2.STATION/PLACE OF ASSIGNMENT</td>
							</tr>
							<tr>
								<td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;FROM&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;TO</td>
							</tr>
							<tr>
								<td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
									<input type="date" name="DNumber1" >&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
									<input type="date" name="DNumber2" >&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
									<input type="text" name="Station1" size="80">
									<br>
									&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
									<input type="date" name="DNumber3" >&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
									<input type="date" name="DNumber4" >&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
									<input type="text" name="Station2" size="80">
									<br>
							
									&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
									<input type="date" name="DNumber5" >&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
									<input type="date" name="DNumber6" >&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
									<input type="text" name="Station3" size="80"></td>
									<br>
							</tr>
						</tr>
						<tr>
							<td>&emsp;C3.Number of households presently covered:&nbsp;<input type="Number" name="household" size="1">
								<br>
								&emsp;C4. Is your present place of assignment considered as hazardous area?&nbsp;
								<input type="checkbox" name="Places[]" value="Yes" >&nbsp;Yes&emsp;
								<input type="checkbox" name="Places[]" value="No" >&nbsp;No
								<br>
								&emsp;C5.Technical Supervisor Name:&nbsp;<input type="text" name="supervisor" size="50">
								&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Position:&nbsp;<input type="text" name="What" size="50">
								<br>
								 &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Agency/Office:&nbsp;<input type="text" name="agency" size="50">

							</td>
						</tr>
								<tr>
							<td>
								<h3><center><b>D.TRAININGS ATTENDED</b></center></h3>
							</td>
							<tr>
								<td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;D1.Title of Training&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;D2.Date&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;D3.Conducted by</td>	
								<br>
							</tr>
							<tr>
								<td>
									&emsp;<input type="text" name="Title1" size="40">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="date" name="Datenum1" size="40">&emsp;&emsp;&emsp;&emsp;<input type="text" name="Conductor1" size="45"><br>
									&emsp;<input type="text" name="Title2" size="40">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="date" name="Datenum2" size="40">&emsp;&emsp;&emsp;&emsp;<input type="text" name="Conductor2" size="45"><br>
									&emsp;<input type="text" name="Title3" size="40">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="date" name="Datenum3" size="40">&emsp;&emsp;&emsp;&emsp;<input type="text" name="Conductor3" size="45"><br>
									&emsp;<input type="text" name="Title4" size="40">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="date" name="Datenum4" size="40">&emsp;&emsp;&emsp;&emsp;<input type="text" name="Conductor4" size="45"><br>
									&emsp;<input type="text" name="Title5" size="40">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="date" name="Datenum5" size="40">&emsp;&emsp;&emsp;&emsp;<input type="text" name="Conductor5" size="45"><br>
									&emsp;<input type="text" name="Title6" size="40">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="date" name="Datenum6" size="40">&emsp;&emsp;&emsp;&emsp;<input type="text" name="Conductor6" size="45"><br>
								</td>
							</tr>
								<tr>
							<td>
								<h3><center><b>E.OTHER INFORMATION</b></center></h3>
							</td>
							<tr>
								<tr>
									<td>&emsp;E1.HIGHEST EDUCATIONAL ATTAINMENT&emsp;&emsp;<input type="text" name="educ" size="40">
										<br>
										&emsp;E2.BLOOD TYPE &emsp;<input type="checkbox" name="Bloodtype[]" value="A" >&nbsp;A&emsp;&emsp;&emsp;&emsp;&emsp;
										&emsp;<input type="checkbox" name="Bloodtype[]" value="B">&nbsp;B&emsp;&emsp;&emsp;&emsp;&emsp;
										&emsp;<input type="checkbox" name="Bloodtype[]" value="AB">&nbsp;AB&emsp;&emsp;&emsp;&emsp;&emsp;
										&emsp;<input type="checkbox" name="Bloodtype[]" value="O">&nbsp;O<br>
										&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
										<input type="checkbox" name="Bloodtype[]" value="WithKit">&nbsp;With Kit
										&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
										<input type="checkbox" name="Bloodtype[]" value="WithoutKit">&nbsp;Without Kit
										<br><br>
										&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Date Acccomplished: &nbsp;<input type="date" name="Accomplished" size="40">
									</td>
								</tr></TR>


							</td>
						</tr>
		
						</table>



						<table align="center">
							<tr>
								<td>
									<br><br>
									<input type="submit" value="Submit Information" size="800px" align="right">
									<br><br><br>
								</td>
							</tr>
						</table>
						
			</tr>

	 	</table>
	 
	
	</form>
	<br><br>
	


</body>
</html>