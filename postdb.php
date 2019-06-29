<?php 
if(isset($_POST['submit']))
{

$id = hexdec(uniqid());
$title=$_POST['title'];
$details=$_POST['details'];
$tags=$_POST['tags'];





$file=$_FILES['file'];

$fileName=$_FILES['file']['name'];
$fileTmpName=$_FILES['file']['tmp_name'];
$fileSize=$_FILES['file']['size'];
$fileError=$_FILES['file']['error'];
$fileType=$_FILES['file']['type'];

$fileExt=explode('.',$fileName);
$fileActualExt=strtolower(end($fileExt));

$allowed=array('jpg','jpeg','gif','png');

if(in_array($fileActualExt,$allowed))
{
	if($fileError === 0){
		if($fileSize < 9990000)
		{
			$fileNameNew=uniqid('',true).".".$fileActualExt;
			$src=$fileNameNew;
			$fileDestination='uploads/'.$fileNameNew;
			move_uploaded_file($fileTmpName,$fileDestination);
			
			 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "mypage";
			
			 $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
			 if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    }
	
	$sql = "INSERT INTO jobs_div (id, title, details_p,img_src, tags)
VALUES ('$id' , '$title' , '$details' , '$src' , '$tags')";
			
			if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
		$conn->close();
	
			header("Location: index.php?uploadsucess");
		
		
		}
		else{
		echo "file too big";
		}
		
		
	}
	else
	{
		echo "file error occured";
	}
}
else
{
	echo"you cannot upload files of this type";
}




}





?>