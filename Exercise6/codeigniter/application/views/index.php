<!DOCTYPE html>
<html>
<head>
<title>Form Validation</title>

<script type="text/javascript">
function edt_id(id)
{
 if(confirm('Sure to edit ?'))
 {
  window.location.href='edit_data.php?edit_id='+id;
 }
}
function delete_id(id)
{
 if(confirm('Sure to Delete ?'))
 {
  window.location.href='index.php?delete_id='+id;
 }
}
</script>

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
	
	#add_data:hover{
    background-color: #d6cfc4;
}

</style>

</head>
<body>
<center>

<div id="body">
 <div id="content">
    <table align="center">
    <tr>
    <th id="add_data"colspan="10" onclick="window.location='form.php'" style="cursor: pointer"> Add Data Here </a></th>
    </tr>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Nickame</th>
    <th>Email</th>
    <th>Home Address</th>
    <th>Gender</th>
    <th>Mobile Number</th>
    <th>Comment</th>
    <th colspan="2">Operations</th>
    </tr>
    

    <?php foreach ($user_list as $u_key){ ?>
        <tr>
        <td><?php echo $u_key->firstname; ?></td>
        <td><?php echo $u_key->lastname; ?></td>
        <td><?php echo $u_key->nickname; ?></td>
        <td><?php echo $u_key->email; ?></td>
        <td><?php echo $u_key->homeadd; ?></td>
        <td><?php echo $u_key->gender; ?></td>
        <td><?php echo $u_key->cpnum; ?></td>
        <td><?php echo $u_key->comment; ?></td>


  <td align="center"><a href="<?php echo base_url() . "index.php/users/show_users_id/" . $u_key->user_id; ?>" onClick="show_confirm('edit',<?php echo $u_key->user_id;?>)"><img src="<?php echo base_url();?>/images/p_edit.png" style="width: 20px"></img></a></td>
        

        <td align="center"><a href="<?php echo base_url() . "index.php/users/delete/" . $u_key->user_id; ?>" onClick="show_confirm('delete',<?php echo $u_key->user_id;?>)"><img src="<?php echo base_url();?>/images/p_drop.png"></img></a></td>
        
        </tr>

        <?php }?>
    </table>
    </div>
</div>

</center>
</body>
</html>