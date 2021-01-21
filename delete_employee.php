<?php include ('session.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Delete Employee</title>
    <link rel="stylesheet" href="styling.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript">
        function goBack() {
            window.history.back();
        }
    </script>
</head>
<body>
<?php include 'navigation.php'?>
<div class="response">
    <?php
    include 'dbconnection.php';
    $emp_id = $_GET['emp_id'];
    $query = "delete from employees where employee_ID=$emp_id";

    if($result = $mysqli -> query($query)) {
        echo 'Operation successful';
    }
    else {
        echo 'An error occured';
    }
    //Close database connection
    $mysqli->close();
    ?>
    <br>
    <div class="link">
        <button onClick="goBack();">Go Back</button>
    </div>
</div>
<?php include 'footer.php'; ?>
</body>
<div>


