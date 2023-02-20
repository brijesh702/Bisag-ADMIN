
<?php
include('connect.php');
if (isset($_POST["create"])) {
    $first_name = mysqli_real_escape_string($conn, $_POST["first_name"]);
    $last_Name = mysqli_real_escape_string($conn, $_POST["last_Name"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    //$moblie_number = $_POST["mobile_number"];
    $mobile_number = mysqli_real_escape_string($conn,$_POST["number"]);
    $PASSWORD = mysqli_real_escape_string($conn, $_POST["PASSWORD"]);
    $emp_role = mysqli_real_escape_string($conn, $_POST["emp_role"]);
    $sqlInsert = "INSERT INTO employee_user(first_name,last_Name,email,mobile_number,PASSWORD,emp_role) VALUES ('$first_name','$last_Name','$email', '$mobile_number','$PASSWORD','$emp_role')";
    if(mysqli_query($conn,$sqlInsert)){
        session_start();
        $_SESSION["create"] = "Employee Added Successfully!";
        header("Location:emp_index.php");
    }else{
        session_start();
        $error= $conn->error;
        $_SESSION['error']=$error;
        header('Location:error.php');
       // echo "<script>alert('.$error.')</script>";
       // echo '<center><h3>'.$error.'</h3><center>';
        // die("Something went wrong");
   
    }
}
if (isset($_POST["edit"])) {
    $first_name = mysqli_real_escape_string($conn, $_POST["first_name"]);
    $last_Name = mysqli_real_escape_string($conn, $_POST["last_name"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    //$moblie_number = $_POST["mobile_number"];
    $mobile_number = $_POST['number'];
    $PASSWORD = mysqli_real_escape_string($conn, $_POST["PASSWORD"]);
    $emp_role = mysqli_real_escape_string($conn, $_POST["emp_role"]);
    $id = mysqli_real_escape_string($conn, $_POST["id"]);
    $sqlUpdate = "UPDATE employee_user SET first_name = '$first_name', last_name = '$last_Name', email = '$email', mobile_number = '$mobile_number',PASSWORD = '$PASSWORD',emp_role = '$emp_role' WHERE id='$id'";
    if(mysqli_query($conn,$sqlUpdate)){
        session_start();
        $_SESSION["update"] = "Employee Updated Successfully!";
        header("Location:emp_index.php");
    }else{
        session_start();
        $error= $conn->error;
        $_SESSION['error']=$error;
        header('Location:error.php');
       // echo '<center><h3>'.$error.'</h3><center>';
        //die("Something went wrong");
    }
}
?>

