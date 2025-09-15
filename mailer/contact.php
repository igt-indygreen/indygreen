<?php

/*echo "<pre>";
print_r($_REQUEST);
print_r($_FILES);
exit;*/
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//get data from form

 if(isset($_FILES['image'])){
  $errors= array();
  $file_name = $_FILES['image']['name'];
  $file_size = $_FILES['image']['size'];
  $file_tmp = $_FILES['image']['tmp_name'];
  $file_type = $_FILES['image']['type'];
  $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
  
  $expensions= array("jpeg","jpg","png","pdf");
  
  if(in_array($file_ext,$expensions)=== false){
     $errors[]="extension not allowed, please choose a PDF, JPEG or PNG file.";
  }
  
  if($file_size > 2097152) {
     $errors[]='File size must be excately 2 MB';
  }
    move_uploaded_file($file_tmp,"images/".$file_name);
    
     
}


$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$phone = $_REQUEST['phone'];
$address = $_REQUEST['address'];
$message = $_REQUEST['message'];
$page_url = 'http' . (isset($_SERVER['HTTPS']) ? 's' : '') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];


$mail = new PHPMailer(true);
try {
                   
    $mail->isSMTP();                                            
    $mail->Host       = 'smtp.gmail.com';                    
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'support@webclickdigital.com';                     
    $mail->Password   = 'trhfpjdnmkosklxl';
    $mail->Port       = 587;                                    
    $mail->addAttachment("images/".$file_name);
   
    $mail->setFrom('rohit.webclickindia@gmail.com', 'Mailer');
    $mail->addAddress('info@indygreentech.com', 'Rohit');     


   
    $mail->isHTML(true);                        
    $mail->Subject = $page_url;
    $mail->Body = 'Name: ' . $name . "<br>" . "<br>".
              'Email: ' . $email . "<br>" ."<br>".
              'Phone: ' . $phone . "<br>" ."<br>".
              'Address: ' . $address . "<br>" ."<br>".
              'Message: ' . $message . "<br>" ."<br>".
              'Page Url : ' . $page_url;
         
    $mail->send();
    
    header("Location: thankyou.html");
    
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}