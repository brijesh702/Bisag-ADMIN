
<?php
if (isset($_GET['id'])) {
include("connect.php");
$id = $_GET['id'];
$sql = "DELETE FROM employee_user WHERE id='$id'";
if(mysqli_query($conn,$sql)){
    session_start();
    $_SESSION["delete"] = "Employee Deleted Successfully!";
    header("Location:emp_index.php");
}else{
    die("Something went wrong");
}
}else{
    echo "Emp does not exist";
}
?>
