<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Edit Data</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>


<?php
// error_reporting(0);
include('conn.php');

// Turn off all error reporting
error_reporting(0);

 $id=$_GET['id'];
 $querry="select * from regnn where id='$id'";

 $result=mysqli_query($conn,$querry) or die('QUerry Failed..');
 $row=mysqli_fetch_assoc($result);
 // echo "<pre>";
 // print_r($row); 
 // die();
 
 $id=$row['id'];
	
?>
<body>
<div class="container"><br>
	<div class="row">
		<div class="col-sm-12 col-md-3 col-lg-3"></div>
				<div class="col-sm-12 col-md-6 col-lg-6">
					<form method="post" enctype="multipart/form-data" name="uploadfile">
			
					<div class="form-group">
						<label>Name:</label>
						<input class="form-control" type="text" name="name" value="<?php echo $row['name']; ?>"> 
					</div>
					<div class="form-group">
						<label>Mobile:</label>
							<input class="form-control" type="number" name="mobile" value="<?php echo $row['mobile']; ?>">
					</div>
										<div class="form-group">
						<label>Email:</label>
							<input class="form-control" type="text" name="email" value="<?php echo $row['email']; ?>">
					</div>
										<div class="form-group">
						<label>Stud-ID:</label>
							<input class="form-control" type="text" name="stud" value="<?php echo $row['stud']; ?>">
					</div>
						<div class="form-group">
						<label>Visible Coding:</label>
						<input class="" type="radio" name="yes" value="yes" <?php if($row['yes']=='yes'){echo"checked";} ?>>yes
						<input class="" type="radio" name="yes" value="no"<?php if($row['yes']=='no'){echo"checked";} ?>>no
					</div>
						<div class="form-group">
						<label>Carrom:</label>
						<input class="" type="radio" name="study" value="yes" <?php if($row['study']=='yes'){echo"checked";} ?>>yes
						<input class="" type="radio" name="study" value="no"<?php if($row['study']=='no'){echo"checked";} ?>>no
					</div>
						<div class="form-group">
						<label>Ludo:</label>
						<input class="" type="radio" name="status" value="yes" <?php if($row['status']=='yes'){echo"checked";} ?>>yes
						<input class="" type="radio" name="status" value="no"<?php if($row['status']=='no'){echo"checked";} ?>>no
					</div>
					<div class="form-group">
						<label>Cricket:</label>
						<input class="" type="radio" name="smoke" value="yes" <?php if($row['smoke']=='yes'){echo"checked";} ?>>yes
						<input class="" type="radio" name="smoke" value="no"<?php if($row['smoke']=='no'){echo"checked";} ?>>no
					</div>
					<div class="form-group">
					<label for="">Photo:</label> 
						<input type="file" name="new-image"><br>
						
					<img src="image/<?php echo $row['img']; ?>" height="150px">
					<input type="hidden" name="old-image" value="<?php echo $row['img']; ?>">
						 <br>
					</div>
						<center>
							<input type="submit" name="submit" class="btn btn-success" value="Update">
							<!-- <a class="btn btn-primary" href="view.php">View</a> -->
						</center>
				</form>
		</div>
		
	</div>
</div>
</body>
</html>
<?php

include_once('conn.php');
if(empty($_FILES['new-image']['name']))
{
	$file_name=$_POST['old-image'];
}else
			{
				$errors = array();

				$file_name=$_FILES['new-image']['name'];
				$file_type=$_FILES['new-image']['type'];
				$file_size=$_FILES['new-image']['size']/1024;
				$file_tmp=$_FILES['new-image']['tmp_name'];
				$file_ext=end(explode('.', $file_name));
				$extension=array("jpeg","jpg","png","JPG");
				//echo$name."<br>".$type."<br>".$size."<br>".$temp;
				 if(in_array($file_ext, $extension) == false)
				 {
				$errors[] ="this file extension not allow....";
				}
				if($file_size > 2097152){
					$errors[]="file size must be 2mb or lower";
				}
				if(empty($errors)==true){
					move_uploaded_file($file_tmp, "image/".$file_name);
				}else{
					print_r($errors);
					die();
				}
			}

if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$mobile=$_POST['mobile'];
	$email=$_POST['email'];
	$stud=$_POST['stud'];
	$yes=$_POST['yes'];
	$study=$_POST['study'];
	$status=$_POST['status'];
	$smoke=$_POST['smoke'];
	$querry="UPDATE regnn SET name='$name',mobile= '$mobile',email= '$email',stud= '$stud',yes= '$yes',study= '$study',status= '$status',smoke= '$smoke',img= '$file_name' where id='$id'";

	$result=mysqli_query($conn,$querry);
	 	mysqli_close($conn);
	 	header("location: dispreg.php");
	 
 }

?>