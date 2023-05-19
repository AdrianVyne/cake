<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class Create extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change(): void
    {
        $table = $this->table('students');
        $table->addColumn("name", 'string', [
            'default' => null,
            'limit' => 50,
            'null' => false,
        ]);
        $table->addColumn("email", 'string', [
            'default' => null,
            'limit' => 100,
            'null' => true,
        ]);
        $table->addColumn("created_at", 'timestamp', [
            'default' => "CURRENT_TIMESTAMP",
        ]);
        $table->create();
    }
}
