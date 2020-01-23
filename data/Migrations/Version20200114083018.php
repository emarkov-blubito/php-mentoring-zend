<?php

declare(strict_types=1);

namespace Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200114083018 extends AbstractMigration
{
    public function getDescription() : string
    {
        $description = 'Adding foreign keys to created tables';
        return $description;
    }

    public function up(Schema $schema) : void
    {
        // Add indexes and foreign keys to products table
        $table = $schema->getTable('products');
        $table->addIndex(['category_id'], 'category_id_index');
        $table->addIndex(['brand_id'], 'brand_id_index');
        $table->addForeignKeyConstraint('categories', ['category_id'], ['id'], [], 'products_category_id_fk');
        $table->addForeignKeyConstraint('brands', ['brand_id'], ['id'], [], 'products_brand_id_fk');

    }

    public function down(Schema $schema) : void
    {
        $table = $schema->getTable('products');
        $table->removeForeignKey('products_category_id_fk');
        $table->removeForeignKey('products_brand_id_fk');
        $table->dropIndex('category_id_index');
        $table->dropIndex('brand_id_index'); 

    }
}
