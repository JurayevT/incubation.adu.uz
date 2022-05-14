<?php
if (isset($_POST['submit']))
{
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $content = $_POST['message'];

    $to = 'aduinkubatsiya@gmail.com';
    $subject = 'Ro\'yxatdan o\'tgan foydalanuvchi ma\'lumotlari.';
    $message = '<h1>Foydalanuvchi ma\'lumotlari</h1>';
    $message.= '<p>Familiyasi\t=>\t'.$surname.'</p>';
    $message.= '<p>Ismi\t=>\t'.$name.'</p>';
    $message.= '<p>Telefoni\t=>\t'.$phone.'</p>';
    $message.= '<p>Pochtasi\t=>\t'.$phone.'</p>';
    $message.= '<p>Familiyasi\t=>\t'.$surname.'</p>';
    $message.= '<h2>Asosiy xabar:</h2><p>'.$content.'</p>';

    $headers = "From: Jo\'natuvchi ".$email."\r\n";
    $headers.= "Reply-to: aduinkubatsiya@gmail.com\r\n";
    $headers.= "Content-type: text/html\r\n";

    $xabar = mail($to, $subject, $message, $headers);
    
    if ($xabar) {
        echo "Pochtaga xabar yuborildi!";
    }
}

?>