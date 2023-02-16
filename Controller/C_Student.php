<?php
{
include_once("D:/xampp/htdocs/102190044_NgoThiQueTram/Model/M_Student.php");
class Ctr_Student
{
    public function invoke()
    {
    if(isset($_GET['stid']))
    {
        $modelStudent = new Model_Student();
        $student = $modelStudent->getStudentDetail($_GET['stid']);
        include_once("D:/xampp/htdocs/102190044_NgoThiQueTram/View/StudentDetail.php");
    }
    else if(isset($_GET['mod1']))
    {
        include_once("D:/xampp/htdocs/102190044_NgoThiQueTram/View/Add_Student.php");
    }
    else if(isset($_POST['add']))
    {
        if($_REQUEST['txtid'] == "" || $_REQUEST['txtname'] == "" || $_REQUEST['txtage'] == "" || $_REQUEST['txtuni'] == "")
        {
            header("Location:../View/Add_Student.php");
        }
        else
        {
            if(isset($_REQUEST['check']))
            {
                header("Location:../View/Add_Student.php");
            }
            else
            {
                $modelStudent = new Model_Student();
                $modelStudent->addStudent($_REQUEST['txtid'],$_REQUEST['txtname'],$_REQUEST['txtage'],$_REQUEST['txtuni']);
                header("Location:C_Student.php");
            }
        }
    }
    else if(isset($_GET['mod4']))
    {
        $modelStudent= new Model_Student();
        $studentList= $modelStudent->getAllStudent();
        include_once("D:/xampp/htdocs/102190044_NgoThiQueTram/View/Find_Student.php");
    }
    else if(isset($_POST['find']))
    {
        if($_REQUEST['txtid'] == "" || $_REQUEST['txtname'] == "")
        {
            header("Location:../View/Find_Student.php");
        }
        else
        {
            $modelStudent = new Model_Student();
            $student = $modelStudent->findStudent($_REQUEST['txtid'],$_REQUEST['txtname']);
            include_once("D:/xampp/htdocs/102190044_NgoThiQueTram/View/StudentDetail.php");
        }
    }
    else if(isset($_GET['mod3']))
    {
        $modelStudent= new Model_Student();
        $studentList= $modelStudent->getAllStudent();
        include_once("D:/xampp/htdocs/102190044_NgoThiQueTram/View/Delete_Student.php");
    }
    else if(isset($_GET['delete']))
    {
        $modelStudent= new Model_Student();
        $student = $modelStudent->deleteStudent($_GET['delete']);
        header("Location:C_Student.php?mod3");
    }
    else if(isset($_GET['mod2']))
    {
        $modelStudent= new Model_Student();
        $studentList= $modelStudent->getAllStudent();
        include_once("D:/xampp/htdocs/102190044_NgoThiQueTram/View/Update1_Student.php");
    }
    else if(isset($_GET['update']))
    {
        $modelStudent = new Model_Student();
        $student = $modelStudent->getStudentDetail($_GET['update']);
        include_once("D:/xampp/htdocs/102190044_NgoThiQueTram/View/Update_Student.php");
    }
    else if(isset($_POST['updatebt']))
    {
        if($_REQUEST['txtname'] == "" || $_REQUEST['txtage'] == "" || $_REQUEST['txtuni'] == "")
        {
            header("Location:../View/Update_Student.php");
        }
        else
        {
            $modelStudent= new Model_Student();
            $student = $modelStudent->updateStudent($_REQUEST['txtid'], $_REQUEST['txtname'], $_REQUEST['txtage'], $_REQUEST['txtuni']);
            header("Location:C_Student.php");
        }
    }
    else
    {
        $modelStudent = new Model_Student();
        $studentList = $modelStudent->getAllStudent();
        include_once("D:/xampp/htdocs/102190044_NgoThiQueTram/View/StudentList.php");
    }
}
};
$C_Student = new Ctr_Student();
$C_Student->invoke();
}
?>
