<?php
  session_start();
    include_once('../config/conn/db-connection.php');
    include_once('../config/class/student-gradingstatus.php');

  if(!isset($_SESSION['logged_in']))
    {
       header("location:../index.php");
    }else{
    //display some thing here
    $student_stat = new Student_status();
    $student_no = trim($_SESSION['student_no']);
    $stud_atdnce = $student_stat->fetch_studattendance($student_no); 
?>

<?php include_once('../header/main-head.php');?>
<body><br><Br>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        Student Daily Attendance
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                        <div style="overflow-x:auto;">
                            <table class="table table-colored table-centered table-inverse m-0" id="dataTable_attendance" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th scope="col">First Name</th>
                                        <th scope="col">Middle Name</th>
                                        <th scope="col">Last Name</th>
                                        <th scope="col">Remark Login</th>
                                        <th scope="col">Login</th>
                                        <th scope="col">Remark Logout</th>
                                        <th scope="col">Logout</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php
                                    foreach($stud_atdnce as $student){ ?>
                                    <tr>
                                        <td><?= ucfirst(htmlentities($student['first_name'])); ?></td>
                                        <td><?= ucfirst(htmlentities($student['middle_name'])); ?></td>
                                        <td><?= ucfirst(htmlentities($student['last_name'])); ?></td>
                                        <td><?= ucfirst(htmlentities($student['remark_login'])); ?></td>
                                        <td><?= ucfirst(htmlentities($student['login_from'])); ?></td>
                                        <td><?= ucfirst(htmlentities($student['remark_logout'])); ?></td>
                                        <td><?= ucfirst(htmlentities($student['logout_to'])); ?></td>

                                        <?php } 
                                       ?>
                                </tbody>
                            </table>
                        </div>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <?php } ?>
</body>
</html>