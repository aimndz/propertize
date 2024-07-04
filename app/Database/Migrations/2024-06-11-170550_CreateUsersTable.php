<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUsersTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'null'           => false,
                'auto_increment' => true,
            ],
            'first_name' => [
                'type'       => 'VARCHAR',
                'null'       => false,
                'constraint' => 128,
            ],
            'last_name' => [
                'type'       => 'VARCHAR',
                'null'       => false,
                'constraint' => 128,
            ],
            'username' => [
                'type'       => 'VARCHAR',
                'null'       => false,
                'constraint' => 128,
                'unique'     => true,
            ],
            'password' => [
                'type'       => 'VARCHAR',
                'null'       => false,
                'constraint' => 255,
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'null'       => false,
                'constraint' => 255,
                'unique'     => true,
            ],
            'role' => [
                'type'       => 'VARCHAR',
                'constraint' => 50,
            ],
            'contact_number' => [
                'type'       => 'VARCHAR',
                'constraint' => 20,
                'null'       => true,
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
