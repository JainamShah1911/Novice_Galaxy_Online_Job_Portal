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
                if(objForm.branchid.value.length==0){
                    alert("Please enter branch id");
                    objForm.branchid.focus();
                    return false;
                }
               
                if(objForm.bname.value.length==0){
                    alert("Please Enter branch name");
                    objForm.bname.focus();
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

$reqid = $_POST['reqid'];
$reqdate=$_POST['reqdate'];
$fdate=$_POST['fromdate'];
$tdate=$_POST['todate'];
$brnid=$_POST['brnid'];
$desid=$_POST['desid'];
$post=$_POST['no_of_post'];
$quaid=$_POST['quaid'];
$skid=$_POST['skid'];

$st = "insert into exam_mst values (".$reqid.",".$reqdate.",".$fdate.",".$tdate.",".$brnid.",".$desid.",'".$post."',".$quaid.",".$skid.")";

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
			 
			 <form name="branch_mstfrm" action="" method="post" onsubmit="return validate(this)">


			  <table>
			  <tr>
			  <td></td><td>EXAM INFORMATION FORM</td><td></td></tr>
				<tr><td> Exam id</td>
				<td><input type="text" name="examid" id="examid" size="5" onkeypress="return numeric(event);"/></td>
				<td></td>
				</tr>
				<tr><td> Exam Date</td>
				<td><input type="date" name="edate" id="edate" /></td>
				<td></td>
				</tr>
				<tr>
				
				<?php 


				$st = "select * from  user_mst";
 
				$Users = new Users();
				$result= $Users->readdata($st);
				?>
				
				<td> User id</td>
				<td><select>
				<option>---Select---</option>
				<?php
				while($row = mysql_fetch_assoc($result))
				{
					echo '<option value="'. $row['userid'] .'" >' .$row['username']. '</option>';
				}

				?>
				
				
				
				
				</select></td>
				<td></td>
				</tr>
				<tr>
				<?php 


				$st = "select * from  test_mst";
 
				$Users = new Users();
				$result= $Users->readdata($st);
				?>
				<td> Test id</td>
				<td><select>
				<option>---Select---</option>
				
				<?php
				while($row = mysql_fetch_assoc($result))
				{
					echo '<option value="'. $row['testid'] .'" >' .$row['username']. '</option>';
				}

				?>
				
				</select></td>
				<td></td>
				</tr>
				<tr><td> Total questions</td>
				<td><input type="text" name="tolque" id="tolque" size="5" /></td>
				<td></td>
				</tr>
				<tr><td> Total Correct Question</td>
				<td><input type="text" name="corque" id="corque" size="5" /></td>
				<td></td>
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

	
</div> <!-- end of footer -->
<div align=center>Site design for : ITM  Designed  By : Jainam, Purva, Kartavi</div></body>

</body>
</html>