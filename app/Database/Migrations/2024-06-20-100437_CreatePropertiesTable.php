<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePropertiesTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'property_id' => [
                'type'           => 'INT',
                'null'           => false,
                'auto_increment' => true,
            ],
            'owner_id' => [
                'type' => 'INT',
                'null' => false,
            ],
            'street' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => false,
            ],
            'barangay' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => false,
            ],
            'city' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => false,
            ],
            'province' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => false,
            ],
            'postal_code' => [
                'type' => 'INT',
                'null' => false,
            ],
            'country' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => false,
            ],
            'landmark' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => true,
            ],
            'type' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => false,
            ],
            'floor_area' => [
                'type' => 'INT',
                'null' => false,
            ],
            'lot_size' => [
                'type' => 'INT',
                'null' => false,
            ],
            'no_of_beds' => [
                'type' => 'INT',
                'null' => false,
            ],
            'no_of_bathrooms' => [
                'type' => 'INT',
                'null' => false,
            ],
            'no_of_parkings' => [
                'type' => 'INT',
                'null' => false,
            ],
            'floors' => [
                'type' => 'INT',
                'null' => false,
            ],
            'year_built' => [
                'type' => 'DATE',
                'null' => false,
            ],
            'description' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => true,
            ],
            'price' => [
                'type' => 'FLOAT',
                'null' => false,
            ],
            'status' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => false,
            ],
        ]);

        $this->forge->addPrimaryKey('property_id');
        $this->forge->addForeignKey('owner_id', 'users', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('properties');
    }

    public function down()
    {
        $this->forge->dropTable('properties');
    }
}
