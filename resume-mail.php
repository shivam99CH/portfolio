<?php 

$conn= mysqli_connect('localhost','root','','practice');
if ($conn!=true) 
{
  echo "Connection Error";
}

   
    $Date=date('Y-m-d');
    
  
  
$inchargeName='InchargeName';
$to=array();

$SenderName='Shivam';

$block= 'Name';
$floor= 'Floor';
$roomNo= 'Room_No';
$RoomType= 'RoomType';
$roomName= 'RoomName';
 
$body="";
$body.="
   <!DOCTYPE html>
<html xmlns='http://www.w3.org/1999/xhtml'>
   <head>
      <meta http-equiv='Content-Type' content='text/html;charset=utf-8'>
   </head>
   <body>
      <table id='zs-output-sig' border='0' cellpadding='0' cellspacing='0' style='font-family:Arial,Helvetica,sans-serif;line-height:0px;font-size:1px;padding:0px!important;border-spacing:0px;margin:0px;border-collapse:collapse; width:625px;'>
         <tbody>
            <tr>
               <td style='padding:0px!important;'>
                  <table id='inner-table' border='0' cellpadding='0' cellspacing='0' style='font-family:Arial,Helvetica,sans-serif;line-height:0px;font-size:1px;padding:0px!important;border-spacing:0px;margin:0px;border-collapse:collapse;'>
                     <tbody>
                        <tr>
                           <td style='border-collapse: collapse; font-family: Calibri, Helvetica, sans-serif; font-size: 16px; font-style: normal; line-height: 18px; font-weight: 400; padding-bottom: 20px;'>
                              <p style='margin: 0.04px;'><span style='font-family:Calibri,Helvetica,sans-serif;font-size:16px;font-style:normal;line-height:18px;font-weight:400;color:#333333;display:inline;'>Please find my resume attached.<br>Kind Regards,</span></p>
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </td>
            </tr>
            <tr>
               <td style='padding:0px!important;'>
                  <table id='inner-table' border='0' cellpadding='0' cellspacing='0' style='font-family:Arial,Helvetica,sans-serif;line-height:0px;font-size:1px;padding:0px!important;border-spacing:0px;margin:0px;border-collapse:collapse;'>
                     <tbody>
                        <tr>
                           <td width='109' style='padding-right: 28px;'>
                              <table border='0' cellpadding='0' cellspacing='0' style='font-family:Arial,Helvetica,sans-serif;line-height:0px;font-size:1px;padding:0px!important;border-spacing:0px;margin:0px;border-collapse:collapse;'>
                                 <tbody>
                                    <tr>
                                       <td style='border-collapse: collapse; line-height: 0px; padding-right: 1px;'>
                                          <p style='margin: 0.04px;'><img height='145' width='109' alt='image' border='0' src='https://img2.gimm.io/500e0eb1-b30a-4eb4-aca2-955d0ee00772/-/resize/218x290/img.png' style='border-radius:15px; ms-border-radius:15px; webkit-border-radius:15px; o-border-radius:15px; khtml-border-radius:15px; moz-border-radius:15px;'></p>
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
                           </td>
                           <td style='padding:0px!important;'>
                              <table border='0' cellpadding='0' cellspacing='0' style='font-family:Arial,Helvetica,sans-serif;line-height:0px;font-size:1px;padding:0px!important;border-spacing:0px;margin:0px;border-collapse:collapse;'>
                                 <tbody>
                                    <tr>
                                       <td style='border-collapse: collapse; font-family: Gadget, &quot;Arial Black&quot;, sans-serif; font-size: 27px; font-style: normal; line-height: 29px; font-weight: 700; padding-bottom: 4px;'>
                                          <p style='margin: 0.04px;'><span style='font-family:Gadget,Arial Black,sans-serif;font-size:27px;font-style:normal;line-height:29px;font-weight:700;color:#218aa6;display:inline;'>Shivam&nbsp;</span> <span style='font-family:Gadget,Arial Black,sans-serif;font-size:16px;font-style:italic;line-height:18px;font-weight:700;color:#333333;display:inline;'>Web Developer&nbsp;</span></p>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td style='border-collapse:collapse;background-color:#333333;height:4px;padding:0px!important;'></td>
                                    </tr>
                                    <tr>
                                       <td style='border-collapse:collapse;padding-bottom:14px;'></td>
                                    </tr>
                                 </tbody>
                              </table>
                              <table border='0' cellpadding='0' cellspacing='0' style='font-family:Arial,Helvetica,sans-serif;line-height:0px;font-size:1px;padding:0px!important;border-spacing:0px;margin:0px;border-collapse:collapse;'>
                                 <tbody>
                                    <tr>
                                       <td style='border-collapse:collapse;font-family:Calibri,Helvetica,sans-serif;font-size:16px;font-style:normal;line-height:18px;font-weight:400;padding:0px!important;'>
                                          <p style='margin: 0.04px;'><span style='font-family:Calibri,Helvetica,sans-serif;font-size:16px;font-style:normal;line-height:18px;font-weight:400;color:#218aa6;display:inline;'>P</span> <span><a target='_blank' rel='nofollow' href='tel:8557830584' style='font-family:Calibri,Helvetica,sans-serif;font-size:16px;font-style:normal;line-height:18px;font-weight:400;color:#333333;display:inline;text-decoration:none;'> +91 8557830584&nbsp; </a></span> <span style='font-family:Calibri,Helvetica,sans-serif;font-size:16px;font-style:normal;line-height:18px;font-weight:400;color:#218aa6;display:inline;'> M</span> <span><a target='_blank' rel='nofollow' href='tel:7009555505' style='font-family:Calibri,Helvetica,sans-serif;font-size:16px;font-style:normal;line-height:18px;font-weight:400;color:#333333;display:inline;text-decoration:none;'> +91 7009555505&nbsp; </a></span></p>
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
                              <table border='0' cellpadding='0' cellspacing='0' style='font-family:Arial,Helvetica,sans-serif;line-height:0px;font-size:1px;padding:0px!important;border-spacing:0px;margin:0px;border-collapse:collapse;'>
                                 <tbody>
                                    <tr>
                                       <td style='border-collapse:collapse;font-family:Calibri,Helvetica,sans-serif;font-size:16px;font-style:normal;line-height:18px;font-weight:400;padding:0px!important;'>
                                          <p style='margin: 0.04px;'><span style='font-family:Calibri,Helvetica,sans-serif;font-size:16px;font-style:normal;line-height:18px;font-weight:400;color:#218aa6;display:inline;'> E</span> <span style='font-family:Calibri,Helvetica,sans-serif;font-size:16px;font-style:normal;line-height:18px;font-weight:400;color:#333333;display:inline;'>shivamgarg9784@gmail.com&nbsp;</span></p>
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
                              <table border='0' cellpadding='0' cellspacing='0' style='font-family:Arial,Helvetica,sans-serif;line-height:0px;font-size:1px;padding:0px!important;border-spacing:0px;margin:0px;border-collapse:collapse;'>
                                 <tbody>
                                    <tr>
                                       <td style='border-collapse:collapse;padding-bottom:10px;'></td>
                                    </tr>
                                 </tbody>
                              </table>
                              <table border='0' cellpadding='0' cellspacing='0' style='font-family:Arial,Helvetica,sans-serif;line-height:0px;font-size:1px;padding:0px!important;border-spacing:0px;margin:0px;border-collapse:collapse;'>
                                 <tbody>
                                    <tr>
                                       <td style='padding-right: 12px;'>
                                          <p style='margin: 0.04px;'><a style='font-size:0px;line-height:0px;' target='_blank' rel='nofollow' href='https://www.linkedin.com/in/shivamkumargarg/'><img height='24' width='24' alt='linkedin' border='0' src='https://img1.gimm.io/assets/social/96/333333/3/linkedin.png'></a></p>
                                       </td>
                                       <td style='padding-right: 12px;'>
                                          <p style='margin: 0.04px;'><a style='font-size:0px;line-height:0px;' target='_blank' rel='nofollow' href='mailto:shivamgarg9784@gmail.com'><img height='24' width='24' alt='email' border='0' src='https://img1.gimm.io/assets/social/96/333333/3/email.png'></a></p>
                                       </td>
                                       <td style='padding:0px!important;'>
                                          <p style='margin: 0.04px;'><a style='font-size:0px;line-height:0px;' target='_blank' rel='nofollow' href='http://wa.me/918557830584'><img height='24' width='24' alt='whatsapp' border='0' src='https://img1.gimm.io/assets/social/96/333333/3/whatsapp.png'></a></p>
                                       </td>
                                       <td style='padding:0px!important;'></td>
                                    </tr>
                                 </tbody>
                              </table>
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </td>
            </tr>
            <tr>
               <td style='border-collapse:collapse;padding-bottom:16px;'><span></span></td>
            </tr>
         </tbody>
      </table>
   </body>
