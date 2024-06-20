<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePropertiesImageTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'image_id' => [
                'type'           => 'INT',
                'null'           => false,
                'auto_increment' => true,
            ],
            'property_id' => [
                'type' => 'INT',
                'null' => false,
            ],
            'image' => [
                'type' => 'BLOB',
                'null' => true,
            ],
        ]);
        $this->forge->addPrimaryKey('image_id');
        $this->forge->addForeignKey('property_id', 'properties', 'property_id', 'CASCADE', 'CASCADE');

        $this->forge->createTable('properties_images');
    }

    public function down()
    {
        //$this->forge->dropTable('properties_images', true);
    }
}
