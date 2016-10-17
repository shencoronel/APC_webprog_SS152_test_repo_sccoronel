<html>
<title>Shen Coronel</title>
<body>
<style>
	body{
		font-family: Georgia;
	}
	div{
		text-align:center;
	}
	table, th, td {
		width: 48%;
		margin: 30px;
		margin-left: 420px;
		margin-right: 250px;
		padding:10;
		text-align:center;
		border: 1px solid gray;
		border-collapse: collapse;
	}
	th, td {
		padding: 10px;
		text-align: center;
	}
	a:link {
		color: black;
		width: 100%;
		text-decoration: none;
	}
	a:visited {
    color: gray;
	}
	a:hover {
		color: hotpink;
	}
	div.box {
		text-align:center;
		background-color:rgba(192,192,192,0.3);
		color: 333333;
		margin: 30px;
		margin-left: 250px;
		margin-right: 250px;
		padding:10;
	}
	.error {color: #FF0000;
	}
</style>
<div style="text-align:center; margin-top:3em; margin-bottom:1em">
	<img src="name.jpg" style="width:721px;height:80px;">
</div>

<div id="link" style = "margin-top:5em">
	<p>
	<a href="Coronel.html">HOME</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<a href="Gallery.html">GALLERY</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<a href="About Me.html">ABOUT ME</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<a href="Exercise4.php">FORM</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<a href="Contact.html">CONTACT</a>
	</p>
</div>
		<?php
		$nameErr = $cpnumErr = $nicknameErr = $cpnum = $emailErr = $genderErr = $websiteErr = "";
		$name = $homeadd = $cpnum = $nickname = $email = $gender = $comment = $website = "";

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
		  	if (empty($_POST["name"])) {
				$nameErr = "Name is required";
		  	} else {
				$name = test_input($_POST["name"]);
				// check if name only contains letters and whitespace
				if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
					$nameErr = "Only letters and white space allowed";
					$name = "";
				}
		  	}

			if(empty($_POST["nickname"])){
		  		$nicknameErr = "Nickname is required";
			}else{
		  		$nickname = test_input($_POST["nickname"]);
		  		if (!preg_match("/^[a-zA-Z ]*$/",$nickname)) {
				$nicknameErr = "Only letters and white space allowed";
				$nickname = "";
				}
			}
		  
			if (empty($_POST["email"])) {
			$emailErr = "Email is required";
		  	} else {
				$email = test_input($_POST["email"]);
				// check if e-mail address is well-formed
				if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			  	$emailErr = "Invalid email format";
			  	$email = "";
				}
		  	}

			if(empty($_POST["homeadd"])){
			  	$homeadd = "";
			}else{
			  	$homeadd = test_input($_POST["homeadd"]);
			}

		  	if (empty($_POST["comment"])) {
				$comment = "";
		  	} else {
				$comment = test_input($_POST["comment"]);
		  	}

		  	if (empty($_POST["gender"])) {
				$genderErr = "Gender is required";
		  	} else {
				$gender = test_input($_POST["gender"]);
		  	}

			if (empty($_POST["cpnum"])) {
				$cpnumErr = "Mobile number is required";
		  	} else {
				$cpnum = test_input($_POST["cpnum"]);
				if(!preg_match("/^[0-9-]*$/",$cpnum)){
					$cpnumErr = " &nbsp;Only numbers are allowed";
					$cpnum = "";
				}
		  	}
		}

		function test_input($data) {
		  $data = trim($data);
		  $data = stripslashes($data);
		  $data = htmlspecialchars($data);
		  return $data;
		}
		?>
		<div class="box">
		<h2 style="text-align:center; font-size: 20px; margin-bottom: 1px">Form Validation</h2>
		<p style="text-align:center; margin-bottom: 3px""><span class="error">* required field.</span></p>
			<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
			  	<p style="text-align:center; ">
				Name : <br><input type="text" name="name" value="<?php echo $name;?>">
			  	<span class="error">* <?php echo $nameErr;?></span>
			  	<br><br>
			  	Nickname : <br><input type="text" name="nickname" value="<?php echo $nickname;?>">
			  	<span class="error">* <?php echo $nicknameErr;?></span>
			  	<br><br>
			  	E-mail : <br><input type="text" name="email" value="<?php echo $email;?>">
			  	<span class="error">* <?php echo $emailErr;?></span>
			  	<br><br>
			  	Home Address : <br><input type="text" name="homeadd" value="<?php echo $homeadd;?>">
			  	<br><br>
			  	Gender : <br>
			  	<input type="radio" name="gender" <?php if (isset($gender) && $gender=="Female") echo "checked";?> value="female">Female
			  	<input type="radio" name="gender" <?php if (isset($gender) && $gender=="Male") echo "checked";?> value="male">Male
			 	<span class="error">* <?php echo $genderErr;?></span>
				<br><br>
			  	Mobile : <br><input type="text" name="cpnum" value="<?php echo $cpnum;?>">
			  	<span class="error">* <?php echo $cpnumErr;?></span>
			  	<br><br>
	  		  	Comment : <br><textarea name="comment" rows="3" cols="30"><?php echo $comment;?></textarea>
			  	<br><br>
			  	<input type="submit" name="submit" value="Submit">  
			  	</p>
			</form>
		</div>

		<?php
			echo "<div class='box'><p style='text-align:left; margin-left: 50px'><h3 style='text-align:center;font-size:25px; margin-bottom: -30px; margin-top:-10px'>Your input:</h3>";
			echo "<table  style='margin-top: -40px''>";
			echo "<tr><th>Name:</th><td>";
			echo $name;
			echo "</td></tr><br>";
			echo "<tr><th>Nickname:</th><td>";
			echo $nickname;
			echo "</td></tr><br>";
			echo "<tr><th>Email:</th><td>";
			echo $email;
			echo "</td></tr><br>";
			echo "<tr><th>Home Address:</th><td>";
			echo $homeadd;
			echo "</td></tr><br>";
			echo "<tr><th>Gender: </th><td>";
			echo $gender;
			echo "</td></tr><br>";
			echo "<tr><th>Mobile: </th><td>";
			echo $cpnum;
			echo "</td></tr><br>";
			echo "<tr><th>Comment: </th><td>";
			echo $comment;
			echo "</td></tr>";
			echo "</table></p></div>";
		?>
<center>

<hr	size="2px" width="75%" color="gray">
<div  style="margin-top:3em">
<p><i>STAY IN TOUCH WITH ME.</i><br>
</div>
<div  style="margin-top:1em; margin-bottom:3em">
<a href="https://www.facebook.com/sherinecoronel" target="_blank" style="text-decoration:none">
<img src="fb1.jpg"
  alt="Facebook"
  width="50"height="50"/> </a>
<a href="https://www.twitter.com/shencoronel" target="_blank" style="text-decoration:none">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src="twitter1.jpg"
  alt="Twitter"
  width="50"height="50"/> </a>
<a href="https://www.snapchat.com/add/shencoronel" target="_blank" style="text-decoration:none">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src="snap1.jpg"
  alt="Snapchat"
  width="50"height="50"/> </a>
<a href="http://www.malawaknautak.tumblr.com" target="_blank" style="text-decoration:none">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src="tumblr1.jpg"
  alt="Tumblr"
  width="50"height="50"/> </a>
</div>
</body>
</html>

