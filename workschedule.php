<?php include ('session.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>View Schedule</title>
    <link rel="stylesheet" href="styling.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<!--navigation bar -->
<?php include 'navigation.php'?>
<div class="heading"><h4>WORK SCHEDULE</h4></div>
<div class="workspace">
    <div class="button"><a href="new_task.php"><button>ADD NEW TASK</button></a></div>
    <hr>
    <div id=textboxes>
        <div id="period">
            Task Period
            <?php
            include 'dbconnection.php';
            $id = $_GET['ID'];
            $query = "select * from tasks where task_id='$id'";
            if($result = $mysqli -> query($query)) {
                //Do nothing if successful.
            }
            else {
                echo "Sorry, a task with ID of $id cannot be found"."<br>";
            }
            while ($result_ar = mysqli_fetch_assoc($result)) {
                echo '<input class="text" type="text" value="'.$result_ar['start_date'].' - '.$result_ar['end_date'].'"';
            }
            ?>
        </div>
        <div id="name">
            Task Name
            <?php
            include 'dbconnection.php';
            $id = $_GET['ID'];
            $query = "select * from tasks where task_id='$id'";
            if($result = $mysqli -> query($query)) {
                //Do nothing if successful.
            }
            else {
                echo "Sorry, a task with ID of $id cannot be found"."<br>";
            }
            while ($result_ar = mysqli_fetch_assoc($result)) {
                echo '<input class="text" type="text" value="'.$result_ar['task_name'].'"';
            }
            ?>
        </div>
    </div>
    <div id="description">
        Description/Instruction
        <?php
        include 'dbconnection.php';
        $id = $_GET['ID'];
        $query = "select * from tasks where task_id='$id'";

        if($result = $mysqli -> query($query)) {
            //Do nothing if successful.
        }
        else {
            echo "Sorry, a task with ID of $id cannot be found"."<br>";
        }
        while ($result_ar = mysqli_fetch_assoc($result)) {
            echo '<textarea id="text" name="comments" cols="50" rows="6">'.$result_ar['description'].'</textarea>';
        }
        ?>
    </div>
    <h3>Employees Assigned to this task</h3>
    <div id="employees">
        <?php
        include 'dbconnection.php';
        //Query information
        $query = "select concat(first_name,' ',last_name) as names, designation_name, designatory, status, employee_id
    from employees, employees_on_duty, supervisor, tasks, designations
    where employees.employee_ID = employees_on_duty.employees_id and employees_on_duty.work_id = tasks.task_id
    and employees_on_duty.supervisor = supervisor.id and designations.id = employees.designatory and employees_on_duty.work_id = $id";

        if($result = $mysqli->query($query)) {
            //Do nothing if successful
        }
        else {
            echo "Error getting information from the database."."<br>";
        }
        //Create table headers
        echo "<table id='schedule'> <tr>";
        echo "<th>Employee Name</th>";
        echo "<th>Designation</th>";
        echo "<th>Supervisor</th>";
        echo "<th>Action</th>";
        echo "</tr\n>";
        //loop through all the rows and create a row for each
        while($result_ar = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>".$result_ar['names']."</td>";
            echo "<td>".$result_ar['designation_name']."</td>";
            echo "<td>".$result_ar['status']."</td>";
            echo "<td>
<details>
<summary>Select</summary>
<div><a href='remove_employee.php? emp_id=".$result_ar['employee_id']."&id=$id'>Remove from list</a></div>
</details>
</td>";
            echo "</td></tr>\n";
        }
        echo "</table>";
        //Close database connection
        $mysqli->close();
        ?>
    </div>
    <hr>
    <h3>Add More Employees</h3>
    <div id="more">
        <?php
        include 'dbconnection.php';
        //Query information
        $query = "select concat(first_name,' ',last_name) as names, designation_name, designatory, status, employee_id, task_id
    from employees, employees_on_duty, supervisor, tasks, designations
    where employees.employee_ID = employees_on_duty.employees_id and employees_on_duty.work_id = tasks.task_id
    and employees_on_duty.supervisor = supervisor.id and designations.id = employees.designatory and employees_on_duty.work_id != '$id'";

        if($result = $mysqli->query($query)) {
            //Do nothing if successful
        }
        else {
            echo "Error getting information from the database."."<br>";
        }
        //Create table headers
        echo "<table id='schedule'> <tr>";
        echo "<th>Employee Name</th>";
        echo "<th>Designation</th>";
        echo "<th>Supervisor</th>";
        echo "<th>Action</th>";
        echo "</tr\n>";
        //loop through all the rows and create a row for each
        while($result_ar = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>".$result_ar['names']."</td>";
            echo "<td>".$result_ar['designation_name']."</td>";
            echo "<td>".$result_ar['status']."</td>";
            echo "<td> <a href='add_employee.php? emp_id=".$result_ar['employee_id']."&id=$id'>Assign to task</a></td>";
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

</html>