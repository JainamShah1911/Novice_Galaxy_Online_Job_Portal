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
<?php require_once('classes/Users.php'); ?>

<?php
$flag=0;

if(isset($_POST['submit']))
{
if($flag==0)

{
$st=sprintf("SELECT * FROM user_mst WHERE username='%s' AND password='%s'", 
			mysql_real_escape_string($_POST['username']), mysql_real_escape_string($_POST['password']));;
$Users = new Users();

$result = $Users->readdata($st);
// $count=or die('Connection error -> ' . mysql_error()); ;
if(mysql_num_rows($result) ==0)  
{
    echo "error";
    header('Location: login.php');
}
else
{
$flag=1;
session_start();
$_SESSION['username']=$_POST['username'];
header('Location: users/index.php');

}
}
if($flag==0)
{
if(strcasecmp("Admin",$_POST['username'])==0)
{
if(strcasecmp("Admin",$_POST['password'])==0)
{
$flag=1;
session_start();
$_SESSION['admin']=$_POST['username'];
header('Location: Admin/index.php');



}
}
}
if($flag==0)
{
echo "invalid info";

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
            
            	<div class="header_03">Login Here</div>
                
                <form name="loginfrm" action="" method="post" onsubmit="return validate(this)">
			  <table width="510" border="0" align="center">
			 
				<tr>
				<td style="color:#FFFF00"> Username</td><td></td></tr>
				<tr>
				<td><input type="text" name="username" id="username" size="15" onkeypress="return numeric(event);"/></td>
				<td></td>
				</tr>
				<tr><td style="color:#FFFF00"> Password</td><td></td></tr>
				<tr>
				<td><input type="password" name="password" id="password" size="15" onkeypress="return string(event);" /></td>
				<td></td>
				</tr>
				 <tr>
				
				<td><input type="submit" name="submit" value="login" /></td>
				<td></td>
			  </tr>
			  </table>
		</form>
			
                
              <div class="button_01">
			 
			  </div>
			  
			  
            
            </div>
            
        </div>
        
        <div id="content_panel">
        	 <div id="column_w610">
			 
			
			 
			 
			 
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
