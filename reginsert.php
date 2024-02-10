<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'mydatabase';

// Connect to MySQL database
$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_FILES['img'])) {
				$errors = array();

				$file_name=$_FILES['img']['name'];
				$file_type=$_FILES['img']['type'];
				$file_size=$_FILES['img']['size']/1024;
				$file_tmp=$_FILES['img']['tmp_name'];

				$file_ext=end(explode('.', $file_name));


				$extension=array("jpeg","jpg","png","JPG");

				// echo "<pre>";
				// echo $file_name."<br>".$file_type."<br>".$file_size."<br>".$file_tmp."<br>".$file_ext;exit();

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
		if (isset($_POST['name'], $_POST['mobile'], $_POST['email'], $_POST['stud'], $_POST['yes'], $_POST['study'], $_POST['status'], $_POST['smoke'],$file_name)) {
		  $name = $_POST['name'];
		  $mobile = $_POST['mobile'];
		  $email = $_POST['email'];
		  $stud = $_POST['stud'];
		  $yes = $_POST['yes'];
		  $study = $_POST['study'];
		  $status = $_POST['status'];
		  $smoke = $_POST['smoke'];
		  $img=$file_name;

		  $query = "INSERT INTO regnn (name, mobile, email, stud, yes, study, status, smoke,img) VALUES ('$name', '$mobile', '$email', '$stud', '$yes', '$study', '$status', '$smoke','$img')";

		  if (mysqli_query($conn, $query)) {
			$response = array("success" => true);
			echo json_encode($response);
		  } else {
			$response = array("success" => false);
			echo json_encode($response);
		  }

		  mysqli_close($conn);
		}
		
		?>