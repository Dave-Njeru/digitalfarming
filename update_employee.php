<?php include ('session.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Update Employee</title>
    <link rel="stylesheet" href="styling.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript">
        function goBack() {
            window.history.back();
        }
    </script>
</head>
<body>
<?php include 'navigation.php'; ?>
<div class="response">
    <?php
    include 'dbconnection.php';
    //Get the values
    $emp_id = $_POST['emp_id'];
    $first_name = $_POST['fname'];
    $middle_name = $_POST['mname'];
    $last_name = $_POST['lname'];
    $nick = $_POST['nick'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $phonenumber = $_POST['phonenumber'];
    $email = $_POST['email'];
    $occupation = $_POST['occupation'];
    $next_of_kin = $_POST['nextOfKin'];
    $nok_phone = $_POST['nokphone'];
    $address1 = $_POST['address1'];
    $address2 = $_POST['address2'];
    $city = $_POST['city'];
    $county = $_POST['county'];
    $code = $_POST['code'];
    $country = $_POST['country'];

    $query = "update employees set first_name = '$first_name', middle_name = '$middle_name', last_name = '$last_name',
date_of_birth = '$dob', nickname = '$nick', gennder = 'nick', phone_number = '$gender', email_address = '$email', 
designatory = '$occupation', next_of_kin = '$next_of_kin', kin_phone = '$nok_phone', address1 = '$address1', address2 = '$address2',
town = '$city', post_code = '$code', county = '$county', country = '$country'
where employee_ID = '$emp_id' ";
    if($result = $mysqli -> query($query)) {
        echo 'Operation successful';
    }
    else {
        echo 'An error occured';
    }

    $mysqli->close();
    ?>
    <div class="link">
        <button onClick="goBack();">Go Back</button>
    </div>
</div>
<div class="empty"></div>
<?php include 'footer.php'?>
</body>
</html>
