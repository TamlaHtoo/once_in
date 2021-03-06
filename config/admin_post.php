<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "once_in");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$image = $_FILES['image']['name'];
 
// Escape user inputs for security
$tag = mysqli_real_escape_string($link, $_REQUEST['tag']);
$text = mysqli_real_escape_string($link, $_REQUEST['text']);
$title = mysqli_real_escape_string($link, $_REQUEST['title']);
$target = "../images/".basename($image);
// Attempt insert query execution
$sql = "INSERT INTO posts (tag,text,image,title) VALUES ('$tag', '$text','$image','$title')";
if(mysqli_query($link, $sql)){
	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  		header('Location: ../adminblog.php');
  	}else{
  		$msg = "Failed to upload image";
  	}
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>