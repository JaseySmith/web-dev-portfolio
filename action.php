<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

$nameAlert = '';
$emailAlert = '';
$error = '';

// include '../secure/secure.php';



if(isset($_POST['submit'])) {
    $name = test_input($_POST['name']);
    $email = test_input($_POST['email']);
    $message = test_input($_POST['message']);

    // check for any empty input
    if (!empty($name) && !empty($email)) {

        // check if name has only letters and whitespace
        if (preg_match("/^[a-zA-Z\s]*$/",$name)) {

            // check if email address is formatted correctly
            if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {

                // send email
                try{
                    $mail->isSMTP();
                    $mail->Host = 'gator4140.hostgator.com';
                    $mail->SMTPAuth = true;
                    $mail->Username = $user; // Email address which you want to use as SMTP server
                    $mail->Password = $pass; // Email address Password
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                    $mail->Port = '25';
            
                    $mail->setFrom($user); // Email address which you used as SMTP server
                    $mail->addAddress('jaseyhsmith@gmail.com'); // Email address where you want to receive emails (you can use any of your email address including the email address which you used as SMTP server)
            
                    $mail->isHTML(true);
                    $mail->Subject = 'Message Received (Contact Page)';
                    $mail->Body = "<h3>Name : $name <br>Email: $email <br>Message : $message</h3>";
            
                    $mail->send();
                    header('location: thanks.php');
                } catch (Exception $e) {
                    $error = '<div class="error">
                                <span><i class="fas fa-exclamation-circle"></i>Error: Something went wrong :(</span>
                            </div>';
                }
            } else {
                $emailAlert = '<div class="inputAlert">
                                <span><i class="fas fa-exclamation-circle"></i>Email: Invalid email format</span>
                            </div>';
            }
        } else {
            $nameAlert = '<div class="inputAlert">
                            <span><i class="fas fa-exclamation-circle"></i>Name: Must only contain letters</span>
                        </div>';
        }
    } elseif (empty($name)) {
        $nameAlert = '<div class="inputAlert">
                        <span><i class="fas fa-exclamation-circle"></i>Name: Please enter your name</span>
                    </div>';
    } elseif (empty($email)) {
        $emailAlert = '<div class="inputAlert">
                        <span><i class="fas fa-exclamation-circle"></i>Email: Please enter your email</span>
                    </div>';
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}



?>