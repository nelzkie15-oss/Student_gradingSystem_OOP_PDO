<?php
	class Student_status {
	    private $db = null;

	    public function fetch_student($student_no) {
	        global $db;
	        $query = $db->prepare("SELECT *,SUM(subject_units) as subject_units FROM tbl_studentinfo INNER JOIN tbl_grades ON tbl_studentinfo.student_id = tbl_grades.student_id WHERE tbl_studentinfo.user_name=? group by tbl_studentinfo.student_id");
	        $query->execute(array($student_no));
	        return $query->fetchAll();
	    }

	    public function fetch_studattendance($student_no) {
	        global $db;
	        $query = $db->prepare("SELECT * FROM tbl_Attendance WHERE user_name=?");
	        $query->execute(array($student_no));
	        return $query->fetchAll();
	    }

	    public function login($username, $password) {
	        session_start();
	        date_default_timezone_set("asia/manila");
	        $date = date("M-d-Y h:i A", strtotime("+0 HOURS"));
	        global $db;
	        $query = $db->prepare("SELECT  first_name, middle_name, last_name, user_name, pass_word FROM tbl_studentinfo where user_name=? AND pass_word=?");
	        $query->execute(array($username, $password));
	        $count = $query->rowCount();
	        if ($count == 1) {
	            $res = $query->fetch(PDO::FETCH_ASSOC);
	            $fname = htmlentities($res['first_name']);
	            $mname = htmlentities($res['middle_name']);
	            $lname = htmlentities($res['last_name']);
	            $_SESSION['student_no'] = $res['user_name'];
	            // $_SESSION['student_id'] = $res['student_id'];
	            $_SESSION['logged_in'] = true;
	            $remarks = "Has Time In the system at";
	            $sql = "INSERT INTO `tbl_attendance`(first_name, middle_name, last_name, user_name, login_from, remark_login) VALUES(?,?,?,?,?,?)";
	            $stmt = $db->prepare($sql);
	            $stmt->execute([$fname, $mname, $lname, $username, $date, $remarks]);
	            header('Location: Dashboard/home.php');
	            exit();
	        } else {
	            echo '<center><div class="alert alert-warning">
							   <strong>Login Failed, Please try again!</strong>
							</div></center>';
	        }
	    }

	    public function fetch_studgrade($student_no) {
	        global $db;
	        $query = $db->prepare("SELECT * FROM tbl_grades INNER JOIN tbl_studentinfo ON tbl_grades.student_id = tbl_studentinfo.student_id WHERE tbl_studentinfo.user_name=?");
	        $query->execute(array($student_no));
	        return $query->fetchAll();
	    }

	    public function fetch_gwa($student_no) {
	    	error_reporting(0);
	        $gwa;
	        global $db;
	        $query = $db->prepare("SELECT * FROM tbl_grades INNER JOIN tbl_studentinfo ON tbl_grades.student_id = tbl_studentinfo.student_id WHERE tbl_studentinfo.user_name=?");
	        $query->execute(array($student_no));
	        $total_units = 0;
	        $total_grade = 0;
	        $prelim = .20;
	        $midterm = .20;
	        $prefinals = .20;
	        $finals = .40;
	        while ($res = $query->fetch(PDO::FETCH_ASSOC)) {
	            $total_units+= $res['unit'];
	            $final_grade = ($res['prelim'] * $prelim) + ($res['midterm'] * $midterm) + ($res['prefinals'] * $prefinals) + ($res['finals'] * $finals);
	            $total_grade+= $final_grade * $res['unit'];
	        }
	        $gwa = $total_grade / $total_units;
	        return number_format($gwa, 2);
	    }

	    public function fetch_prelim($student_no) {
	        global $db;
	        $query = $db->prepare("SELECT prelim, unit FROM tbl_grades INNER JOIN tbl_studentinfo ON tbl_grades.student_id = tbl_studentinfo.student_id WHERE tbl_studentinfo.user_name=?");
	        $query->execute(array($student_no));
	        $total_units = 0;
	        $gradeXunit = 0;
	        while ($res = $query->fetch(PDO::FETCH_ASSOC)) {
	            $total_units+= $res['unit'];
	            $gradeXunit+= ($res['prelim'] * $res['unit']);
	        }
	        echo $gradeXunit / $total_units;
	    }

	    public function fetch_midterm($student_no) {
	        global $db;
	        $query = $db->prepare("SELECT midterm, unit FROM tbl_grades INNER JOIN tbl_studentinfo ON tbl_grades.student_id = tbl_studentinfo.student_id WHERE tbl_studentinfo.user_name=?");
	        $query->execute(array($student_no));
	        $total_units = 0;
	        $gradeXunit = 0;
	        while ($res = $query->fetch(PDO::FETCH_ASSOC)) {
	            $total_units+= $res['unit'];
	            $gradeXunit+= ($res['midterm'] * $res['unit']);
	        }
	        echo $gradeXunit / $total_units;
	    }

	    public function fetch_prefinals($student_no) {
	        global $db;
	        $query = $db->prepare("SELECT prefinals, unit FROM tbl_grades INNER JOIN tbl_studentinfo ON tbl_grades.student_id = tbl_studentinfo.student_id WHERE tbl_studentinfo.user_name=?");
	        $query->execute(array($student_no));
	        $total_units = 0;
	        $gradeXunit = 0;
	        while ($res = $query->fetch(PDO::FETCH_ASSOC)) {
	            $total_units+= $res['unit'];
	            $gradeXunit+= ($res['prefinals'] * $res['unit']);
	        }
	        echo $gradeXunit / $total_units;
	    }
	    
	    public function fetch_finals($student_no) {
	        global $db;
	        $query = $db->prepare("SELECT finals, unit FROM tbl_grades INNER JOIN tbl_studentinfo ON tbl_grades.student_id = tbl_studentinfo.student_id WHERE tbl_studentinfo.user_name=?");
	        $query->execute(array($student_no));
	        $total_units = 0;
	        $gradeXunit = 0;
	        while ($res = $query->fetch(PDO::FETCH_ASSOC)) {
	            $total_units+= $res['unit'];
	            $gradeXunit+= ($res['finals'] * $res['unit']);
	        }
	        echo $gradeXunit / $total_units;
	    }
	}
?>


	