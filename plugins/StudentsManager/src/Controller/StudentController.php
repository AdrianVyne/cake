<?php
declare(strict_types=1);

namespace StudentsManager\Controller;

use StudentsManager\Controller\AppController;

/**
 * Student Controller
 *
 */
class StudentController extends AppController
{
    public function initialize(): void
    {
        parent::initialize();
        $this->viewBuilder()->setLayout("StudentsManager.custom");
    }
    public function index() {
        // $params = $this->request->getQueryParams();

        // echo $params['email'];

        // echo $this->request->getQuery("name");

        // $id = $this->request->getParam("id");

        // $slug = $this->request->getParam("slug");

        // echo $id; echo $slug;

    }
    public function otherMethod(){
        // 
    }
}
