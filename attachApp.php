
      <?php
      use PHPMailer\PHPMailer\PHPMailer;
      use PHPMailer\PHPMailer\Exception;

      require 'vendor/autoload.php';

      if (isset($_POST['submit'])) {

        // Getting the input from the form
        $personName = $_POST['username'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $title = $_POST['title'];
        // $subject =  $_POST['subject'];
        $subject =  'Maners';
        $message = $_POST['message'];
        
        
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;

        $mail->Username = 'petetony44@gmail.com';
        $mail->Password = 'tony_Pet!8';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;
        $mail->isHTML(true);

        $toMe = "petetony44@gmail.com";

        $mail->setFrom('petetony44@gmail.com', 'Peter Tony');
        $mail->addAddress($toMe); // Destination address
 
        $mail->Subject = $subject;
        $mail->Body = "<strong> Sender Name:</strong> $personName <br>
                      <strong>Title:</strong>  $title <br>
                      <strong>Phone Number:</strong>  $phone <br>
                      <strong>Sender Email:</strong>  $email <br>
                      <strong>Website: </strong> Hoperising Contact Form <br>
                      <strong> Subject:</strong> $subject <hr>"
          . $message;

        // file upload code below
        $msg = '';
         if (array_key_exists('userfile', $_FILES)) {
          //Attach multiple files one by one
          for ($ct = 0, $ctMax = count($_FILES['userfile']['tmp_name']); $ct < $ctMax; $ct++) {
            //Extract an extension from the provided filename
            $ext = PHPMailer::mb_pathinfo($_FILES['userfile']['name'][$ct], PATHINFO_EXTENSION);
            //Define a safe location to move the uploaded file to, preserving the extension
            $uploadfile = tempnam(sys_get_temp_dir(), hash('sha256', $_FILES['userfile']['name'][$ct])) . '.' . $ext;
            $filename = $_FILES['userfile']['name'][$ct];
            if (move_uploaded_file($_FILES['userfile']['tmp_name'][$ct], $uploadfile)) {
              if (!$mail->addAttachment($uploadfile, $filename)) {
                $msg .= 'Failed to attach file ' . $filename;
              }
            } else {
              $msg .= 'Failed to move file to ' . $uploadfile;
            }
          }
           $mail->send();

          if (!$mail->send()) {
            $msg .= 'Mailer Error: ';
          } else {
            $msg .= 'Message sent!';
          }
         }
      }

      ?>