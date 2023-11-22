<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>
<body>
<?php
			$zz = $_POST['student_no'];
			$student_name = $_POST['student_name'];
			$student_dob = $_POST['student_dob'];
			$student_doj = $_POST['student_doj'];
			
	   include('connection.php');
		
	 			$query = 'UPDATE student set student_name ="'.$student_name.'",
				 student_dob ="'.$student_dob.'", student_doj="'.$student_doj.'"
				 WHERE student_no ="'.$zz.'"';
				$result = mysqli_query($db, $query) or die(mysqli_error($db));
							
?>	
	<script type="text/javascript">
			alert("Update Successfull.");
			window.location = "index.php";
		</script>
 </body>
</html>