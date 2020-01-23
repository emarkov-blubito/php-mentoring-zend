<?php

declare(strict_types=1);

namespace Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200113223322 extends AbstractMigration
{
    public function getDescription() : string
    {
        $description = 'This is the initial migration which creates categories,brands,products and users tables.';
        return $description;
    }

    public function up(Schema $schema) : void
    {
        // Create 'categories' table
        $table = $schema->createTable('categories');
        $table->addColumn('id', 'integer', ['autoincrement'=>true]);        
        $table->addColumn('name', 'string', ['notnull'=>true, 'lenght'=>128]);
        $table->addColumn('url', 'string', ['notnull'=>true, 'lenght'=>255]);
        $table->addColumn('description', 'text');
        $table->setPrimaryKey(['id']);
        $table->addOption('engine' , 'InnoDB');
        
        // Create 'brands' table
        $table = $schema->createTable('brands');
        $table->addColumn('id', 'integer', ['autoincrement'=>true]); 
        $table->addColumn('name', 'string', ['notnull'=>true, 'lenght'=>128]);
        $table->addColumn('url', 'string', ['notnull'=>true, 'lenght'=>255]);
        $table->addColumn('description', 'text');
        $table->setPrimaryKey(['id']);
        $table->addOption('engine' , 'InnoDB');
        
        // Create 'products' table
        $table = $schema->createTable('products');
        $table->addColumn('id', 'integer', ['autoincrement'=>true]); 
        $table->addColumn('category_id', 'integer', ['notnull'=>true]);
        $table->addColumn('brand_id', 'integer', ['notnull'=>true]);
        $table->addColumn('name', 'string', ['notnull'=>true, 'lenght'=>128]);
        $table->addColumn('url', 'string', ['notnull'=>true, 'lenght'=>255]);
        $table->addColumn('description', 'text');
        $table->setPrimaryKey(['id']);
        $table->addOption('engine' , 'InnoDB');
        
        // Create 'users' table
        $table = $schema->createTable('users');
        $table->addColumn('id', 'integer', ['autoincrement'=>true]); 
        $table->addColumn('first_name', 'string', ['notnull'=>true, 'lenght'=>128]);
        $table->addColumn('last_name', 'string', ['notnull'=>true, 'lenght'=>128]);
        $table->addColumn('email', 'string', ['notnull'=>true, 'lenght'=>128]);
        $table->addColumn('password', 'string', ['notnull'=>true, 'lenght'=>255]);
        $table->setPrimaryKey(['id']);
        $table->addOption('engine' , 'InnoDB'); 

    }

    public function down(Schema $schema) : void
    {
        $schema->dropTable('users');
        $schema->dropTable('products');
        $schema->dropTable('brands');
        $schema->dropTable('categories');

    }
}
