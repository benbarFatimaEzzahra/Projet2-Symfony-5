<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221226165344 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE condidat DROP FOREIGN KEY FK_3A8ACF2CB88FAD4D');
        $this->addSql('DROP INDEX IDX_3A8ACF2CB88FAD4D ON condidat');
        $this->addSql('ALTER TABLE condidat CHANGE id_liste_id liste_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE condidat ADD CONSTRAINT FK_3A8ACF2CE85441D8 FOREIGN KEY (liste_id) REFERENCES liste (id)');
        $this->addSql('CREATE INDEX IDX_3A8ACF2CE85441D8 ON condidat (liste_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE condidat DROP FOREIGN KEY FK_3A8ACF2CE85441D8');
        $this->addSql('DROP INDEX IDX_3A8ACF2CE85441D8 ON condidat');
        $this->addSql('ALTER TABLE condidat CHANGE liste_id id_liste_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE condidat ADD CONSTRAINT FK_3A8ACF2CB88FAD4D FOREIGN KEY (id_liste_id) REFERENCES liste (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_3A8ACF2CB88FAD4D ON condidat (id_liste_id)');
    }
}
