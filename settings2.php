<?php include ('session.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Designation Types</title>
    <link rel="stylesheet" href="styling.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<!--navigation bar -->
<?php include 'navigation.php'?>
<div class="heading"><h4>SETTINGS</h4></div>
<div class="workspace">
    <div class="buttons">
        <div class="button" id="setting_button">
            <a href="settings.php"><button>LEAVE TYPES</button></a>
        </div>
        <div class="button">
            <a href="#"><button>DESIGNATIONS</button></a>
        </div>
    </div>
    <div>
        <h3>Designation Types</h3>
        <hr>
    </div>
    <div class="tables">
        <?php
        include 'dbconnection.php';
        //Query information
        $query = "select id, designation_name from designations";
        if($result = $mysqli->query($query)) {
            //Do nothing if successful
        }
        else {
            echo "Error getting information from the database."."<br>";
        }
        echo "<table id='schedule'> <tr>";
        echo "<th>#</th>";
        echo "<th>Designation Name</th>";
        echo "<th>Action</th>";
        echo "</tr\n>";

        while($result_ar = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>".$result_ar['id']."</td>";
            echo "<td>".$result_ar['designation_name']."</td>";
            echo "<td> <a href='remove_designation.php? id=".$result_ar['id']."'>Delete</a></td>";
            echo "</td></tr>\n";
        }
        echo "</table>";

        $mysqli->close();
        ?>
    </div>
    <div>
        <h3>ADD NEW DESIGNATION</h3>
    </div>
    <div class="input">
        <form action= "submitDesignation.php" method="post">
            <ul>
                <li>*Designation Name: <input class="textboxes" name="dname" type="text"/></li>
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