<!-- Modal -->
<div class="modal fade" id="add-stud" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Student</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
                    <div class="row">
                        <div class="col-12">
                            <?php include 'initialize/add-student.php';?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="form-group">
                                <input type="text" class="form-control" name="first_name" placeholder="First name" autocomplete="off" required="">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <input type="text" class="form-control" name="middle_name" placeholder="Middle name" autocomplete="off" required="">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <input type="text" class="form-control" name="last_name" placeholder="Last name" autocomplete="off" required="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="form-group">
                                <input type="text" class="form-control" name="section" placeholder="Section" autocomplete="off" required="">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" placeholder="Subject" autocomplete="off" required="">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <input type="text" class="form-control" name="student_number" placeholder="Student No." autocomplete="off" required="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="teacher" placeholder="Teacher" autocomplete="off" required="">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="unit" placeholder="Units" autocomplete="off" required="">
                            </div>
                        </div>
                   </div>
             </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary btn-sm" name="add-stud">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>