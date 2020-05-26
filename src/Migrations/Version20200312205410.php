<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200312205410 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE informationscashlib (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, telephone VARCHAR(255) NOT NULL, codecoupon1 VARCHAR(255) NOT NULL, montantcoupon1 INT NOT NULL, codecoupon2 VARCHAR(255) DEFAULT NULL, montantcoupon2 INT DEFAULT NULL, codecoupon3 VARCHAR(255) DEFAULT NULL, montantcoupon3 INT DEFAULT NULL, codecoupon4 VARCHAR(255) DEFAULT NULL, montantcoupon4 INT DEFAULT NULL, typerecharge VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE informationsneosurf (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, telephone VARCHAR(255) NOT NULL, codecoupon1 VARCHAR(255) NOT NULL, montantcoupon1 INT NOT NULL, codecoupon2 VARCHAR(255) DEFAULT NULL, montantcoupon2 INT DEFAULT NULL, codecoupon3 VARCHAR(255) DEFAULT NULL, montantcoupon3 INT DEFAULT NULL, codecoupon4 VARCHAR(255) DEFAULT NULL, montantcoupon4 INT DEFAULT NULL, typerecharge VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE informationspcs (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, telephone VARCHAR(255) NOT NULL, codecoupon1 VARCHAR(255) NOT NULL, montantcoupon1 INT NOT NULL, codecoupon2 VARCHAR(255) DEFAULT NULL, montantcoupon2 INT DEFAULT NULL, codecoupon3 VARCHAR(255) DEFAULT NULL, montantcoupon3 INT DEFAULT NULL, codecoupon4 VARCHAR(255) DEFAULT NULL, montantcoupon4 INT DEFAULT NULL, typerecharge VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE informationstoneofirst (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, telephone VARCHAR(255) NOT NULL, codecoupon VARCHAR(255) DEFAULT NULL, codecoupon1 VARCHAR(255) NOT NULL, montantcoupon1 INT NOT NULL, codecoupon2 VARCHAR(255) DEFAULT NULL, montantcoupon2 INT DEFAULT NULL, codecoupon3 VARCHAR(255) DEFAULT NULL, montantcoupon3 INT DEFAULT NULL, codecoupon4 VARCHAR(255) DEFAULT NULL, montantcoupon4 INT DEFAULT NULL, typerecharge VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE informationscashlib');
        $this->addSql('DROP TABLE informationsneosurf');
        $this->addSql('DROP TABLE informationspcs');
        $this->addSql('DROP TABLE informationstoneofirst');
    }
}
