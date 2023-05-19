<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller;

use App\Controller\SampleController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\SampleController Test Case
 *
 * @uses \App\Controller\SampleController
 */
class SampleControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Sample',
    ];
}
