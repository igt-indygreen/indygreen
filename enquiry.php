<?php

if(!empty($_POST['xxx']))
{
   $compny = $_POST['company'];
      $name = $_POST['name'];
         $eml = $_POST['email'];
            $mbl = $_POST['mobile'];  
              $ps = $_POST['ps'];
               $msg = $_POST['message'];
               $tomail = "digitaligt35@gmail.com";
               
             
                 
               $kailash = "Company Name:".$compny.
               "\r\n Full Name: ".$name.
               "\r\n Email : ".$eml.
               "\r\n Mobile :".$mbl.
               "\r\n Product & Service Name :".$ps.
               "\r\n Message :".$msg. "\r\n" ;
               
              $headers = [
     
                  "MIME-Version : 1.0",
                  "Content-type : text/plain; charset=utf-8",
                  "Cc : digitaligt35@gmail.com",
               ];

         $headers = implode("\r\n", $headers);
               
               if(mail($tomail, $name, $kailash, $headers))
               {
                   echo "mail have sended...!";
               }
               else
               {
                   
                   echo "mail failed ..!";
               }
               
               
               
               
}


?>