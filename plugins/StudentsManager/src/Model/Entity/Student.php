<?php
declare(strict_types=1);

namespace StudentsManager\Model\Entity;

use Cake\ORM\Entity;

class Student extends Entity
{
  
    protected $_accessible = [
        'name' => true,
        'email' => true,
        'created_at' => true,
    ]; 
}
