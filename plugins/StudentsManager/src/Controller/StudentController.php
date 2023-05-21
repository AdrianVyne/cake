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
        $this->loadModel("StudentsManager.Students");
        $this->viewBuilder()->setLayout("StudentsManager.custom");
    }
    public function index()
    {
        // $params = $this->request->getQueryParams();
        // echo $params['email'];
        // echo $this->request->getQuery("name");
        // $id = $this->request->getParam("id");
        // $slug = $this->request->getParam("slug");
        // echo $id; echo $slug;

        // $studentEntity = $this->Students->NewEmptyEntity();

        // $data = [
        //     "name" => "John Smith",
        //     "email" => "john@gmail.com"
        // ];

        // $studentEntity = $this->Students->patchEntity($studentEntity, $data);

        // $this->Students->save($studentEntity);

        // $students = $this->Students->find()->toList();

        // $students = $this->Students->find()->select(["id", "name"])->where(["id" => 100])->first();

        // echo $students->id;

        // echo "<pre>";
        // print_r($students);

        // foreach ($students as $student) {
        //     echo $student->name . ", " . $student->email . "<br/>";
        // }

        // $student_id = 6;
        // delete

        $student_id = 10;

        $studentEntity = $this->Students->get($student_id);
        $this->Students->delete($studentEntity);


        // update
        // // $student_data = [
        // //     "name" => "Joe Seph",
        // //     "email" => "joe@gmail.com"
        // // ];

        // $studentEntity = $this->Students->get($student_id);

        // // $this->Students->patchEntity($studentEntity, $student_data);

        // $studentEntity->name = "Zeus Bolt";
        // $studentEntity->email = "zeus@bolt.com";

        // $this->Students->save($studentEntity);
    }
    public function otherMethod()
    {
        // 
    }
}