
// login details..
$(document).on('submit','#loginForm',function(e){
    e.preventDefault();
   
    $.ajax({
    method:"POST",
    url: "action.php",
    data:$(this).serialize(),
    success: function(data){
     $("#displaydata").html(data);
     
}});
});

$(document).on('submit','#employeeForm',function(e) 
{
    e.preventDefault();
   
    var employee_id=$("#employee_id").val();
    var firstname=$("#firstname").val();
    var lastname=$("#lastname").val();
    var date_of_birth=$("#date_of_birth").val();
    var education_qualification=$("#education_qualification").val();
    var address=$("#address").val();
    var email=$("#email").val();
    var phone=$("#phone").val();
    var photo=$("#photo").val();
    var resume=$("#resume").val();
    

    if(employee_id=='')
    {
    alert('Select Your employee_id');
    return false;
    }
    if(firstname=='')
    {
    alert('Enter Your firstname');
    return false;
    }
    if(lastname=='')
    {
    alert('Select Your Category lastname');
    return false;
    }
    if(date_of_birth=='')
    {
    alert('Select Your Category date_of_birth');
    return false;
    }
    if(education_qualification=='')
    {
    alert('Select Your Category education_qualification');
    return false;
    }
    if(address=='')
    {
    alert('Select Your Category address');
    return false;
    }
    if(email=='')
    {
    alert('Select Your Category email');
    return false;
    }
    if(phone=='')
    {
    alert('Select Your Category phone');
    return false;
    }
    if(photo=='')
    {
    alert('Select Your Category photo');
    return false;
    }
    if(resume=='')
    {
    alert('Select Your Category resume');
    return false;
    }
    
    var formData = new FormData(this);
    formData.append('employee_id',employee_id);
    formData.append('firstname',firstname);
    formData.append('lastname',lastname);
    formData.append('date_of_birth',date_of_birth);
    formData.append('education_qualification',education_qualification);
    formData.append('address',address);
    formData.append('email',email);
    formData.append('phone',phone);
    formData.append('photo',photo);
    formData.append('resume',resume);
   
    $.ajax({
    type: 'POST',
    url: 'action.php',
    data: formData,
    contentType: false,
    cache: false,
    processData:false,
    success: function(data){
    $("#displayemployeedata").html(data);
    },

}); 
});

//update Employee Details Start

$(document).on('submit','#updateemployeeForm',function(e) 
{
    e.preventDefault();
   
    var update_employee_id=$("#update_employee_id").val();
    var update_firstname=$("#update_firstname").val();
    var update_lastname=$("#update_lastname").val();
    var update_date_of_birth=$("#update_date_of_birth").val();
    var update_education_qualification=$("#update_education_qualification").val();
    var update_address=$("#update_address").val();
    var update_email=$("#update_email").val();
    var update_phone=$("#update_phone").val();
    var update_photo=$("#update_photo").val();
    var update_resume=$("#update_resume").val();
    

    if(update_employee_id=='')
    {
    alert('Select Your employee_id');
    return false;
    }
    if(update_firstname=='')
    {
    alert('Enter Your firstname');
    return false;
    }
    if(update_lastname=='')
    {
    alert('Select Your Category lastname');
    return false;
    }
    if(update_date_of_birth=='')
    {
    alert('Select Your Category date_of_birth');
    return false;
    }
    if(update_education_qualification=='')
    {
    alert('Select Your Category education_qualification');
    return false;
    }
    if(update_address=='')
    {
    alert('Select Your Category address');
    return false;
    }
    if(update_email=='')
    {
    alert('Select Your Category email');
    return false;
    }
    if(update_phone=='')
    {
    alert('Select Your Category phone');
    return false;
    }
    if(update_photo=='')
    {
    alert('Select Your Category photo');
    return false;
    }
    if(update_resume=='')
    {
    alert('Select Your Category resume');
    return false;
    }
    
    var formData = new FormData(this);
    formData.append('update_employee_id',update_employee_id);
    formData.append('update_firstname',update_firstname);
    formData.append('update_lastname',update_lastname);
    formData.append('update_date_of_birth',update_date_of_birth);
    formData.append('update_education_qualification',update_education_qualification);
    formData.append('update_address',update_address);
    formData.append('update_email',update_email);
    formData.append('update_phone',update_phone);
    formData.append('update_photo',update_photo);
    formData.append('update_resume',update_resume);
   
    $.ajax({
    type: 'POST',
    url: 'action.php',
    data: formData,
    contentType: false,
    cache: false,
    processData:false,
    success: function(data){
    $("#displayemployeedata").html(data);
    },

}); 
});

// delete the employee details ...
$(document).on('click','.employeeremove',function() 
{
if(confirm("Are You Confirm"))  
{
var employeeremove=$(this).attr("getid");

$.ajax({
url:'action.php',
type:'POST',
data:{employeeremove:employeeremove},
success:function(data){
$("#displayemployeedata").html(data);
}
});
}

}); 