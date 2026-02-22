<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class TestController extends AbstractController
{
   #[Route('/test-mail')]
public function testMail()
{
    $mail = new \PHPMailer\PHPMailer\PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'emnagarbaa200@gmail.com';
        $mail->Password = 'ynxymuhlivrbaugi';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->setFrom('emnagarbaa200@gmail.com', 'LearnFlex+');
        $mail->addAddress('emnagarbaa200@gmail.com');

        $mail->Subject = 'Test';
        $mail->Body = 'Mail fonctionne !';

        $mail->send();
        return new Response("MAIL ENVOYÉ");
    } catch (\Exception $e) {
        return new Response($mail->ErrorInfo);
    }
}


}
