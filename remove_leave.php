<?php include ('session.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Delete Leave</title>
    <link rel="stylesheet" href="styling.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript">
        function goBack() {
            window.history.back();
        }
    </script>
</head>
<body>
<!--navigation bar -->
<?php include 'navigation.php'?>
<div class="response">
    <?php
    include 'dbconnection.php';
    //Get the values
    $leave_id = $_GET['leave_id'];

    $query = "delete from leave_types where leave_id='$leave_id'";
    if($result = $mysqli -> query($query)) {
        echo 'Operation successful';
    }
    else {
        echo 'An error occurred while trying to execute the query.';
    }
    $mysqli->close();
    ?>
    <div class="link">
        <button onClick="goBack();">Go Back</button>
    </div>
</div>
<div class="empty"></div>
<div id="second">
    <!-- Display footer-->
    <?php include 'footer.php'; ?>
</div>
</body>
</html>
