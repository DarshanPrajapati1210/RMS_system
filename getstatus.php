<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Candidate data</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


<style>
  body{
    font-family:monospace;
    background-image: url("bg/bg3.jpg");
    background-size: cover;
    font-weight:bold;
      
  }
    .add{
        font-family:monospace;
        align-items:center;
        display: block;
        margin-left: auto;
        margin-right: auto;
        background: #000046;  
        background: -webkit-linear-gradient(to right, #1CB5E0, #000046); 
        background: linear-gradient(to right, #1CB5E0, #000046);
        border-radius:5px;

    }
    .add a{
        font-size:larger;
        font-weight:bold;
        padding:15px;
        margin:5px;
        color: white;
        text-decoration: none;
        
       
    }
    .navbar-brand{
      font-family:cursive;
    }

    </style>
</head>
<body>
<div class="topnav">
    <div class="navbar navbar-expand-sm navbar-dark text-black "
     style="height: fit-content; padding:7px; font-size:20px;  ">

        <div class="container-fluid">
            <a class="navbar-brand text-black" ><i class="bi bi-building fa-2x"></i> Recruitment System</a>
            <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar"><span class="navbar-toggler-icon"></span></button>

            <div class="collapse navbar-collapse" id="collapsibleNavbar">
              
                <ul class="navbar-nav">
                    <li class="nav-item">
                      
                      <a class="nav-link text-black" href="home.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                    </li>

                    <!-- <li class="nav-item">
                      <a class="nav-link text-black" href="feedback.html"><i class="fa fa-comments" aria-hidden="true"></i> Feedback</a>
                    </li>   -->

                    <li class="nav-item dropdown text-black">
                      <a class="nav-link dropdown-toggle text-black" href="#" role="button" data-bs-toggle="dropdown">
                          <i class="bi bi-people"></i>
                          <p class="sr-only">Loading...</p>Role
                      </a>
                      <ul class="dropdown-menu ">
                        <li><a class="dropdown-item" href="admin.php">HR</a></li>
                        <li><a class="dropdown-item" href="intw.php">Interviewer </a></li>
                      </ul>
                    </li>
                </ul>
              </div>
        </div>
    </div>
</div>




<div class="container mt-2">

<div class="page-header">
<h2><i class="bi bi-people-fill"></i> Candidates List</h2>
<!-- <div class="d-flex p-2 bd-highlight ">
			<a href="hrForm.html" name="login" id="add">Add Candidates</a>
    </div> -->
</div>

<div class="col-md-15">



<div class="row">
<table class="table">
<thead>
<tr>
<th scope="col">ID</th>
<th scope="col">First Name</th>
<th scope="col">Last Name</th>
<th scope="col">Email</th>
<th scope="col">Status</th>
<th scope="col">Action</th>


</tr>
</thead>
<tbody>

<?php
include 'mydbCon.php';
$query="select * from candi_status "; // Fetch all the data from the table candi_status
$result=mysqli_query($conn,$query);
?>
<?php if ($result->num_rows > 0): ?>
<?php while($array=mysqli_fetch_row($result)): ?>
<tr>
<th scope="row"><?php echo $array[0];?></th>
<td><?php echo $array[1];?></td>
<td><?php echo $array[2];?></td>
<td><?php echo $array[3];?></td>
<td><?php echo $array[4];?></td>
<td> 
<button type="button" id="showIcon" href="javascript:void(0)" class="btn btn-primary view" data-toggle="modal" data-target="#myModal" data-id="<?php echo $array[0];?>"> View</button> 



                              
</tr>

<?php endwhile; ?>
<?php else: ?>
<tr>
<td colspan="3" rowspan="1" headers="">No Data Found</td>
</tr>
<?php endif; ?>
<?php mysqli_free_result($result); ?>
</tbody>
</table>
</div>

<div class="modal fade " id="myModal" role="dialog"  >
<div class="modal-dialog">

<div class="modal-content"  style="width:500px; ">
<div class="modal-header">
          <h4 class="modal-title">Candidate's Details </h4>
        </div>

        <div class="modal-body"  style=" font-size:large; background: #4CA1AF;  
                                  background: -webkit-linear-gradient(to right, #C4E0E5, #4CA1AF);  
                                  background: linear-gradient(to right, #C4E0E5, #4CA1AF); ">
<b>First Name: </b> <span id="first_name"></span><br>
<b>Last Name: </b> <span id="last_name"></span><br>
<b>Email: </b> <span id="myemail"></span><br>
<b>Mobile: </b> <span id="mymobile"></span><br>
<b>Gender: </b> <span id="mygender"></span><br>
<b>DOB: </b> <span id="mydob"></span><br>
<b>Address: </b> <span id="myaddress"></span><br>
<b>City: </b> <span id="mycity"></span><br>
<b>Pincode: </b> <span id="mypin"></span><br>
<b>State: </b> <span id="mystate"></span><br>
<b>Qualification: </b> <span id="myqualification"></span><br>
<b>Salary: </b> <span id="mysalary"></span><br>
<div class="modal-footer">

          <!-- <button onClick="location.href='schedule.php'" type="submit" class="btn btn-default">Schedule</button> -->
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          
    </div>
</div>
</div>
</div>        
</div>
</div>

<script type="text/javascript">
$(document).ready(function($){
$('body').on('click', '.view', function () {
var id = $(this).data('id');
// ajax
$.ajax({
type:"POST",
url: "ajax-fetch-record.php",
data: { id: id },
dataType: 'json',
success: function(res){
$('#first_name').html(res.first_name);
$('#last_name').html(res.last_name);
$('#myemail').html(res.myemail);
$('#mymobile').html(res.mymobile);
$('#mygender').html(res.mygender);
$('#mydob').html(res.mydob);
$('#myaddress').html(res.myaddress);
$('#mycity').html(res.mycity);
$('#mypin').html(res.mypin);
$('#mystate').html(res.mystate);
$('#myqualification').html(res.myqualification);
$('#mysalary').html(res.mysalary);

}
});
});
});


// if($("#color").innerHTML='Selected'){
//   $("#color").css("background-color":"Green");
// }
// else if ($("#color").innerHTML = 'onHold'){
//   $("#color").css("background-color":"Yellow");
// }
// else ($("#color").innerHTML = 'Red'){
//   $("#color").css("background-color":"Red");
// }


// if(($(this).attr("td") == "id") && innerHTML="Selected") {
//      $("#id").css("background-color":"Green");
// }
// else if (($(this).attr("td") == "id") && innerHTML="onHold") {
//     $("#id").css("background-color":"Gold");
// }
// else (($(this).attr("td") == "id") && innerHTML="Rejected") {
//     $("#id").css("background-color":"Red");
// }
</script>
</body>
</html>