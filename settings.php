<?php include ('session.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Leave Types</title>
    <link rel="stylesheet" href="styling.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<!--navigation bar -->
<?php
include 'navigation.php';
?>
<div class="heading">
    <h4>SETTINGS</h4>
</div>
<div class="workspace">
    <div class="buttons">
        <div class="button" id="setting_button">
            <a href="settings.php"><button>LEAVE TYPES</button></a>
        </div>
        <div class="button">
            <a href="settings2.php"><button>DESIGNATIONS</button></a>
        </div>
    </div>
    <h3>Leave Types</h3>
    <hr>
    <div class="tables">
        <?php
        include 'dbconnection.php';
        //Query information
        $query = "select leave_id, leave_name 
                 from leave_types";
        if($result = $mysqli->query($query)) {
            //Do nothing if successful
        }
        else {
            echo "Error getting information from the database."."<br>";
        }
        //Create table headers
        echo "<table id='schedule'> <tr>";
        echo "<th>#</th>";
        echo "<th>Leave Name</th>";
        echo "<th>Action</th>";
        echo "</tr\n>";
        //loop through all the rows and create a row for each
        while($result_ar = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>".$result_ar['leave_id']."</td>";
            echo "<td>".$result_ar['leave_name']."</td>";
            echo "<td> <a href='remove_leave.php? leave_id=".$result_ar['leave_id']."'>Delete</a></td>";
            echo "</td></tr>\n";
        }
        echo "</table>";
        //Close database connection
        $mysqli->close();
        ?>
    </div>
    <div>
        <h3>ADD NEW LEAVE TYPE</h3>
    </div>
    <div class="input">
        <form action= "submitLeave.php" method="post">
            <ul>
                <li>*Leave Name: <input class="textboxes" name="lname" type="text"/></li>
            </ul>
            <input id="final" name="Submit1" type="submit" value="Save"/><br>&nbsp;
        </form>
    </div>
</div>
<div class="empty"></div>
<div id="second">
    <?php include 'footer.php' ?>
</div>
</body>
</html>