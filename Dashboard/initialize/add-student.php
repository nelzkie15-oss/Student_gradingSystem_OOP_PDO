<?php
   // session_start();
    include_once('../config/conn/db-connection.php');
    include_once('../config/class/student-gradingstatus.php');
      $student_stat = new Student_status();
        if(ISSET($_POST['add-stud'])){
               $firstname = trim($_POST['first_name']);
               $middlename = trim($_POST['middle_name']);
               $lastname = trim($_POST['last_name']);
               $section = trim($_POST['section']);
               $subject = trim($_POST['subject']);
               $studentnumber = trim($_POST['student_number']);
               $teacher = trim($_POST['teacher']);
               $unit = trim($_POST['unit']);
               $student_stat->add_student($firstname, $middlename, $lastname, $section, $subject, $studentnumber, $teacher, $unit);
                  echo '<script type="text/javascript">';
                  echo 'setTimeout(function () { swal("Add Student Successfully!","Message!","success");';
                  echo '}, 1000);</script>';
                  header('Refresh: 3;url=/Student_gradingSystem/Dashboard/home.php');//3 seconds
             
        }
?>