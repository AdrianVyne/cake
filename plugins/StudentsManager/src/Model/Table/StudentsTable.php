<?php
declare(strict_types=1);

namespace StudentsManager\Model\Table;

use Cake\ORM\Table;


class StudentsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('students');
        $this->setPrimaryKey('id');
    }
}
