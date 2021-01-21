<?php include ('session.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Request Approval</title>
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
    $leave_id = $_GET['leave_id'];
    $query = "update leave_requests set status = 2
    where leave_request_id = '$leave_id'";

    if($result = $mysqli -> query($query)) {
        echo 'Operation successful';
    }
    else {
        echo 'An error occurred';
    }
    //Close database connection
    $mysqli->close();
    ?>
    <br>
    <div class="link">
        <button onClick="goBack();">Go Back</button>
    </div>
</div>
<div class="empty"></div>
<div id="second">
    <?php include 'footer.php' ?>
</div>
</body>
<div>
