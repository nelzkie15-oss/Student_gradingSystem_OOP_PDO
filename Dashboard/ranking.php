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

?>

<?php include_once('../header/main-head.php');?>
<body><br><Br>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        Student Ranking
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                        <div style="overflow-x:auto;">

                            <div class="container">
                                <?php 
                                include("../config/conn/db-connection.php");
                                $query = $db->prepare("SELECT * FROM tbl_studentinfo INNER JOIN tbl_grades ON tbl_studentinfo.student_id = tbl_grades.student_id group by tbl_studentinfo.student_id");
                                    $query->execute();
                                    $rank = 1;
                                      echo '<table class="table table-colored table-centered table-inverse m-0" id="dataTable_ranking" width="100%" cellspacing="0">';
                                    echo     '<thead>
                                            <tr>
                                            <th>Rank</th>
                                            <th>Student\'s Name</th>
                                            <th>GWA</th>
                                          </tr>
                                        </thead>';
                                    while($res = $query->fetch(PDO::FETCH_ASSOC)){
                                      echo "<tbody>
                                          <tr>
                                            <td>".htmlentities($rank)."</td>
                                            <td>".htmlentities($res['last_name']).", ".htmlentities($res['first_name'])." ".htmlentities($res['middle_name'])."</td>
                                            <td>".htmlentities($res['student_gwa']);
                                        echo "</tr>";
                                      $rank++;
                                    }
                                    echo '</tbody>
                                    </table>';
                                  ?>
                            </div>
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