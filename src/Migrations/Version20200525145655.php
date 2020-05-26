<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200525145655 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE property (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE informationscashlib ADD created_at DATETIME NOT NULL, CHANGE codecoupon2 codecoupon2 VARCHAR(255) DEFAULT NULL, CHANGE montantcoupon2 montantcoupon2 INT DEFAULT NULL, CHANGE codecoupon3 codecoupon3 VARCHAR(255) DEFAULT NULL, CHANGE montantcoupon3 montantcoupon3 INT DEFAULT NULL, CHANGE codecoupon4 codecoupon4 VARCHAR(255) DEFAULT NULL, CHANGE montantcoupon4 montantcoupon4 INT DEFAULT NULL, CHANGE typerecharge typerecharge VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE informationscoupons CHANGE codecoupon2 codecoupon2 VARCHAR(255) DEFAULT NULL, CHANGE montantcoupon2 montantcoupon2 INT DEFAULT NULL, CHANGE codecoupon3 codecoupon3 VARCHAR(255) DEFAULT NULL, CHANGE montantcoupon3 montantcoupon3 INT DEFAULT NULL, CHANGE codecoupon4 codecoupon4 VARCHAR(255) DEFAULT NULL, CHANGE montantcoupon4 montantcoupon4 INT DEFAULT NULL, CHANGE typerecharge typerecharge VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE informationsneosurf CHANGE codecoupon2 codecoupon2 VARCHAR(255) DEFAULT NULL, CHANGE montantcoupon2 montantcoupon2 INT DEFAULT NULL, CHANGE codecoupon3 codecoupon3 VARCHAR(255) DEFAULT NULL, CHANGE montantcoupon3 montantcoupon3 INT DEFAULT NULL, CHANGE codecoupon4 codecoupon4 VARCHAR(255) DEFAULT NULL, CHANGE montantcoupon4 montantcoupon4 INT DEFAULT NULL, CHANGE typerecharge typerecharge VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE informationspcs CHANGE codecoupon2 codecoupon2 VARCHAR(255) DEFAULT NULL, CHANGE montantcoupon2 montantcoupon2 INT DEFAULT NULL, CHANGE codecoupon3 codecoupon3 VARCHAR(255) DEFAULT NULL, CHANGE montantcoupon3 montantcoupon3 INT DEFAULT NULL, CHANGE codecoupon4 codecoupon4 VARCHAR(255) DEFAULT NULL, CHANGE montantcoupon4 montantcoupon4 INT DEFAULT NULL, CHANGE typerecharge typerecharge VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE informationsrecharge CHANGE dateexpiration dateexpiration DATE DEFAULT NULL');
        $this->addSql('ALTER TABLE informationstoneofirst CHANGE codecoupon codecoupon VARCHAR(255) DEFAULT NULL, CHANGE codecoupon2 codecoupon2 VARCHAR(255) DEFAULT NULL, CHANGE montantcoupon2 montantcoupon2 INT DEFAULT NULL, CHANGE codecoupon3 codecoupon3 VARCHAR(255) DEFAULT NULL, CHANGE montantcoupon3 montantcoupon3 INT DEFAULT NULL, CHANGE codecoupon4 codecoupon4 VARCHAR(255) DEFAULT NULL, CHANGE montantcoupon4 montantcoupon4 INT DEFAULT NULL, CHANGE typerecharge typerecharge VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE property');
        $this->addSql('ALTER TABLE informationscashlib DROP created_at, CHANGE codecoupon2 codecoupon2 VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE montantcoupon2 montantcoupon2 INT DEFAULT NULL, CHANGE codecoupon3 codecoupon3 VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE montantcoupon3 montantcoupon3 INT DEFAULT NULL, CHANGE codecoupon4 codecoupon4 VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE montantcoupon4 montantcoupon4 INT DEFAULT NULL, CHANGE typerecharge typerecharge VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE informationscoupons CHANGE codecoupon2 codecoupon2 VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE montantcoupon2 montantcoupon2 INT DEFAULT NULL, CHANGE codecoupon3 codecoupon3 VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE montantcoupon3 montantcoupon3 INT DEFAULT NULL, CHANGE codecoupon4 codecoupon4 VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE montantcoupon4 montantcoupon4 INT DEFAULT NULL, CHANGE typerecharge typerecharge VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE informationsneosurf CHANGE codecoupon2 codecoupon2 VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE montantcoupon2 montantcoupon2 INT DEFAULT NULL, CHANGE codecoupon3 codecoupon3 VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE montantcoupon3 montantcoupon3 INT DEFAULT NULL, CHANGE codecoupon4 codecoupon4 VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE montantcoupon4 montantcoupon4 INT DEFAULT NULL, CHANGE typerecharge typerecharge VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE informationspcs CHANGE codecoupon2 codecoupon2 VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE montantcoupon2 montantcoupon2 INT DEFAULT NULL, CHANGE codecoupon3 codecoupon3 VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE montantcoupon3 montantcoupon3 INT DEFAULT NULL, CHANGE codecoupon4 codecoupon4 VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE montantcoupon4 montantcoupon4 INT DEFAULT NULL, CHANGE typerecharge typerecharge VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE informationsrecharge CHANGE dateexpiration dateexpiration DATE DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE informationstoneofirst CHANGE codecoupon codecoupon VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE codecoupon2 codecoupon2 VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE montantcoupon2 montantcoupon2 INT DEFAULT NULL, CHANGE codecoupon3 codecoupon3 VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE montantcoupon3 montantcoupon3 INT DEFAULT NULL, CHANGE codecoupon4 codecoupon4 VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE montantcoupon4 montantcoupon4 INT DEFAULT NULL, CHANGE typerecharge typerecharge VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci');
    }
}
