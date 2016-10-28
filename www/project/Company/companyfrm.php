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

<script type="text/javascript" >            
            function validate(objForm){
				
				
                if(objForm.compid.value.length==0){
                    alert("Please enter company id");
                    objForm.compid.focus();
                    return false;
                }
               
                if(objForm.compname.value.length==0){
                    alert("Please Enter cityname");
                    objForm.cityname.focus();
                    return false;
                }
                
               
                return true;
            }
         </script>

</head>

<body>



<?php require_once('classes/db.php'); ?>
<?php require_once('classes/Users.php');?>



			   <?php
if(isset(  $_POST['submit']))
{

$compid = $_POST['compid'];
$compname=$_POST['compname'];
$worktype=$_POST['worktype'];
$contactperson=$_POST['contactperson'];
$cuname=$_POST['cuname'];
$cpwd=$_POST['cpwd'];
$contact=$_POST['contact'];
$email=$_POST['email'];
$website=$_POST['website'];
$regofaddr=$_POST['regofaddr'];
$auth=$_POST['auth'];

$st = "insert into company values (".$compid.",'".$compname."','".$worktype."',".$contactperson.",'".$cuname."','".$cpwd."',".$contact.",'".$email."','".$website."','".$regofaddr."','".$auth."')";

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
			 <form name="company_frm" action="" method="post">
			  <table>
			  <tr>
			  <td></td><td>COMPANY INFORMATION FORM</td><td></td></tr>
				<tr><td> Company ID</td>
				<td><input type="text" name="compid" id="compid" size="5" onkeypress="return numeric(event);" /></td>
				<td></td>
				</tr>
				<tr><td> Compant Name</td>
				<td><input type="text" name="compname" id="compname" size="5" onkeypress="return string(event);" /></td>
				<td></td>
				</tr>
			  <tr><td> Worktype</td><td><input type="text" name="worktype" id="worktype" size="50"/></td>
			    <td></td>
				</tr>
				
				<tr><td>Contact person</td><td><input type="text" id="contactperson" name="contactperson" /></td>
				<td></td>
			  </tr>
			  <tr><td> Username</td><td><input type="text" name="cuname" id="cuname" size="50"/></td>
			    <td></td>
				</tr>
				<tr><td> Password</td><td><input type="password" name="cpwd" id="cpwd" size="50"/></td>
			    <td></td>
				</tr>
				<tr><td> Contact No.</td><td><input type="text" name="contact" id="contact" size="50"/></td>
			    <td></td>
				</tr>
				<tr><td> Email ID</td><td><input type="text" name="email" id="email" size="50"/></td>
			    <td></td>
				</tr>
				
				<tr><td> Website</td><td><input type="text" name="website" id="website" size="50"/></td>
			    <td></td>
				</tr>
				<tr><td> RegOffAddr</td><td><input type="text" name="regofaddr" id="regofaddr" size="100"/></td>
			    <td></td>
				</tr>
				
				<tr><td> Authentication</td><td><input type="text"  name="auth" id="auth"/></td>
			    <td></td>
				</tr>
				<tr><td></td><td><input type="submit" value="submit" name="submit" /></td><td></td>
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
