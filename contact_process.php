<?php

$from = $_REQUEST['email'];
$name = $_REQUEST['name'];
$subject = $_REQUEST['subject'];
$cmessage = $_REQUEST['message'];

$jsondata="name=".$name."&email=".$from."&subject=".$subject."&message=".$cmessage;
$ch2 = curl_init('http://forms.blackmount.co.in/edtrix.in/contact.php');                                                                      
curl_setopt($ch2, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
curl_setopt($ch2, CURLOPT_POSTFIELDS, $jsondata);                                                                  
curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);                                                                      
$result = curl_exec($ch2);

echo "<script>alert('Got your enquiry.  We will get back to you');window.location.href = 'contact.html';</script>";
//header('Location: contact.html');
?>