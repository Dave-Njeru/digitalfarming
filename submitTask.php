<?php include ('session.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Submit Task</title>
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
    $task_name = $_POST['tname'];
    $start_date = $_POST['sdate'];
    $end_date = $_POST['edate'];
    $desc = $_POST['desc'];
    if ($task_name != NULL && !empty(strtotime($start_date)) && !empty(strtotime($end_date)) && $desc != NULL
        && $end_date > $start_date) {
        $query = "insert into tasks(task_id, task_name, start_date, end_date, description)
                values (NULL, '$task_name', '$start_date', '$end_date', '$desc')";
        if($result = $mysqli -> query($query)) {
            echo 'Operation successful';
        }
        else {
            echo 'An error occurred while trying to execute the query.';
        }
    }
    else {
        echo 'An error occurred. Check your inputs.';
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