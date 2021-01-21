<?php include ('session.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Employee Update</title>
    <link rel="stylesheet" href="styling.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php include 'navigation.php'?>
<div class="heading"><h4>EMPLOYEE INFORMATION</h4></div>
<div class="workspace">

    <div><h3>EMPLOYEE DETAILS</h3></div>
    <hr>
    <div>Fields with * are required during update</div>
    <?php
    include 'dbconnection.php';
    $emp_id = $_GET['emp_id'];
    //Query information
    $query = "select * from employees, designations 
where designations.id = employees.designatory and employee_ID = '$emp_id'";
    if($result = $mysqli->query($query)) {
        //Do nothing if successful
    }
    else {
        echo "Error getting information from the database."."<br>";
    }
    while($result_ar = mysqli_fetch_assoc($result)) {
        ?>
        <form class="input" action="update_employee.php" method="post">
            <ul>
                <li>*Employee ID: <input class="textboxes" name="emp_id" value="<?php echo $result_ar['employee_ID']; ?>"
                    readonly/></li>
                <li>*First Name: <input class="textboxes" name="fname" value="<?php echo $result_ar['first_name']; ?>"/></li>
                <li>*Middle Name: <input class="textboxes" name="mname" value="<?php echo $result_ar['middle_name']; ?>"></li>
                <li>*Last Name: <input class="textboxes" name="lname" value="<?php echo $result_ar['last_name']; ?>"/></li>
                <li>Nickname: <input class="textboxes" name="nick" value="<?php echo $result_ar['nickname']; ?>"/></li>
                <li>*Date of Birth: <input class="textboxes" name="dob" value="<?php echo $result_ar['date_of_birth']; ?>"/></li>
                <li>*Gender:
                <select class="selects" name="gender" value='<?php echo $result_ar['gennder']; ?>'>
                    <option value="Male" <?php if($result_ar['gennder'] == 'Male') echo 'selected="selected"';?>>Male</option>
                    <option value="Female" <?php if($result_ar['gennder'] == 'Female') echo 'selected="selected"';?>>Female</option>
                </select>
                </li>
                <li>*Phone Number: <input class="textboxes" name="phonenumber" value="<?php echo $result_ar['phone_number']; ?>"/></li>
                <li>*Email Address: <input class="textboxes" name="email" value="<?php echo $result_ar['email_address']; ?>"/></li>
                <li>*Designation:
                <select class="selects" name="occupation">
                    <option value="FullTime Employee"
                        <?php if($result_ar['designation_name'] == 'FullTime Employee') echo 'selected="selected"';?>>FullTIme Employee</option>
                    <option value="PartTime Employee"
                        <?php if($result_ar['designation_name'] == 'PartTime Employee') echo 'selected="selected"';?>>PartTime Employee</option>
                    <option value="Casual Worker"
                        <?php if($result_ar['designation_name'] == 'Casual Worker') echo 'selected="selected"';?>>Casual Worker</option>
                    <option value="Contract Technician"
                        <?php if($result_ar['designation_name'] == 'Contract Technician') echo 'selected="selected"';?>>Contract Technician</option>
                    <option value="Welder"
                        <?php if($result_ar['designation_name'] == 'Welder') echo 'selected="selected"';?>>Welder</option>
                    <option value="Veterinarian"
                        <?php if($result_ar['designation_name'] == 'Veterinarian') echo 'selected="selected"';?>>Veterinarian</option>
                    <option value="Bio Chemical Expert"
                        <?php if($result_ar['designation_name'] == 'Bio chemical Expert') echo 'selected="selected"';?>>Bio chemical Expert</option>
                    <option value="Farm Manager"
                        <?php if($result_ar['designation_name'] == 'Farm Manager') echo 'selected="selected"';?>>Farm Manager</option>
                </select>
                </li>
                <li>*Next of Kin: <input class="textboxes" name="nextOfKin" value="<?php echo $result_ar['next_of_kin']; ?>"/></li>
                <li>*Next of Kin phone number: <input class="textboxes" name="nokphone" value="<?php echo $result_ar['kin_phone']; ?>"/></li>
            </ul>
            <div id="address">
                <h3>Address</h3>
                <hr>
            </div>
            <ul>
                <li>Address 1: <input class="textboxes" name="address1" value="<?php echo $result_ar['address1']; ?>"></li>
                <li>Address 2: <input class="textboxes" name="address2" value="<?php echo $result_ar['address2']; ?>"></li>
                <li>Town/City: <input class="textboxes" name="city" value="<?php echo $result_ar['town']; ?>"></li>
                <li>*County:
                    <select name="county" class="selects">
                        <option value="Kirinyaga"<?php if($result_ar['county'] == 'Kirinyaga') echo 'selected="selected"';?>>Kirinyaga</option>
                        <option value="Kisii"<?php if($result_ar['county'] == 'Kisii') echo 'selected="selected"';?>>Kisii</option>
                        <option value="Embu"<?php if($result_ar['county'] == 'Embu') echo 'selected="selected"';?>>Embu</option>
                        <option value="Machakos"<?php if($result_ar['county'] == 'Machakos') echo 'selected="selected"';?>>Machakos</option>
                        <option value="Mombasa"<?php if($result_ar['county'] == 'Mombasa') echo 'selected="selected"';?>>Mombasa</option>
                        <option value="Meru"<?php if($result_ar['county'] == 'Meru') echo 'selected="selected"';?>>Meru</option>
                        <option value="Nairobi"<?php if($result_ar['county'] == 'Nairobi') echo 'selected="selected"';?>>Nairobi</option>
                        <option value="Nyeri"<?php if($result_ar['county'] == 'Nyeri') echo 'selected="selected"';?>>Nyeri</option>
                        <option value="Murang'a"<?php if($result_ar['county'] == "Murang'a") echo 'selected="selected"';?>>Murang'a</option>
                    </select>
                </li>
                <li>Postal Code: <input class="textboxes" name="code" value="<?php echo $result_ar['post_code']; ?>"/></li>
                <li>*Country:
                    <select name="country" class="selects">
                        <option value="Kenya" <?php if($result_ar['country'] == 'Kenya') echo 'selected="selected"';?>>Kenya</option>
                    </select>
                </li>
            </ul>
            <input id="final" name="Submit1" type="submit" value="Update"/><br>&nbsp;
        </form>
    <?php
    }
    ?>
</div>
<div class="empty"></div>
<div id="second">
    <?php include 'footer.php' ?>
</div>
</body>
</html>
