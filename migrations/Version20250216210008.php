<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250216210008 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE blog (id INT AUTO_INCREMENT NOT NULL, author_id INT DEFAULT NULL, description LONGTEXT NOT NULL, content LONGTEXT NOT NULL, image VARCHAR(255) DEFAULT NULL, category VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, title VARCHAR(255) NOT NULL, INDEX IDX_C0155143F675F31B (author_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE blog ADD CONSTRAINT FK_C0155143F675F31B FOREIGN KEY (author_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE user CHANGE niv_difficulte niv_difficulte VARCHAR(255) NOT NULL, CHANGE specialite specialite VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE blog DROP FOREIGN KEY FK_C0155143F675F31B');
        $this->addSql('DROP TABLE blog');
        $this->addSql('ALTER TABLE user CHANGE niv_difficulte niv_difficulte INT DEFAULT NULL, CHANGE specialite specialite VARCHAR(255) DEFAULT NULL');
    }
}
