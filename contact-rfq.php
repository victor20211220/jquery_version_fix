<?php 
session_start();
//if(isset($_POST['keystring'])&&isset($_SESSION['captcha_keystring']) && $_SESSION['captcha_keystring'] != $_POST['keystring']) $retry = true;
if(isset($_POST['g-recaptcha-response'])) { 
$captcha=$_POST['g-recaptcha-response'];
if(!$captcha) $retry = true;
$response=json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LdzizYUAAAAAEN5_0IDgsfWiELj3X2Uqpxw0nFr&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']), true);
if($response['success'] == false) $retry = true;
}
?>
<!DOCTYPE HTML>
<html>
<head>

<meta charset="UTF-8">
<script src='https://www.google.com/recaptcha/api.js'></script>
<script language="JavaScript">
<!-- 
function openWindow(url,name)
{ popupWin = window.open(url,name, ' resizable,dependent,status, width=750,height=580,left=75,top=25')
}
// -->
</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name=viewport content="width=device-width, initial-scale=0.2">
<title>WALCO Contact Us two</title>

<link type=text/css rel=stylesheet href=css/style-sp-4.css media=all defer>

<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<script src="js/jquery.sequence-min.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>

<script src="js/slideshow/responsiveslides.min.js"></script>
<script src="js/interface.js"></script>  
<!--[if lt IE 9]>
<script type="text/javascript" src="js/css3-mediaqueries.js"></script>
<![endif]-->
<script type="text/javascript">
function CheckContactForm()
{with (document.contact) {

if (name.value=='Name:')
{
alert("Please enter your Name.");
name.focus();
return false;
}

if ( work_phone.value=='Work Phone:')
{
alert("Please enter your Phone Numbar.");
work_phone.focus();
return false;
}

if (email.value=='E-mail:')
{
alert("Please enter your Email.");
email.focus();
return false;
}
if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/.test(email.value)))
{
alert("Please enter a valid email address.");
email.focus();
return false;
}
return true;
}
}
</script>
<link type="text/css" rel="stylesheet" href="css/slicknav.min.css"/>
<script src="js/jquery.slicknav.min.js"></script><style type="text/css">
<!--
.style1 {
font-family: 'Calibri', 'sans-serif';
font-size: 11.0pt;
}
.auto-style1 {
font-size: xx-large;
}
-->
</style></head>
<body>
<div class="menu cf d-sm">
    <ul><li><a href="/">HOME</a></li>
    <li><a href=about.html>ABOUT</a></li>
    <li><a href=contact-us.html>CONTACT US</a></li>
    </ul></div>
<div class="general">
<div class="box-img-index cf"><img src="images/bg-black4-sp.webp" class="banner-img" usemap="#FIMG1"><map name="FIMG1">
<area shape="rect" coords="0,0,100,150" alt="seo services" href="/">
</map>
<div class="head cf">
<div class="made-usa-text">Proudly Made In USA</div>
<div class=wr-translate>
<div class=cf><div class=div-langyages>
</div><div id=google_translate_element>
<script type=text/javascript>function googleTranslateElementInit(){new google.translate.TranslateElement({pageLanguage:"en",includedLanguages:"de,en,es,fr,pt",layout:google.translate.TranslateElement.InlineLayout.SIMPLE},"google_translate_element")};</script>
<script type=text/javascript src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit" defer></script>
</script></div></div></div>
<div class="menu cf d-md">
<ul><li><a href="/">HOME</a></li>
<li><a href=about.html>ABOUT</a></li>
<li><a href=contact-us.html>CONTACT US</a></li>
</ul></div>
</div>
<ul id=menu>
<li><a id=ferst-dep href=laminators.html>INDUSTRIAL LAMINATORS</a>
<ul class=menu-hover>
<li><a href=metals-glass-plastic-wood-laminators.html>Overlay</a></li>
<li><a href=metals-glass-plastic-wood-laminators.html>Sheet Metal</a></li>
<li><a href=laminators-film-glass.html>Glass</a>
<ul><li><a href="laminators-film-igu-glass.html">Insulated Glass Units</a>
</li></ul></li><li><a href=laminator-squeeze-roll-applicator.html>Squeeze Roll/Traffic Signs</a></li>
<li><a href=extrusion-laminator.html>Extruded Barricade/Traffic</a></li>
<li><a href=applicator-inline.html>Inline</a></li>
<li><a href=coater-laminator.html>Coater/Laminator Combination</a></li>
<li><a href=coater-laminator.html>Wood Products</a></li>
</ul></li><li><a href=coaters.html>COATERS</a>
<ul class=menu-hover>
<li><a href=coaters.html>Overview</a></li>
<li><a href=standard-coaters.html>Direct Roll</a></li>
<li><a href=spandral-coaters.html>Reverse Roll</a></li>
<li><a href=spandral-coaters.html>Spandral/Glass</a></li>
<li><a href=uv-coaters.html>UV Coaters</a></li>
<li><a href=coater-laminator.html>Coater/Laminating System</a></li>
<li><a href=Walco-OMMA-glue-spreaders.html>Glue Spreaders</a></li>
</ul></li><li><a href=web-to-web.html>WEB TO WEB CONVERTERS</a></li>
<li><a href=applicators.html>APPLICATORS</a>
<ul class=menu-hover>
<li><a href=metals-glass-plastic-wood-laminators.html>Overlay</a></li>
<li><a href=metals-glass-plastic-wood-laminators.html>Sheet Metal</a></li>
<li><a href=laminators-film-glass.html>Glass</a>
<ul><li><a href=laminators-film-igu-glass.html>Insulated Glass Units</a>
</li></ul></li><li><a href=laminator-squeeze-roll-applicator.html>Squeeze Roll/Traffic Signs</a></li>
<li><a href=extrusion-laminator.html>Extruded Barricade/Traffic</a></li>
<li><a href=applicator-inline.html>Inline</a></li>
<li><a href=coater-laminator.html>Coater/Laminator Combination</a></li>
<li><a href=coater-laminator.html>Wood Products</a></li>
</ul></li><li><a href=industries-served.html>INDUSTRIES SERVED</a>
<ul class=menu-hover>
<li><a href=laminators-film-glass.html>Glass, Acrylic, Solar</a></li>
<li><a href=metals-glass-plastic-wood-laminators.html>Sheet Metal, Stainless, Aluminum, Brass, Steel </a></li>
<li><a href=laminator-squeeze-roll-applicator.html>Traffic Signs & Barricades</a></li>
<li><a href=web-to-web.html>Converting - Web to Web </a></li>
<li><a href=coaters.html>Coating</a></li>
<li><a href=coater-laminator.html>Wood Products</a></li>
</ul></li><li><a href=parts-service.html>PARTS &amp; SERVICE
</a></li><li><a href=training.html>TRAINING</a></li>
<li><a href=safety.html>SAFETY</a></li>
<li><a id=last-dep href=contact-rfq.php>SYSTEM RFQ</a></li>
</ul><div class="conteiner pos">
<div itemscope itemtype=https://schema.org/Product class="wrapperchick-index cf">
<div class=textick>
<div color=white><span class=auto-style1>Robust, Safe, Simple-to-Use and World Class</span></div>
<div><h2 itemprop=name id=textic-p-letle>Laminators, Coaters, Applicators and Web Converting Equipment</h2></div>
<div class="arrow-circle-container"><div class="arrow-circle"><div class="arrow-right"></div></div><a class="deportation-orange-index" href="https://www.youtube.com/watch?v=vPXUPYobfpU&amp;feature=youtu.be" target="_blank">VIDEO OVERVIEW</a></div>
</div><div class=box-slideshow>
<div class=preloader>
<div id=sequence-theme>
    
