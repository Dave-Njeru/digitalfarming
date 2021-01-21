<?php include ('session.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>New Task</title>
    <link rel="stylesheet" href="styling.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<!--navigation bar -->
<?php include 'navigation.php'?>
<div class="heading"><h4>WORK SCHEDULE</h4></div>
<div class="workspace">
    <div class="button"><a href="work_schedule.php"><button>VIEW ALL TASKS</button></a></div>
    <h3>TASK DETAILS</h3>
    <hr>
    <div>Fields with * are required.<br> Ensure End date is greater than Start date.</div><br>
    <div class="input">
        <form action="submitTask.php" method="post">
            <ul>
                <li>*Task Name: <input class="textboxes" name="tname" type="text"/></li>
                <li>*Start Date: <input class="textboxes" name="sdate" type="date"/></li>
                <li>*End Date: <input class="textboxes" name="edate" type="date"/></li>
                <li>*Description: <textarea id="textarea" name="desc" cols="55" rows="5"></textarea>
            </ul>
            <input id="final" name="Submit1" type="submit" value="Submit"/><br>&nbsp;
        </form>
    </div>
</div>
<div class="empty"></div>
<div id="second">
    <!-- Display footer-->
    <?php include 'footer.php'; ?>
</div>
</body>
</html>