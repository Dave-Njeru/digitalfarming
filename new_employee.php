<?php include ('session.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>New Employee</title>
    <link rel="stylesheet" href="styling.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php include 'navigation.php'?>
<div class="heading">
    <h4>ADD EMPLOYEE</h4>
</div>
<div class="workspace">
    <div class="button"><a href="employees.php"><button>VIEW ALL EMPLOYEES</button></a></div>
    <h3>EMPLOYEE DETAILS</h3>
    <hr>
    <div>Fields with * are required</div>
    <div class="input">
        <form action="submitEmployee.php" method="post">
            <ul>
                <li>*First Name: <input class="textboxes" name="fname" type="text"/></li>
                <li>*Middle Name: <input class="textboxes" name="mname" type="text"/></li>
                <li>*Last Name: <input class="textboxes" name="lname" type="text"/></li>
                <li>Nickname: <input class="textboxes" name="nick" type="text"/></li>
                <li>*Date of Birth: <input class="textboxes" name="dob" type="date"/></li>
                <li>*Gender:
                    <select class="selects" name="gender">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </li>
                <li>*Phone Number: <input class="textboxes" name="phonenumber" type="text"/></li>
                <li>*Email Address: <input class="textboxes" name="email" type="text"/></li>
                <li>*Designation:
                    <select class="selects" name="occupation">
                        <option value="1">FullTIme Employee</option>
                        <option value="2">PartTime Employee</option>
                        <option value="3">Casual Worker</option>
                        <option value="4">Contract Technician</option>
                        <option value="5">Welder</option>
                        <option value="6">Veterinarian</option>
                        <option value="7">Bio chemical Expert</option>
                        <option value="8">Farm Manager</option>
                    </select>
                </li>
                <li>*Next of Kin: <input class="textboxes" name="nextOfKin" type="text"/></li>
                <li>*Next of Kin phone number: <input class="textboxes" name="nokphone"/></li>
            </ul>
            <div id="address">
                <h3>Address</h3>
                <hr>
            </div>
            <ul>
                <li>Address 1: <input class="textboxes" name="address1" type="text"></li>
                <li>Address 2: <input class="textboxes" name="address2" type="text"></li>
                <li>Town/City: <input class="textboxes" name="city" type="text"></li>
                <li>*County:
                    <select name="county" class="selects">
                        <option value="Kirinyaga">Kirinyaga</option>
                        <option value="Kisii">Kisii</option>
                        <option value="Embu">Embu</option>
                        <option value="Machakos">Machakos</option>
                        <option value="Mombasa">Mombasa</option>
                        <option value="Meru">Meru</option>
                        <option value="Nairobi">Nairobi</option>
                        <option value="Nyeri">Nyeri</option>
                        <option value="Murang'a">Murang'a</option>
                    </select>
                </li>
                <li>Postal Code: <input class="textboxes" name="code" type="text"/></li>
                <li>*Country:
                    <select name="country" class="selects">
                        <option value="Kenya">Kenya</option>
                    </select>
                </li>
            </ul>
            <input id="final" name="Submit1" type="submit" value="Submit"/><br>&nbsp;
        </form>
    </div>
</div>
<div class="empty"></div>
<?php include 'footer.php'?>
</body>
</html>