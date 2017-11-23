<?php
use Migrations\AbstractMigration;

class VariasMods extends AbstractMigration
{

    public function up()
    {

        $this->table('calles')
            ->changeColumn('modified', 'timestamp', [
                'default' => 'CURRENT_TIMESTAMP',
                'limit' => null,
                'null' => false,
            ])
            ->update();

        $this->table('categorias')
            ->changeColumn('modified', 'timestamp', [
                'default' => 'CURRENT_TIMESTAMP',
                'limit' => null,
                'null' => false,
            ])
            ->update();

        $this->table('departamentos')
            ->changeColumn('modified', 'timestamp', [
                'default' => 'CURRENT_TIMESTAMP',
                'limit' => null,
                'null' => false,
            ])
            ->update();

        $this->table('direccions')
            ->changeColumn('modified', 'timestamp', [
                'default' => 'CURRENT_TIMESTAMP',
                'limit' => null,
                'null' => false,
            ])
            ->update();

        $this->table('distritos')
            ->changeColumn('modified', 'timestamp', [
                'default' => 'CURRENT_TIMESTAMP',
                'limit' => null,
                'null' => false,
            ])
            ->update();

        $this->table('generos')
            ->changeColumn('modified', 'timestamp', [
                'default' => 'CURRENT_TIMESTAMP',
                'limit' => null,
                'null' => false,
            ])
            ->update();

        $this->table('provincias')
            ->changeColumn('modified', 'timestamp', [
                'default' => 'CURRENT_TIMESTAMP',
                'limit' => null,
                'null' => false,
            ])
            ->update();

        $this->table('rols')
            ->changeColumn('modified', 'timestamp', [
                'default' => 'CURRENT_TIMESTAMP',
                'limit' => null,
                'null' => false,
            ])
            ->update();

        $this->table('servicios')
            ->changeColumn('modified', 'timestamp', [
                'default' => 'CURRENT_TIMESTAMP',
                'limit' => null,
                'null' => false,
            ])
            ->update();

        $this->table('users')
            ->changeColumn('email', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->changeColumn('username', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->changeColumn('password', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->changeColumn('modified', 'timestamp', [
                'default' => 'CURRENT_TIMESTAMP',
                'limit' => null,
                'null' => false,
            ])
            ->update();
    }

    public function down()
    {

        $this->table('calles')
            ->changeColumn('modified', 'timestamp', [
                'default' => '0000-00-00 00:00:00',
                'length' => null,
                'null' => false,
            ])
            ->update();

        $this->table('categorias')
            ->changeColumn('modified', 'timestamp', [
                'default' => '0000-00-00 00:00:00',
                'length' => null,
                'null' => false,
            ])
            ->update();

        $this->table('departamentos')
            ->changeColumn('modified', 'timestamp', [
                'default' => '0000-00-00 00:00:00',
                'length' => null,
                'null' => false,
            ])
            ->update();

        $this->table('direccions')
            ->changeColumn('modified', 'timestamp', [
                'default' => '0000-00-00 00:00:00',
                'length' => null,
                'null' => false,
            ])
            ->update();

        $this->table('distritos')
            ->changeColumn('modified', 'timestamp', [
                'default' => '0000-00-00 00:00:00',
                'length' => null,
                'null' => false,
            ])
            ->update();

        $this->table('generos')
            ->changeColumn('modified', 'timestamp', [
                'default' => '0000-00-00 00:00:00',
                'length' => null,
                'null' => false,
            ])
            ->update();

        $this->table('provincias')
            ->changeColumn('modified', 'timestamp', [
                'default' => '0000-00-00 00:00:00',
                'length' => null,
                'null' => false,
            ])
            ->update();

        $this->table('rols')
            ->changeColumn('modified', 'timestamp', [
                'default' => '0000-00-00 00:00:00',
                'length' => null,
                'null' => false,
            ])
            ->update();

        $this->table('servicios')
            ->changeColumn('modified', 'timestamp', [
                'default' => '0000-00-00 00:00:00',
                'length' => null,
                'null' => false,
            ])
            ->update();

        $this->table('users')
            ->changeColumn('email', 'string', [
                'default' => null,
                'length' => 50,
                'null' => false,
            ])
            ->changeColumn('username', 'string', [
                'default' => null,
                'length' => 10,
                'null' => false,
            ])
            ->changeColumn('password', 'string', [
                'default' => null,
                'length' => 10,
                'null' => false,
            ])
            ->changeColumn('modified', 'timestamp', [
                'default' => '0000-00-00 00:00:00',
                'length' => null,
                'null' => false,
            ])
            ->update();
    }
}

