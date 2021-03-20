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
     $student_stat = new Student_status($student_no); 
     $student_grades = $student_stat->fetch_studgrade($student_no); 
     $fetching_studentinfo = $student_stat->fetch_student($student_no); 

?>

<?php include_once('../header/main-head.php');?>
<body><br><Br>
    <div class="container">
        <div class="row">
           <div class="col-12">
                <div class="card">
                    <div class="card-body" style="background-color: #d8f2f1">
                        <div class="stdinfo">
                            <div class="container">
                                <?php foreach($fetching_studentinfo as $info){
                                  $lname = htmlentities($info['last_name']);
                                  $fname = htmlentities($info['first_name']);
                                  $mname = htmlentities($info['middle_name']);
                                  $studno = htmlentities($info['student_number']);
                                  $unit = htmlentities($info['unit']);
                                  $subjectcode = htmlentities($info['subject_units']);
                                ?>
                                <h6><strong>Student Name: </strong><?php echo ucfirst($lname).", ".ucfirst($fname)." ".ucfirst($mname);?></h6>
                                <h6><strong>Student Number:</strong> <?php echo ucfirst($studno);?></h6>
                                <h6><strong>Total number of units: </strong><?php echo ucfirst($unit); ?></h6>
                                <h6><strong>Number of units: </strong><?php echo ucfirst($subjectcode); ?></h6>
                                <?php } ?>
                            </div>
                        </div>

                    </div>
                    <div class="card-header">
                        Your Grade Results
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                        <div style="overflow-x:auto;">
                            <?php
                              echo '<table class="table table-bordered">';
                              echo   '<thead>
                                      <tr>
                                      <th>Subject Code</th>
                                      <th>No. of Units</th>
                                      <th>Prelim</th>
                                      <th>Midterm</th>
                                      <th>PreFinals</th>
                                      <th>Finals</th>
                                      <th>Units</th>
                                      <th>Final Grade</th>
                                      <th>Remarks</th>
                                      <th>Section</th>
                                      <th>Teacher</th>
                                      </tr>
                                  </thead>';
                                  foreach($student_grades as $grades){
                                    $pre = htmlentities($grades['prelim']);
                                    $mid =htmlentities($grades['midterm']);
                                    $pref = htmlentities($grades['prefinals']);
                                    $finals = htmlentities($grades['finals']);
                                    
                                    echo "<tbody><tr><td>".htmlentities($grades['subject_code'])."</td>";
                                    echo "<td>".htmlentities($grades['subject_units'])."</td>";
                                    if ($pre < 75){
                                      echo "<td bgcolor='#ed2f28' style='color:#fff'>".$pre."</td>";
                                    }else{                      
                                      echo "<td>".$pre."</td>";
                                    }
                                    if ($mid < 75){
                                      echo "<td bgcolor='#ed2f28' style='color:#fff'>".$mid."</td>";
                                    }else{                      
                                      echo "<td>".$mid."</td>";
                                    }
                                    if ($pref < 75){
                                      echo "<td bgcolor='#ed2f28' style='color:#fff'>".$pref."</td>";
                                    }else{                      
                                      echo "<td>".$pref."</td>";
                                    }
                                    if ($finals < 75 && $finals != 0){
                                      echo "<td bgcolor='#ed2f28' style='color:#fff'>".$finals."</td>";
                                    }else{                      
                                      echo "<td>".$finals."</td>";
                                    }
                                    echo "<td>".htmlentities($grades['unit'])."</td>";
                                    $subj_cgwa = ((htmlentities($grades['prelim']) * .20) + (htmlentities($grades['midterm'])*.20) + (htmlentities($grades['prefinals']) * .20) + (htmlentities($grades['finals']) * .40));
                                    if($subj_cgwa > 75){
                                      echo "<td bgcolor='#28ed28' style='color:#fff'>".$subj_cgwa."</td>";
                                    }else{
                                      echo "<td bgcolor='#ed2f28' style='color:#fff'>".$subj_cgwa."</td>";
                                    }
                                    
                                    if($finals == 0){
                                      $gradeneeded = (75 - $subj_cgwa)/.4;
                                      echo "<td>You need to get ".$gradeneeded." to pass the subject! </td>";
                                    }else if($finals !=0 && $subj_cgwa > 75){
                                      echo "<td>PASSED! Good Job! <img src='../images/420-4201793_yay-facebook-yay-emoji.png' width='26px' height='26px'></td>";
                                    }else if($finals !=0 && $subj_cgwa < 75){
                                      echo "<td>FAILED! See you next Sem! <img src='../images/21-215148_facebook-sad-emoji-like-png-facebook-sad-emoji.png' width='30px' height='30px'></td>";
                                    }
                                    echo "<td>".htmlentities($grades['section'])."</td><td>".htmlentities($grades['teacher'])."</td></tr>";
                                  }
                              echo '</tbody>
                                </table>';
                            ?>
                        </div>
                        <div class="gwa">
                            <div class="container">
                                <h3> Your General Weighted Average (GWA) is: <?php echo $student_stat->fetch_gwa($student_no);
                                 $query = $db->prepare("UPDATE tbl_studentinfo SET student_gwa=? WHERE student_id=?");
                                 $query->execute(array($student_stat->fetch_gwa($student_no), $student_no))?>
                                </h3>
                            </div>
                        </div>
                        <!--<div class="container">
                              <div class="container-fluid">
                                  <div class="row">
                                  <div class="col-sm-12">
                                    <h3>Grade Status</h3>  
                                  </div>
                                  </div>
                                  <hr>
                                  <div class="row">
                                  <div class="col-md-12">
                                    <div id="line-example" style="height: 300px;"></div>
                                  </div>
                                  </div>
                              </div>
                                <script>
                                  $.getScript('http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js',function(){
                                    $.getScript('http://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.0/morris.min.js',function(){

                                      Morris.Line({
                                        element: 'line-example',
                                        data: [
                                          {term: '1Prelim', value: <?php  $student_stat->fetch_prelim($student_no);?>},
                                          {term: '2Midterm', value:<?php  $student_stat->fetch_midterm($student_no);?>},
                                          {term: '3Prefinals', value: <?php $student_stat->fetch_prefinals($student_no);?>},
                                          {term: '4Finals', value: <?php  $student_stat->fetch_finals($student_no);?>}
                                        ],
                                        xkey: 'term',
                                        ykeys: ['value'],
                                        labels: ['Value'],
                                        });
                                    });
                                    });
                                </script>
                      
                       </div> 
                    </p> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <?php } ?>
</body>
</html>