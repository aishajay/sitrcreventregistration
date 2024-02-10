<!DOCTYPE html>
<html>
<head>
	<title>View</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


 <script>
    $(document).ready(function(){
      $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
  </script>
   
</head>
<body>

<div class="container">
	<center><h3><b>Display All Registration Data....</b></h3></center>

  <table class="table table-bordered">
    <thead>
      <tr>
       	<th>Id</th>
  			<th>Name</th>
  			<th>Mobile</th>
  			<th>Email</th>
			<th>Stud-ID</th>
			<th>Visble</th>
			<th>Carrom</th>
			<th>Ludo</th>
			<th>Cricket</th>
			<th>Profile Photo</th>
  			<th>Edit</th>
  			<th>Delete</th>
      </tr>
    </thead>
    <tbody id="myTable">
      
<?php
  include "conn.php";
  $count=1;
  $querry="Select * from regnn";
  $result=mysqli_query($conn,$querry);
  while($row=mysqli_fetch_assoc($result))
  {
  $id=$row['id'];
?>
      <tr>
         <td><?php echo $count;?></td>
         <td><?php echo $row['name'];?></td>
         <td><?php echo $row['mobile'];?></td>
         <td><?php echo $row['email'];?></td>
          <td><?php echo $row['stud'];?></td>
		   <td><?php echo $row['yes'];?></td>
		    <td><?php echo $row['study'];?></td>
			 <td><?php echo $row['status'];?></td>
			  <td><?php echo $row['smoke'];?></td>
         <td><img src="image/<?php echo $row['img']; ?>" height="70px" width="80px"></td> 
         <td><a href="edit.php?id=<?php echo $row['id'];?>" class="btn btn-success">Edit</a></td>
         <td><a href="delete.php?id=<?php echo $row['id'];?>" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</a></td>
      </tr>

  <?php $count++;}?>  
   
    </tbody>
  </table>
</div>
</body>
</html>