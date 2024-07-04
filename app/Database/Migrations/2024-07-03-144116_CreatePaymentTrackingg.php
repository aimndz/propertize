<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePaymentTrackingg extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'property_id' => [
                'type' => 'INT',
                'unsigned' => true,
            ],
            'property_name' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'buyer_id' => [
                'type' => 'INT',
            ],
            'payment_month' => [
                'type' => 'DATE',
            ],
            'amount' => [
                'type' => 'DECIMAL',
                'constraint' => '10,2',
            ],
            'status' => [
                'type' => 'ENUM',
                'constraint' => ['pending', 'received'],
                'default' => 'pending',
            ],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('payment_tracking');
    }

    public function down()
    {
        $this->forge->dropTable('payment_tracking');
    }
}
