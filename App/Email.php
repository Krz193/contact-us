<?php 
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    //Load Composer's autoloader
    require 'vendor/autoload.php';

class Email {
    private $mail;

    public function __construct()
    {

        $this->mail = new PHPMailer();
        $this->mail->isSMTP();
        $this->mail->Host = 'smtp.gmail.com';
        $this->mail->SMTPAuth = true;
        $this->mail->Port = 587;
        $this->mail->Username = 'krzy1.yt@gmail.com';
        $this->mail->Password = 'nhil lcrb jzll exok';
    }

    public function sendEmail(array $data) {
        //Recipients
        $this->mail->setFrom('userfromnowhere@domain.com', $data["email"], 0);
        $this->mail->addAddress('1st.nekolin@gmail.com');     //email tujuan

        //Content
        $this->mail->isHTML(true);   //Set email format to HTML
        $this->mail->Subject = 'Email sent from contact us page';
        $this->mail->Body    = $data["body"];

        $this->mail->send();
        echo 'Message has been sent';
    }
}

$Email = new Email();
// try{
//     $Email->sendEmail();
// } catch (Exception $e) {
//     echo "Message could not be sent. Mailer Error: {$Email->getMail()->ErrorInfo}";
// } 