<div id=sequence>
<ul class="sequence-canvas rslides rslides1">
<li class=animate-in >
<div class="bg bg-1" style>
<img class=pic src=images/rotating1.webp width="270" height="230" alt="Automated Coated Equipment"/>
<img class=karo src=images/rotating2.webp width="270" height="230" alt="automated coating machines"/>
</div></li></ul></div></div></div></div></div></div></div>
<div class="center-gray">
<div class="conteiner">
<p class="title-gray">Laminating, Coating and/or Converting Design System by Walco</p>
<p class="inner-p">Walco builds all machines to exactly meet your requirements. The design process starts here. With some simple answers, Walco can quickly determine your needs and get you quoted. Walco uses 20+ different "standard" models and 230+ proven upgrade modules, plus decades of laminating, converting and coating history to meet your system requirements</p>   
<p class="inner-p">Please include as much detail as possible. This helps us configure the correct system for your application.<tr>
<td width="76%" align="left" height="40" valign="top"><b><font face="Verdana"><span class="style32">
<a href="javascript://" onClick="mywin=window.open('documents/RFQ-popup.pdf', 'winname', 'width=750,height=600,scrollbars=yes,menubar=no,location=no,status=no,resizable=yes,toolbars=no');" style="text-decoration: none">
Walco RFQ Explanations.</font></a>
</font></span></font></b></td>
<td width="24%" valign="top">&nbsp;</td>
</tr>
<p class="inner-p"><span>Please Note:</span> Walco offers special pricing if two or more units are ordered at the same time. If you, or your other locations require additional units, please be sure to indicate this.</p>
<p class="inner-p">Walco has been designing and building robust laminating, coating and converting systems in the USA, since 1949. Over 10,700+ machines have been shipped to over 65 countries. Ease of operation and a decade's old reputation for safety and quality go into every Walco system built. You will be tickled with Walco, Inc.!</p>     
</div>
</div>
<div class="center-white">
<div class="conteiner">
<p id="p-blue"><span>Please provide the following information:</span></p>
<form action="" method="post">                
<div class="my-form">
<div class="line_block_form cf">
<div class="block-imput-wrapper2">
<input class="input-item" type="text" name="first_name" id="first_name" value="<?php if(isset($retry)&&$retry==true) echo $_POST["first_name"]; else echo "First Name:"; ?>" onFocus="if (this.value=='First Name:') this.value='';" onBlur="if (this.value=='') this.value='First Name:';"/>
</div>
</div>
<div class="line_block_form cf">
<div class="block-imput-wrapper2">
<input class="input-item" type="text" name="last_name" id="last_name" value="<?php if(isset($retry)&&$retry==true) echo $_POST["last_name"]; else echo "Last Name:"; ?>" onFocus="if (this.value=='Last Name:') this.value='';" onBlur="if (this.value=='') this.value='Last Name:';"/>
</div>
</div>
<div class="line_block_form cf">
<div class="block-imput-wrapper2">
<input class="input-item" type="text" name="title" id="title" value="<?php if(isset($retry)&&$retry==true) echo $_POST["title"]; else echo "Title:"; ?>" onFocus="if (this.value=='Title:') this.value='';" onBlur="if (this.value=='') this.value='Title:';"/>
</div>
</div>
<div class="line_block_form cf">
<div class="block-imput-wrapper2">
<input class="input-item" type="text" name="organization" id="organization" value="<?php if(isset($retry)&&$retry==true) echo $_POST["organization"]; else echo "Organization:"; ?>" onFocus="if (this.value=='Organization:') this.value='';" onBlur="if (this.value=='') this.value='Organization:';"/>
</div>          
</div>
<div class="line_block_form cf">
<div class="block-imput-wrapper2">
<input class="input-item" type="text" name="work_phone" id="work_phone" value="<?php if(isset($retry)&&$retry==true) echo $_POST["work_phone"]; else echo "Work Phone:"; ?>" onFocus="if (this.value=='Work Phone:') this.value='';" onBlur="if (this.value=='') this.value='Work Phone:';"/>
</div>
</div>
<div class="line_block_form cf">
<div class="block-imput-wrapper2">
<input class="input-item" type="text" name="fax" id="fax" value="<?php if(isset($retry)&&$retry==true) echo $_POST["fax"]; else echo "FAX:"; ?>" onFocus="if (this.value=='FAX:') this.value='';" onBlur="if (this.value=='') this.value='FAX:';"/>
</div>          
</div>
<div class="line_block_form cf">
<div class="block-imput-wrapper2">
<input class="input-item" type="text" name="email" id="email" value="<?php if(isset($retry)&&$retry==true) echo $_POST["email"]; else echo "E-mail:"; ?>" onFocus="if (this.value=='E-mail:') this.value='';" onBlur="if (this.value=='') this.value='E-mail:';"/> </div> </div>
<p class="inner-p">
<div class="line_block_form cf">
<div class="block-imput-wrapper3">
<select class="input-item3" name="select1" id="select1">
<option selected>Please Select System Type</option>
<option value="Laminating/Squeeze Roll Application">Laminating/Squeeze Roll Application</option>
<option value="Coating">Coating</option>
<option value="Converting">Converting</option>
</select>
<?php if(isset($retry)&&$retry==true):?><script> $("#select1 option[value='<?php echo $_POST["select1"] ?>']").attr("selected", "selected"); </script> <?php endif; ?>
</div>          
</div>
</div> 
<p class="inner-p"><span>Briefly describe what you need to do and indicate if you require more than one system.</span> <tr>
<td width="76%" align="left" height="40" valign="top"><b><font face="Verdana"><span class="style32">
<a href="javascript://" onClick="mywin=window.open('RFQ-popup.pdf', 'winname', 'width=750,height=600,scrollbars=yes,menubar=no,location=no,status=no,resizable=yes,toolbars=no');" style="text-decoration: none">
Some Examples</font></a>
</font></span></font></b></td>
<td width="24%" valign="top">&nbsp;</td>
</tr>
<div class="wrapper-imput-textarea">
<input class="input-item-textarea" type="text" name="description" id="description" value="<?php if(isset($retry)&&$retry==true) echo $_POST["description"]; ?>"/>
</div>
<p class="inner-p"> </p>  
<div class="my-form">
<div class="line_block_form cf">
<div class="block-imput-wrapper2">
<input class="input-item" type="text" name="widths_capability_needed" id="widths_capability_needed" value="<?php if(isset($retry)&&$retry==true) echo $_POST["widths_capability_needed"]; else echo "Widths capability needed?"; ?>" onFocus="if (this.value=='Widths capability needed?') this.value='';" onBlur="if (this.value=='') this.value='Widths capability needed?';"/>
</div>
</div>
<p class="inner-p"></p>
<div class="line_block_form cf">
<div class="block-imput-wrapper2">
<input class="input-item" type="text" name="line_speed" id="line_speed" value="<?php if(isset($retry)&&$retry==true) echo $_POST["line_speed"]; else echo "Line speed:"; ?>" onFocus="if (this.value=='Line speed:') this.value='';" onBlur="if (this.value=='') this.value='Line speed:';"/>
</div>
</div>
<div class="line_block_form cf">
<div class="wrapper-input4-wr cf">
<div class="block-imput-wrapper4">
<select class="input-item4" name="select_Off_or_inline" id="select_Off_or_inline">
<option>Select Off-Line or In-line Application</option>
<option value="Off_Line_Application">Off-Line Application</option>
<option value="Inline_Application">Inline Application</option>
</select>
<?php if(isset($retry)&&$retry==true):?><script> $("#select_Off_or_inline option[value='<?php echo $_POST["select_Off_or_inline"] ?>']").attr("selected", "selected"); </script> <?php endif; ?>
</div>
</div>
</div>      
<div class="line_block_form cf">
<div class="block-inpurt-right dop-pad">  
<div class="block-imput-wrapper4">
<select class="input-item4" name="heat_or_no_heat" id="heat_or_no_heat">
<option>Heat or No Heat Needed</option>
<option value="Heat Needed">Heat Needed</option>
<option value="No Heat">No Heat</option>
</select>
<?php if(isset($retry)&&$retry==true):?><script> $("#heat_or_no_heat option[value='<?php echo $_POST["heat_or_no_heat"] ?>']").attr("selected", "selected"); </script> <?php endif; ?>
</div>
</div>
</div>
<div class="wr cf">
<div class="block-input-left">
<div class="block-imput-wrapper4">
<select class="input-item4" name="hazardous_electrical" id="hazardous_electrical">
<option>Hazardous electrical systems required?</option>
<option value="Yes">Yes</option>
<option value="No">No</option>
</select>
<?php if(isset($retry)&&$retry==true):?><script> $("#hazardous_electrical option[value='<?php echo $_POST["hazardous_electrical"] ?>']").attr("selected", "selected"); </script> <?php endif; ?>
</div>
<div class="wrapper-input4-wr cf"></div>
</div>
</div>
<div class="wr cf">
<div class="block-input-left">
<p class="inner-p">
<span>When would you like your new system operational?</span>     
<div class="block-imput-wrapper4">
<select class="input-item4" name="system_operational" id="system_operational">
<option>Please select time frame system is needed</option>
<option value="As_soon_as_Walco_can_deliver">As soon as Walco can deliver</option>
<option value="Months_3_6">3-6 months</option>
<option value="Months_6_9">6-9 months</option>
<option value="months_9_12">9-12 months</option>
<option value="one_year_or_longer">1 year or longer</option>
</select>
<?php if(isset($retry)&&$retry==true):?><script> $("#system_operational option[value='<?php echo $_POST["system_operational"] ?>']").attr("selected", "selected"); </script> <?php endif; ?>
</div> </div></div>
<div class="line_block_form cf">
<div class="block-imput-wrapper2">
<select class="input-item4" name="automated_inline_c" id="automated_inline_c">
<option>Automated/ Inline needed? </option>
<option value="Your_PLC_HMI">Automated/ Inline needed - Your PLC/HMI</option>
<option value="Walco_PLC_HMI">Automated/ Inline needed - Walco PLC/HMI</option>
<option value="No">No Automated/ Inline </option>
</select>
<?php if(isset($retry)&&$retry==true):?><script> $("#automated_inline_c option[value='<?php echo $_POST["automated_inline_c"] ?>']").attr("selected", "selected"); </script> <?php endif; ?>
</div>
<p class="rfq-description"> If <strong>your PLC / HMI will be controlling</strong>,
Walco provides the needed written operating sequence, proximity sensor(s), photo eye(s), automatic tension controls, your selected variable speed control and motor, all terminating in a provided terminal junction control box (NEMA4 rated).  
You provide the needed PLC, hard & software to control all aspects of the laminator. <br>
If <strong>Walco will be providing the PLC / HMI</strong> to control,	Walco provides ALL needed PLC / HMI / Programming / Hard and software, fully installed and tested.
</p>
</div>
<div class="line_block_form cf">
<div class="block-imput-wrapper2">
<select class="input-item4" name="automatic_nip_gap_control_c" id="automatic_nip_gap_control_c">
<option> Is Automatic nip control needed? </option>
<option value="Yes">Automatic nip control needed</option>
<option value="No">No Automatic nip control needed </option>
</select>
<?php if(isset($retry)&&$retry==true):?><script> $("#automatic_nip_gap_control_c option[value='<?php echo $_POST["automatic_nip_gap_control_c"] ?>']").attr("selected", "selected"); </script> <?php endif; ?>
</div>
<p class="rfq-description">via servo motor – PLC operation required.</p>
</div>
<div class="line_block_form cf">
<div class="block-imput-wrapper2">
<select class="input-item4" name="automatic_drive_control_c" id="automatic_drive_control_c">
<option> Is Automatic Drive Control needed? </option>
<option value="Manual">Yes - Manual Selector</option>
<option value="Auto">Yes - Auto Selector </option>
<option value="No">No Automatic Drive Control needed</option>
</select>
<?php if(isset($retry)&&$retry==true):?><script> $("#automatic_drive_control_c option[value='<?php echo $_POST["automatic_drive_control_c"] ?>']").attr("selected", "selected"); </script> <?php endif; ?>
</div>
<p class="rfq-description">Manual / Auto selector switch gives foot pedal or sensor control of the main drive motor.  Sensor “sees” incoming substrate and activates drive motor.	Client’s adjustable timer stops the drive motor after lamination.
</p>
</div>
<div class="line_block_form cf">
<div class="block-imput-wrapper2">
<select class="input-item4" name="automatic_pass_through_c" id="automatic_pass_through_c">
<option> Is Automatic pass through needed? </option>
<option value="Yes">Yes</option>
<option value="No">No</option>
</select>
<?php if(isset($retry)&&$retry==true):?><script> $("#automatic_pass_through_c option[value='<?php echo $_POST["automatic_pass_through_c"] ?>']").attr("selected", "selected"); </script> <?php endif; ?>
</div>
<p class="rfq-description">allowing lights to pass through without being laminated</p>
</div>
<div class="line_block_form cf">
<div class="block-imput-wrapper2">
<select class="input-item4" name="casters_c" id="casters_c">
<option> Are casters needed? </option>
<option value="Yes">Yes</option>
<option value="No">No</option>
</select>
<?php if(isset($retry)&&$retry==true):?><script> $("#casters_c option[value='<?php echo $_POST["casters_c"] ?>']").attr("selected", "selected"); </script> <?php endif; ?>
</div>
<p class="rfq-description">Heavy duty, 6.0” OD x 2.0” wide, red urethane wheeled casters allow for easy movement across all industrial surfaces.  Two (2) swivel, two (2) fixed, with locks.</p>
</div>
<div class="line_block_form cf">
<div class="block-imput-wrapper2">
<select class="input-item4" name="conveyors_c" id="conveyors_c">
<option> Choose the type of Conveyors </option>
<option value="Gravity">Gravity (no power) </option>
<option value="Powered_Wheeled">Powered - Wheeled</option>
<option value="Powered_Roller">Powered - Roller</option>
<option value="Powered_Belted">Powered - Belted</option>
<option value="Edge_Fixed_Guides">Edge guides - Fixed edge guides </option>
<option value="Edge_Multiple">Edge guides - Multiple fixed pinned location edge guide </option>
<option value="Edge_Ajustable">Edge guides - Adjustable across the full width roller type edge guide </option>
<option value="Edge_This_Substrate">Edge guides - Thin substrate full width adjustable edge guide for substrates under 3/16 inch. </option>
</select>
<?php if(isset($retry)&&$retry==true):?><script> $("#conveyors_c option[value='<?php echo $_POST["conveyors_c"] ?>']").attr("selected", "selected"); </script> <?php endif; ?>
</div>
<p class="rfq-description"><strong>Heavy duty – Powered:</strong>  to match width, lengths up to 15 feet. (Flat substrates only)
<br>a.	Wheeled – non-marring grey Buna wheels
<br>b.	Roller – galvanized, rubber, steel or EPDM rolls
<br>c.	Belted – full-width or adjustable ½ - 2.0” wide individual belts
<br><strong>No power - </strong> Gravity (no power) style, UHMW non-marring rollers, set at 12.0” centerlines (optional 6.0”).
<br><strong>Edge guides - </strong> Fixed edge guide <br>  Multiple fixed pinned location edge guide <br>
Adjustable across the full width roller type edge guide <br>
Thin substrate full width adjustable edge guide for substrates under 3/16 inch.
</p>
</div>
<div class="line_block_form cf">
<div class="block-imput-wrapper2">
<select class="input-item4" name="corona_treatment_module_c" id="corona_treatment_module_c">
<option> Corona Treatment module needed?  </option>
<option value="Yes">Yes</option>
<option value="No">No</option>
</select>
<?php if(isset($retry)&&$retry==true):?><script> $("#corona_treatment_module_c option[value='<?php echo $_POST["corona_treatment_module_c"] ?>']").attr("selected", "selected"); </script> <?php endif; ?>
</div>
<p class="rfq-description"> molecularly “scuffs up” your flat substrate or web for better film or coating adhesion.  (Plastic, nylon, acrylics only) </p>
</div>
<div class="line_block_form cf">
<div class="block-imput-wrapper2">
<select class="input-item4" name="heater_bar_c" id="heater_bar_c">
<option> Heater Bar ? </option>
<option value="Yes">Yes</option>
<option value="No">No</option>
</select>
<?php if(isset($retry)&&$retry==true):?><script> $("#heater_bar_c option[value='<?php echo $_POST["heater_bar_c"] ?>']").attr("selected", "selected"); </script> <?php endif; ?>
</div>
<p class="rfq-description"> including needed silicone covered top roll, heater on/off switch and temperature control. </p>
</div>
<div class="line_block_form cf">
<div class="block-imput-wrapper2">
<select class="input-item4" name="heaters_c" id="heaters_c">
<option> Heaters ? </option>
<option value="Yes_Internal">Yes - Internal to roll</option>
<option value="Yes_Enternal">Yes - External to roll</option>
<option value="No">No</option>
</select>
<?php if(isset($retry)&&$retry==true):?><script> $("#heaters_c option[value='<?php echo $_POST["heaters_c"] ?>']").attr("selected", "selected"); </script> <?php endif; ?>
</div>
<p class="rfq-description"> External to roll or internal roll </p>
</div>
<div class="line_block_form cf">
<div class="block-imput-wrapper2">
<select class="input-item4" name="infeed_stainless_steel_table_c" id="infeed_stainless_steel_table_c">
<option> Infeed Stainless Steel Table ? </option>
<option value="Yes">Yes</option>
<option value="No">No</option>
</select>
<?php if(isset($retry)&&$retry==true):?><script> $("#infeed_stainless_steel_table_c option[value='<?php echo $_POST["infeed_stainless_steel_table_c"] ?>']").attr("selected", "selected"); </script> <?php endif; ?>
</div>
<p class="rfq-description"> with micro adjustable edge guide (24.0” depth x laminator width. (Flat substrates only) </p>
</div>
<div class="line_block_form cf">
<div class="block-imput-wrapper2">
<select class="input-item4" name="large_nip_opening_c" id="large_nip_opening_c">
<option> Large nip opening ? </option>
<option value="Yes">Yes</option>
<option value="No">No</option>
</select>
<?php if(isset($retry)&&$retry==true):?><script> $("#large_nip_opening_c option[value='<?php echo $_POST["large_nip_opening_c"] ?>']").attr("selected", "selected"); </script> <?php endif; ?>
</div>
<p class="rfq-description"> and lamination capability. (standard is 2.0 inches) </p>
</div>
<div class="line_block_form cf">
<div class="block-imput-wrapper2">
<select class="input-item4" name="load_cells_c" id="load_cells_c">
<option> Load Cells ? </option>
<option value="Yes">Yes</option>
<option value="No">No</option>
</select>
<?php if(isset($retry)&&$retry==true):?><script> $("#load_cells_c option[value='<?php echo $_POST["load_cells_c"] ?>']").attr("selected", "selected"); </script> <?php endif; ?>
</div>
<p class="rfq-description"> Digital nip pressure displayed on Operator control panel. </p>
</div>
<div class="line_block_form cf">
<div class="block-imput-wrapper2">
<select class="input-item4" name="ovens_c" id="ovens_c">
<option> Ovens ? </option>
<option value="Yes_UV">Yes - UV curing</option>
<option value="Yes_IR">Yes - IR</option>
<option value="Yes_Hot_Air">Yes - Hot Air</option>
<option value="No">No</option>
</select>
<?php if(isset($retry)&&$retry==true):?><script> $("#ovens_c option[value='<?php echo $_POST["ovens_c"] ?>']").attr("selected", "selected"); </script> <?php endif; ?>
</div>
<p class="rfq-description"> UV curing / IR / Hot Air </p>
</div>
<div class="line_block_form cf">
<div class="block-imput-wrapper2">
<select class="input-item4" name="panel_cleaner_and_air_c" id="panel_cleaner_and_air_c">
<option> Panel Cleaner and Air Blow Off - powered ? </option>
<option value="Yes">Yes</option>
<option value="No">No</option>
</select>
<?php if(isset($retry)&&$retry==true):?><script> $("#panel_cleaner_and_air_c option[value='<?php echo $_POST["panel_cleaner_and_air_c"] ?>']").attr("selected", "selected"); </script> <?php endif; ?>
</div>
<p class="rfq-description"> Reverse direction rotary brushes clean each incoming substrate of dust and debris. The debris is removed by a vacuum removal system into a Walco provided container. </p>
</div>
<div class="line_block_form cf">
<div class="block-imput-wrapper2">
<select class="input-item4" name="roll_out_cart_c" id="roll_out_cart_c">
<option> Roll Out Cart ? </option>
<option value="Yes">Yes</option>
<option value="No">No</option>
</select>
<?php if(isset($retry)&&$retry==true):?><script> $("#roll_out_cart_c option[value='<?php echo $_POST["roll_out_cart_c"] ?>']").attr("selected", "selected"); </script> <?php endif; ?>
</div>
<p class="rfq-description"> (Inline applications) – allows the entire laminator assembly to be removed from the line by simply releasing position pins and rolling it along the provided hard mounted 12 foot tracks. </p>
</div>
<div class="line_block_form cf">
<div class="block-imput-wrapper2">
<select class="input-item4" name="safety_air_cylinders_c" id="safety_air_cylinders_c">
<option> Safety Air Cylinders ? </option>
<option value="Yes">Yes</option>
<option value="No">No</option>
</select>
<?php if(isset($retry)&&$retry==true):?><script> $("#safety_air_cylinders_c option[value='<?php echo $_POST["safety_air_cylinders_c"] ?>']").attr("selected", "selected"); </script> <?php endif; ?>
</div>
<p class="rfq-description"> Automatically opens the nip gap when any E-Stop is activated. <br> Includes panel mounted Raise, Lower push buttons, air pressure regulator and gauge. This gives down pressure adjustability up to 15 pounds per linear inch (ppli) without deflection. <br>
If more down pressure is necessary, Walco can supply lager OD nip rollers to hit a maximum of 50 ppli. </p>
</div>
<div class="line_block_form cf">
<div class="block-imput-wrapper2">
<select class="input-item4" name="safety_cage_c" id="safety_cage_c">
<option> Safety Cage ? </option>
<option value="Yes">Yes</option>
<option value="No">No</option>
</select>
<?php if(isset($retry)&&$retry==true):?><script> $("#safety_cage_c option[value='<?php echo $_POST["safety_cage_c"] ?>']").attr("selected", "selected"); </script> <?php endif; ?>
</div>
<p class="rfq-description"> full perimeter fencing with safety interlocked access doors. </p>
</div>
<div class="line_block_form cf">
<div class="block-imput-wrapper2">
<select class="input-item4" name="safety_light_curtains_c" id="safety_light_curtains_c">
<option> Safety Light Curtains ? </option>
<option value="Yes_Surrounding_Full_Perimeter">Yes - Surrounding  full perimeter </option>
<option value="Yes_Surrounding_Running">Yes - Surrounding  running lengths</option>
<option value="No">No</option>
</select>
<?php if(isset($retry)&&$retry==true):?><script> $("#safety_light_curtains_c option[value='<?php echo $_POST["safety_light_curtains_c"] ?>']").attr("selected", "selected"); </script> <?php endif; ?>
</div>
<p class="rfq-description"> Surrounding either / or full perimeter or running lengths </p>
</div>
<div class="line_block_form cf">
<div class="block-imput-wrapper2">
<select class="input-item4" name="scissor_lift_c" id="scissor_lift_c">
<option> Scissor Lift ? </option>
<option value="Yes">Yes</option>
<option value="No">No</option>
</select>
<?php if(isset($retry)&&$retry==true):?><script> $("#scissor_lift_c option[value='<?php echo $_POST["scissor_lift_c"] ?>']").attr("selected", "selected"); </script> <?php endif; ?>  
</div>
<p class="rfq-description"> Entry and / or exit end – allowing your team to easily unload and/or stack the incoming/outgoing substrates onto a pallet, lowering and lifting to the table height as needed </p>
</div>
<div class="line_block_form cf">
<div class="block-imput-wrapper2">
<select class="input-item4" name="side_loading_c" id="side_loading_c">
<option> Side Loading? </option>
<option value="Yes">Yes</option>
<option value="No">No</option>
</select>
<?php if(isset($retry)&&$retry==true):?><script> $("#side_loading_c option[value='<?php echo $_POST["side_loading_c"] ?>']").attr("selected", "selected"); </script> <?php endif; ?>
</div>
<p class="rfq-description"> Allows easy side loading of any substrate onto the gravity style conveyors. 7 foot long x 5 rollers </p>
</div>
<div class="line_block_form cf">
<div class="block-imput-wrapper2">
<select class="input-item4" name="single_point_nip_gap_c" id="single_point_nip_gap_c">
<option> Single Point nip gap / metering adjustment ? </option>
<option value="Yes">Yes</option>
<option value="No">No</option>
</select>
<?php if(isset($retry)&&$retry==true):?><script> $("#single_point_nip_gap_c option[value='<?php echo $_POST["single_point_nip_gap_c"] ?>']").attr("selected", "selected"); </script> <?php endif; ?>
</div>
<p class="rfq-description"> Operator can adjust the nip gap via one hand wheel, with digital mechanical position gauge. </p>
</div>

<div class="line_block_form cf">
<div class="block-imput-wrapper2">
<select class="input-item4" name="single_mobile_platform_c" id="single_mobile_platform_c">
<option> Single mobile platform ? </option>
<option value="Yes">Yes</option>
<option value="No">No</option>
</select>
</div>
<p class="rfq-description"> Includes – both conveyors and system mounted to a 3 x 3 x 1/8” wall steel tubing platform with six (6) HD lockable swivel casters. </p>
</div>

<div class="line_block_form cf">
<div class="block-imput-wrapper2">
<select class="input-item4" name="special_electric_c" id="special_electric_c">
<option> Special or Overseas electrical ? </option>
<option value="Yes">Yes</option>
<option value="No">No</option>
</select>
<?php if(isset($retry)&&$retry==true):?><script> $("#special_electric_c option[value='<?php echo $_POST["special_electric_c"] ?>']").attr("selected", "selected"); </script> <?php endif; ?>
</div>
</div>
<div class="line_block_form cf">
<div class="block-imput-wrapper2">
<select class="input-item4" name="startup_assistance_c" id="startup_assistance_c">
<option> Start-Up Assistance ? </option>
<option value="Yes">Yes</option>
<option value="No">No</option>
</select>
<?php if(isset($retry)&&$retry==true):?><script> $("#startup_assistance_c option[value='<?php echo $_POST["startup_assistance_c"] ?>']").attr("selected", "selected"); </script> <?php endif; ?>
</div>
<p class="rfq-description"> Walco standard labor rate for assistance </p>
</div>
<div class="line_block_form cf">
<div class="block-imput-wrapper2">
<select class="input-item4" name="sticky_roll_cleaner_module_c" id="sticky_roll_cleaner_module_c">
<option> Sticky Roll / Cleaner module  ? </option>
<option value="Yes">Yes</option>
<option value="No">No</option>
</select>
<?php if(isset($retry)&&$retry==true):?><script> $("#sticky_roll_cleaner_module_c option[value='<?php echo $_POST["sticky_roll_cleaner_module_c"] ?>']").attr("selected", "selected"); </script> <?php endif; ?>
</div>
<p class="rfq-description"> cleans your flat substrate or flexible web immediately prior to lamination via sticky roll technology – dramatically reducing post lamination dust and debris under the laminate or film.</p>
</div>
<div class="line_block_form cf">
<div class="block-imput-wrapper2">
<select class="input-item4" name="variable_speed_control_c" id="variable_speed_control_c">
<option> Variable Speed Control  ? </option>
<option value="Yes">Yes</option>
<option value="No">No</option>
</select>
<?php if(isset($retry)&&$retry==true):?><script> $("#variable_speed_control_c option[value='<?php echo $_POST["variable_speed_control_c"] ?>']").attr("selected", "selected"); </script> <?php endif; ?>
</div>
<p class="rfq-description"> With AC or DC motor and electronic VFD, 4 - 45 fpm speeds, variable and Includes panel mounted variable speed control pot, On/Off, Forward / Reverse. </p>
</div>
<div class="line_block_form cf">
<div class="block-imput-wrapper2">
<select class="input-item4" name="vertical_light_tree_c" id="vertical_light_tree_c">
<option> Vertical Light Tree ? </option>
<option value="Yes">Yes</option>
<option value="No">No</option>
</select>
<?php if(isset($retry)&&$retry==true):?><script> $("#vertical_light_tree_c option[value='<?php echo $_POST["vertical_light_tree_c"] ?>']").attr("selected", "selected"); </script> <?php endif; ?>
</div>
<p class="rfq-description"> 	shows from a distance that power is on (green), the applicator is in operation (yellow) or an alarm condition has been activated (red).  </p>
</div>
<br>
<h3>Laminating / Converting / Application applications only</h3>
<hr>
<br>
<div class="line_block_form cf">
<div class="block-imput-wrapper2">
<select class="input-item4" name="co_additional_unwind_station_c" id="co_additional_unwind_station_c">
<option> Additional Unwind Stations ? </option>
<option value="Yes">Yes</option>
<option value="No">No</option>
</select>
<?php if(isset($retry)&&$retry==true):?><script> $("#co_additional_unwind_station_c option[value='<?php echo $_POST["co_additional_unwind_station_c"] ?>']").attr("selected", "selected"); </script> <?php endif; ?>
</div>
<p class="rfq-description"> <strong> Additional Unwind Stations, </strong> including unwind shaft, cone, plug and split pillow block bearings. </p>
</div>

<div class="line_block_form cf">
<div class="block-imput-wrapper2">
<select class="input-item4" name="co_airbrakes_c" id="co_airbrakes_c">
<option> Airbrakes ? </option>
<option value="Yes">Yes</option>
<option value="No">No</option>
</select>
<?php if(isset($retry)&&$retry==true):?><script> $("#co_airbrakes_c option[value='<?php echo $_POST["co_airbrakes_c"] ?>']").attr("selected", "selected"); </script> <?php endif; ?>
</div>
<p class="rfq-description"> <strong> Airbrakes - </strong>	for precise unwind tension control. Includes panel mounted air pressure regulator, on/off switch and placard. </p>
</div>

<div class="line_block_form cf">
<div class="block-imput-wrapper2">
<select class="input-item4" name="co_air_shafts_c" id="co_air_shafts_c">
<option> Air Shafts  ? </option>
<option value="Yes">Yes</option>
<option value="No">No</option>
</select>
<?php if(isset($retry)&&$retry==true):?><script> $("#co_air_shafts_c option[value='<?php echo $_POST["co_air_shafts_c"] ?>']").attr("selected", "selected"); </script> <?php endif; ?>
</div>
<p class="rfq-description"> <strong> Air Shafts </strong> for quick film replacement  </p>
</div>

<div class="line_block_form cf">
<div class="block-imput-wrapper2">
<select class="input-item4" name="co_antistatic_bar_c" id="co_antistatic_bar_c">
<option> Anti-Static Bar ? </option>
<option value="Yes">Yes</option>
<option value="No">No</option>
</select>
<?php if(isset($retry)&&$retry==true):?><script> $("#co_antistatic_bar_c option[value='<?php echo $_POST["co_antistatic_bar_c"] ?>']").attr("selected", "selected"); </script> <?php endif; ?>
</div>
<p class="rfq-description"> <strong> Anti-Static Bar </strong>	minimizes static charge when release liner is removed from the film. (paper laminates need static bars). Includes power “on” lamp, On/Off switch and flashing monitor lamp. </p>
</div>

<div class="line_block_form cf">
<div class="block-imput-wrapper2">
<select class="input-item4" name="co_automatic_unwind_rewind_t_c" id="co_automatic_unwind_rewind_t_c">
<option> Automatic Unwind/rewind Tension controls ? </option>
<option value="Yes">Yes</option>
<option value="No">No</option>
</select>
<?php if(isset($retry)&&$retry==true):?><script> $("#co_automatic_unwind_rewind_t_c option[value='<?php echo $_POST["co_automatic_unwind_rewind_t_c"] ?>']").attr("selected", "selected"); </script> <?php endif; ?>
</div>
<p class="rfq-description"> <strong>	Automatic Unwind/rewind Tension controls and reporting – </strong>
closed loop tension controls, with load cell(s), automatically
adjusting the needed PLI (pounds per linear inch) within your
Operator set parameters.  </p>
</div>

<div class="line_block_form cf">
<div class="block-imput-wrapper2">
<select class="input-item4" name="co_automatic_separation_syst_c" id="co_automatic_separation_syst_c">
<option> Automatic Separation Systems ? </option>
<option value="Hot_Wire">Yes - Hot Wire</option>
<option value="Dual_Razor_Knife">Yes - Dual Razor Knife</option>
<option value="Perforation">Yes - Perforation</option>
<option value="Guillotine">Yes - Guillotine</option>
<option value="No">No</option>
</select>
<?php if(isset($retry)&&$retry==true):?><script> $("#co_automatic_separation_syst_c option[value='<?php echo $_POST["co_automatic_separation_syst_c"] ?>']").attr("selected", "selected"); </script> <?php endif; ?>
</div>
<p class="rfq-description"> 
<strong> Automatic Separation Systems – Cut on the fly or stop to cut. Flap or no flap. </strong> Cuts between the leading and trailing edge of each board, post-lamination cycle. Additional details on
operation and costs can be sent over separately. Types include: <br>
HOT Wire - stop-to- cut or cut-on- the-fly <br>
Dual Razor Knife –stop-to- cut or cut-on- the-fly, no flap (Plastic films only) <br>
Perforation <br>
Guillotine sheeting (on-the- fly)
</p>
</div>

<div class="line_block_form cf">
<div class="block-imput-wrapper2">
<select class="input-item4" name="co_automatic_edge_trimming_s_c" id="co_automatic_edge_trimming_s_c">
<option> Automatic Edge trimming station ? </option>
<option value="Yes">Yes</option>
<option value="No">No</option>
</select>
<?php if(isset($retry)&&$retry==true):?><script> $("#co_automatic_edge_trimming_s_c option[value='<?php echo $_POST["co_automatic_edge_trimming_s_c"] ?>']").attr("selected", "selected"); </script> <?php endif; ?>
</div>
<p class="rfq-description"> <strong> Automatic Edge trimming station - </strong>	rolling air controlled knives pushing against a powered mandrel with vacuum trim removal/collection system. </p>
</div>

<div class="line_block_form cf">
<div class="block-imput-wrapper2">
<select class="input-item4" name="co_automatic_edge_guide_syst_c" id="co_automatic_edge_guide_syst_c">
<option> Automatic Edge Guide system ? </option>
<option value="Yes">Yes</option>
<option value="No">No</option>
</select>
<?php if(isset($retry)&&$retry==true):?><script> $("#co_automatic_edge_guide_syst_c option[value='<?php echo $_POST["co_automatic_edge_guide_syst_c"] ?>']").attr("selected", "selected"); </script> <?php endif; ?>
</div>
<p class="rfq-description"> <strong> Automatic Edge Guide system - </strong>	 servo controlled, air actuated unwind station carts are moved by a closed loop edge positioning feedback sensor, automatically aligning each web. </p>
</div>

<div class="line_block_form cf">
<div class="block-imput-wrapper2">
<select class="input-item4" name="co_bottom_unwind_station_c" id="co_bottom_unwind_station_c">
<option> Bottom Unwind Station ? </option>
<option value="Yes">Yes</option>
<option value="No">No</option>
</select>
<?php if(isset($retry)&&$retry==true):?><script> $("#co_bottom_unwind_station_c option[value='<?php echo $_POST["co_bottom_unwind_station_c"] ?>']").attr("selected", "selected"); </script> <?php endif; ?>
</div>
<p class="rfq-description"> <strong> Bottom Unwind Station - </strong> for simultaneous top and bottom laminating needs and Includes 40” stubby conveyor if 2+ bottom unwind stations are ordered. </p>
</div>

<div class="line_block_form cf">
<div class="block-imput-wrapper2">
<select class="input-item4" name="bottom_unwind_station_rollin_c" id="bottom_unwind_station_rollin_c">
<option> Bottom unwind station rolling cart ? </option>
<option value="Yes">Yes</option>
<option value="No">No</option>
</select>
<?php if(isset($retry)&&$retry==true):?><script> $("#bottom_unwind_station_rollin_c option[value='<?php echo $_POST["bottom_unwind_station_rollin_c"] ?>']").attr("selected", "selected"); </script> <?php endif; ?>
</div>
<p class="rfq-description"> <strong> Bottom unwind station rolling cart </strong>	to ease bottom laminate roll change outs. </p>
</div>

<div class="line_block_form cf">
<div class="block-imput-wrapper2">
<select class="input-item4" name="co_bottom_trolley_c" id="co_bottom_trolley_c">
<option> Bottom Trolley ? </option>
<option value="Yes">Yes</option>
<option value="No">No</option>
</select>
<?php if(isset($retry)&&$retry==true):?><script> $("#co_bottom_trolley_c option[value='<?php echo $_POST["co_bottom_trolley_c"] ?>']").attr("selected", "selected"); </script> <?php endif; ?>
</div>
<p class="rfq-description"> <strong>  Bottom Trolley – </strong> 	To easily change the bottom unwind roll. Just lay the shaft end on top of the trolley and pull it out from under the Walco. Simple! </p>
</div>

<div class="line_block_form cf">
<div class="block-imput-wrapper2">
<select class="input-item4" name="co_bowed_rolls_c" id="co_bowed_rolls_c">
<option> Bowed Rolls ? </option>
<option value="Yes">Yes</option>
<option value="No">No</option>
</select>
<?php if(isset($retry)&&$retry==true):?><script> $("#co_bowed_rolls_c option[value='<?php echo $_POST["co_bowed_rolls_c"] ?>']").attr("selected", "selected"); </script> <?php endif; ?>
</div>
<p class="rfq-description"> <strong> Bowed Rolls - </strong> to help eliminate any possibility of wrinkles (paper laminates need bowed rolls). </p>
</div>

<div class="line_block_form cf">
<div class="block-imput-wrapper2">
<select class="input-item4" name="co_cantilevered_unwind_stati_c" id="co_cantilevered_unwind_stati_c">
<option> Cantilevered Unwind Stations ? </option>
<option value="Yes">Yes</option>
<option value="No">No</option>
</select>
<?php if(isset($retry)&&$retry==true):?><script> $("#co_cantilevered_unwind_stati_c option[value='<?php echo $_POST["co_cantilevered_unwind_stati_c"] ?>']").attr("selected", "selected"); </script> <?php endif; ?>
</div>
<p class="rfq-description"> <strong> Cantilevered Unwind Stations - </strong> eases 
lamination roll replacement </p>
</div>

<div class="line_block_form cf">
<div class="block-imput-wrapper2">
<select class="input-item4" name="co_edge_wrapping_c" id="co_edge_wrapping_c">
<option> Anti-Static Bar ? </option>
<option value="Yes">Yes</option>
<option value="No">No</option>
</select>
<?php if(isset($retry)&&$retry==true):?><script> $("#co_edge_wrapping_c option[value='<?php echo $_POST["co_edge_wrapping_c"] ?>']").attr("selected", "selected"); </script> <?php endif; ?>
</div>
<p class="rfq-description"> <strong> Edge Wrapping - </strong>	wraps your web 05 - .75” along each running edge automatically </p>
</div>

<div class="line_block_form cf">
<div class="block-imput-wrapper2">
<select class="input-item4" name="co_endoffilm_alert_c" id="co_endoffilm_alert_c">
<option> End-of-Film Alert ? </option>
<option value="Yes">Yes</option>
<option value="No">No</option>
</select>
<?php if(isset($retry)&&$retry==true):?><script> $("#co_endoffilm_alert_c option[value='<?php echo $_POST["co_endoffilm_alert_c"] ?>']").attr("selected", "selected"); </script> <?php endif; ?>
</div>
<p class="rfq-description"> <strong> End-of-Film Alert - </strong> overhead audible and illuminated low and empty film alerts. </p>
</div>

<div class="line_block_form cf">
<div class="block-imput-wrapper2">
<select class="input-item4" name="co_high_pressure_lamination_c" id="co_high_pressure_lamination_c">
<option>  High Pressure Lamination Rolls ? </option>
<option value="Yes">Yes</option>
<option value="No">No</option>
</select>
<?php if(isset($retry)&&$retry==true):?><script> $("#co_high_pressure_lamination_c option[value='<?php echo $_POST["co_high_pressure_lamination_c"] ?>']").attr("selected", "selected"); </script> <?php endif; ?>
</div>
<p class="rfq-description"> <strong> High Pressure Lamination Rolls – </strong>	High Pressure lamination / nip rolls are substituted for standard rolls, used for permanent
lamination films requiring 15 – 50 ppli pressure for application. </p>
</div>

<div class="line_block_form cf">
<div class="block-imput-wrapper2">
<select class="input-item4" name="co_larger_than_standard_od_c" id="co_larger_than_standard_od_c">
<option> Larger than standard 14.0” OD unwind and rewind stations ? </option>
<option value="Yes">Yes</option>
<option value="No">No</option>
</select>
<?php if(isset($retry)&&$retry==true):?><script> $("#co_larger_than_standard_od_c option[value='<?php echo $_POST["co_larger_than_standard_od_c"] ?>']").attr("selected", "selected"); </script> <?php endif; ?>
</div>
<p class="rfq-description"> <strong> Larger than standard 14.0” OD unwind and rewind stations.</strong> </p>
</div>

<div class="line_block_form cf">
<div class="block-imput-wrapper2">
<select class="input-item4" name="co_lateral_adjustability_c" id="co_lateral_adjustability_c">
<option> Lateral Adjustability ? </option>
<option value="Yes">Yes</option>
<option value="No">No</option>
</select>
<?php if(isset($retry)&&$retry==true):?><script> $("#co_lateral_adjustability_c option[value='<?php echo $_POST["co_lateral_adjustability_c"] ?>']").attr("selected", "selected"); </script> <?php endif; ?>
</div>
<p class="rfq-description"> <strong> Lateral Adjustability - </strong>	– enabling the Operator to manually adjust the film’s edge placement +/- ¾” while in Operation. </p>
</div>

<div class="line_block_form cf">
<div class="block-imput-wrapper2">
<select class="input-item4" name="co_mechanical_core_locks_c" id="co_mechanical_core_locks_c">
<option> Mechanical Core Locks ? </option>
<option value="Yes">Yes</option>
<option value="No">No</option>
</select>
<?php if(isset($retry)&&$retry==true):?><script> $("#co_mechanical_core_locks_c option[value='<?php echo $_POST["co_mechanical_core_locks_c"] ?>']").attr("selected", "selected"); </script> <?php endif; ?>
</div>
<p class="rfq-description"> <strong> Mechanical Core Locks - </strong> for very easy laminate roll change outs. </p>
</div>

<div class="line_block_form cf">
<div class="block-imput-wrapper2">
<select class="input-item4" name="co_rewind_station_c" id="co_rewind_station_c">
<option> Rewind station - powered ? </option>
<option value="Top">Yes - Top</option>
<option value="Bottom">Yes - Bottom</option>
<option value="Both">Yes - Both</option>
<option value="No">No</option>
</select>
<?php if(isset($retry)&&$retry==true):?><script> $("#co_rewind_station_c option[value='<?php echo $_POST["co_rewind_station_c"] ?>']").attr("selected", "selected"); </script> <?php endif; ?>
</div>
<p class="rfq-description"> <strong>  Rewind station – powered, top, bottom or both - </strong>	automatically removes release liner or rewinds a web. With air clutch, on/off switch and air pressure regulator with gauge </p>
</div>

<div class="line_block_form cf">
<div class="block-imput-wrapper2">
<select class="input-item4" name="co_rotational_top_unwind_sta_c" id="co_rotational_top_unwind_sta_c">
<option> Rotational Top Unwind stations - carousel ? </option>
<option value="Yes">Yes</option>
<option value="No">No</option>
</select>
<?php if(isset($retry)&&$retry==true):?><script> $("#co_rotational_top_unwind_sta_c option[value='<?php echo $_POST["co_rotational_top_unwind_sta_c"] ?>']").attr("selected", "selected"); </script> <?php endif; ?>
</div>
<p class="rfq-description"> <strong> Rotational Top Unwind stations - carousel - </strong> 4 – 5 unwind station capability. 14.0” max. film OD. </p>
</div>

<div class="line_block_form cf">
<div class="block-imput-wrapper2">
<select class="input-item4" name="co_segmented_differential_re_c" id="co_segmented_differential_re_c">
<option> Segmented / Differential Rewind shaft ? </option>
<option value="Yes">Yes</option>
<option value="No">No</option>
</select>
<?php if(isset($retry)&&$retry==true):?><script> $("#co_segmented_differential_re_c option[value='<?php echo $_POST["co_segmented_differential_re_c"] ?>']").attr("selected", "selected"); </script> <?php endif; ?>
</div>
<p class="rfq-description"> <strong> Segmented / Differential Rewind shaft – </strong> automatically provides the needed rewind tensions to multiple width cores on the same rewind shaft. Eliminates the need for dual powered rewind
stations when slitting. </p>
</div>

<div class="line_block_form cf">
<div class="block-imput-wrapper2">
<select class="input-item4" name="co_silicone_lamination_rolls_c" id="co_silicone_lamination_rolls_c">
<option> Silicone Lamination Rolls ? </option>
<option value="Yes">Yes</option>
<option value="No">No</option>
</select>
<?php if(isset($retry)&&$retry==true):?><script> $("#co_silicone_lamination_rolls_c option[value='<?php echo $_POST["co_silicone_lamination_rolls_c"] ?>']").attr("selected", "selected"); </script> <?php endif; ?>
</div>
<p class="rfq-description"> <strong> Silicone Lamination Rolls - </strong>	used to help keep aggressive films from sticking to the rolls </p>
</div>


<div class="line_block_form cf">
<div class="block-imput-wrapper2">
<select class="input-item4" name="co_slitting_module_c" id="co_slitting_module_c">
<option> Slitting module - powered ? </option>
<option value="Yes">Yes</option>
<option value="No">No</option>
</select>
<?php if(isset($retry)&&$retry==true):?><script> $("#co_slitting_module_c option[value='<?php echo $_POST["co_slitting_module_c"] ?>']").attr("selected", "selected"); </script> <?php endif; ?>
</div>
<p class="rfq-description"> <strong> Slitting module - powered - </strong>	 Rolling crush cut pneumatically controlled knives slit against a hardened steel, powered anvil roll. Minimum width is 5/8”. </p>
</div>

<div class="line_block_form cf">
<div class="block-imput-wrapper2">
<select class="input-item4" name="co_slitting_onroll_c" id="co_slitting_onroll_c">
<option> Slitting - On-roll ? </option>
<option value="Yes">Yes</option>
<option value="No">No</option>
</select>
<?php if(isset($retry)&&$retry==true):?><script> $("#co_slitting_onroll_c option[value='<?php echo $_POST["co_slitting_onroll_c"] ?>']").attr("selected", "selected"); </script> <?php endif; ?>
</div>
<p class="rfq-description"> <strong> Slitting - On-roll - </strong>	Weighted knife cuts film, leaving scrap film on the core </p>
</div>

<div class="line_block_form cf">
<div class="block-imput-wrapper2">
<select class="input-item4" name="co_spare_top_and_bottom_c" id="co_spare_top_and_bottom_c">
<option> Spare top and bottom unwind shafts ? </option>
<option value="Yes">Yes</option>
<option value="No">No</option>
</select>
<?php if(isset($retry)&&$retry==true):?><script> $("#co_spare_top_and_bottom_c option[value='<?php echo $_POST["co_spare_top_and_bottom_c"] ?>']").attr("selected", "selected"); </script> <?php endif; ?>
</div>
<p class="rfq-description"> <strong> Spare top and bottom unwind shafts - </strong>	with Walco plug and cone, plus alignment collars </p>
</div>

<br>
<h3>Coating applications only</h3>
<hr>
<br>

<div class="line_block_form cf">
<div class="block-imput-wrapper2">
<select class="input-item4" name="ct_antiwrap_air_manifold_c" id="ct_antiwrap_air_manifold_c">
<option> Anti-Wrap air manifold ? </option>
<option value="Yes">Yes</option>
<option value="No">No</option>
</select>
<?php if(isset($retry)&&$retry==true):?><script> $("#ct_antiwrap_air_manifold_c option[value='<?php echo $_POST["ct_antiwrap_air_manifold_c"] ?>']").attr("selected", "selected"); </script> <?php endif; ?>
</div>
<p class="rfq-description"> <strong> Anti-Wrap air manifold - (Coater) - </strong>continuous or timed / pulsed air. For thin substrates. </p>
</div>

<div class="line_block_form cf">
<div class="block-imput-wrapper2">
<select class="input-item4" name="ct_automatic_coating_level_c" id="ct_automatic_coating_level_c">
<option> Automatic coating level control ? </option>
<option value="Yes">Yes</option>
<option value="No">No</option>
</select>
<?php if(isset($retry)&&$retry==true):?><script> $("#ct_automatic_coating_level_c option[value='<?php echo $_POST["ct_automatic_coating_level_c"] ?>']").attr("selected", "selected"); </script> <?php endif; ?>
</div>
<p class="rfq-description"> <strong> Automatic coating level control - (Coater) - </strong>	including removable UHMW end dams, pump and air control valves. </p>
</div>

<div class="line_block_form cf">
<div class="block-imput-wrapper2">
<select class="input-item4" name="ct_air_knife_c" id="ct_air_knife_c">
<option> Air Knife ? </option>
<option value="Yes">Yes</option>
<option value="No">No</option>
</select>
<?php if(isset($retry)&&$retry==true):?><script> $("#ct_air_knife_c option[value='<?php echo $_POST["ct_air_knife_c"] ?>']").attr("selected", "selected"); </script> <?php endif; ?>
</div>
<p class="rfq-description"> <strong> Air Knife - </strong>	Incoming – adjustable height air knife – blowing air across entire width of incoming lite. </p>
</div>

<div class="line_block_form cf">
<div class="block-imput-wrapper2">
<select class="input-item4" name="ct_dual_head_inline_roll_coa_c" id="ct_dual_head_inline_roll_coa_c">
<option> Dual head, inline roll coaters ? </option>
<option value="Yes">Yes</option>
<option value="No">No</option>
</select>
<?php if(isset($retry)&&$retry==true):?><script> $("#ct_dual_head_inline_roll_coa_c option[value='<?php echo $_POST["ct_dual_head_inline_roll_coa_c"] ?>']").attr("selected", "selected"); </script> <?php endif; ?>
</div>
<p class="rfq-description"> <strong> Dual head, inline roll coaters - </strong>	for multiple coating applications </p>
</div>

<div class="line_block_form cf">
<div class="block-imput-wrapper2">
<select class="input-item4" name="ct_end_dams_with_coating_ret_c" id="ct_end_dams_with_coating_ret_c">
<option> End Dams with coating return ? </option>
<option value="Yes">Yes</option>
<option value="No">No</option>
</select>
<?php if(isset($retry)&&$retry==true):?><script> $("#ct_end_dams_with_coating_ret_c option[value='<?php echo $_POST["ct_end_dams_with_coating_ret_c"] ?>']").attr("selected", "selected"); </script> <?php endif; ?>
</div>
<p class="rfq-description"> <strong> End Dams with coating return - </strong>	keeps the coating material recycling back to its original container. </p>
</div>

<div class="line_block_form cf">
<div class="block-imput-wrapper2">
<select class="input-item4" name="ct_grooved_coating_rolls_c" id="ct_grooved_coating_rolls_c">
<option> Grooved Coating rolls ? </option>
<option value="Yes">Yes</option>
<option value="No">No</option>
</select>
<?php if(isset($retry)&&$retry==true):?><script> $("#ct_grooved_coating_rolls_c option[value='<?php echo $_POST["ct_grooved_coating_rolls_c"] ?>']").attr("selected", "selected"); </script> <?php endif; ?>
</div>
<p class="rfq-description"> <strong> Grooved Coating rolls - </strong>	for thicker coating requirements. </p>
</div>

<div class="line_block_form cf">
<div class="block-imput-wrapper2">
<select class="input-item4" name="ct_heated_top_silicone_roll_c" id="ct_heated_top_silicone_roll_c">
<option> Heated top silicone roll ? </option>
<option value="Yes">Yes</option>
<option value="No">No</option>
</select>
<?php if(isset($retry)&&$retry==true):?><script> $("#ct_heated_top_silicone_roll_c option[value='<?php echo $_POST["ct_heated_top_silicone_roll_c"] ?>']").attr("selected", "selected"); </script> <?php endif; ?>
</div>
<p class="rfq-description"> <strong> Heated top silicone roll – (Coater - external) - </strong>	- heater controls and ceramic or IR style heaters </p>
</div>

<div class="line_block_form cf">
<div class="block-imput-wrapper2">
<select class="input-item4" name="ct_pullaway_for_web_coating_c" id="ct_pullaway_for_web_coating_c">
<option> Pull-Away for web coating ? </option>
<option value="Yes">Yes</option>
<option value="No">No</option>
</select>
<?php if(isset($retry)&&$retry==true):?><script> $("#ct_pullaway_for_web_coating_c option[value='<?php echo $_POST["ct_pullaway_for_web_coating_c"] ?>']").attr("selected", "selected"); </script> <?php endif; ?>
</div>
<p class="rfq-description"> <strong> Pull-Away for web coating </strong> </p>
</div>

<div class="line_block_form cf">
<div class="block-imput-wrapper2">
<select class="input-item4" name="ct_scrapper_blade_c" id="ct_scrapper_blade_c">
<option> Scrapper blade ? </option>
<option value="Yes">Yes</option>
<option value="No">No</option>
</select>
<?php if(isset($retry)&&$retry==true):?><script> $("#ct_scrapper_blade_c option[value='<?php echo $_POST["ct_scrapper_blade_c"] ?>']").attr("selected", "selected"); </script> <?php endif; ?>
</div>
<p class="rfq-description"> <strong> Scrapper blade – (Coater) - </strong>	for continuous cleaning of bottom drive roll: includes adjustment handles. </p>
</div>

<div class="line_block_form cf">
<div class="block-imput-wrapper2">
<select class="input-item4" name="ct_special_crotch_roll_openi_c" id="ct_special_crotch_roll_openi_c">
<option> Special crotch roll opening ? </option>
<option value="Yes">Yes</option>
<option value="No">No</option>
</select>
<?php if(isset($retry)&&$retry==true):?><script> $("#ct_special_crotch_roll_openi_c option[value='<?php echo $_POST["ct_special_crotch_roll_openi_c"] ?>']").attr("selected", "selected"); </script> <?php endif; ?>
</div>
<p class="rfq-description"> <strong> Special crotch roll opening – (Coater) - </strong>	up to 6.0 inches. </p>
</div>

<div class="line_block_form cf">
<div class="block-imput-wrapper2">
<select class="input-item4" name="ct_stainless_steel_auxiliary_c" id="ct_stainless_steel_auxiliary_c">
<option> Stainless Steel auxiliary feed tanks ? </option>
<option value="Yes">Yes</option>
<option value="No">No</option>
</select>
<?php if(isset($retry)&&$retry==true):?><script> $("#ct_stainless_steel_auxiliary_c option[value='<?php echo $_POST["ct_stainless_steel_auxiliary_c"] ?>']").attr("selected", "selected"); </script> <?php endif; ?>
</div>
<p class="rfq-description"> <strong> Stainless Steel auxiliary feed tanks – (Coater) - </strong>	5 gallons (19 liters), with either single valve fill or double valve fill. </p>
</div>

<div class="line_block_form cf">
<div class="block-imput-wrapper2">
<select class="input-item4" name="ct_upper_acrylic_guards_c" id="ct_upper_acrylic_guards_c">
<option> Upper Acrylic Guards  ? </option>
<option value="Yes">Yes</option>
<option value="No">No</option>
</select>
<?php if(isset($retry)&&$retry==true):?><script> $("#ct_upper_acrylic_guards_c option[value='<?php echo $_POST["ct_upper_acrylic_guards_c"] ?>']").attr("selected", "selected"); </script> <?php endif; ?>
</div>
<p class="rfq-description"> <strong> Upper Acrylic Guards  - </strong> helping to seal off the crotch area – helping to keep it dust free. </p>
</div>

<div class="line_block_form cf">
<div class="block-imput-wrapper2">
<select class="input-item4" name="ct_uhmw_end_dams_c" id="ct_uhmw_end_dams_c">
<option> UHMW end dams ? </option>
<option value="Removable">Yes - Removable</option>
<option value="Ajustable">Yes - Ajustable</option>
<option value="Both">Yes - Both</option>
<option value="No">No</option>
</select>
<?php if(isset($retry)&&$retry==true):?><script> $("#ct_uhmw_end_dams_c option[value='<?php echo $_POST["ct_uhmw_end_dams_c"] ?>']").attr("selected", "selected"); </script> <?php endif; ?>
</div>
<p class="rfq-description"> <strong> UHMW end dams – removable, adjustable? – (Coater) - </strong>	(standard end dams are aluminum discs). </p>
</div>



<p class="inner-p"><span>What key words did you use to find our website?*</span></p>
<div class="wr cf">
<div class="wrapper-imput-textarea">
<input class="input-item-textarea" type="text" name="key_words"  value="<?php if(isset($retry)&&$retry==true) echo $_POST["key_words"]; ?>"/>
</div>
</div>
<p class="inner-p">*Walco credits $ 250.00 to your system order to know your key search words.</p>
<p class="inner-p"><span>Thank you for your interest in Walco, Inc.. We will respond to your request within one (1) Business day. </span></p>



<div class="g-recaptcha" data-sitekey="6LdzizYUAAAAAN1VuCzxgbDXXfdmO4KwVufx6BQS"></div>

<p style="margin-top: 20px;"> </p>
<input type="submit" class="submit submit-button try-again" name="submit" id="submit" value="submit" />
<?php
if(count($_POST)>0){
if($response['success'] == true){
echo "<p>Your message has been sent</p>";
$first_name = @trim ($_POST['first_name']);
$last_name = @trim ($_POST['last_name']);
$title = @ trim ($_POST['title']);
$organization = @ trim ($_POST['organization']);
$work_phone = @ trim ($_POST['work_phone']);
$fax = @ trim ($_POST['fax']);
$email = @ trim ($_POST['email']);
$select1 = @ trim ($_POST['select1']);
$description = @ trim ($_POST['description']);
$widths_capability_needed = @ trim ($_POST['widths_capability_needed']);
$line_speed = @ trim ($_POST['line_speed']);
$select_Off_or_inline = @ trim ($_POST['select_Off_or_inline']);
$heat_or_no_heat = @ trim ($_POST['heat_or_no_heat']);
$hazardous_electrical = @ trim ($_POST['hazardous_electrical']);
$system_operational = @ trim ($_POST['system_operational']);
$key_words = @ trim ($_POST['key_words']);

$automated_inline_c = @ trim ($_POST['automated_inline_c']);
$automatic_nip_gap_control_c = @ trim ($_POST['automatic_nip_gap_control_c']);
$automatic_drive_control_c = @ trim ($_POST['automatic_drive_control_c']);
$automatic_pass_through_c = @ trim ($_POST['automatic_pass_through_c']);
$casters_c = @ trim ($_POST['casters_c']);
$conveyors_c = @ trim ($_POST['conveyors_c']);
$corona_treatment_module_c = @ trim ($_POST['corona_treatment_module_c']);
$hazardous_electrical_c = @ trim ($_POST['hazardous_electrical_c']);
$heater_bar_c = @ trim ($_POST['heater_bar_c']);
$heaters_c = @ trim ($_POST['heaters_c']);
$infeed_stainless_steel_table_c = @ trim ($_POST['infeed_stainless_steel_table_c']);
$large_nip_opening_c = @ trim ($_POST['large_nip_opening_c']);
$load_cells_c = @ trim ($_POST['load_cells_c']);
$ovens_c = @ trim ($_POST['ovens_c']);
$panel_cleaner_and_air_c = @ trim ($_POST['panel_cleaner_and_air_c']);
$roll_out_cart_c = @ trim ($_POST['roll_out_cart_c']);
$safety_air_cylinders_c = @ trim ($_POST['safety_air_cylinders_c']);
$safety_cage_c = @ trim ($_POST['safety_cage_c']);
$safety_light_curtains_c = @ trim ($_POST['safety_light_curtains_c']);
$scissor_lift_c = @ trim ($_POST['scissor_lift_c']);
$side_loading_c = @ trim ($_POST['side_loading_c']);
$single_point_nip_gap_c = @ trim ($_POST['single_point_nip_gap_c']);
$single_mobile_platform_c = @ trim ($_POST['single_mobile_platform_c']);
$special_electric_c = @ trim ($_POST['special_electric_c']);
$startup_assistance_c = @ trim ($_POST['startup_assistance_c']);
$sticky_roll_cleaner_module_c = @ trim ($_POST['sticky_roll_cleaner_module_c']);
$variable_speed_control_c = @ trim ($_POST['variable_speed_control_c']);
$vertical_light_tree_c = @ trim ($_POST['vertical_light_tree_c']);

$co_additional_unwind_station_c = @ trim ($_POST['co_additional_unwind_station_c']);
$co_airbrakes_c = @ trim ($_POST['co_airbrakes_c']);
$co_air_shafts_c = @ trim ($_POST['co_air_shafts_c']);
$co_antistatic_bar_c = @ trim ($_POST['co_antistatic_bar_c']);
$co_automatic_unwind_rewind_t_c = @ trim ($_POST['co_automatic_unwind_rewind_t_c']);
$co_automatic_separation_syst_c = @ trim ($_POST['co_automatic_separation_syst_c']);
$co_automatic_edge_trimming_s_c = @ trim ($_POST['co_automatic_edge_trimming_s_c']);
$co_automatic_edge_guide_syst_c = @ trim ($_POST['co_automatic_edge_guide_syst_c']);
$co_bottom_unwind_station_c = @ trim ($_POST['co_bottom_unwind_station_c']);
$bottom_unwind_station_rollin_c = @ trim ($_POST['bottom_unwind_station_rollin_c']);
$co_bottom_trolley_c = @ trim ($_POST['co_bottom_trolley_c']);
$co_bowed_rolls_c = @ trim ($_POST['co_bowed_rolls_c']);
$co_cantilevered_unwind_stati_c = @ trim ($_POST['co_cantilevered_unwind_stati_c']);
$co_edge_wrapping_c = @ trim ($_POST['co_edge_wrapping_c']);
$co_endoffilm_alert_c = @ trim ($_POST['co_endoffilm_alert_c']);
$co_high_pressure_lamination_c = @ trim ($_POST['co_high_pressure_lamination_c']);
$co_larger_than_standard_od_c = @ trim ($_POST['co_larger_than_standard_od_c']);
$co_lateral_adjustability_c = @ trim ($_POST['co_lateral_adjustability_c']);
$co_mechanical_core_locks_c = @ trim ($_POST['co_mechanical_core_locks_c']);
$co_rewind_station_c = @ trim ($_POST['co_rewind_station_c']);
$co_rotational_top_unwind_sta_c = @ trim ($_POST['co_rotational_top_unwind_sta_c']);
$co_segmented_differential_re_c = @ trim ($_POST['co_segmented_differential_re_c']);
$co_silicone_lamination_rolls_c = @ trim($_POST['co_silicone_lamination_rolls_c']);
$co_slitting_module_c = @ trim ($_POST['co_slitting_module_c']);
$co_slitting_onroll_c = @ trim ($_POST['co_slitting_onroll_c']);
$co_spare_top_and_bottom_c = @ trim ($_POST['co_spare_top_and_bottom_c']);

$ct_antiwrap_air_manifold_c = @ trim ($_POST['ct_antiwrap_air_manifold_c']);
$ct_automatic_coating_level_c = @ trim ($_POST['ct_automatic_coating_level_c']);
$ct_air_knife_c = @ trim ($_POST['ct_air_knife_c']);
$ct_dual_head_inline_roll_coa_c = @ trim ($_POST['ct_dual_head_inline_roll_coa_c']);
$ct_end_dams_with_coating_ret_c = @ trim ($_POST['ct_end_dams_with_coating_ret_c']);
$ct_grooved_coating_rolls_c = @ trim ($_POST['ct_grooved_coating_rolls_c']);
$ct_heated_top_silicone_roll_c = @ trim ($_POST['ct_heated_top_silicone_roll_c']);
$ct_pullaway_for_web_coating_c = @ trim ($_POST['ct_pullaway_for_web_coating_c']);
$ct_scrapper_blade_c = @ trim ($_POST['ct_scrapper_blade_c']);
$ct_special_crotch_roll_openi_c = @ trim ($_POST['ct_special_crotch_roll_openi_c']);
$ct_stainless_steel_auxiliary_c = @ trim ($_POST['ct_stainless_steel_auxiliary_c']);
$ct_upper_acrylic_guards_c = @ trim ($_POST['ct_upper_acrylic_guards_c']);
$ct_uhmw_end_dams_c = @ trim ($_POST['ct_uhmw_end_dams_c']);

//Info@walcomachine.com
//jpowerslagunabeach@gmail.com
mail ("walco@lphcrm.com",
"new email (from: $first_name)",
"\n
Name: $first_name $last_name\n
Title: $title\n
Organization: $organization\n
Work_phone: $work_phone\n
Fax: $fax\n
Mail: $email\n
Fax: $select1\n                                  
Description: $description \n
Widths_capability_needed?: $widths_capability_needed\n
Line_speed: $line_speed\n
Select_off_or_inline: $select_Off_or_inline\n
Heat_or_no_heat: $heat_or_no_heat\n
Hazardous_electrical: $hazardous_electrical\n
System_operational: $system_operational\n
Key_words: $key_words\n

Automated / Inline:  $automated_inline_c\n
Automatic nip gap control: $automatic_nip_gap_control_c\n
Automatic Drive Control: $automatic_drive_control_c\n
Automatic pass through: $automatic_pass_through_c\n
Casters: $casters_c\n
Conveyors – Infeed / Transition / Outfeed: $conveyors_c\n
Corona Treatment module: $corona_treatment_module_c\n
Hazardous Electrical: $hazardous_electrical_c\n
Heater Bar: $heater_bar_c\n
Heaters: $heaters_c\n
Infeed Stainless Steel: $infeed_stainless_steel_table_c\n
Large nip opening:  $large_nip_opening_c\n
Load Cells:  $load_cells_c\n
Ovens: $ovens_c\n
Panel Cleaner and Air Blow Off: $panel_cleaner_and_air_c\n
Roll Out Cart: $roll_out_cart_c\n
Safety Air Cylinders: $safety_air_cylinders_c\n
Safety Cage: $safety_cage_c\n
Safety Light Curtains:  $safety_light_curtains_c\n
Scissor Lift: $scissor_lift_c\n
Side Loading:  $side_loading_c\n
Single Point nip gap: $single_point_nip_gap_c\n
Single Mobile Platform:  $single_mobile_platform_c\n
Special or Overseas electrical: $special_electric_c\n
Start-Up Assistance: $startup_assistance_c\n
Sticky Roll / Cleaner module: $sticky_roll_cleaner_module_c\n
Variable Speed Control:  $variable_speed_control_c\n
Vertical Light Tree: $vertical_light_tree_c\n

","Content-type:text/plain; charset=utf-8");

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL,"https://www.lphcrm.com/walco/index.php?entryPoint=WebToPersonCapture");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,
		"first_name=$first_name&last_name=$last_name&title=$title&account_name=$organization&phone_work=$work_phone&phone_fax=$fax&email1=$email&system_type_c=$select1&description=$description&widths_capability_needed_c=$widths_capability_needed&line_speed_c=$line_speed&select_off_or_inline_c=$select_Off_or_inline&heat_or_no_heat_c=$heat_or_no_heat&hazardous_electrical_c=$hazardous_electrical&system_operational_c=$system_operational&keywords_c=$key_words&campaign_id=8b86a7f2-54f5-d527-1782-57abaaa0b539&automated_inline_c=$automated_inline_c&automatic_nip_gap_control_c=$automatic_nip_gap_control_c&automatic_drive_control_c=$automatic_drive_control_c&automatic_pass_through_c=$automatic_pass_through_c&casters_c=$casters_c&conveyors_c=$conveyors_c&corona_treatment_module_c=$corona_treatment_module_c&hazardous_electrical_c=$hazardous_electrical_c&heater_bar_c=$heater_bar_c&heaters_c=$heaters_c&infeed_stainless_steel_table_c=$infeed_stainless_steel_table_c&large_nip_opening_c=$large_nip_opening_c&load_cells_c=$load_cells_c&ovens_c=$ovens_c&panel_cleaner_and_air_c=$panel_cleaner_and_air_c&roll_out_cart_c=$roll_out_cart_c&safety_air_cylinders_c=$safety_air_cylinders_c&safety_cage_c=$safety_cage_c&safety_light_curtains_c=$safety_light_curtains_c&scissor_lift_c=$scissor_lift_c&side_loading_c=$side_loading_c&single_point_nip_gap_c=$single_point_nip_gap_c&single_mobile_platform_c=$single_mobile_platform_c&special_electric_c=$special_electric_c&startup_assistance_c=$startup_assistance_c&sticky_roll_cleaner_module_c=$sticky_roll_cleaner_module_c&variable_speed_control_c=$variable_speed_control_c&vertical_light_tree_c=$vertical_light_tree_c&co_additional_unwind_station_c=$co_additional_unwind_station_c&co_airbrakes_c=$co_airbrakes_c&co_air_shafts_c=$co_air_shafts_c&co_antistatic_bar_c=$co_antistatic_bar_c&co_automatic_unwind_rewind_t_c=$co_automatic_unwind_rewind_t_c&co_automatic_separation_syst_c=$co_automatic_separation_syst_c&co_automatic_edge_trimming_s_c=$co_automatic_edge_trimming_s_c&co_automatic_edge_guide_syst_c=$co_automatic_edge_guide_syst_c&co_bottom_unwind_station_c=$co_bottom_unwind_station_c&bottom_unwind_station_rollin_c=$bottom_unwind_station_rollin_c&co_bottom_trolley_c=$co_bottom_trolley_c&co_bowed_rolls_c=$co_bowed_rolls_c&co_cantilevered_unwind_stati_c=$co_cantilevered_unwind_stati_c&co_edge_wrapping_c=$co_edge_wrapping_c&co_endoffilm_alert_c=$co_endoffilm_alert_c&co_high_pressure_lamination__c=$co_high_pressure_lamination_c&co_larger_than_standard_od_c=$co_larger_than_standard_od_c&co_lateral_adjustability_c=$co_lateral_adjustability_c&co_mechanical_core_locks_c=$co_mechanical_core_locks_c&co_rewind_station_c=$co_rewind_station_c&co_rotational_top_unwind_sta_c=$co_rotational_top_unwind_sta_c&co_segmented_differential_re_c=$co_segmented_differential_re_c&co_silicone_lamination_rolls_c=$co_silicone_lamination_rolls_c&co_slitting_module_c=$co_slitting_module_c&co_slitting_onroll_c=$co_slitting_onroll_c&co_spare_top_and_bottom_c=$co_spare_top_and_bottom_c&ct_antiwrap_air_manifold_c=$ct_antiwrap_air_manifold_c&ct_automatic_coating_level_c=$ct_automatic_coating_level_c&ct_air_knife_c=$ct_air_knife_c&ct_dual_head_inline_roll_coa_c=$ct_dual_head_inline_roll_coa_c&ct_end_dams_with_coating_ret_c=$ct_end_dams_with_coating_ret_c&ct_grooved_coating_rolls_c=$ct_grooved_coating_rolls_c&ct_heated_top_silicone_roll__c=$ct_heated_top_silicone_roll_c&ct_pullaway_for_web_coating__c=$ct_pullaway_for_web_coating_c&ct_scrapper_blade_c=$ct_scrapper_blade_c&ct_special_crotch_roll_openi_c=$ct_special_crotch_roll_openi_c&ct_stainless_steel_auxiliary_c=$ct_stainless_steel_auxiliary_c&ct_upper_acrylic_guards_c=$ct_upper_acrylic_guards_c&ct_uhmw_end_dams_c=$ct_uhmw_end_dams_c&assigned_user_id=1&moduleDir=Leads&lead_source=Web%20Site");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$server_output = curl_exec ($ch);
curl_close ($ch);
echo "<script> window.location = 'https://walcomachine.com/contact-response.html'; </script>";
}else{
echo "<p id='captcha-p'>Try again!</p>";
}

}
unset($_SESSION['captcha_keystring']);
?>
</form>

