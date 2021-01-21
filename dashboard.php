  <?php
include('session.php');
$connect = mysqli_connect("localhost", "root", '', 'schedule');
$query = "select designation_name, designatory, count(*) as number
 from employees, designations
  where designations.id = employees.designatory group by designation_name";
$result = mysqli_query($connect, $query);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="styling.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

            var data = google.visualization.arrayToDataTable([
                ['Employee', 'Value'],
                <?php
                while($row = mysqli_fetch_array($result)) {
                    echo "['".$row["designation_name"]."', ".$row["number"]."],";
                }
                ?>
            ]);

            var options = {
                title: 'Employees Distribution'
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart'));

            chart.draw(data, options);
        }
    </script>
</head>
<body>
<!--navigation bar -->
<?php include 'navigation.php'?>
<!-- include weather forecast -->
<div class="weather_task">
    <div class="weather">
        <?php include 'curl.php'; ?>
        <h4>THE WEATHER FORECAST</h4>
        <h3><?php echo $data->name; ?> Weather Status </h3>

        <div><?php echo date("l g:i a", $currentTime); ?></div>
        <div><?php echo date("jS F, Y",$currentTime); ?></div>
        <div><?php echo ucwords($data->weather[0]->description); ?></div>

        <div>
            <img src="http://openweathermap.org/img/w/<?php echo $data->weather[0]->icon; ?>.png"class="weather-icon" />
            <b>Temperature: </b> <?php echo $data->main->temp_max; ?>°C
        </div>

        <div>
            <br>
            <div>Humidity: <?php echo $data->main->humidity; ?> %</div>
            <div>Wind: <?php echo $data->wind->speed; ?> km/h</div>
        </div>
    </div>

    <div class="tasks">
        <h4>SCHEDULE</h4>
        <!-- Display tasks -->
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
        echo "<table id='Grid'> <tr>";
        echo "<th>Task</th>";
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
    <div class="bottom">
        <div class="leaves">
            <h4>LEAVE REQUESTS</h4>
            <!-- Display tasks -->
            <?php
            include 'dbconnection.php';
            //Query information from table tasks
            $query = "select concat(first_name,' ',last_name) as names, leave_name, date_requested
     from employees, leave_requests, leave_status, leave_types
     where employees.employee_ID = leave_requests.user_id and leave_requests.leave_request = leave_types.leave_id
     and leave_requests.status = leave_status.id and leave_requests.status = 1";

            if($result = $mysqli->query($query)) {
                //Do nothing if successful
            }
            else {
                echo "Error getting information from the database."."<br>";
            }
            //Create table headers
            echo "<table id='Grid'> <tr>";
            echo "<th>Employee Name</th>";
            echo "<th>Leave Name</th>";
            echo "<th>Date Requested</th>";
            echo "</tr\n>";
            //loop through all the rows and create a row for each
            while($result_ar = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>".$result_ar['names']."</td>";
                echo "<td>".$result_ar['leave_name']."</td>";
                echo "<td>".$result_ar['date_requested']."</td>";
                echo "</td></tr>\n";
            }
            echo "</table>";
            //Close database connection
            $mysqli->close();
            ?>
        </div>
        <div class="on_duty">
            <h4>ON DUTY EMPLOYEES</h4>
            <!-- Display tasks -->
            <?php
            include 'dbconnection.php';
            //Query information from table tasks
            $query = "select concat(first_name,' ',last_name) as names, designatory, task_name, phone_number
     from employees, employees_on_duty, tasks
     where employees.employee_ID = employees_on_duty.employees_id and employees_on_duty.work_id = tasks.task_id";

            if($result = $mysqli->query($query)) {
                //Do nothing if successful
            }
            else {
                echo "Error getting information from the database."."<br>";
            }
            //Create table headers
            echo "<table id='Grid'> <tr>";
            echo "<th>Employee Name</th>";
            echo "<th>Assigned Task</th>";
            echo "<th>Contact</th>";
            echo "</tr\n>";
            //loop through all the rows and create a row for each
            while($result_ar = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>".$result_ar['names']."</td>";
                echo "<td>".$result_ar['task_name']."</td>";
                echo "<td>".$result_ar['phone_number']."</td>";
                echo "</td></tr>\n";
            }
            echo "</table>";
            //Close database connection
            $mysqli->close();
            ?>
        </div>
        <div class="pie">
            <h4>EMPLOYEES DISTRIBUTION</h4>
            <div id="piechart"></div>
        </div>
    </div>
</div>
<div class="empty"></div>
<div id="second">
    <!-- Display footer-->
    <?php include 'footer.php'; ?>
</div>
</body>
</html>