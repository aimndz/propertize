<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Modeofpayment extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'auto_increment' => true,
            ],
            'account_id' => [
                'type'       => 'INT',
                'null'       => false,
            ],
            'account_name' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => true,
            ],
            'mode' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            'account_number' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => true,
            ],

        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('account_id', 'users', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('mode_of_payment');
    }

    public function down()
    {
        $this->forge->dropTable('mode_of_payment');
    }
}
