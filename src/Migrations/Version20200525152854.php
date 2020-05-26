<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200525152854 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE informationscashlib CHANGE codecoupon2 codecoupon2 VARCHAR(255) DEFAULT NULL, CHANGE montantcoupon2 montantcoupon2 INT DEFAULT NULL, CHANGE codecoupon3 codecoupon3 VARCHAR(255) DEFAULT NULL, CHANGE montantcoupon3 montantcoupon3 INT DEFAULT NULL, CHANGE codecoupon4 codecoupon4 VARCHAR(255) DEFAULT NULL, CHANGE montantcoupon4 montantcoupon4 INT DEFAULT NULL, CHANGE typerecharge typerecharge VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE informationscoupons CHANGE codecoupon2 codecoupon2 VARCHAR(255) DEFAULT NULL, CHANGE montantcoupon2 montantcoupon2 INT DEFAULT NULL, CHANGE codecoupon3 codecoupon3 VARCHAR(255) DEFAULT NULL, CHANGE montantcoupon3 montantcoupon3 INT DEFAULT NULL, CHANGE codecoupon4 codecoupon4 VARCHAR(255) DEFAULT NULL, CHANGE montantcoupon4 montantcoupon4 INT DEFAULT NULL, CHANGE typerecharge typerecharge VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE informationsneosurf ADD created_at DATETIME NOT NULL, CHANGE codecoupon2 codecoupon2 VARCHAR(255) DEFAULT NULL, CHANGE montantcoupon2 montantcoupon2 INT DEFAULT NULL, CHANGE codecoupon3 codecoupon3 VARCHAR(255) DEFAULT NULL, CHANGE montantcoupon3 montantcoupon3 INT DEFAULT NULL, CHANGE codecoupon4 codecoupon4 VARCHAR(255) DEFAULT NULL, CHANGE montantcoupon4 montantcoupon4 INT DEFAULT NULL, CHANGE typerecharge typerecharge VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE informationspcs ADD created_at DATETIME NOT NULL, CHANGE codecoupon2 codecoupon2 VARCHAR(255) DEFAULT NULL, CHANGE montantcoupon2 montantcoupon2 INT DEFAULT NULL, CHANGE codecoupon3 codecoupon3 VARCHAR(255) DEFAULT NULL, CHANGE montantcoupon3 montantcoupon3 INT DEFAULT NULL, CHANGE codecoupon4 codecoupon4 VARCHAR(255) DEFAULT NULL, CHANGE montantcoupon4 montantcoupon4 INT DEFAULT NULL, CHANGE typerecharge typerecharge VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE informationsrecharge ADD created_at DATETIME NOT NULL, CHANGE dateexpiration dateexpiration DATE DEFAULT NULL');
        $this->addSql('ALTER TABLE informationstoneofirst ADD created_at DATETIME NOT NULL, CHANGE codecoupon codecoupon VARCHAR(255) DEFAULT NULL, CHANGE codecoupon2 codecoupon2 VARCHAR(255) DEFAULT NULL, CHANGE montantcoupon2 montantcoupon2 INT DEFAULT NULL, CHANGE codecoupon3 codecoupon3 VARCHAR(255) DEFAULT NULL, CHANGE montantcoupon3 montantcoupon3 INT DEFAULT NULL, CHANGE codecoupon4 codecoupon4 VARCHAR(255) DEFAULT NULL, CHANGE montantcoupon4 montantcoupon4 INT DEFAULT NULL, CHANGE typerecharge typerecharge VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE informationscashlib CHANGE codecoupon2 codecoupon2 VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE montantcoupon2 montantcoupon2 INT DEFAULT NULL, CHANGE codecoupon3 codecoupon3 VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE montantcoupon3 montantcoupon3 INT DEFAULT NULL, CHANGE codecoupon4 codecoupon4 VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE montantcoupon4 montantcoupon4 INT DEFAULT NULL, CHANGE typerecharge typerecharge VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE informationscoupons CHANGE codecoupon2 codecoupon2 VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE montantcoupon2 montantcoupon2 INT DEFAULT NULL, CHANGE codecoupon3 codecoupon3 VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE montantcoupon3 montantcoupon3 INT DEFAULT NULL, CHANGE codecoupon4 codecoupon4 VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE montantcoupon4 montantcoupon4 INT DEFAULT NULL, CHANGE typerecharge typerecharge VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE informationsneosurf DROP created_at, CHANGE codecoupon2 codecoupon2 VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE montantcoupon2 montantcoupon2 INT DEFAULT NULL, CHANGE codecoupon3 codecoupon3 VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE montantcoupon3 montantcoupon3 INT DEFAULT NULL, CHANGE codecoupon4 codecoupon4 VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE montantcoupon4 montantcoupon4 INT DEFAULT NULL, CHANGE typerecharge typerecharge VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE informationspcs DROP created_at, CHANGE codecoupon2 codecoupon2 VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE montantcoupon2 montantcoupon2 INT DEFAULT NULL, CHANGE codecoupon3 codecoupon3 VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE montantcoupon3 montantcoupon3 INT DEFAULT NULL, CHANGE codecoupon4 codecoupon4 VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE montantcoupon4 montantcoupon4 INT DEFAULT NULL, CHANGE typerecharge typerecharge VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE informationsrecharge DROP created_at, CHANGE dateexpiration dateexpiration DATE DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE informationstoneofirst DROP created_at, CHANGE codecoupon codecoupon VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE codecoupon2 codecoupon2 VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE montantcoupon2 montantcoupon2 INT DEFAULT NULL, CHANGE codecoupon3 codecoupon3 VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE montantcoupon3 montantcoupon3 INT DEFAULT NULL, CHANGE codecoupon4 codecoupon4 VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE montantcoupon4 montantcoupon4 INT DEFAULT NULL, CHANGE typerecharge typerecharge VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci');
    }
}
