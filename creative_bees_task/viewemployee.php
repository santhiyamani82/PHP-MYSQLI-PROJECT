<?php
include('conn.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>view employee</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdn.datatables.net/v/dt/dt-1.13.6/datatables.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/css-dataTables.bootstrap4.min.css">


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
 <script src="js/js-dataTables.bootstrap4.min.js"></script>
 <script src="js/js-jquery.dataTables.min.js"></script>

</head>
<body>

<div class="container-fluid">
  <h2 style="text-align:center; color:green;">Employee Details</h2>          
  <table id='empTable' class='display dataTable' width='100%'>
    <thead>
      <tr>
        <th>s.no</th>
        <th>employee_id</th>
        <th>firstname</th>
        <th>lastname</th>
        <th>date_of_birth</th>
        <th>education_qualification</th>
        <th>address</th>
        <th>email</th>
        <th>phone</th>
        <th>photo</th>
        <th>resume</th>
        <th>action</th>
      </tr>
    </thead>
    <tbody>
    <?php
$sno=1;
$selectemployee="SELECT * FROM `employeedetails`";
$run=mysqli_query($conn,$selectemployee);
while($rowdata=mysqli_fetch_array($run))
{
?>
      <tr>
        <td><?php echo $sno; ?></td>
        <td><?php echo $rowdata['employee_id'] ?></td>
        <td><?php echo $rowdata['firstname'] ?></td>
        <td><?php echo $rowdata['lastname'] ?></td>
        <td><?php echo $rowdata['date_of_birth'] ?></td>
        <td><?php echo $rowdata['education_qualification'] ?></td>
        <td><?php echo $rowdata['address'] ?></td>
        <td><?php echo $rowdata['email'] ?></td>
        <td><?php echo $rowdata['phone'] ?></td>
        <td><?php echo $rowdata['photo'] ?></td>
        <td><?php echo $rowdata['resume'] ?></td>
        <td>
            <a href="update.php?employeeupdid=<?php echo $rowdata['employee_id']; ?>"><i class="fa fa-edit" style="font-size:36px"></i></a>
            <button class="employeeremove" getid="<?php echo $rowdata['employee_id']; ?>"><i class="fa fa-trash"></i></button></td> 
    </td> 
      </tr>
      <?php
$sno=$sno+1;
}
?>
    </tbody>
  </table>
</div>
<div id="displayemployeedata"></div>
<script src="main.js"></script>
<script>
        $(document).ready(function(){
          $('#empTable').DataTable({});
        });
</script>
</body>
</html>
