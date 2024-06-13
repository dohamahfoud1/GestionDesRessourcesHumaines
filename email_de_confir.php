<?php
    require_once ('connexion_bd.php');
    $requete1 = "select * from candidats where idcand='$id'";
    
    $resultat1 = $pdo->query($requete1);

    if ($candidat = $resultat1->fetch()) {
        //$email = $candidat['idcand'];

        $to = $candidat['email'];
        
        $subject = "INVITATION A UN ENTRETIEN CHEZ GPI ";
        
        $txt = "Madame, Monsieur,

Suite à l’étude de votre candidature, nous avons le plaisir de vous inviter à passer des entretiens physiques dans nos locaux.

Je vous enverrai une invitation dès que j'aurai reçu le calendrier de disponibilité des managers.

Nous vous invitons à confirmer votre présence, par la simple réponse à cette e-mail.

Nous restons à votre disposition quant aux différentes questions que vous pourriez rencontrer, et nous vous souhaitons une bonne réussite dans cette série d’entretien.

Nous avons hâte de vous voir.

Bien cordialement,

Le service des ressources humaines,

DOHA MAHFOUD
directeur administratif,
gpientreprise@gmail.com";
        
        $headers = "From: GPI" . "\r\n" . "CC: gpientreprise@gmail.com";
    }
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    
    require 'path/to/PHPMailer/src/Exception.php';
    require 'path/to/PHPMailer/src/PHPMailer.php';
    require 'path/to/PHPMailer/src/SMTP.php';

  //Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'localhost';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'dohamahfoud2003@gmail.com';                     //SMTP username
    $mail->Password   = 'oilyxjepwvofreyj';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('dohamahfoud2003@gmail.com', 'Mailer');
    $mail->addAddress( $to, 'Joe User');     //Add a recipient   
    $mail->addReplyTo('dohamahfoud2003@gmail.com', 'Information');
    $mail->addCC('dohamahfoud2003@gmail.com');
    $mail->addBCC('dohamahfoud2003@gmail.com');

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $subject ;
    $mail->Body    =  $txt;

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
$mail->setLanguage('fr', '/optional/path/to/language/directory/');
?>

<html>
  <head>
      
    </head>
     <body>
  
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        swal({
          icon: "success",
          title: "bon travail !",
          text: "  Un message a été envoyé au candidat !",
          showConfirmButton: true,
          confirmButtonText: "Cerrar",
          closeOnConfirm: false
         }). then(function(result){
            window.location = "recrutment.php";
             })
         </script>

     </body></html>
