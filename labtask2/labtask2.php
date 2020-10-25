<!DOCTYPE html>
<html>
	<head>
		<title>My Form </title>
	</head>

<?php 
	$stdIdErr=$stdNameErr=$stdGenderErr=$stdEmailErr=$stdAddressErr=$cityErr=$stateErr=$countryErr="";
	$stdId=$stdName=$stdGender=$stdEmail=$stdAddress=$addressLine2=$city=$state=$zip=$country="";
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		if(empty($_REQUEST["stdId"])) {
				  $stdIdErr = "Student Id is required";
			}
		else {
				$stdId= $_REQUEST["stdId"];
			}
		if(empty($_REQUEST["stdName"])) {
				  $stdNameErr = "Student Name is required";
			}
		else {
				$stdName= $_REQUEST["stdName"];
			}
		if(empty($_REQUEST["gender1"])){
				$gender1= "";
			}
			else{
				$gender1= $_REQUEST["gender1"];
			}
		if(empty($_REQUEST["gender2"])){
				$gender2= "";
			}
			else{
				$gender2= $_REQUEST["gender2"];
			}
		if(empty($_REQUEST["gender1"]) && empty($_REQUEST["gender2"]))
		{
			$stdGenderErr = "Please Select One";
		}
		if($gender1 != "" && $gender2 != "" )
		{
			$stdGenderErr = "Please Select One";
		}
		else{
			if($gender1 != ""){
				$stdGender=$gender1;
			}
			else{
				$stdGender=$gender2;
			}
		}
		if(empty($_REQUEST["stdEmail"])) {
				  $stdEmailErr = "Email is required";
			}
		else {
				$stdEmail= $_REQUEST["stdEmail"];
			}
		if(empty($_REQUEST["address"])) {
				  $stdAddressErr = "Address is required";
			}
		else {
				$stdAddress= $_REQUEST["address"];
			}
		$addressLine2=$_REQUEST["addressLine2"];
		if(empty($_REQUEST["city"])) {
				  $cityErr = "City required";
			}
		else {
				$city= $_REQUEST["city"];
			}
		if(empty($_REQUEST["state"])) {
				  $stateErr = "Sate required";
			}
		else {
				$state= $_REQUEST["state"];
			}
		$Zip=$_REQUEST["zip"];
		if(empty($_REQUEST["country"])) {
				  $countryErr = "Country is required";
			}
		else {
				$country= $_REQUEST["country"];
			}
		function display(){
		}
	}
 ?>
 

	<body>
		
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" >
			<label>Student Id</label><span class="error">*</span><br/>
			<span class="error" ><?php echo $stdIdErr."<br/>"; ?></span>
			<input type="text" name="stdId" />
			<br/><br/>
			<label>Student Name</label><span class="error">*</span><br/>
			<span class="error"><?php echo $stdNameErr."<br/>"; ?></span>
			<input type="text" name="stdName" />
			<br/><br/>
			<label>Gender</label><span class="error">*</span><br/>
			<span class="error"><?php echo $stdGenderErr."<br/>"; ?></span><br/>
			<input type="checkbox" name="gender1" value="Male" />
			<label>Male</label><br>
			<input type="checkbox" name="gender2" value="Female" />
			<label>Female</label><br>
			<br/><br/>
			<label>Student Email</label><span class="error">*</span></br>
			<span class="error"><?php echo $stdEmailErr."<br/>"; ?></span>
			<input type="text" name="stdEmail" value="" placeholder="@"/>
			<br/><br/>
			<label>Address</label><span class="error">*</span></br>
			<span class="error"><?php echo $stdAddressErr."<br/>"; ?></span>
			<textarea name="address" cols="34" rows="1" ></textarea><br/>
			<small>Street Address</small></br>
			<textarea name="addressLine2" cols="34" rows="1" ></textarea><br/>
			<small>Address Line 2</small></br>
			<input type="text" name="city" /><br/>
			<span class="error"><?php echo $cityErr."<br/>"; ?></span>
			<small>City</small><span class="error">*</span><br/>
			<input type="text" name="state" /><br/>
			<span class="error"><?php echo $stateErr."<br/>"; ?></span>
			<small>State/Provience/Region</small><span class="error">*</span><br/>
			<input type="text" name="zip" />
			<br/>
			
			<small>Zip/Postal Code</small>
			<br/>
			<select name="country"  >
				<option name="country" value="" ></option>
				<option name="country" value="Bangladesh" >Bangladesh</option>
				<option name="country" value="India" >India</option>
				<option name="country" value="Pakistan" >Pakistan</option>
			</select><br/>
			<span class="error"><?php echo $countryErr."<br/>"; ?></span>
			<small>Country</small><span class="error">*</span></br>
			
			<input type="submit" name="" value="Save Form" />
		</form>
	</body>
	
     <?php
		echo "Student Id: ".$stdId."<br>";
		echo "Student Id: ".$stdName."<br>";
		echo "Student Gender: ".$stdGender."<br>";
		echo "Email Address: ".$stdEmail."<br>";
		echo "Street Address: ".$stdAddress."<br>";
		echo "Address line2: ".$addressLine2."<br>";
		echo "City: ".$city."<br>";
		echo "State/Provience/Region: ".$state."<br>";
		echo "Zip/Postal: ".$zip."<br>";
		echo "Country: ".$country."<br>";
	?>
	
</html>