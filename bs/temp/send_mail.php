<?php 
	if(isset($_POST['name'],$_POST['email'],$_POST['phone'],$_POST['details'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$details = $_POST['details'];
		$errors = array();
		if(empty($name)){
			$errors[] = "Name Required";	
		}else if(empty($email)){
			$errors[] = "Email Address Required";
		}else if(empty($phone)){
			$errors[] = "Phone Number Required";
		}else if(empty($details)){
			$errors[] = "Your Details Required";
		}
		
	    if(!empty($errors)){
			foreach($errors as $error){
				echo $error.'<br/>';
			}
		}else{
			$to = 'support@bloodsoft.com';
			$emailSubject = "Customer Query!";
			$headers = "From: $email\r\n";
			$headers .= "Content-type: text/html\r\n";
			$body = "Name : ".$name."<br/>Email : ".$email."<br/>Phone Number : ".$phone."<br/>Details :<br/>".$details;
			$mail_send = mail($to, $emailSubject, $body, $headers);
			if($mail_send == true){
				echo "$name Your Information has been Sent";
			}else{
				echo "Mail not sent, Please try again";
			}
		}	
	}
?>