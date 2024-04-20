
<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];  
  $useremail = $_POST['useremail']; 
  $userpassword = $_POST['userpassword'];
  require_once 'connection.php';

  $insert = "INSERT INTO users(name,email,password) values('$username','$useremail','$userpassword')"; // corrected from $userpassword to '$userpassword'
  $result = mysqli_query($conn, $insert);
  if (!$result) {
    die('error in registration' . $conn->error);
  } else {
    echo "<script>alert('Registration is successfully done');</script>";
        echo "<script>window.location.href = 'homepage.html';</script>";
        exit;
    exit; 
  }
} else {
  echo "Invalid request method. Please try again.";
}
?>