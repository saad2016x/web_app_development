<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
		<title>My First Form</title>
		<link rel="stylesheet" type="text/css" href="../global/main.css" />
	</head>

	<body>
		<!-- This is the Container for the whole page. -->
		<div id="outer_container">

			<!-- HEADER Container (included) -->
			<!-- This is the Container just for the header. -->
			<?php include("../includes/header.php"); ?>

			<!-- LINKS Container (included) -->
			<!-- This is the Container for the links on the left side of the page. -->
			<?php include("../includes/links.php"); ?>

			<!-- MAIN Container -->
			<!-- This is the Container for the main section. -->
            <?php require("database.php");
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $fname = $_POST['fName'];
                    $lname = $_POST['lName'];
                    $gender = $_POST['gender'];
										if (isset($_POST['ageOk'])) {
											  $ageOk = $_POST['ageOk'];
										}else{
											  $ageOk = "off";
										}
                    $street = $_POST['street'];
                    $city = $_POST['city'];
                    $zip = $_POST['zip'];
                    $phone = $_POST['phone'];
                    $email = $_POST['email'];
                    $infoSource = $_POST['infoSource'];
                    $ambience = $_POST['ambience'];
                    $value_for_money = $_POST['value_for_money'];
                    $presentation = $_POST['presentation'];
                    $taste = $_POST['taste'];
                    $efficiency = $_POST['efficiency'];
                    $courtesy = $_POST['courtesy'];
										if (isset($_POST['extra'])) {
											$extra = $_POST['extra'];
										}else{
											$extra="";
										}
										$sql="INSERT INTO `feedback`(`firstName`, `lastName`, `gender`, `ageOk`, `street`, `city`, `zip`, `phone`, `email`, `infoSource`, `ambience`, `value_for_money`, `presentation`, `taste`, `efficiency`, `courtesy`, `extra`) VALUES ('$fname','$lname','$gender','$ageOk','$street','$city','$zip','$phone','$email','$infoSource','$ambience','$value_for_money','$presentation','$taste','$efficiency','$courtesy','$extra')";

										if ($conn->query($sql) === TRUE) {
										    echo "New record created successfully";

		                    echo "<span class='success'>Form Submitted By <b>POST METHOD</b></span><br/>";
		                    echo "First Name : ".$fname."<br/>Last Name : ".$lname."<br/>";

										} else {
										    echo "Error: " . $sql . "<br>" . $conn->error;
										}

										$conn->close();
            }
            ?>
			<div id="main">
				<p>
					Thank you for your feedback! &nbsp;We will get back to you as soon as possible.
				</p>
			</div><!-- end "main" container -->

			<!-- FOOTER Container -->
			<!-- This is the Container for the footer of the Web site. -->
			<?php include("../includes/footer.php"); ?>

		 </div><!-- end outer_container -->
	</body>
</html>
