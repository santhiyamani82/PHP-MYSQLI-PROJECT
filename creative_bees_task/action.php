<?php
include('conn.php');

//login details...
define('tableName', 'login');
$userData = $_POST;

loginUser($conn, $userData);

function loginUser($conn, $userData) {

    $emailAddress   = $userData['emailAddress'];
    $password       = $userData['password'];
   

    if(!empty($emailAddress) && !empty($password)){

        
        $query = "SELECT emailAddress, password FROM ".tableName;
        $query .= " WHERE emailAddress = '$emailAddress' AND password = '$password'";
        $result = $conn->query($query);
        if($result->num_rows > 0) {
           session_start();
           $_SESSION['userId'] = $emailAddress;
          echo "<script>alert('Login Sucessfully'); window.location.href='index.php';</script>";
        } else {
          
            echo "<script>alert('Wrong email and password');</script>";
        }
     
   } else {
    echo "<script>alert('All Fields are required');</script>";
   
   }
}

if(isset($_POST['employee_id']))
{
    $employee_id=$_POST['employee_id'];
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $date_of_birth=$_POST['date_of_birth'];
    $education_qualification=$_POST['education_qualification'];
    $address=$_POST['address'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $photo=$_POST['photo'];
    $photo_loc = $_FILES['photo']['tmp_name'];
    $photo_name = $_FILES['photo']['name'];
    $photo_des = "uploadImage/".$photo_name;
    move_uploaded_file($photo_loc,'uploadImage/'.$photo_name);
    $resume=$_POST['resume'];
    $resume_loc = $_FILES['resume']['tmp_name'];
    $resume_name = $_FILES['resume']['name'];
    $resume_des = "resume/".$resume_name;
    move_uploaded_file($resume_loc,'resume/'.$resume_name);
  
    $insertEmployee="INSERT INTO `employeedetails`(`employee_id`, `firstname`, `lastname`, `date_of_birth`, `education_qualification`, `address`, `email`, `phone`, `photo`, `resume`) VALUES (' $employee_id','$firstname','$lastname','$date_of_birth','$education_qualification','$address','$email',' $phone','$photo_des','$resume_des')";
    $run=mysqli_query($conn,$insertEmployee);
    
    if($run)
    {
        echo "<script>alert('Employee Details Added Successfully');window.location.href='viewemployee.php'; </script>";
    }
}

//update the employee details start..

if(isset($_POST['update_employee_id']))
{
    $update_employee_id=$_POST['update_employee_id'];
    $update_firstname=$_POST['update_firstname'];
    $update_lastname=$_POST['update_lastname'];
    $update_date_of_birth=$_POST['update_date_of_birth'];
    $update_education_qualification=$_POST['update_education_qualification'];
    $update_address=$_POST['update_address'];
    $update_email=$_POST['update_email'];
    $update_phone=$_POST['update_phone'];
    $update_photo_loc = $_FILES['update_photo']['tmp_name'];
    $update_photo_name = $_FILES['update_photo']['name'];
    $update_photo_des = "uploadImage/".$update_photo_name;
    if($update_photo_name != '')
    {
        move_uploaded_file($update_photo_loc,'uploadImage/'.$update_photo_name);
    } 
    
    $update_resume_loc = $_FILES['update_resume']['tmp_name'];
    $update_resume_name = $_FILES['update_resume']['name'];
    $update_resume_des = "resume/".$update_resume_name;
    if($update_resume_name != '')
    {
        move_uploaded_file($update_resume_loc,'resume/'.$update_resume_name);
    }
     $updateEmployee="UPDATE `employeedetails` SET `firstname`=' $update_firstname',`lastname`='$update_lastname',`date_of_birth`='$update_date_of_birth',`education_qualification`='$update_education_qualification',`address`=' $update_address',`email`='$update_email',`phone`='$update_phone',`photo`='$update_photo_des',`resume`=' $update_resume_des' WHERE employee_id ='$update_employee_id'";
    $run=mysqli_query($conn,$updateEmployee);
    
    if($run)
    {
        echo "<script>alert('Update Employee Details Successfully');window.location.href='viewemployee.php'; </script>";
    }
}

if (isset($_POST['employeeremove']))
{
    $employeeremove= $_POST['employeeremove'];
    $delete = "DELETE FROM `employeedetails` WHERE employee_id ='$employeeremove'";
    $run = mysqli_query($conn, $delete);
    if ($run)
    {
        echo "<script>alert('deleted successfully');window.location.href='viewemployee.php'; </script>";
    }
}

?>


