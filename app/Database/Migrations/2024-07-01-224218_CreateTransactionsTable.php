<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTransactionsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'property_id' => [
                'type'       => 'INT',
                'null'           => false,
            ],
            'user_id' => [
                'type'       => 'INT',
                'null'           => false,
            ],
            'transaction_date' => [
                'type' => 'DATE',
            ],
            'amount' => [
                'type'       => 'DECIMAL',
                'constraint' => '10,2',
            ],
            'status' => [
                'type'       => 'ENUM',
                'constraint' => ['pending', 'completed', 'cancelled'],
                'default'    => 'pending',
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('property_id', 'properties', 'property_id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('user_id', 'users', 'id', 'CASCADE', 'CASCADE');

        $this->forge->createTable('transactions');
    }

    public function down()
    {
        $this->forge->dropTable('transactions');
    }
}
