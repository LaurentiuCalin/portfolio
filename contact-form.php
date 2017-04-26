<?php
/**
 * Created by PhpStorm.
 * User: calin
 * Date: 26-Apr-17
 * Time: 11:52 PM
 */
session_start();

if (isset($_POST['name']) && !empty($_POST['name'])) {
    $name = $_POST['name'];
    if (isset($_POST['email']) && !empty($_POST['email'])) {
        $email = $_POST['email'];
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            if (isset($_POST['subject']) && !empty($_POST['subject'])) {
                $subject = $_POST['subject'];
                if (isset($_POST['message']) && !empty($_POST['message'])) {
                    $message = $_POST['message'];
                    if (isset($_POST['mobile']) && !empty($_POST['mobile'])) {
                        $mobile = $_POST['mobile'];
                    } else {
                        $mobile = 'no number provided';
                    }
                    $to = "durnea.calin@gmail.com";
                    $subject = "Message from laurd.xyz contact form";

                    $content = "
<html>
<head>
<title>Message from laurd.xyz form</title>
</head>
<body>
<p>Message from portfolio website</p>
<table>
<tr>
<th>name</th>
<th>email</th>
<th>subject</th>
<th>phone no.</th>
<th>message</th>
</tr>
<tr>
<td>$name</td>
<td>$email</td>
<td>$subject</td>
<td>$mobile</td>
<td>$message</td>
</tr>
</thead>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
                    $headers = "MIME-Version: 1.0" . "\r\n";
                    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
                    $headers .= 'From: <laurd@contact.xyz>' . "\r\n";

                    if (mail($to, $subject, $content, $headers)) {
                        $_SESSION['success'] = true;
                        header('location:contact.php');
                    } else {
                        $_SESSION['success'] = false;
                        header('location:contact.php');
                    }
                } else {
                    $_SESSION['error'] = "Please enter a message";
                    header('location:contact.php');
                }
            } else {
                $_SESSION['error'] = "Please enter a subject";
                header('location:contact.php');
            }
        } else {
            $_SESSION['error'] = "Please enter a valid email";
            header('location:contact.php');
        }
    } else {
        $_SESSION['error'] = "Please enter your email";
        header('location:contact.php');
    }
} else {
    $_SESSION['error'] = "Please enter your name";
    header('location:contact.php');
}

//if (isset($_POST['']) && !empty($_POST[''])){
//
//} else{
//    $_SESSION['error'] = "";
//    header('location:contact.php');
//}