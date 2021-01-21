<?php include ('session.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Submit Employee</title>
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

    if ($first_name != NULL && $middle_name != NULL && $last_name != NULL &&  !empty(strtotime($dob)) && $phonenumber != NULL &&
        $email != NULL && $next_of_kin != NULL && $nok_phone != NULL ) {
        $query = "insert into employees (employee_ID, first_name, middle_name, last_name, date_of_birth, nickname, gennder,
        phone_number, email_address, designatory, next_of_kin, kin_phone, address1, address2, town, post_code, county,
        country)
        values (NULL,'$first_name', '$middle_name', '$last_name', '$dob', '$nick', '$gender', '$phonenumber', '$email', '$occupation', 
        '$next_of_kin', '$nok_phone', '$address1', '$address2', '$city', '$code', '$county', '$country')";
        if($result = $mysqli -> query($query)) {
            echo 'Operation successful';
        }
        else {
            echo 'An error occurred';
        }
    }
    else {
        echo 'An error occurred. Check your inputs.';
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