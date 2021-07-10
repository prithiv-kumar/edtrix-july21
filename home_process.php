<?php

$from = $_REQUEST['email'];
$name = $_REQUEST['name'];
$phone = $_REQUEST['phone'];

$jsondata="name=".$name."&email=".$from."&phone=".$phone;
$ch2 = curl_init('http://forms.blackmount.co.in/edtrix.in/home.php');                                                                      
curl_setopt($ch2, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
curl_setopt($ch2, CURLOPT_POSTFIELDS, $jsondata);                                                                  
curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);                                                                      
$result = curl_exec($ch2);

echo "<script>alert('Got your registration.  We will get back to you');window.location.href = 'index.html'</script>";
//header('Location: index.html');
?>