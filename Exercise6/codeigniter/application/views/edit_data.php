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
     <?php foreach ($single_users as $users): ?>
    <form method="post" action="<?php echo base_url() . "index.php/users/update_users_id1"?>">

      <table align = "center">
      <input type="text" id="hide" name="did" value="<?php echo $users->user_id; ?>">
        <tr align="center">
          <td><a href = "index.php"> Back to Main Page </a></td>
        </tr>

        <tr>
          <td>
            <input type="text" name="firstname" placeholder="First Name" value="<?php echo $users->firstname; ?>" required />
            <span class="error">* <br></span>
          </td>
        </tr>
        
        <tr>
          <td>
            <input type="text" name="lastname" placeholder="Last Name" value="<?php echo $users->lastname; ?>" required />
            <span class="error">* <br></span>
          </td>
        </tr>
        
        <tr>
          <td>
            <input type="text" name="nickname" placeholder="Nickname" value="<?php echo $users->nickname; ?>" required />
            <span class="error">* <br></span>
          </td>
        </tr>
        
        <tr>
          <td>
            <input type="text" name="email" placeholder="Email" value="<?php echo $users->email; ?>" required />
            <span class="error">* <br></span>
          </td>
        </tr>
        
        <tr>
          <td>
            <input type="text" name="homeadd" placeholder="Home Address" value="<?php echo $users->homeadd; ?>" />
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
            <input type="text" name="cpnum" placeholder="Phone Number" value="<?php echo $users->cpNum; ?>" required />
            <span class="error">* <br><?php echo $cpnumErr;?></span>
          </td>
        </tr>
        
        <tr>
          <td>
            <textarea name="comment" placeholder="Comment" rows="5" cols="40" value="<?php echo $users->comment; ?>"></textarea>
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
     <?php endforeach; ?>
  </div>
</body>
</html>