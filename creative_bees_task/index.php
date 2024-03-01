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


<?php
include("dashboard.php");
?>
<br>
<br>
<br>



<div class="container" style="background-color:yellow;margin-top:20px;">
  <h2 style="text-align:center; color:green;">Employee form</h2>
  <form class="employeeForm" method="POST" id="employeeForm" enctype="multipart/form-data">
  <div class="form-group">
      <label class="control-label col-sm-2" for="employee_id">employee_id:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="employee_id" placeholder="Enter employee_id" name="employee_id"><br>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="firstname">firstname:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="firstname" placeholder="Enter firstname" name="firstname"><br>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="lastname">lastname:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="lastname" placeholder="Enter lastname" name="lastname"><br>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="date_of_birth">date_of_birth:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="date_of_birth" placeholder="Enter date_of_birth" name="date_of_birth"><br>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="education_qualification">education_qualification:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="education_qualification" placeholder="Enter education_qualification" name="education_qualification"><br>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="address">address:</label>
      <div class="col-sm-10">          
        <input type="textarea" class="form-control" id="address" placeholder="Enter address" name="address"><br>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">email:</label>
      <div class="col-sm-10">          
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email"><br>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="phone">phone:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="phone" placeholder="Enter phone" name="phone"><br>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="photo">photo:</label>
      <div class="col-sm-10">          
        <input type="file" class="form-control" id="photo" placeholder="Enter photo" name="photo"><br>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="resume">resume:</label>
      <div class="col-sm-10">          
        <input type="file" class="form-control" id="resume" placeholder="Enter resume" name="resume"><br>
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
