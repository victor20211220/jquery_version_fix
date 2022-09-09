<?
//= CONFIGURABLE SECTION =====================================
$mailto = "wal@lphinternetservices.com";
$subject = "contact page";
$formpage = "index.html";
$thankyoupage = "index.html";
//= END OF CONFIGURABLE SECTION ===================================
if($_POST['operation']!="send")
{
header("Location: ".$formpage);
exit;
}
else
{
$messagebody = "
<html><head>
<title>GAM</title></head><body>
Name: ".$_POST['name']."<br>
Company: ".$_POST['company']."<br>
Title:".$_POST['title']."<br>
Address: ".$_POST['address']."<br>
Phone: ".$_POST['phone']."<br>
E-mail: ".$_POST['email']."<br>
Select: ".$_POST['select']."<br>
Describe_your_application: ".$_POST['application']."<br>

What_width_do_you_need?: ".$_POST['question1']."<br>
What_are_you_trying_to_accomplish? ".$_POST['question2']."<br>
Do_you_need_top_bottom_or_both_applications? ".$_POST['question3']."<br>
Do_you_have_any_special_needs? ".$_POST['question4']."<br>";
$messagebody.="
</body>
</html>
";
mail($mailto,$subject,$messagebody,"From: \"GAM\"<$mailto>\r\nX-Mailer: PHP formscript\r\nMIME-Version: 1.0\r\nContent-type: text/html; charset=iso-8859-1\r\n");
header("Location: ".$thankyoupage);
exit;
}
?>
