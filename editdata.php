<?php
/**
 for display full info. and edit data
 */
// start again
$con=mysqli_connect('localhost','root','','dbphpserverside');  // this one in error
if(isset($_REQUEST['id'])){
    $id=intval($_REQUEST['id']);
    $sql="select * from tbperson WHERE id=$id";
    $run_sql=mysqli_query($con,$sql);
    while($row=mysqli_fetch_array($run_sql)){
        $per_id=$row[0];
        $per_name=$row[1];
        $per_salay=$row[2];
        $per_age=$row[3];
    }//end while
    //var_dump($run_sql);
    ?>
    <form class="form-horizontal" method="post">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Edit Information</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="box-body">
                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="txtid">ID</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="txtid" name="txtid" value="<?php echo $per_id;?>" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="txtname">Name</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="txtname" name="txtname" value="<?php echo $per_name;?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="txtsalary">Salary</label>
                            <div class="col-sm-6">
                                <input type="number" class="form-control" id="txtsalary" name="txtsalary" value="<?php echo $per_salay;?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="txtage">Age</label>
                            <div class="col-sm-6">
                                <input type="number" class="form-control" id="txtage" name="txtage" value="<?php echo $per_age;?>">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </form>
<?php
}//end if ?>





