<?php
$message=

'<div style=" background: #f5f5f5; padding: 20px;">
    <table style="border: 1px solid #ddd; padding: 20px; color: #005baa; background: #fff; width: 100%; text-align: center;">
        <tr style="border: 1px solid #ddd">
            <td colspan="2"><img src="http://arasangassolutions.com/images/logo.jpg" text-align: center" ></td>
        </tr>
        <tr>
            <td style="border-bottom: 1px solid #ddd; height: 10px" colspan="2">&nbsp;</td>
        </tr>
        <tr style=" display: inline-block; margin: 10px 0 0;">
            <td style="font-weight: bold">First Name:</td>
            <td>'.$_POST['name'].'</td>
        </tr>
		<tr>
            <td style="border-bottom: 1px solid #ddd; height: 10px" colspan="2">&nbsp;</td>
        </tr>
        <tr style=" display: inline-block; margin: 10px 0 0;">
            <td style="font-weight: bold">Last Name:</td>
            <td>'.$_POST['lname'].'</td>
        </tr>
        <tr>
            <td style="border-bottom: 1px solid #ddd; height: 10px" colspan="2">&nbsp;</td>
        </tr>
        <tr style=" display: inline-block; margin: 10px 0 0;">
            <td style="font-weight: bold">Phone:</td>
            <td>'.$_POST['phone'].'</td>
        </tr>
        <tr>
            <td style="border-bottom: 1px solid #ddd; height: 10px" colspan="2">&nbsp;</td>
        </tr>
        <tr style=" display: inline-block; margin: 10px 0 0;">
            <td style="font-weight: bold">Email:</td>
            <td>'.$_POST['email'].'</td>
        </tr>
        <tr>
            <td style="border-bottom: 1px solid #ddd; height: 10px" colspan="2">&nbsp;</td>
        </tr>
        <tr style=" display: inline-block; margin: 10px 0 0;">
            <td style="font-weight: bold">Message:</td>
            <td>'.$_POST['message'].'</td>
        </tr>     
       
    </table>
</div>
';




    require "bmmail.php";
      
    $mail->Subject = "Edtrix Contact Form";
	$mail->WordWrap = 70;
	$mail->Priority = 1;
	$mail->Body = $message;
   $mail->AddAddress("dv@blackmount.in");
    
	$result=$mail->Send();
	  
	$message = $result ? 'Successfully Sent! Thank You' : 'Sending Failed!'; 
	unset($mail);
	echo $message;
?>