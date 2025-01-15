<?php
if(isset($_POST['SubEnquiry'])){
    $to="namrahfinancials@gmail.com";
	$name=$_POST['name'];
	$email=$_POST['email'];
	$subject = "Mail From namrah.in !!";
	$message=$_POST['message'];
	$from = "support@namrah.in";
	$subject11="Enquiry for Namrah Management!";	
	$body='
	<html> 
	<head>
		<title>Enquiry for Namrah Management</title>
		</head>
		<body>
		<table>
		<tr><td colspan=2><h3>Dear Sir,</h3></td></tr>
		<tr><td height=10 colspan=2>&nbsp;</td></tr>
		<tr><td colspan=2>Name : '.$name.' </td></tr> 
		<tr><td colspan=2>Email : '.$email.' </td></tr>
		<tr><td colspan=2>Subject : '.$subject.' </td></tr>
		<tr><td colspan=2>Message : '.$message.' </td></tr> 
		<tr><td clospan=2>&nbsp;</td></tr>
		<tr><td clospan=2>Thanks & Regards</td></tr>
		<tr><td colspan=2>'.$name.'</td></tr> 
		</table>
	</body>   
	</html>';  
	$headers  = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
	$headers .= "From:" .$name. "<" .$from. ">"."";
	if(mail($to, $subject, $body, $headers)){
	  //echo "success!!";
	  header("Location:Thank-You.html");
	}else{
	  echo "Error!!!";
	}
}			
?>