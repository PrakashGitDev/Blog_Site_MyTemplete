<?php include 'includes/header.php';?>
<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require('PHPMailer/Exception.php');
require('PHPMailer/SMTP.php');
require('PHPMailer/PHPMailer.php');

if (isset($_POST['submit'])) {
    $subject = $_POST['subject'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $message = $_POST['msg']; 


//Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
       // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'cof.nep@gmail.com';                     //SMTP username
        $mail->Password   = '9812303937P';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('cof.nep@gmail.com', 'Do not Reply');
        $mail->addAddress('kabishbrt@gmail.com');     //Add a recipient
                      //Name is optional
        

           //Optional name

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body    = 'Name: <b>'.$name.' </b> <br> Number: <b>'.$number.' </b> <br> Email:<b>'.$email. ' </b><br><br> Message <br>:'. $message; 

        $mail->send();
        echo "<script>alert('Message has been sent');</script>";
    } catch (Exception $e) {
        echo "<script>alert('message could not be sent: {$mail->ErrorInfo}');</script>";
    }

}
?>
<br><br><br><br><br>
<section class="container" id="posts">

        <div>
            <section class="contact" id="contact">
                <form method="post">
                    <h3>Contact Me</h3>
                    <div class="inputBox">
                        <input type="text" name="name" placeholder="name">
                        <input type="email" name="email" placeholder="email">
                    </div>
                    <div class="inputBox">
                        <input type="number" name="number" placeholder="number">
                        <input type="text" name="subject" placeholder="subject">
                    </div>
                    <textarea name="msg" placeholder="message" id="" cols="30" rows="10"></textarea>
                    <input type="submit" name="submit" value="Send Message" class="btn">
                </form>
            </section>
        </div>


        <?php include 'includes/sidebar.php'; ?>

    </section>


    <!-- contact section ends -->
<?php include 'includes/footer.php';?>