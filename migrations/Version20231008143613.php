<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231008143613 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE comment DROP FOREIGN KEY comment_ibfk_1');
        $this->addSql('ALTER TABLE comment DROP FOREIGN KEY comment_ibfk_2');
        $this->addSql('DROP INDEX trick_id ON comment');
        $this->addSql('ALTER TABLE comment CHANGE comment comment LONGTEXT NOT NULL');
        $this->addSql('ALTER TABLE comment ADD CONSTRAINT FK_9474526CB281BE2E FOREIGN KEY (trick_id) REFERENCES trick (id)');
        $this->addSql('ALTER TABLE comment ADD CONSTRAINT FK_9474526CA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE comment RENAME INDEX user_id TO IDX_9474526CA76ED395');
        $this->addSql('ALTER TABLE media DROP FOREIGN KEY media_ibfk_1');
        $this->addSql('ALTER TABLE media ADD CONSTRAINT FK_6A2CA10CB281BE2E FOREIGN KEY (trick_id) REFERENCES trick (id)');
        $this->addSql('ALTER TABLE media RENAME INDEX trick_id TO IDX_6A2CA10CB281BE2E');
        $this->addSql('ALTER TABLE reset_password_request ADD CONSTRAINT FK_7CE748AA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE trick DROP FOREIGN KEY trick_ibfk_1');
        $this->addSql('ALTER TABLE trick ADD main_picture VARCHAR(255) DEFAULT NULL, ADD slug VARCHAR(255) NOT NULL, CHANGE description description LONGTEXT NOT NULL');
        $this->addSql('ALTER TABLE trick ADD CONSTRAINT FK_D8F0A91EA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_D8F0A91E989D9B62 ON trick (slug)');
        $this->addSql('ALTER TABLE trick RENAME INDEX user_id TO IDX_D8F0A91EA76ED395');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE comment DROP FOREIGN KEY FK_9474526CB281BE2E');
        $this->addSql('ALTER TABLE comment DROP FOREIGN KEY FK_9474526CA76ED395');
        $this->addSql('ALTER TABLE comment CHANGE comment comment VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE comment ADD CONSTRAINT comment_ibfk_1 FOREIGN KEY (user_id) REFERENCES user (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE comment ADD CONSTRAINT comment_ibfk_2 FOREIGN KEY (trick_id) REFERENCES trick (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('CREATE INDEX trick_id ON comment (trick_id, user_id)');
        $this->addSql('ALTER TABLE comment RENAME INDEX idx_9474526ca76ed395 TO user_id');
        $this->addSql('ALTER TABLE media DROP FOREIGN KEY FK_6A2CA10CB281BE2E');
        $this->addSql('ALTER TABLE media ADD CONSTRAINT media_ibfk_1 FOREIGN KEY (trick_id) REFERENCES trick (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE media RENAME INDEX idx_6a2ca10cb281be2e TO trick_id');
        $this->addSql('ALTER TABLE reset_password_request DROP FOREIGN KEY FK_7CE748AA76ED395');
        $this->addSql('ALTER TABLE trick DROP FOREIGN KEY FK_D8F0A91EA76ED395');
        $this->addSql('DROP INDEX UNIQ_D8F0A91E989D9B62 ON trick');
        $this->addSql('ALTER TABLE trick DROP main_picture, DROP slug, CHANGE description description VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE trick ADD CONSTRAINT trick_ibfk_1 FOREIGN KEY (user_id) REFERENCES user (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE trick RENAME INDEX idx_d8f0a91ea76ed395 TO user_id');
    }
}