</html>
  ";
   echo $body;
   $to='shivamgarg9784@gmail.com'; 
   
   $from = 'Shivamgarg9784@gmail.com'; 
   $fromName = $SenderName; 
  $subject     = "Resume for PHP Developer"; // email subject
$pdfLocation = "Shivam.pdf"; // file location
$pdfName     = "Resume Shivam.pdf"; // pdf file name recipient will get
$filetype    = "application/pdf"; // type

// create headers and mime boundry
$eol = PHP_EOL;
$semi_rand     = md5(time());
$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";
$headers       = "From: ".$fromName."<$from$eol>" .
  "MIME-Version: 1.0$eol" .
  "Content-Type: multipart/mixed;$eol" .
  " boundary=\"$mime_boundary\"";

// add html message body
  $message = "--$mime_boundary$eol" .
  "Content-Type: text/html; charset=\"iso-8859-1\"$eol" .
  "Content-Transfer-Encoding: 7bit$eol$eol" .
  $body . $eol;

// fetch pdf
$file = fopen($pdfLocation, 'rb');
$data = fread($file, filesize($pdfLocation));
fclose($file);
$pdf = chunk_split(base64_encode($data));

// attach pdf to email
$message .= "--$mime_boundary$eol" .
  "Content-Type: $filetype;$eol" .
  " name=\"$pdfName\"$eol" .
  "Content-Disposition: attachment;$eol" .
  " filename=\"$pdfName\"$eol" .
  "Content-Transfer-Encoding: base64$eol$eol" .
  $pdf . $eol .
  "--$mime_boundary--";

