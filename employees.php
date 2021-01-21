<?php include ('session.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Employee</title>
    <link rel="stylesheet" href="styling.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php include 'navigation.php' ?>
<div class="heading"><h4>EMPLOYEES LIST</h4></div>
<div class="workspace">
    <div class="button"><a href="new_employee.php"><button>ADD NEW EMPLOYEE</button></a></div>
    <hr>
    <div id="emplys">
        <?php
        include 'dbconnection.php';
        //Query information
        $query = "select employee_ID, concat(first_name,' ',middle_name,' ',last_name) as names, designation_name, designatory,
 phone_number, gennder
 from employees, designations
 where designations.id = employees.designatory";
        if($result = $mysqli->query($query)) {
            //Do nothing if successful
        }
        else {
            echo "Error getting information from the database."."<br>";
        }
        //Create table headers
        echo "<table id='schedule'> <tr>";
        echo "<th>Emp ID</th>";
        echo "<th>Employee Name</th>";
        echo "<th>Designation</th>";
        echo "<th>Contact</th>";
        echo "<th>Gender</th>";
        echo "<th>Action</th>";
        echo "</tr\n>";
        //loop through all the rows and create a row for each
        while($result_ar = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>".$result_ar['employee_ID']."</td>";
            echo "<td>".$result_ar['names']."</td>";
            echo "<td>".$result_ar['designation_name']."</td>";
            echo "<td>".$result_ar['phone_number']."</td>";
            echo "<td>".$result_ar['gennder']."</td>";
            echo "<td>
<details>
<summary>Select</summary>
<div><a href='employee_update.php? emp_id=".$result_ar['employee_ID']."'>View_Profile</a></div>
<div><a href='delete_employee.php? emp_id=".$result_ar['employee_ID']."'>Delete_Employee</a></div>
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
