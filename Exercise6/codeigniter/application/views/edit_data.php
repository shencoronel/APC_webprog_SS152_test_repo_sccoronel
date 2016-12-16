<?php
include_once 'dbconfig.php';
if(isset($_GET['edit_id']))
{
 $sql_query="SELECT * FROM users WHERE user_id=".$_GET['edit_id'];
 $result_set=mysqli_query($connect,$sql_query);
 $fetched_row=mysqli_fetch_array($result_set);
}

$Error = $firstnameErr = $lastnameErr = $nicknameErr = $emailErr = $genderErr = $homeaddErr = $cpnumErr = "";

if(isset($_POST['btn-update'])){
 // variables for input data
  
  $firstname = test_input($_POST["firstname"]);
  
  // check if fname only contains letters and numbers
  if (!preg_match("/^[a-zA-Z0-9 ]*$/", $firstname)) {
    $firstnameErr = "Only letters and numbers allowed"; 
    $Error = "Error";
  }
  
  $lastname = test_input($_POST["lastname"]);
  
  // check if lname only contains letters and numbers
  if (!preg_match("/^[a-zA-Z0-9 ]*$/", $lastname)) {
    $lastnameErr = "Only letters and numbers allowed"; 
    $Error = "Error";
  }
  
  $nickname = test_input($_POST["nickname"]);
  
  // check if name only contains letters and whitespace
  if (!preg_match("/^[a-zA-Z ]*$/",$nickname)) {
    $nicknameErr = "Only letters and white space allowed"; 
    $Error = "Error";
  }

  $email = test_input($_POST["email"]);
    
  // check if e-mail address is well-formed
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $emailErr = "Invalid email format"; 
    $Error = "Error";
  }

  $homeadd = test_input($_POST["homeadd"]);
    
  // check if homeAdd only contains letters and whitespace
  if (!preg_match("/^[a-zA-Z ]*$/",$homeadd)) {
    $homeaddErr = "Only letters and white space allowed";
    $Error = "Error"; 
  }

  if (empty($_POST["gender"])) { 
    $genderErr = "Input gender";  
    $Err = "Err";    
  } else {    
    $gender = test_input($_POST["gender"]);   
  }
  
  $cpnum = test_input($_POST["cpnum"]);
    
  // check if phoneNum only contains numbers
  if (!preg_match("/^[0-9]*$/",$cpnum)) {
    $cpnumErr = "Only numbers are allowed";
    $Error = "Error"; 
  }

  if (empty($_POST["comment"])) {    
    $comment = "";    
  } else {    
    $comment = test_input($_POST["comment"]);   
  }

 // sql query for update data into database
  if($Err != "Err"){
    $sql_query = "UPDATE users SET firstname='$firstname',lastname='$lastname',nickname='$nickname',email='$email',homeadd='$homeadd',gender='$gender',cpnum='$cpnum',comment='$comment' WHERE user_id=".$_GET['edit_id'];
  }

  if(mysqli_query($connect,$sql_query) && $Error != "Error"){
    ?>
    <script type="text/javascript">
    alert('Data Are Updated Successfully');
    window.location.href='index.php';
    </script>
    <?php
  }
  else{
    ?>
    <script type="text/javascript">
    alert('error occured while updating data');
    </script>
    <?php
  }
}

if(isset($_POST['btn-cancel']))
{
 header("Location: index.php");
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Form Validation</title>

</head>
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
<body>  

<div style="position: relative">
  <div class="box">
    <h2 id="formValid"> Form Validation </h2>
    <form method="post">  
      <table align = "center">
        <tr align="center">
          <td><a href = "index.php"> Back to Main Page </a></td>
        </tr>

        <tr>
          <td>
            <input type="text" name="firstname" placeholder="First Name" value="<?php echo $fetched_row['firstname']; ?>" required />
            <span class="error">* <br><?php echo $firstnameErr;?></span>
          </td>
        </tr>
        
        <tr>
          <td>
            <input type="text" name="lastname" placeholder="Last Name" value="<?php echo $fetched_row['lastname']; ?>" required />
            <span class="error">* <br><?php echo $lastnameErr;?></span>
          </td>
        </tr>
        
        <tr>
          <td>
            <input type="text" name="nickname" placeholder="Nickname" value="<?php echo $fetched_row['nickname']; ?>" required />
            <span class="error">* <br><?php echo $nicknameErr;?></span>
          </td>
        </tr>
        
        <tr>
          <td>
            <input type="text" name="email" placeholder="Email" value="<?php echo $fetched_row['email']; ?>" required />
            <span class="error">* <br><?php echo $emailErr;?></span>
          </td>
        </tr>
        
        <tr>
          <td>
            <input type="text" name="homeadd" placeholder="Home Address" value="<?php echo $fetched_row['homeadd']; ?>" />
            <span class="error">* <br><?php echo $homeaddErr;?></span>
          </td>
        </tr>
       
        </tr>
          <td>
            Gender:
            <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="Female"> Female
            <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="Male"> Male 
            <span class="error">* <br><?php echo $genderErr;?></span>
          </td>
        </tr>

        <tr>
          <td>
            <input type="text" name="cpnum" placeholder="Phone Number" value="<?php echo $fetched_row['cpnum']; ?>" required />
            <span class="error">* <br><?php echo $cpnumErr;?></span>
          </td>
        </tr>
        
        <tr>
          <td>
            <textarea name="comment" placeholder="Comment" rows="5" cols="40" value="<?php echo $fetched_row['comment']; ?>"></textarea>
          </td>
        </tr>
        
        <td>
          <p><span class="error">* required field </span></p>
          <button type="submit" name="btn-update"><strong>UPDATE</strong></button>
          <button type="submit" name="btn-cancel"><strong>Cancel</strong></button>
        </td>
        </tr>
      </table>
    </form>
  </div>
</body>
</html>