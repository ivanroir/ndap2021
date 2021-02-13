<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Success</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/bs-stepper.min.css" />
    <link rel="stylesheet" type="text/css" href="css/all.css" />


    <style>
        div > a > img {
            display: none;
        }
        .banner {
            background-color: rgb(255, 106, 0);
            height: 50px;
            width: 100%;
            margin-bottom: 20px;
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 32px;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <div class="container" id="container" style="background-color: rgb(184, 228, 250); height: 100%; padding-left: 0px; padding-right: 0px; overflow-x: hidden;">

        <div style="display: flex; flex: 1; justify-content: center; width: 100%; height: 145px;">
            <img class="img-responsive" src="img/logo.png" style="height: auto; width: 100%;" />
        </div>

        <div style="display: flex; flex: 1; justify-content: center; width: 100%; height: auto; padding: 50px; padding-bottom: 0px">
            <img class="img-responsive" src="img/congratulations.png" />
        </div>

        <div style="display: flex; flex: 1; justify-content: center; width: 100%; height: auto; padding: 25px; text-align:center">
            <div class="row">
                <div class="col-12">
                    <h3>YOU ARE OFFICIALLY</h3>
                </div>
                <div class="col-12">
                    <h3>REGISTERED</h3>
                </div>
            </div>
        </div>


        <div style="display: flex; flex: 1; justify-content: center; width: 100%; height: auto; padding: 25px; text-align:center">
            <h4>Your username and password to access the NDAP AnCon 2021 Virtual Conference Site will be sent to your email</h4>
        </div>

        <!--<div style="display: flex; flex: 1; justify-content: center; padding-top: 100px; padding-bottom: 100px">
            <button type="button" class="btn btn-primary" onclick="window.close();">Close</button>
        </div>-->
    </div>
    <?php
        $lastname = isset($_POST["lastname"]) ? $_POST["lastname"] : ""  ;
        $firstname = isset($_POST["firstname"]) ? $_POST["firstname"] : ""  ;
        $middlename = isset($_POST["middlename"]) ? $_POST["middlename"] : ""  ;
        $gender = isset($_POST["gender"]) ? $_POST["gender"] : ""  ;
        $month = isset($_POST["month"]) ? $_POST["month"] : ""  ;
        $day = isset($_POST["day"]) ? $_POST["day"] : ""  ;
        $year = isset($_POST["year"]) ? $_POST["year"] : ""  ;
        $birthday = $month . " " . $day . "," . $year;
        $address = isset($_POST["address"]) ? $_POST["address"] : ""  ;
        $country = isset($_POST["country"]) ? $_POST["country"] : ""  ;
        $province = isset($_POST["province"]) ? $_POST["province"] : ""  ;
        $zip = isset($_POST["zip"]) ? $_POST["zip"] : ""  ;
        $contact = isset($_POST["contact"]) ? $_POST["contact"] : ""  ;
        $email_address = isset($_POST["email_address"]) ? $_POST["email_address"] : ""  ;
        $expertise = isset($_POST["expertise"]) ? $_POST["expertise"] : ""  ;
        $prc = isset($_POST["prc"]) ? $_POST["prc"] : ""  ;
        $valid = isset($_POST["valid"]) ? $_POST["valid"] : ""  ;
        $field = isset($_POST["field"]) ? $_POST["field"] : ""  ;
        $school = isset($_POST["school"]) ? $_POST["school"] : ""  ;
        $program = isset($_POST["program"]) ? $_POST["program"] : ""  ;
        $payment = isset($_POST["payment"]) ? $_POST["payment"] : ""  ;
        $reference = isset($_POST["reference"]) ? $_POST["reference"] : ""  ;

        $servername = "localhost";
        $username = "u480472038_ivanroir";
        $password = "Ivan.Roir090493";
        $database = "u480472038_ndap";
        
        $ctr = 0;
        
        //$conn = mysqli_connect('localhost', 'root', '', 'ndap'); //dev
        $conn = mysqli_connect($servername, $username, $password, $database);
        
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $SELECT = "SELECT email_address FROM registration WHERE email_address = '" . $email_address . "' Limit 1";
        $result = $conn->query($SELECT);
        
        if(isset($_FILES['image'])){
            // Get image name
            $image = $_FILES['image']['name'];
            // image file directory
            $target = "images/".basename($image);

            while(file_exists($target)) {
                $ctr++;
                $image =  $ctr. $_FILES['image']['name'];
                $target = "images/".basename($image);
            }
            
            if($result->num_rows > 0) {
                echo "<script>";
                echo "var result = confirm('Email Already Registered');";
                echo "if (result) { window.history.back(); }";
                echo "else { window.history.back(); }";
                echo "</script>";
            } else {
                $INSERT = "INSERT INTO registration (first_name, middle_name, last_name, gender, birthday, address, country, province, zip, contact, email_address, expertise, prc, valid, field, school, program, payment, image, reference_number) 
                VALUES ('" . $firstname . "', '" . $middlename . "', '" . $lastname . "','" . $gender . "', '" . $birthday . "', '" . $address ."', '" . $country ."', 
                '" . $province . "','" .  $zip . "', '" . $contact . "', '" . $email_address . "', '" . $expertise . "', '" .  $prc . "','" .  $valid . "','" .  $field . "',
                '" .  $school . "','" .  $program . "', '" . $payment . "', '" . $image . "', '" . $reference . "')";

                if ($conn->query($INSERT) === TRUE) {
                    //echo "success";
                } else {
                    //echo "Error: " . $INSERT . "<br>" . $conn->error;
                }
            }

            if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
                $msg = "Image uploaded successfully";
            }else{
                $msg = "Failed to upload image";
            }
        }
        $conn->close();
    ?>

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.4.1.slim.min.js"></script>

    <script>
        $(window).on('resize', function () {

        if ($(this).width() >= 600) {   
            console.log("Large");
            document.getElementById("container").style.width = '50vh';
            
        } else if ($(this).width() < 600) {
            console.log("Small");
            document.getElementById("container").style.width = 'auto';
        }
        else {
            console.log($(this).width());
        }
        }).trigger('resize');
    </script>
</body>
</html>