<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php require_once('classes/db.php'); ?>
<?php require_once('classes/Users.php');?>

 <?php
if(isset($_POST['submit']))
{

$name = $_POST['name'];


  
  $filename = basename($_FILES['uploaded_file']['name']);
echo "".$filename;
  $ext = substr($filename, strrpos($filename, '.') + 1);
        $newname = dirname(__FILE__).'\images\uploads'.$filename;
      //Check if the file with the same name is already exists on the server
    $save_file='/images/uploads'.$filename;
     
	  
         if ((move_uploaded_file($filename,$newname))) 
		{
           echo "Upload Complete! ";
        } 
		else 
		{
           echo "Error: A problem occurred during file upload!";
        }
       
  
$st = "insert into photo values ('".$name."','".$save_file."')";

$Users = new Users();
$query = $Users->insert($st);
if($query)
{
?>
<script type="text/javascript"> alert("Successfully Inserted"); </script>	
<?php
}
else
{
?>
<script type="text/javascript"> alert("Invalid Info"); </script>	
<?php

}
}
?>
<form method="post" action="">
<table>
<tr> <td>Name:</td>
<td> <input  type="text" id="name" name="name"  /></td>
</tr>
<tr>
                        <td height="35">Item Image:</td>
                        <td><input type="file" name="uploaded_file" id="uploaded_file">
						 
						
                      
</tr>
<tr>
<td>Submit</td><td><input type="submit" name="submit" value="submit" /></td>
</tr>
</table>
</form>
</body>
</html>