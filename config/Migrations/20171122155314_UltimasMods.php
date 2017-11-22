<?php
use Migrations\AbstractMigration;

class UltimasMods extends AbstractMigration
{

    public function up()
    {

        $this->table('users')
            ->changeColumn('telefono', 'string', [
                'default' => null,
                'limit' => 20,
                'null' => false,
            ])
            ->update();
    }

    public function down()
    {

        $this->table('users')
            ->changeColumn('telefono', 'integer', [
                'default' => null,
                'length' => 12,
                'null' => false,
            ])
            ->update();
    }
}

