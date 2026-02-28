<?php

namespace App\Service;

use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Psr\Log\LoggerInterface;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Cours;

class EmailNotificationService
{
    private $mailer;
    private $logger;
    private $entityManager;

    public function __construct(MailerInterface $mailer, LoggerInterface $logger, EntityManagerInterface $entityManager)
    {
        $this->mailer = $mailer;
        $this->logger = $logger;
        $this->entityManager = $entityManager;
    }

    /**
     * Sends email notifications to all students when a new course is added.
     */
    public function notifyStudentsOfNewCourse(Cours $cours): void
    {
        try {
            // Get all users with role 'Etudiant' (as defined in Users entity)
            $students = $this->entityManager->getRepository(\App\Entity\Users::class)
                ->createQueryBuilder('u')
                ->where('u.role = :role')
                ->setParameter('role', 'Etudiant')
                ->getQuery()
                ->getResult();

            error_log("Email Notification: Found " . count($students) . " students with role Etudiant.");
            file_put_contents('email_debug.log', "[" . date('Y-m-d H:i:s') . "] Found " . count($students) . " students\n", FILE_APPEND);

            if (empty($students)) {
                $this->logger->info('No students found to notify.');
                error_log("Email Notification: No students found to notify.");
                file_put_contents('email_debug.log', "[" . date('Y-m-d H:i:s') . "] No students found\n", FILE_APPEND);
                return;
            }

            foreach ($students as $student) {
                if (!$student->getEmail()) {
                    error_log("Email Notification: Student " . $student->getNom() . " has no email.");
                    continue;
                }

                error_log("Email Notification: Preparing email for " . $student->getEmail());

                $email = (new Email())
                    ->from('yasminegregba614@gmail.com')
                    ->to($student->getEmail())
                    ->subject('🎓 Nouveau cours disponible : ' . $cours->getTitre())
                    ->html($this->generateEmailHtml($cours, $student));

                $this->mailer->send($email);
                $this->logger->info('Email sent to: ' . $student->getEmail());
                error_log("Email Notification: Email sent to: " . $student->getEmail());
            }

            $this->logger->info('Successfully notified ' . count($students) . ' students about new course: ' . $cours->getTitre());
        }
        catch (\Exception $e) {
            $this->logger->error('Failed to send email notifications: ' . $e->getMessage());
            error_log("Email Notification: FAILED - " . $e->getMessage());
        }
    }

    private function generateEmailHtml(Cours $cours, $student): string
    {
        return sprintf('
            <div style="font-family: Arial, sans-serif; max-width: 600px; margin: 0 auto; padding: 20px; background: #f8fafc;">
                <div style="background: white; border-radius: 16px; padding: 40px; box-shadow: 0 4px 6px rgba(0,0,0,0.1);">
                    <h2 style="color: #1e293b; margin-bottom: 20px;">Bonjour %s !</h2>
                    <p style="color: #64748b; font-size: 16px; line-height: 1.6;">
                        Nous sommes ravis de vous annoncer qu\'un nouveau cours vient d\'être ajouté à notre plateforme LearnFlex !
                    </p>
                    
                    <div style="background: #f1f5f9; padding: 20px; border-radius: 12px; margin: 30px 0;">
                        <h3 style="color: #97c3a2; margin: 0 0 10px 0;">📚 %s</h3>
                        <p style="color: #64748b; margin: 10px 0;">%s</p>
                        <div style="color: #94a3b8; font-size: 14px; margin-top: 15px;">
                            <span>⏱️ %s</span> • <span>🌍 %s</span> • <span>💵 %s USD</span>
                        </div>
                    </div>
                    
                    <p style="color: #64748b; font-size: 16px; line-height: 1.6;">
                        Ne manquez pas cette opportunité d\'enrichir vos connaissances. Connectez-vous dès maintenant pour découvrir ce cours !
                    </p>
                    
                    <div style="text-align: center; margin-top: 30px;">
                        <a href="http://localhost:8000/etudiant/matiere" 
                           style="background: #97c3a2; color: white; padding: 14px 32px; border-radius: 8px; text-decoration: none; font-weight: 600; display: inline-block;">
                            Découvrir le cours
                        </a>
                    </div>
                    
                    <p style="color: #94a3b8; font-size: 12px; margin-top: 40px; text-align: center;">
                        © 2026 LearnFlex - Plateforme d\'apprentissage en ligne
                    </p>
                </div>
            </div>
        ',
            $student->getNom() . ' ' . $student->getPrenom(),
            htmlspecialchars($cours->getTitre()),
            htmlspecialchars(substr($cours->getDescription(), 0, 200)) . '...',
            htmlspecialchars($cours->getDureeTotale()),
            htmlspecialchars($cours->getLangue()),
            htmlspecialchars($cours->getPrix())
        );
    }
}
