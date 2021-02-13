<?php 
    header("Access-Control-Allow-Origin: *");

    $servername = "localhost";
    $username = "u480472038_ivanroir";
    $password = "Ivan.Roir090493";
    $database = "u480472038_ndap";

    //$conn = mysqli_connect('localhost', 'root', '', 'ndap'); //dev
    $conn = mysqli_connect($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sqlSelect = "SELECT * FROM registration WHERE email_address = '" . $_POST["username"] . "' AND unique_code = '" . $_POST["password"] . "'";
    $result = $conn->query($sqlSelect);

    if($result->num_rows > 0) {

        $sqlSelect2 = "SELECT * FROM login WHERE username = '" . $_POST["username"] . "' AND password = '" . $_POST["password"] . "'";
        $result2 = $conn->query($sqlSelect2);

        if($result2->num_rows > 0) {
            echo "login exist";
        }
        else {
            echo "exist";
            $sqlCheck = mysqli_query($conn, $sqlSelect) or die("Check query failed");
            $existingInfo = mysqli_fetch_assoc($sqlCheck);
            $full_name = $existingInfo["last_name"] . ", " . $existingInfo["first_name"] . " " . $existingInfo["middle_name"];


            $sqlInsert = "INSERT INTO login (username, password, full_name,  creation_date) 
            VALUES ('" . $_POST["username"] . "', '" . $_POST["password"] . "', '" . $full_name . "', '" . $_POST["creationDate"] . "')";
            if ($conn->query($sqlInsert) === TRUE) {
                //echo "success";            
            } else {
                echo "Error: " . $sqlInsert . "<br>" . $conn->error;
            }

            /*$mucosta = $existingInfo["mucosta"];
            $gfo = $existingInfo["gfo"];
            $bfluid = $existingInfo["bfluid"];
            $hinex = $existingInfo["hinex"];
            $neomune = $existingInfo["neomune"];
            $aminoleban = $existingInfo["aminoleban"];

            echo "\t" . $mucosta . "\t" . $gfo . "\t" . $bfluid. "\t" . $hinex . "\t" . $neomune . "\t" . $aminoleban;*/
        }
    } else {
        echo "Wrong username/password";
    }
    
    $conn->close();
?>