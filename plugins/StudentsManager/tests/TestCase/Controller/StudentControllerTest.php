<?php
declare(strict_types=1);

namespace StudentsManager\Test\TestCase\Controller;

use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;
use StudentsManager\Controller\StudentController;

/**
 * StudentsManager\Controller\StudentController Test Case
 *
 * @uses \StudentsManager\Controller\StudentController
 */
class StudentControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'plugin.StudentsManager.Student',
    ];
}
