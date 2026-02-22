<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260222210933 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE attempt (id INT AUTO_INCREMENT NOT NULL, bonnes_reponses INT NOT NULL, total_questions INT NOT NULL, score DOUBLE PRECISION NOT NULL, date_debut DATETIME NOT NULL, date_fin DATETIME DEFAULT NULL, user_id INT NOT NULL, quiz_id INT NOT NULL, INDEX IDX_18EC0266A76ED395 (user_id), INDEX IDX_18EC0266853CD175 (quiz_id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE TABLE challenge (id INT AUTO_INCREMENT NOT NULL, titrec VARCHAR(50) NOT NULL, descriptionc VARCHAR(255) NOT NULL, objectifscore DOUBLE PRECISION NOT NULL, progressionactuelle DOUBLE PRECISION NOT NULL, niveaudifficulte VARCHAR(50) NOT NULL, niveauatteint VARCHAR(50) NOT NULL, typerecomponse VARCHAR(100) NOT NULL, contenurecompense VARCHAR(255) NOT NULL, etat VARCHAR(50) NOT NULL, dated DATE NOT NULL, datef DATE NOT NULL, datelimite DATE NOT NULL, alerte TINYINT NOT NULL, question JSON DEFAULT NULL, images VARCHAR(255) NOT NULL, dernier_score INT NOT NULL, dernier_niveau VARCHAR(255) NOT NULL, reponses JSON DEFAULT \'[]\' NOT NULL, interacty_hash VARCHAR(255) DEFAULT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, examen_id INT NOT NULL, INDEX IDX_D70989515C8659A (examen_id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE TABLE challenge_result (id INT AUTO_INCREMENT NOT NULL, score INT NOT NULL, badges VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, reponses JSON DEFAULT NULL, user_id INT NOT NULL, challenge_id INT NOT NULL, INDEX IDX_E0D762D2A76ED395 (user_id), INDEX IDX_E0D762D298A21AC6 (challenge_id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE TABLE cheat_log (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(50) NOT NULL, count INT NOT NULL, created_at DATETIME NOT NULL, examen_id INT NOT NULL, etudiant_id INT DEFAULT NULL, INDEX IDX_758D45505C8659A (examen_id), INDEX IDX_758D4550DDEAB1A3 (etudiant_id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE TABLE commentaire (id INT AUTO_INCREMENT NOT NULL, contenu VARCHAR(255) NOT NULL, datecre DATE NOT NULL, auteur VARCHAR(50) NOT NULL, nbvue INT NOT NULL, likes INT NOT NULL, examen_id INT NOT NULL, INDEX IDX_67F068BC5C8659A (examen_id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE TABLE examen (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(50) NOT NULL, description VARCHAR(255) NOT NULL, matiere VARCHAR(50) NOT NULL, niveauexamen VARCHAR(50) NOT NULL, datedebut DATE NOT NULL, datefin DATE NOT NULL, duree INT NOT NULL, nbquestion INT NOT NULL, scoretotal DOUBLE PRECISION NOT NULL, coefficient DOUBLE PRECISION NOT NULL, typeexamen VARCHAR(50) NOT NULL, etat VARCHAR(50) NOT NULL, pdf VARCHAR(255) NOT NULL, questions LONGTEXT DEFAULT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE TABLE reponse_examen (id INT AUTO_INCREMENT NOT NULL, question VARCHAR(255) NOT NULL, reponse LONGTEXT NOT NULL, date_soumission DATETIME NOT NULL, examen_id INT NOT NULL, etudiant_id INT DEFAULT NULL, INDEX IDX_851856755C8659A (examen_id), INDEX IDX_85185675DDEAB1A3 (etudiant_id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE TABLE resultat (id INT AUTO_INCREMENT NOT NULL, score INT NOT NULL, user_id INT NOT NULL, quiz_id INT NOT NULL, INDEX IDX_E7DB5DE2A76ED395 (user_id), INDEX IDX_E7DB5DE2853CD175 (quiz_id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE attempt ADD CONSTRAINT FK_18EC0266A76ED395 FOREIGN KEY (user_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE attempt ADD CONSTRAINT FK_18EC0266853CD175 FOREIGN KEY (quiz_id) REFERENCES quiz (id)');
        $this->addSql('ALTER TABLE challenge ADD CONSTRAINT FK_D70989515C8659A FOREIGN KEY (examen_id) REFERENCES examen (id)');
        $this->addSql('ALTER TABLE challenge_result ADD CONSTRAINT FK_E0D762D2A76ED395 FOREIGN KEY (user_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE challenge_result ADD CONSTRAINT FK_E0D762D298A21AC6 FOREIGN KEY (challenge_id) REFERENCES challenge (id)');
        $this->addSql('ALTER TABLE cheat_log ADD CONSTRAINT FK_758D45505C8659A FOREIGN KEY (examen_id) REFERENCES examen (id)');
        $this->addSql('ALTER TABLE cheat_log ADD CONSTRAINT FK_758D4550DDEAB1A3 FOREIGN KEY (etudiant_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BC5C8659A FOREIGN KEY (examen_id) REFERENCES examen (id)');
        $this->addSql('ALTER TABLE reponse_examen ADD CONSTRAINT FK_851856755C8659A FOREIGN KEY (examen_id) REFERENCES examen (id)');
        $this->addSql('ALTER TABLE reponse_examen ADD CONSTRAINT FK_85185675DDEAB1A3 FOREIGN KEY (etudiant_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE resultat ADD CONSTRAINT FK_E7DB5DE2A76ED395 FOREIGN KEY (user_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE resultat ADD CONSTRAINT FK_E7DB5DE2853CD175 FOREIGN KEY (quiz_id) REFERENCES quiz (id)');
        $this->addSql('ALTER TABLE cours ADD CONSTRAINT FK_FDCA8C9CF46CD258 FOREIGN KEY (matiere_id) REFERENCES matiere (id)');
        $this->addSql('ALTER TABLE users CHANGE is_verified is_verified TINYINT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE attempt DROP FOREIGN KEY FK_18EC0266A76ED395');
        $this->addSql('ALTER TABLE attempt DROP FOREIGN KEY FK_18EC0266853CD175');
        $this->addSql('ALTER TABLE challenge DROP FOREIGN KEY FK_D70989515C8659A');
        $this->addSql('ALTER TABLE challenge_result DROP FOREIGN KEY FK_E0D762D2A76ED395');
        $this->addSql('ALTER TABLE challenge_result DROP FOREIGN KEY FK_E0D762D298A21AC6');
        $this->addSql('ALTER TABLE cheat_log DROP FOREIGN KEY FK_758D45505C8659A');
        $this->addSql('ALTER TABLE cheat_log DROP FOREIGN KEY FK_758D4550DDEAB1A3');
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BC5C8659A');
        $this->addSql('ALTER TABLE reponse_examen DROP FOREIGN KEY FK_851856755C8659A');
        $this->addSql('ALTER TABLE reponse_examen DROP FOREIGN KEY FK_85185675DDEAB1A3');
        $this->addSql('ALTER TABLE resultat DROP FOREIGN KEY FK_E7DB5DE2A76ED395');
        $this->addSql('ALTER TABLE resultat DROP FOREIGN KEY FK_E7DB5DE2853CD175');
        $this->addSql('DROP TABLE attempt');
        $this->addSql('DROP TABLE challenge');
        $this->addSql('DROP TABLE challenge_result');
        $this->addSql('DROP TABLE cheat_log');
        $this->addSql('DROP TABLE commentaire');
        $this->addSql('DROP TABLE examen');
        $this->addSql('DROP TABLE reponse_examen');
        $this->addSql('DROP TABLE resultat');
        $this->addSql('ALTER TABLE cours DROP FOREIGN KEY FK_FDCA8C9CF46CD258');
        $this->addSql('ALTER TABLE users CHANGE is_verified is_verified TINYINT DEFAULT 0 NOT NULL');
    }
}
