<!DOCTYPE html>
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
	<a href="Form.php">FORM</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<a href="Contact.html">CONTACT</a>
	</p>
</div>
		<div class="box">
	
		<h2 style="text-align:center; font-size: 20px; margin-bottom: 1px">Form Validation</h2>
		<p style="text-align:center; margin-bottom: 3px""><span class="error">* required field.</span></p>
			<form method="post">  
				<table align = "center">
				
				<tr align="center">
					<td><a href = "index.php"> Back to Main Page </a></td>
				</tr>

				<tr>
					<td>
						<input type="text" name="firstname" placeholder= "First Name" required>
						<span class="error">*</span>
					</td>
				</tr>
        
				<tr>
					<td>
						<input type="text" name="lastname" placeholder="Last Name"  required>
						<span class="error">*</span>
					</td>
				</tr>
        
				<tr>
					<td>
						<input type="text" name="nickname" placeholder="Nickname"  required>
						<span class="error">* </span>
					</td>
				</tr>
        
				<tr>
					<td>
						<input type="text" name="email" placeholder="Email"  required>
						<span class="error">* </span>
					</td>
				</tr>
        
				<tr>
					<td>
						<input type="text" name="homeadd" placeholder="Home Address" >
						<span class="error"></span>
					</td>
				</tr>

				<tr>
					<td>
						Gender:
						<input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="Female" required> Female
						<input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="Male"> Male 
						<span class="error">* </span>
					</td>
				</tr>

				<tr>
					<td>
					<input type="text" name="cpnum" placeholder="Phone Number" required>
					<span class="error">* </span>
					</td>
				</tr>
        
				<tr>
					<td>
					<textarea name="comment" placeholder="Comment" rows="5" cols="40" > </textarea>
					</td>
				</tr>
        
				<td>
					<p><span class="error">* required field </span></p>
					<button type="submit" name="submit" value="Submit"> SUBMIT </button>
				</td>
				</table>
			</form>
		</div>
		
<center>

<hr	size="2px" width="75%" color="gray">
<div  style="margin-top:3em">
<p><i>STAY IN TOUCH WITH ME.</i><br>
</div>
<div  style="margin-top:1em; margin-bottom:3em">
<a href="https://www.facebook.com/sherinecoronel" target="_blank" style="text-decoration:none">
<img src="fb1.jpg "
  alt="Facebook"
  width="50"height="50"onmouseover="this.src='ic2.png'" onmouseout="this.src='fb1.jpg'"/> </a>
<a href="https://www.twitter.com/shencoronel" target="_blank" style="text-decoration:none">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src="twitter1.jpg"
  alt="Twitter"
  width="50"height="50"onmouseover="this.src='ic.png'" onmouseout="this.src='twitter1.jpg'"/> </a>
<a href="https://www.snapchat.com/add/shencoronel" target="_blank" style="text-decoration:none">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src="snap1.jpg"
  alt="Snapchat"
  width="50"height="50"onmouseover="this.src='ic3.png'" onmouseout="this.src='snap1.jpg'"/> </a>
<a href="http://www.malawaknautak.tumblr.com" target="_blank" style="text-decoration:none">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src="tumblr1.jpg"
  alt="Tumblr"
  width="50"height="50"onmouseover="this.src='ic4.png'" onmouseout="this.src='tumblr1.jpg'"/> </a>
</div>
</body>
</html>


