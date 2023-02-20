<?php
include("header.php");
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Edit Employee</title>
</head>
<body>
    <div class="container my-5">
    <header class="d-flex justify-content-between my-4">
            <h1>Edit Employee</h1>
            <div>
            <a href="emp_index.php" class="btn btn-primary">Back</a>
            </div>
        </header>
        <form action="process.php" method="post">
            <?php 
            if (isset($_GET['id'])) {
                include("connect.php");
                $id = $_GET['id'];
                $sql = "SELECT * FROM employee_user WHERE id=$id";
                $result = mysqli_query($conn,$sql);
                $row = mysqli_fetch_array($result);
                ?>
            <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="first_name" placeholder="first_name" value="<?php echo $row["first_name"]; ?>">
            </div>
            <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="last_name" placeholder="last_name" value="<?php echo $row["last_name"]; ?>">
            </div>
            <div class="form-elemnt my-4">
                <input type="email" class="form-control" name="email" placeholder="email" value="<?php echo $row["email"]; ?>">
            </div>
            <div class="form-elemnt my-4">
                <input type="text"  class="form-control" name="number" placeholder="moblie_number" id="number" value="<?php echo $row["moblie_number"]; ?>">
            </div>
            <div class="form-elemnt my-4">
                <input type="password" class="form-control" name="PASSWORD" placeholder="PASSWORD" value="<?php echo $row["PASSWORD"]; ?>">
            </div>
            <div class="form-elemnt my-4">
                <select name="emp_role" id="" class="form-control">
                    <option value="">Select employee Type:</option>
                    <option value="support department" <?php if($row["emp_role"]=="support department"){echo "selected";} ?>>support department</option>
                    <option value="management department" <?php if($row["emp_role"]=="management department"){echo "selected";} ?>>management department</option>
                </select>
            </div>
            <input type="hidden" value="<?php echo $id; ?>" name="id">
            <div class="form-element my-4">
                <input type="submit" name="edit" value="Edit employee" class="btn btn-primary">
            </div>
                <?php
            }else{
                echo "<h3>Employee Not Exist</h3>";
            }
            ?>
           
        </form>
        
        
    </div>
</body>
</html>


<?php
include("footer.php");
?>