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

$testid = $_POST['testid'];
$cmpid=$_POST['cmpid'];
$reqid=$_POST['reqid'];
$quedesc=$_POST['quedesc'];
$ans1=$_POST['ans1'];
$ans2=$_POST['ans2'];
$ans3=$_POST['ans3'];
$ans4=$_POST['ans4'];
$corr_ans=$_POST['corr_ans'];

$st = "insert into test_mst values (".$testid.",".$cmpid.",".$reqid.",'".$quedesc."','".$ans1."','".$ans2."','".$ans3."','".$ans4."','".$corr_ans."')";

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
			
			
			<form name="branch_mstfrm" action="" method="post">
			  <table>
			  <tr>
			  <td></td><td>BRANCH INFORMATION FORM</td><td></td></tr>
				<tr><td> Test id</td>
				<td><input type="text" name="testid" id="testid" size="5" onkeypress="return numeric(event);"/></td>
				<td></td>
				</tr>
				<tr>
				<?php 


				$st = "select * from  company";
 
				$Users = new Users();
				$result= $Users->readdata($st);
				?>
				
				<td> Company id</td>
				<td><select name="cmpid" id="cmpid">
				<option>---Select---</option>
				<?php
				while($row = mysql_fetch_assoc($result))
				{
					echo '<option value="'. $row['companyid'] .'" >' .$row['companyname']. '</option>';
				}

				?>
				
				</select></td>
				<td></td>
				</tr>
				<tr>
				<?php 


				$st = "select * from  company_requirement";
 
				$Users = new Users();
				$result= $Users->readdata($st);
				?>
				
				<td> Requirement id</td>
				<td><select name="reqid" id="reqid">
				<option>---Select---</option>
				<?php
				while($row = mysql_fetch_assoc($result))
				{
					echo '<option>' .$row['reqid']. '</option>';
				}

				?>
				
				</select></td>
				<td></td>
				</tr>
				<tr><td> Question description</td>
				<td><input type="text" name="quedesc" id="quedesc" size="100"/></td>
				<td></td>
				</tr>
				<tr><td> Answer 1</td>
				<td><input type="text" name="ans1" id="ans1" size="50"/></td>
				<td></td>
				</tr>
				<tr><td> Answer 2</td>
				<td><input type="text" name="ans2" id="ans2" size="50"/></td>
				<td></td>
				</tr>
				<tr><td> Answer 3</td>
				<td><input type="text" name="ans3" id="ans3" size="50"/></td>
				<td></td>
				</tr>
				<tr><td> Answer 4</td>
				<td><input type="text" name="ans4" id="ans4" size="50"/></td>
				<td></td>
				</tr>
				<tr><td> Correct Answer</td>
				<td><input type="text" name="corr_ans" id="corr_ans" size="50"/></td>
				<td></td>
				</tr>
				<tr>
				<td>Submit</td><td><input type="submit" name="submit" value="submit" /></td>
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
