<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="js/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Teko:wght@700&display=swap');

        body {
            font-family: 'Teko', sans-serif;
        }
    </style>
    <title>Student Grading Results</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#dataTable_home').DataTable();
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#dataTable_grade').DataTable();
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#dataTable_attendance').DataTable();
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#dataTable_ranking').DataTable();
        });
    </script>
</head>
<nav class="navbar navbar-expand-lg" style="background-color: #284f2f">
    <a class="navbar-brand" href="#"><strong style="color:#b7c9a5;"><img src="../images/Research-result-examination-magnifying-inspection-256.webp" width="30px" height="30px"> Grading System</strong></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="home.php">Student info</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="grade.php">Grades</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="attendance.php">Attendance</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="ranking.php">Rankings</a>
            </li>
        </ul>
        <ul class="form-inline my-2 my-lg-0" style="color: #fff">
            Welcome!, <?php echo ucfirst($student_no);?> <a class="nav-link" href="logout.php"> <i class="fas fa-power-off" title="Click this if you want to Sign-off"></i></a>

        </ul>
    </div>
</nav>