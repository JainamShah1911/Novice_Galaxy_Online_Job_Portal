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
			 <form name="changepwd_frm" action="" method="post">
			  <table>
			  <tr>
			  <td></td><td>CHANGE PASSWORD FORM</td><td></td></tr>
				<tr><td> Username</td>
				<td><input type="text" name="username" id="username" size="50" /></td>
				<td></td>
				</tr>
				<tr><td> Old Password</td>
				<td><input type="password" name="oldpwd" id="oldpwd" size="50"  /></td>
				<td></td>
				</tr>
			  <tr><td> New Password</td><td><input type="password" name="newpwd" id="newpwd" size="50"/></td>
			    <td></td>
				</tr>
				
				<tr><td>Confirm Password</td><td><input type="password" id="conpwd" name="conpwd" /></td>
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
        	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non rutrum arcu. Vestibulum ornare dolor eget leo placerat sed tincidunt dolor interdum.</p>
            
            <div class="margin_bottom_10"></div>
            
            
            <a href="http://validator.w3.org/check?uri=referer"><img style="border:0;width:88px;height:31px" src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Transitional" width="88" height="31" vspace="8" border="0" /></a>
    			<a href="http://jigsaw.w3.org/css-validator/check/referer"><img style="border:0;width:88px;height:31px"  src="http://jigsaw.w3.org/css-validator/images/vcss-blue" alt="Valid CSS!" vspace="8" border="0" /></a>
            
        </div>
        
        <div class="section_w184">
        	<div class="header_04">Services</div>
        	<ul class="footer_menu_list">
            	<li><a href="#">Lorem ipsum dolor</a></li>
                <li><a href="#">Cum sociis</a></li>
                <li><a href="#">Donec quam</a></li>
                <li><a href="#">Nulla consequat</a></li>
                <li><a href="#">In enim justo</a></li>               
            </ul>
        </div>
        
        <div class="section_w184">
	        <div class="header_04">About</div>
        	<ul class="footer_menu_list">
                <li><a href="#">Nullam quis</a></li>
                <li><a href="#">Sed consequat</a></li>
                <li><a href="#">Cras dapibus</a></li> 
            	<li><a href="#">Lorem ipsum dolor</a></li>
                <li><a href="#">Cum sociis</a></li>              
            </ul>
        </div>
        
        <div class="section_w184">
			<div class="header_04">Partners</div>        
        	<ul class="footer_menu_list">
            	<li><a href="http://www.templatemo.com/page/1" target="_parent">CSS Templates</a></li>
                <li><a href="http://www.flashmo.com/page/1" target="_parent">Flash Templates</a></li>
                <li><a href="http://www.templatemo.com/page/2" target="_parent">Website Templates</a></li>
                <li><a href="http://www.webdesignmo.com/blog" target="_parent">Web Design Blog</a></li>
                <li><a href="http://www.koflash.com" target="_blank">Flash Websites Gallery</a></li>               
            </ul>
        </div>
        
        <div class="margin_bottom_20"></div>
        
        <div class="section_w920">
        Copyright © 2048 <a href="#">Your Company Name</a> | <a href="http://www.iwebsitetemplate.com" target="_parent">Website Templates</a> by <a href="http://www.templatemo.com/page/1" target="_parent">Free CSS Templates</a>
        </div>
        <div class="cleaner"></div>
    </div> <!-- end of footer -->
</div> <!-- end of footer -->
<div align=center>This template  downloaded form <a href='http://all-free-download.com/free-website-templates/'>free website templates</a></div></body>

</body>
</html>
