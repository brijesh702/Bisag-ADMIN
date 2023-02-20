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
    <title>Add New Employee</title>
</head>
<body>
    <div class="container my-5">
    <header class="d-flex justify-content-between my-4">
            <h1>Add New Employee</h1>
            <div>
            <a href="emp_index.php" class="btn btn-primary">Back</a>
            </div>
        </header>
        
        <form action="process.php" method="post">
            <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="first_name" placeholder="first_name" required>
            </div>
            <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="last_Name" placeholder="last_Name" required>
            </div>
            <div class="form-elemnt my-4">
                <input type="email" class="form-control" name="email" placeholder="email" required>
            </div>
            <div class="form-elemnt my-4">
                <input type="text" maxlength="10" class="form-control" name="number" placeholder="moblie_number" id="number" required>
            </div>
            <div class="form-elemnt my-4">
                <input type="password" class="form-control" name="PASSWORD" placeholder="PASSWORD" required>
            </div>
            <div class="form-elemnt my-4">
                <select name="emp_role" id="" class="form-control">
                    <option value="">Select employee Type</option>
                    <option value="support department">support department</option>
                    <option value="management department">management department</option>
                </select>
            </div>
            <div class="form-element my-4">
                <input type="submit" name="create" value="Add employee" class="btn btn-outline-success">
            </div>
        </form>
    </div>
</body>
</html>
<?php
include("footer.php");
error_reporting(0);
?>
