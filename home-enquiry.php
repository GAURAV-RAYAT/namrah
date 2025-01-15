<?php
if(isset($_POST['Query'])){
    $to="namrahfinancials@gmail.com";
	$discuss=$_POST['discuss'];
	$number=$_POST['phone'];
	$email=$_POST['email']; 
	$from = "support@namrah.in";
	$subject="Enquiry For Namrah Security";	
	$body='
	<html>
	<head>
		<title>Enquiry for Namrah Management</title>
		</head>
		<body>
		<table>
		<tr><td colspan=2><h3>Dear Sir,</h3></td></tr>
		<tr><td height=10 colspan=2>&nbsp;</td></tr>
		<tr><td colspan=2>Discuss : '.$discuss.' </td></tr> 
		<tr><td colspan=2>Email : '.$email.' </td></tr>
		<tr><td colspan=2>Phone : '.$number.' </td></tr>
		<tr><td clospan=2>&nbsp;</td></tr>
		<tr><td clospan=2>Thanks & Regards</td></tr>
		<tr><td colspan=2>Namrah Management</td></tr> 
		</table>
	</body>   
	</html>';  
	$headers  = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
	$headers .= "From: Namrah Management <" .$from. ">"."";
	if(mail($to, $subject, $body, $headers)){
	  //echo "success!!";
	  header("Location:Thank-You.html");
	}else{
	  echo "Error!!!";
	}
}			
?>