<?php
declare(strict_types=1);

namespace StudentsManager\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Products Model
 *
 * @method \StudentsManager\Model\Entity\Product newEmptyEntity()
 * @method \StudentsManager\Model\Entity\Product newEntity(array $data, array $options = [])
 * @method \StudentsManager\Model\Entity\Product[] newEntities(array $data, array $options = [])
 * @method \StudentsManager\Model\Entity\Product get($primaryKey, $options = [])
 * @method \StudentsManager\Model\Entity\Product findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \StudentsManager\Model\Entity\Product patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \StudentsManager\Model\Entity\Product[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \StudentsManager\Model\Entity\Product|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \StudentsManager\Model\Entity\Product saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \StudentsManager\Model\Entity\Product[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \StudentsManager\Model\Entity\Product[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \StudentsManager\Model\Entity\Product[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \StudentsManager\Model\Entity\Product[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ProductsTable extends Table
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

        $this->setTable('products');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
    }
}
