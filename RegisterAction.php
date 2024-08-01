<?php
session_start();
require 'Config.php';
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Capture user input
$name = mysqli_real_escape_string($con, $_POST["Username"]);
$email = mysqli_real_escape_string($con, $_POST["Email"]);
$pass = mysqli_real_escape_string($con, $_POST["Pass"]);
$confirm = mysqli_real_escape_string($con, $_POST["Confirm"]);

// Validate inputs and check for existing user
// ... (validation code here)

// If validation passes, insert user and send verification email
if ($pass == $confirm) {
    $hash = hash("sha256", $pass);
    $salt = substr(md5(uniqid(rand(), true)), 0, 3);
    $finalPass = hash("sha256", $hash . $salt);
    $token = bin2hex(random_bytes(32));
    
    $query = "INSERT INTO Users (Username, Email, Password, Salt, RoleId, VerificationToken) 
              VALUES ('$name', '$email', '$finalPass', '$salt', 2, '$token')";
    $result = mysqli_query($con, $query);
    
    if ($result) {
		$verificationLink = "http://localhost/Hike2/verify.php?email=" . urlencode($email) . "&token=" . urlencode($token);
		$subject = "Email Verification";
        $message = "Click this link to verify your email: <a href='$verificationLink'>$verificationLink</a>";
        
        $mail = new PHPMailer(true);
        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'fyfic18@gmail.com';  // SMTP username
            $mail->Password = 'coswytytefkadcaq';  // SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;
            
            $mail->setFrom('no-reply@yourwebsite.com', 'Mailer');
            $mail->addAddress($email, $name);
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body    = $message;
            
            $mail->send();
            echo 'Registration successful. Please check your email to verify your account.';
        } catch (Exception $e) {
            error_log("Message could not be sent. Mailer Error: {$mail->ErrorInfo}");
            echo "Registration successful, but failed to send verification email.";
        }
    } else {
        echo "Database error: " . mysqli_error($con);
    }
} else {
    echo "Passwords do not match.";
}
?>
