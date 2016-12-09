<?php
include_once 'dbconfig.php';

// delete condition
if(isset($_GET['delete_id']))
{
 $sql_query="DELETE FROM users WHERE user_id=".$_GET['delete_id'];
 mysql_query($sql_query);
 header("Location: $_SERVER[PHP_SELF]");
}
// delete condition
?>

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
table, th, td {
		background-color:hsla(120,100%,75%,0.3);
		width: 48%;
		margin: 30px;
		margin-left: 420px;
		margin-right: 250px;
		padding:10;
		text-align:center;
		border: 1px hotpink;
		border-collapse: collapse;
	}


table,td,th{
 border:solid #00ff00 1px;
 padding:15px;
}

table td input{
 width:97%;
 height:35px;
 border:dashed #00a2d1 1px;
 padding-left:15px;
 font-family:Georgia;
 box-shadow:0px 0px 0px rgba(1,0,0,0.2);
 outline:none;
}

#add:hover{
    background-color:hsla(120,100%,50%,0.3)
}

</style>

</head>
<body>
<center>

<div id="body">
 <div id="content">
    <table align="center">
    <tr>
    <th id="add"colspan="10" onclick="window.location='form.php'" style="cursor: pointer"> Add Data Here </a></th>
    </tr>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Nickname</th>
    <th>Email</th>
    <th>Home Address</th>
    <th>Gender</th>
    <th>Mobile Number</th>
    <th>Comment</th>
    </tr>
    <?php
 $sql_query="SELECT * FROM users";
 $result_set=mysql_query($sql_query);
 while($row=mysql_fetch_row($result_set))
 {
  ?>
        <tr>
        <td><?php echo $row[1]; ?></td>
        <td><?php echo $row[2]; ?></td>
        <td><?php echo $row[3]; ?></td>
        <td><?php echo $row[4]; ?></td>
        <td><?php echo $row[5]; ?></td>
        <td><?php echo $row[6]; ?></td>
        <td><?php echo $row[7]; ?></td>
  <td align="center"><a href="javascript:edt_id('<?php echo $row[0]; ?>')"><img src="p_edit.png" align="EDIT" style="width: 20px"/></a></td>
        <td align="center"><a href="javascript:delete_id('<?php echo $row[0]; ?>')"><img src="p_drop.png" align="DELETE" /></a></td>
        </tr>
        <?php
 }
 ?>
    </table>
    </div>
</div>

</center>
</body>
</html>