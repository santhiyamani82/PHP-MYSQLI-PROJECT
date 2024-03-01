<?php
include('conn.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Employee Curd Operation</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>

</head>
<body>
<div class="container" style="background-color:yellow;margin-top:20px;">
<?php
$employeeupdid=$_GET['employeeupdid'];
 $select="SELECT * FROM `employeedetails` WHERE employee_id ='$employeeupdid'";
$run=mysqli_query($conn,$select);
$rowdata=mysqli_fetch_array($run);
?> 
  <h2 style="text-align:center; color:green;">Update Employee Details</h2>
  <form class="updateemployeeForm" method="POST" id="updateemployeeForm" enctype="multipart/form-data">
  <div class="form-group">
      <label class="control-label col-sm-2" for="update_employee_id">employee_id:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="update_employee_id" placeholder="Enter employee_id" name="update_employee_id" value="<?php echo $rowdata['employee_id']; ?>"><br>
        <input class="form-control" type="hidden" name="" id="update_employee_id" value="<?php echo $employeeupdid; ?>" readonly>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="update_firstname">firstname:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="update_firstname" placeholder="Enter firstname" name="update_firstname" value="<?php echo $rowdata['firstname']; ?>"><br>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="update_lastname">lastname:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="update_lastname" placeholder="Enter lastname" name="update_lastname" value="<?php echo $rowdata['lastname']; ?>"><br>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="update_date_of_birth">date_of_birth:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="update_date_of_birth" placeholder="Enter date_of_birth" name="update_date_of_birth" value="<?php echo $rowdata['date_of_birth']; ?>"><br>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="update_education_qualification">education_qualification:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="update_education_qualification" placeholder="Enter education_qualification" name="update_education_qualification" value="<?php echo $rowdata['education_qualification']; ?>"><br>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="update_address">address:</label>
      <div class="col-sm-10">          
        <input type="textarea" class="form-control" id="update_address" placeholder="Enter address" name="update_address" value="<?php echo $rowdata['address']; ?>"><br>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="update_email">email:</label>
      <div class="col-sm-10">          
        <input type="email" class="form-control" id="update_email" placeholder="Enter email" name="update_email" value="<?php echo $rowdata['email']; ?>"><br>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="update_phone">phone:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="update_phone" placeholder="Enter phone" name="update_phone" value="<?php echo $rowdata['phone']; ?>"><br>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="update_photo">photo:</label>
      <div class="col-sm-10">          
        <input type="file" class="form-control" id="update_photo" placeholder="Enter photo" name="update_photo" value="<?php echo $rowdata['photo']; ?>"><br>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="update_resume">resume:</label>
      <div class="col-sm-10">          
        <input type="file" class="form-control" id="update_resume" placeholder="Enter resume" name="update_resume" value="<?php echo $rowdata['resume']; ?>"><br>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button><br><br>
        <div id="displayemployeedata"></div>
      </div>
    </div>
  </form>
</div>
<script src="main.js"></script>
</body>
</html>
