<?php
define("MTV_PATH",$_SERVER['DOCUMENT_ROOT']."/");
define("SITE_PATH",MTV_PATH.'unplugged/');
require_once(SITE_PATH."include/applicationTop.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Unplugged Season 3</title>
		<? include_once(SITE_PATH."include/header.php") ?>
	<script type="text/javascript" src="<?=MTV_SITE_JS?>swfobject.js"></script>
</head>
 
<body>
<div class="main"> 	
<? include_once(SITE_PATH."include/head.php") ?>
<div class="main">
	<div class="title">
		<h1><span>Unplugged</span> - LIVE</h1>
	</div>
	
	<div style="height:460px">
		<div class="FL" style="width:520px">
			<div class="PA10" style="background:#ffda30">
				<div style="background:#000000; height:435px"><img src="<?=MTV_SITE_IMAGES?>gigs.jpg" alt="" /></div>
			</div>
			<div class="PL10">
				<div style="background:#222222; height:10px">&nbsp;</div>
			</div>
		</div>
		<div class="FL" style="width:460px; background:url(<?=MTV_SITE_IMAGES?>arrow.gif) no-repeat">
			<div style="height:45px">
				<h1 style="padding:7px 0px 0px 20px">Catch your favourite artists in <br>Royal Stag Mega Music MTV Unplugged Gigs</h1>
			</div>
			<div class="PA10" style="background:#222222">
				<table style="background:#323232; color:#cccccc" width="100%" border="0" cellspacing="1" cellpadding="5">
					<tr bgcolor="#ffda30" valign="top" style="color:#333333">
						<td width="22%"><b>Date</b></td>
						<td width="28%"><b>Artist</b></td>
						<td><b>Venue</b></td>
					</tr>
						
					<tr bgcolor="#222222" valign="top">
						<td>6th Dec 2013</td>
						<td>Shafqat Amanat Ali </td>
						<td>Hyderabad - Secunderabad Club</td>
					</tr>
					<tr bgcolor="#222222" valign="top">
						<td>8th Dec 2013</td>
						<td>Shafqat Amanat Ali</td>
						<td>Kolkata - Saturday Club</td>
					</tr>
					<tr bgcolor="#222222" valign="top">
						<td>13th Dec 2013</td>
						<td>KK</td>
						<td>Mumbai - Khar Gymkhana</td>
					</tr>
					<tr bgcolor="#222222" valign="top">
						<td>30th Jan 2014 </td>
						<td>Papon  </td>
						<td>Guwahati - Brahmaputra Ashok</td>
					</tr>
					<tr bgcolor="#222222" valign="top">
						<td>20th Feb 2014   </td>
						<td>Benny Dayal   </td>
						<td>Pune-Residency Club</td>
					</tr>
					<tr bgcolor="#222222" valign="top">
						<td>22nd Feb 2014  </td>
						<td>Shafqat Amanat Ali</td>
						<td>Lucknow - Golf Course Club</td>
					</tr>
					<tr bgcolor="#222222" valign="top">
						<td>11th April 2014  </td>
						<td>Harshdeep Kaur & Jaggi</td>
						<td>Ludhiana - Lodhi club</td>
					</tr>
                    <tr bgcolor="#222222" valign="top">
                        <td>15th Nov 2014</td>
                        <td>Mikey McCleary</td>
                        <td>Panjim - Cohiba Bar & Restaurant</td>
                    </tr>
                    <tr bgcolor="#222222" valign="top">
                        <td>21st Nov 2014</td>
                        <td>Aditi Sharma</td>
                        <td>Patna - Patna Club </td>
                    </tr>
                    <tr bgcolor="#222222" valign="top">
                        <td>11th Dec 2014</td>
                        <td>Ankit Tiwari</td>
                        <td>Ranchi - Jharkhand Cricket Club </td>
                    </tr>
									
					
				</table>
			</div>
			<div style="margin:10px;"><!--<img src="images/fiat-logo.png" width="90" height="87" />--></div>
		</div>
		<div class="FL" style="width:20px">&nbsp;</div>
		
		<div class="CL"></div>
	</div>
	
	<div style="height:110px">&nbsp;</div>
	
	<!--<div class="PT20 PR60 PL60">
		<div class="FL" style="width:540px">
			<div class="PT5" style="background:#ffffff"><img src="temp/comments.gif" alt="" /></div>
		</div>
		<div class="FL" style="width:20px">&nbsp;</div>
		<div class="FL" style="width:320px">
			<div class="PB20">
				<div class="PA10" style="background:#ffffff"><img src="temp/300x250.jpg" alt="" /></div>
			</div>
		</div>
		<div class="CL"></div>
	</div> -->
</div>
<? include_once(SITE_PATH."include/footer.php") ?>

</body>
</html>