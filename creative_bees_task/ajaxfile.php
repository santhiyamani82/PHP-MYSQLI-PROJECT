<?php
include('conn.php');
$draw = $_POST['draw'];  
$row = $_POST['start'];
$rowperpage = $_POST['length']; // Rows display per page
$columnIndex = $_POST['order'][0]['column']; // Column index
$columnName = $_POST['columns'][$columnIndex]['data']; // Column name
$columnSortOrder = $_POST['order'][0]['dir']; // asc or desc
$searchValue = mysqli_real_escape_string($conn,$_POST['search']['value']); // Search value
 
## Search 
$searchQuery = " ";
if($searchValue != ''){
   $searchQuery .= " and (name like '%".$searchValue."%' or
            position like '%".$searchValue."%' or
            office like'%".$searchValue."%' ) ";
}
 
## Total number of records without filtering
$sel = mysqli_query($conn,"select count(*) as allcount from employeedetails");
$records = mysqli_fetch_assoc($sel);
$totalRecords = $records['allcount'];
 
## Total number of records with filtering
$sel = mysqli_query($conn,"select count(*) as allcount from employeedetails WHERE 1 ".$searchQuery);
$records = mysqli_fetch_assoc($sel);
$totalRecordwithFilter = $records['allcount'];
 
## Fetch records
$empQuery = "select * from employeedetails WHERE 1 ".$searchQuery." order by ".$columnName." ".$columnSortOrder." limit ".$row.",".$rowperpage;
$empRecords = mysqli_query($conn, $empQuery);
 
$data = array();
 
while($row = mysqli_fetch_assoc($empRecords)){
    $firstname = $row['firstname'];
    $firstnamearray = "$firstname";
    $data[] = array(
            "s.no"=>$row['s.no'],
            "employee_id "=>$row['employee_id '],
            "firstname"=>$firstname,
            "lastname"=>$row['lastname'],
            "date_of_birth"=>$row['date_of_birth'],
            "education_qualification"=>$row['education_qualification'],
            "address"=>$row['address'],
            "email"=>$row['email'],
            "phone"=>$row['phone'],
            "photo"=>$row['photo'],
            "resume"=>$row['resume'],
            "action"=>$row['action']
            
        );
}
 
## Response
$response = array(
    "draw" => intval($draw),
    "iTotalRecords" => $totalRecords,
    "iTotalDisplayRecords" => $totalRecordwithFilter,
    "aaData" => $data
);
 
echo json_encode($response);
 
?>