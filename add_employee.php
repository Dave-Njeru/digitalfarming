<?php include ('session.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Add Employee</title>
    <link rel="stylesheet" href="styling.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div>
    <?php
    include 'dbconnection.php';
    $emp_id = $_GET['emp_id'];
    $id = $_GET['id'];
    $query = "insert into employees_on_duty (employees_id, work_id, supervisor)
values ('$emp_id', '$id', '0')";

    if($result = $mysqli -> query($query)) {
        echo 'Operation successful';
    }
    else {
        echo 'An error occurred';
    }
    ?>
</div>
<div class="empty"></div>
<div id="second">
    <!-- Display footer-->
    <?php include 'footer.php'; ?>
</div>
</body>
</html>
