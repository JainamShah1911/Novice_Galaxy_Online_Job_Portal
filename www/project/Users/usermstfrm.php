<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="css/default.css">
<link rel="stylesheet" type="text/css" href="css/jquery.ennui.contentslider.css">
<link rel="stylesheet" type="text/css" href="templatemo_style.css">
<script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
<script src="js/jquery.ennui.contentslider.js" type="text/javascript"></script>
<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>

</head>

<body>

<?php require_once('classes/db.php'); ?>
<?php require_once('classes/Users.php');?>



			  <?php
if(isset(  $_POST['submit']))
{

$userid = $_POST['userid'];
$name=$_POST['name'];
$birdate=$_POST['bdate'];
$add1=$_POST['addline1'];
$add2=$_POST['addline2'];
$statebox=$_POST['statebox'];
$citybox=$_POST['citybox'];
$pin=$_POST['pin'];
$contact=$_POST['contact'];

$email=$_POST['email'];
$question=$_POST['que'];
$answer=$_POST['answer'];
$gender=$_POST['gender'];
$username=$_POST['uname'];
$password=$_POST['pwd'];

$st = "insert into user_mst(userid,name,bdate,addline1,addline2,statebox,citybox,pin,contact,email,que,answer,gender,uname,pwd) values (".$userid.",'".$name."',".$birdate.",'".$add1."','".$add2."','".$statebox."','".$citybox."',".$pin.",".$contact.",".$birdate.",'".$email."','".$question."','".$answer."','".$gender."','".$username."','".$password."')";

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

<div id="templatemo_header_wrapper">

	<?php include "templatemo_header.php" ?>
	
</div> <!-- end of header wrapper -->

<div id="templatemo_menu_wrapper">   
    
    <?php include "templatemo_menu.php" ?>
</div> <!-- end of menu wrapper -->

<div id="tempatemo_content_wrapper">

    <div id="templatemo_content">
    
    	<div class="recent_projects">
        
        	<div class="project_slideshow">
            

            <div id="one" class="contentslider">
                <div class="cs_wrapper">
				<?php include 'cs_slider.php' ?>
                    </div><!-- End cs_wrapper -->
            </div><!-- End contentslider -->
             <!-- Site JavaScript -->
        <script type="text/javascript"
        src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="js/jquery.ennui.contentslider.js"></script>
        <script type="text/javascript">
        $(function() {
        $('#one').ContentSlider({
        width : '530px',
        height : '200px',
        speed : 800,
		/* easing : 'easeInOutExpo' */
		/* easing : 'easeOutQuad'  */
         easing : 'easeInOutBack' 
        });
        });
        </script>
        <script src="js/jquery.chili-2.2.js" type="text/javascript"></script>
        <script src="js/chili/recipes.js" type="text/javascript"></script>
        
        
          </div>
            
            <div class="project_content">
            
            	<div class="header_03">Our Projects</div>
                
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ac dui non tellus auctor convallis. Cras facilisis venenatis fermentum.</p>
                
              <div class="button_01"><a href="#">Read more</a></div>
            
            </div>
            
        </div>
        
        <div id="content_panel">
        	 <div id="column_w610">
			  <form name="user_mstfrm" action="" method="post">
			  <table>
			  <tr>
			  <td></td><td>USER INFORMATION FORM</td><td></td></tr>
				<tr><td> User id</td>
				<td><input type="text" name="userid" id="userid" size="5" onkeypress="return numeric(event);"/></td>
				<td></td>
				</tr>
			  <tr><td> Name</td><td><input type="text" name="name" id="name" size="50" onkeypress="return string(event);"/></td>
			    <td></td>
				</tr>
				<tr><td>Birth Date</td>
				<td><input type="date" name="bdate" id="bdate" /></td>
				<td></td>
				</tr>
				<tr><td>Adderess Line1</td><td><input type="text" id="addline1" name="addline1" /></td>
				<td></td>
			  </tr>
			  <tr><td>Adderess Line2</td><td><input type="text" id="addline2" name="addline2" /></td>
				<td></td>
			  </tr>
			  <tr>
			  <?php 


				$st = "select * from statemst";
 
				$Users = new Users();
				$result= $Users->readdata($st);
				?>
			  <td>State Name</td>
			  <td><select id="statebox" name="statebox" >
								<option>---Select---</option>
			  	<?php
				while($row = mysql_fetch_assoc($result))
				{
					echo '<option value="'. $row['stateid'] .'" >' .$row['statename']. '</option>';
				}

				?>
				</select></td>
			  <td></td>
			  </tr>
			  
			  <tr>
			  <?php 


				$st = "select * from citymst";
 
				$Users = new Users();
				$result= $Users->readdata($st);
				?>
			  <td>City Name</td>
			  <td><select id="citybox" name="citybox" >
								<option>---Select---</option>
				<?php
				while($row = mysql_fetch_assoc($result))
				{
					echo '<option value="'. $row['cityid'] .'" >' .$row['cityname']. '</option>';
				}

				?></select></td>
			  <td></td>
			  </tr>
			  <tr><td> Pincode</td><td><input type="text" name="pin" id="pin" size="50" onkeypress="return numeric(event);"/></td>
			    <td></td>
				</tr>
				<tr><td> Contact No.</td><td><input type="text" name="contact" id="contact" size="50"/></td>
			    <td></td>
				</tr>
				<tr><td> Email ID</td><td><input type="text" name="email" id="email" size="50"/></td>
			    <td></td>
				</tr>
				<tr><td> Question</td><td><select id="que" name="que">
				<option>----select----</option></select></td>
			    <td></td>
				</tr>
				<tr><td> Answer</td><td><input type="text" name="answer" id="answer" size="50"/></td>
			    <td></td>
				</tr>
				<tr>
				<td>Gender:</td>
				<td> Male<input type="radio" value="Male" name="gender" id="rb1" size="50"/>
			    
				 Female<input type="radio" value="Female" name="gender" id="rb2" size="50"/></td>
			    <td></td>
				</tr>
				<tr><td> Photo</td><td><img src="" alt="upload photo"/></td>
			    <td></td>
				</tr>
				<tr><td> Username</td><td><input type="text" name="uname" id="uname" size="50"/></td>
			    <td></td>
				</tr>
				<tr><td> Password</td><td><input type="password" name="pwd" id="pwd" size="50"/></td>
			    <td></td>
				</tr>
				<tr><td> Authentication</td><td><input type="hidden" /></td>
			    <td></td>
				</tr>
				<tr><td></td><td><input type="submit" value="submit" name="submit" /></td><td></td>
			  </tr>
			  </table>
</form>
			 
			 </div>
			<?php include "column_w290.php" ?>
			
            <div class="cleaner"></div>
            
        </div> <!-- end of content panel -->
        
        <div class="cleaner"></div>
    </div> <!-- end of content -->
    
</div> <!-- end of content wrapper -->

<div id="templatemo_footer_wrapper">

	<div id="templatemo_footer">
    	
        <div class="section_w368">
        	<div class="header_04">Privacy Policy</div>
        	<p>This website and its owners take a proactive approach to user privacy and ensure the necessary steps are taken to protect the privacy of its users throughout their visiting experience. This website comply's to all INDIAN laws and requirements for user privacy</p>
            
            <div class="margin_bottom_10"></div>
            
            
           
            
        </div>
        
        <div class="section_w184">
        	<div class="header_04">Services</div>
        	<ul class="footer_menu_list">
            	<li><a href="#">Resume tips</a></li>
                <li><a href="#">Market Trends</a></li>
                <li><a href="#">Walkins</a></li>
                <li><a href="#">company recruiting freshers</a></li>               
            </ul>
        </div>
        
        <div class="section_w184">
	        <div class="header_04">About</div>
        	<ul class="footer_menu_list">
                <li><a href="#">Owners</a></li>
                <li><a href="#">History</a></li>
                <li><a href="#">Other developments</a></li> 
            	             
            </ul>
        </div>
        
        <div class="section_w184">
			<div class="header_04">Partners</div>        
        	<ul class="footer_menu_list">
            	<li><a href="#" target="_parent">TCS</a></li>
                <li><a href="#" target="_parent">Infosis</a></li>
                <li><a href="#" target="_parent">WEB-NET</a></li>               
            </ul>
        </div>
        
        <div class="margin_bottom_20"></div>
        
        <div class="section_w920">
        Copyright © 2015 <a href="#">NoviceGalaxy</a> |  by <a href="#" target="_parent">Jainam Shah</a>  <a href="#" target="_parent">Purva Vansia</a>  <a href="#" target="_parent">Kartavi Patel</a>
        </div>
		
        <div class="cleaner"></div>
    </div> <!-- end of footer -->
</div> <!-- end of footer -->
<div align=center></div></body>

</body>
</html>
