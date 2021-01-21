<?php
include 'dbconnection.php';
include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Leaves</title>
    <meta http-equiv="refresh">
    <link rel="stylesheet" href="styling.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<!--navigation bar -->
<?php include 'navigation.php'?>
<div class="heading"><h4>LEAVE REQUESTS</h4></div>
<div class="workspace">
    <h3>Pending Leave Requests list</h3>
    <hr>
    <div class="tables">
        <?php
        include 'dbconnection.php';
        //Query information
        $query = "select leave_request_id, concat(first_name,' ',last_name) as names, leave_name, date_requested, concat(start_date,' to ',end_date) as dates
    from employees, leave_types, leave_requests
    where leave_requests.user_id = employees.employee_ID and leave_requests.leave_request = leave_types.leave_id 
    and leave_requests.status = '1'";
        if($result = $mysqli->query($query)) {
            //Do nothing if successful
        }
        else {
            echo "Error getting information from the database."."<br>";
        }
        //Create table headers
        echo "<table class='leave_tables'> <tr>";
        echo "<th>Employee Name</th>";
        echo "<th>Leave Type</th>";
        echo "<th>Date Requested</th>";
        echo "<th>Leave Date</th>";
        echo "<th>Action</th>";
        echo "</tr\n>";
        //loop through all the rows and create a row for each
        while($result_ar = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>".$result_ar['names']."</td>";
            echo "<td>".$result_ar['leave_name']."</td>";
            echo "<td>".$result_ar['date_requested']."</td>";
            echo "<td>".$result_ar['dates']."</td>";
            echo "<td>
<details>
<summary>Select</summary>
<div><a href='request_approval.php? leave_id=".$result_ar['leave_request_id']."'>Approve Request</a></div>
<div><a href='request_denied.php? leave_id=".$result_ar['leave_request_id']."'>Deny Request</a></div>
</details>
</td>";
            echo "</td></tr>\n";
        }
        echo "</table>";
        //Close database connection
        $mysqli->close();
        ?>
    </div>
    <h3>Approved Leave Requests list</h3>
    <hr>
    <div class="tables">
        <?php
        include 'dbconnection.php';
        //Query information
        $query = "select leave_request_id, concat(first_name,' ',last_name) as names, leave_name, date_requested, concat(start_date,' to ',end_date) as dates
    from employees, leave_types, leave_requests
    where leave_requests.user_id = employees.employee_ID and leave_requests.leave_request = leave_types.leave_id 
    and leave_requests.status = '2'";
        if($result = $mysqli->query($query)) {
            //Do nothing if successful
        }
        else {
            echo "Error getting information from the database."."<br>";
        }
        //Create table headers
        echo "<table class='leave_tables'> <tr>";
        echo "<th>Employee Name</th>";
        echo "<th>Leave Type</th>";
        echo "<th>Date Requested</th>";
        echo "<th>Leave Date</th>";
        echo "<th>Action</th>";
        echo "</tr\n>";
        //loop through all the rows and create a row for each
        while($result_ar = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>".$result_ar['names']."</td>";
            echo "<td>".$result_ar['leave_name']."</td>";
            echo "<td>".$result_ar['date_requested']."</td>";
            echo "<td>".$result_ar['dates']."</td>";
            echo "<td>
<details>
<summary>Select</summary>
<div><a href='request_denied.php? leave_id=".$result_ar['leave_request_id']."'>Deny Request</a></div>
</details>
</td>";
            echo "</td></tr>\n";
        }
        echo "</table>";
        //Close database connection
        $mysqli->close();
        ?>
    </div>
    <h3>Denied Leave Requests list</h3>
    <hr>
    <div class="tables">
        <?php
        include 'dbconnection.php';
        //Query information
        $query = "select leave_request_id, concat(first_name,' ',last_name) as names, leave_name, date_requested, concat(start_date,' to ',end_date) as dates
 from employees, leave_types, leave_requests
    where leave_requests.user_id = employees.employee_ID and leave_requests.leave_request = leave_types.leave_id 
    and leave_requests.status = '3'";
        if($result = $mysqli->query($query)) {
            //Do nothing if successful
        }
        else {
            echo "Error getting information from the database."."<br>";
        }
        //Create table headers
        echo "<table class='leave_tables'> <tr>";
        echo "<th>Employee Name</th>";
        echo "<th>Leave Type</th>";
        echo "<th>Date Requested</th>";
        echo "<th>Leave Date</th>";
        echo "<th>Action</th>";
        echo "</tr\n>";
        //loop through all the rows and create a row for each
        while($result_ar = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>".$result_ar['names']."</td>";
            echo "<td>".$result_ar['leave_name']."</td>";
            echo "<td>".$result_ar['date_requested']."</td>";
            echo "<td>".$result_ar['dates']."</td>";
            echo "<td>
<details>
<summary>Select</summary>
<div><a href='request_approval.php? leave_id=".$result_ar['leave_request_id']."'>Approve Request</a></div>
</details>
</td>";
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
    <?php include 'footer.php' ?>
</div>
</body>
</html>