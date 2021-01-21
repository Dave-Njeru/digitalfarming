<?php include ('session.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>All Schedules</title>
    <link rel="stylesheet" href="styling.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<!--navigation bar -->
<?php include 'navigation.php'; ?>
<div class="heading"><h4>WORK SCHEDULE</h4></div>
<div class="workspace">
    <div class="button"><a href="new_task.php"><button>ADD NEW SCHEDULE</button></a></div>
    <hr>
    <div id="work_table">
        <?php
        include 'dbconnection.php';
        //Query information from table tasks
        $query = "select task_id, task_name, start_date, end_date from tasks";

        if($result = $mysqli->query($query)) {
            //Do nothing if successful
        }
        else {
            echo "Error getting information from the database."."<br>";
        }
        //Create table headers
        echo "<table id='schedule'> <tr>";
        echo "<th>Task Name</th>";
        echo "<th>Start Date</th>";
        echo "<th>End Date</th>";
        echo "<th>Action</th>";
        echo "</tr\n>";
        //loop through all the rows and create a row for each
        while($result_ar = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>".$result_ar['task_name']."</td>";
            echo "<td>".$result_ar['start_date']."</td>";
            echo "<td>".$result_ar['end_date']."</td>";
            echo "<td> <a href='workschedule.php? ID=".$result_ar['task_id']."'>View Details</a></td>";
            echo "</td></tr>\n";
        }
        echo "</table>";
        //Close database connection
        $mysqli->close();
        ?>
    </div>
</div>
<div class="empty"></div>
<div id="second">
    <!-- Display footer-->
    <?php include 'footer.php'; ?>
</div>
</body>
<html>