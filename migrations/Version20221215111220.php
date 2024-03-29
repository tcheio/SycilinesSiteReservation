<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221215111220 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE participer (id INT AUTO_INCREMENT NOT NULL, id_type_id INT NOT NULL, id_reservation_id INT NOT NULL, nombre INT NOT NULL, INDEX IDX_EDBE16F81BD125E3 (id_type_id), INDEX IDX_EDBE16F885542AE1 (id_reservation_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE participer ADD CONSTRAINT FK_EDBE16F81BD125E3 FOREIGN KEY (id_type_id) REFERENCES type (id)');
        $this->addSql('ALTER TABLE participer ADD CONSTRAINT FK_EDBE16F885542AE1 FOREIGN KEY (id_reservation_id) REFERENCES reservation (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE participer DROP FOREIGN KEY FK_EDBE16F81BD125E3');
        $this->addSql('ALTER TABLE participer DROP FOREIGN KEY FK_EDBE16F885542AE1');
        $this->addSql('DROP TABLE participer');
    }
}