</div>

</div>
<div class="border-white-box">
<ul>
<li><a href="/">HOME</a></li>
<li><a href="laminators.html">LAMINATORS</a></li>
<li><a href="coaters.html">COATERS</a></li>
<li><a href="web-to-web.html">WEB TO WEB CONVERTERS</a></li>
<li><a href="applicators.html">APPLICATORS</a></li>
<li><a href="industries-served.html">INDUSTRIES SERVED</a></li>        
<li><a href="contact-rfq.php">SYSTEM RFQ</a></li>
<li><a href="contact-us.html">CONTACT US</a></li>
</ul>
</div>
<div class="blue-box cf">
<div class="conteiner cf">
<div class="div-footer-lerft cf">
<img class="messeg-left" src="images/messeg.webp" alt="" />
<span>General Information:</span><a href="mailto:Info@walcomachine.com">Info@walcomachine.com</a><span>Sales:</span><a href="mailto:walcosales@walcomachine.com">walcosales@walcomachine.com</a>
<span>Customer Support:</span><a href="mailto:customerservice@walcomachine.com">customerservice@walcomachine.com</a>
</div>
<div class="div-footer-right">          
<a class="you" href=""></a>
</div>
</div>
</div>
<div class="footer cf">
<div class="conteiner cf">
<div class="footer-left"><p>Copyright © 2022  Walco, Inc. All Rights Reserved.</p></div>
</div>
</div>
</div>
</body>
</html>


