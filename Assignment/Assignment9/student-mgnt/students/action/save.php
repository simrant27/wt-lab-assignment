<?php 

require_once "../../utils/db.php";
if (isset($_POST['save'])) {
 
    $filename = $_FILES["profile"]["name"];
    $tempname = $_FILES["profile"]["tmp_name"];
    $folder = "../image/" . $filename;

	if (move_uploaded_file($tempname, $folder)) {
        echo "<h3>  Image uploaded successfully!</h3>";
    } else {
        echo "<h3>  Failed to upload image!</h3>";
    }

$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$password = password_hash($_POST['password'] ?? '', PASSWORD_DEFAULT);
$dob = $_POST['dob'] ?? '';
$favorite_color = $_POST['color'] ?? '';
$weight = $_POST['weight'] ?? '';
$gender = $_POST['gender'] ?? '';
$hobbies = implode(",", $_POST['hobbies'] ?? []);
$nationality = $_POST['nationality'] ?? 'NP';

$sql = "INSERT INTO students (name, email, password, dob, favorite_color, weight, gender, hobbies, nationality,profile)
VALUES ('$name', '$email', '$password', '$dob', '$favorite_color', $weight, '$gender', '$hobbies', '$nationality','$folder')";

if($conn->query($sql) == TRUE) {
	header("location:../?success=inserted successfully");
} else {
	header("location:../?error=error occured");
}
}
?>
