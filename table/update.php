<?php 

    $servername = "localhost";
    $username = "u480472038_ivanroir";
    $password = "Ivan.Roir090493";
    $database = "u480472038_ndap";

    //$conn = mysqli_connect('localhost', 'root', '', 'ndap'); //dev
    $conn = mysqli_connect($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $id = '';
    $first_name = '';
    $reference_number = '';
    $unique_code = '';

    if(isset($_GET['update'])) {
        $id=$_GET['update'];

        $result = $conn->query("SELECT * FROM registration WHERE id=$id") or die($conn->error());

        if($result->num_rows > 0) {
            $row = $result->fetch_array();
            $first_name = $row["first_name"];
            $reference_number = $row["reference_number"];
            $unique_code = $row["unique_code"];
        }
    }
    

    
    if(isset($_POST['save'])) {
        $id = $_POST['id'];
        $first_name = $_POST["first_name"];
        $unique_code = $_POST["unique_code"];
        $reference_number = $_POST["reference_number"];

        $UPDATE = "UPDATE registration SET unique_code = '" . $unique_code . "' WHERE id = '" . $id . "'";
        
        if ($conn->query($UPDATE) === TRUE) {
            echo "<script>";
            echo "window.location.replace('index.php');";
            echo "</script>";
        } else {
            echo "Error updating record: ";
        }
        echo "<script>";
        echo "window.location.replace('index.php');";
        echo "</script>";
        
    }
    
    $conn->close();
?>