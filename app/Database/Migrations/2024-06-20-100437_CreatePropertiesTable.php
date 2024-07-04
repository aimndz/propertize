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
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => false,
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
            'village' => [
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
            'lease_term' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => true,
            ],
            'utilities' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => true,
            ],
            'tenant' => [
                'type' => 'INT',
                'null' => true,
            ],
            'status' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => false,
            ],
            'approval_status' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => false,
            ],
            'transfer_to' => [
                'type' => 'INT',
                'null' => true,
            ],
            'transfer_date' => [
                'type' => 'DATETIME',
                'null' => true,
                'default' => null,
            ], 'annual_interest_rate' => [
                'type' => 'FLOAT',
                'null' => true,
            ],
            'payment_duration' => [
                'type' => 'INT',
                'null' => true,
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => true,
                'default' => null,
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
