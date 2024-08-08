<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Student;
// include_once 'app/models/Course.php';
// include_once 'app/controllers/BaseController.php';
class StudentController extends BaseController
{
    public $student;
    public function __construct()
    {
        $this->student = new Student();
    }
    public function getStudent()
    {
        $students = $this->student->getListStudent();
        return $this->render('student.index', compact('students'));
    }
    public function addStudent(){
        return $this->render('student.add');
    }
    public function postStudent(){
        if(isset($_POST['btn-submit'])){
            if(empty($_POST['name'])){
                $error[] = 'Vui long dien ten';
            }
            if(empty($_POST['year_of_birth'])){
                $error[] = 'Vui long dien year';
            }
            if(empty($_POST['phone_number'])){
                $error[] = 'Vui long dien sdt';
            }
            if(count($error)>=1){
                redirect('errors',$error,'add-student');
            }
        }
    }
}
