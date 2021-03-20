<?php
   // session_start();
error_reporting(0);
    include_once('config/conn/db-connection.php');
    include_once('config/class/student-gradingstatus.php');
      $student_stat = new Student_status();
      session_start();
        if(ISSET($_POST['login-area'])){
               $username = trim($_POST['user_name']);
               $pass1 = trim($_POST['pass_word']);
               $pass=sha1($pass1);
               $salt="a1Bz20ydqelm8m1wql9024DaCxPo0834wEXc07MnZrQ10kL73EeQ4Z5vYxEa";
               $password = $salt.$pass;
               $student_stat->login($username, $password);
 
        }
?>