// Send the email
if(mail($to, $subject, $message, $headers)) {
  echo "The email was sent.";
}
else {
  echo "There was an error sending the mail.";
}
   
   
        
   
    

// $sql="UPDATE employee SET gender = CASE
//     WHEN gender = 'Male' THEN 'Female'
//     WHEN gender = 'Female' THEN 'Male'
//     END";
//     mysqli_query($conn,$sql);
// $begin = new DateTime('2010-05-01');
// $end = new DateTime('2011-06-10');

// for($i = $begin; $i <= $end; $i->modify('+1 day'))
// {
//   if ($i->format("l")=='Monday') 
//   {
//     echo $i->format("l Y-m-d");
//     $i->modify('+6 day');
//   }

// }
 // print_r($period);

// $a=0;
// for ($i='A'; $i <'Z' ; $i++) 
// { 
//   $a++;
//   if ($a%2==0) 
//   {
//     $sql="insert into employee (name,gender) values ('$i','Male')";
//   }
//   else
//   {
//     $sql="insert into employee (name,gender) values ('$i','Female')";

//   }
// mysqli_query($conn,$sql);
//   echo "<br>".$sql;
// }
//     $sql="insert into employee (name,gender) values ('$i','Male')";
// mysqli_query($conn,$sql);
//    echo $i;




// $arr=[0,1,1,0,1,0,1];
// $count0=0;
// $count1=0;
// foreach ($arr as $i => $value) 
// {
//   if($arr[$i]==1)
//   {
//     $count1++;
//   }
//   else
//   {
//     $count0++;
//   }
// }
// $arr=array();
// for ($i=0; $i < $count0+$count1 ; $i++) 
// { 
//   if ($i<$count0) 
//   {
//     $arr[]=0;
//   }
//   else
//   {
//     $arr[]=1;
//   }
// }
// print_r($arr);








?>