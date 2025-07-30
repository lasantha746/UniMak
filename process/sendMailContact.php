<?php

require "../packeg/SMTP.php";
require "../packeg/PHPMailer.php";
require "../packeg/Exception.php";

use PHPMailer\PHPMailer\PHPMailer;

$namec = $_POST["namec"];
$emailc = $_POST["emailc"];
$mobilec = $_POST["mobilec"];
$messagec = $_POST["messagec"];
$product_title = isset($_POST["product_title"]) ? $_POST["product_title"] : null;
$product_img = isset($_POST["product_img"]) ? $_POST["product_img"] : null;

$productSection = "";

if ($product_title && $product_img) {
    $productSection = "
        <h4>Product Inquiry:</h4>
        <p><strong>Product Name:</strong> $product_title</p>
        <img src='$product_img' style='width: 200px; height: auto; border:1px solid #ddd; border-radius:5px;' />
        <br><br>
    ";
}


if (empty($namec)) {
    echo ("Please Enter Name");
} else if (empty($emailc)) {
    echo ("Please Enter Email");
} else if (!filter_var($emailc, FILTER_VALIDATE_EMAIL)) {
    echo ("Email Address is Invalid");
} else if (empty($mobilec)) {
    echo ("Please Enter mobile");
} else if (empty($messagec)) {
    echo ("Please Enter message");
} else {

    $sendMail = "info@unimak.lk";
    $passcode = "UniMak@2025";
    $mailTitle = "Contact Information";
    $receiver = "info@unimak.lk";

    $msg2 = "
    <!DOCTYPE html>
    <html>
    
    <head>
        <style>
            .email-container {
                font-family: Arial, sans-serif;
                color: #333;
                line-height: 1.6;
            }
    
            .email-header {
                background-color: #f4f4f4;
                padding: 10px;
                display: flex;
                width: 100%;
                flex-direction: row;
                align-items: center;
                font-size: 24px;
            }
    
            .box01 {
                width: 20%;
                padding-left: 15px;
            }
    
            .box02 {
                width: 80%;
                text-align: center;
                padding-right: 15%;
                padding-top: 10px;
            }
    
            .email-body {
                padding: 20px;
                padding-left: 80px;
            }
    
            .email-footer {
                background-color: #f4f4f4;
                padding: 10px;
                text-align: center;
                font-size: 12px;
            }
    
            .button {
                display: inline-block;
                padding: 10px 20px;
                font-size: 16px;
                margin: 20px 0;
                text-decoration: none;
                background-color: #000 !important;
                color: #ffffff !important;
                border-radius: 5px;
            }
    
            .tabspace {
                margin-left: 40px;
            }
    
            .imgiconlogo {
                width: 150px;
                margin-top: 10px;
            }
        </style>
    </head>
    
    <body>
        <div class='email-container'>
            <div class='email-header'>
                <div class='box01'>
                    <img class='imgiconlogo' src='https://unimak.lk/images/logo.png' alt=''>
    
                </div>
                <div class='box02'>
                Contact Information
                </div>
    
            </div>
            <div class='email-body'>
            <p>Dear Support Team,</p>
            <p>You have received a new contact inquiry with the following details:</p>
                <div class='tabspace'>
                    <p><strong>Name:</strong> $namec</p>
                    <p><strong>Email:</strong> $emailc</p>
                    <p><strong>Mobile:</strong> $mobilec</p>
                    <p><strong>Messagec:</strong> $messagec</p>
                     $productSection
                </div>
            </div>
            <div class='email-footer'>
                &copy; 2025 UniMak. All rights reserved.
            </div>
        </div>
    </body>
    
    </html>
    ";

    // email code
    $mail = new PHPMailer;
    $mail->IsSMTP();
    $mail->Host = 'unimak.lk';
    $mail->SMTPAuth = true;
    $mail->Username = $sendMail;
    $mail->Password = $passcode;
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    $mail->setFrom($sendMail, 'Unimak Website');
    $mail->addReplyTo($emailc, $namec);
    $mail->addAddress($receiver);
    $mail->isHTML(true);
    $mail->Subject = 'Contact Information';
    $mail->Body = $msg2;


    if (!$mail->send()) {
        echo 'Email sending failed';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo '1';
    }
}
