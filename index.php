<?php include_once('header/main-head1.php');?>
<body style="background-color: #a8d180"><br><Br><br><Br>
    <div class="container">
        <div class="row">
            <div class="col-6">
             <img src="images/kisspng-cbse-exam-class-10-cbse-exam-class-12-cbse-schoo-students-5ac8ff058f1284.0836534515231219255861.png" width="90%" height="auto">
            </div>
            <div class="col-6">
                <div class="card" style="border-top: 2px solid #41b052">
                    <div class="card-header">
                       <h4>Student Login Area</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
                            <div class="row">
                                <div class="col-12">
                                    <?php include 'initialize/login-proccess.php';?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="user_name" placeholder="User name" autocomplete="off" required="">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="pass_word" placeholder="Password" autocomplete="off" required="">
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <button type="submit" class="btn btn-success  btn-block" name="login-area">SIGN IN</button>
                        </div>
                    </div>
                    </form><hr>
                    <footer style="background-color: #60a31d;color: #b7c9a5;">
                      <p align="center"><b>All right Reserved © 2021 Created By:JunilToledo</b></p>
                    </footer>

                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>