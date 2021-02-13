<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TABLE</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/v/dt/dt-1.10.22/datatables.min.css"/>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jq-3.3.1/jszip-2.5.0/dt-1.10.23/b-1.6.5/b-colvis-1.6.5/b-flash-1.6.5/b-html5-1.6.5/b-print-1.6.5/datatables.min.css"/>

    
    <style type="text/css">
    
        div > a > img {
            display: none;
        }
        
        [data-tag=N] {
            color: #dc3545!important;
        }

        .divDate {
            background-color: #00793f !important;
        }

        .date {
            color: #fff;
            margin: 1rem;
        }

        body {
            overflow-x: hidden;
        }
    </style>

</head>
<body>
    <div class="row p-5">
        <div class="col-12">
            <div class="d-flex justify-content-center">
                <h2> REGISTRATION </h2>
            </div>

            <div class="d-flex justify-content-end mb-3">
                <div class="divDate">
                    <p id="date" class="date"></p> 
                </div>
            </div>
            <form method='POST' action='update.php' id="ndap_table">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered" id="table_id">
                        <thead>
                            <tr style="background-color: #00793f;">
                                <td scope="col">#</td>
                                <td scope="col" class="donotexport">ACTION</td>
                                <td scope="col">UNIQUE CODE</td>
                                <td scope="col">REFERENCE</td>
                                <td scope="col">FIRST NAME</td>
                                <td scope="col">MIDDLE INITIAL</td>
                                <td scope="col">LAST NAME</td>
                                <td scope="col">GENDER</td>
                                <td scope="col">BIRTHDAY</td>
                                <td scope="col">ADDRESS</td>
                                <td scope="col">COUNTRY</td>
                                <td scope="col">PROVINCE</td>
                                <td scope="col">ZIP</td>
                                <td scope="col">CONTACT</td>
                                <td scope="col">EMAIL</td>
                                <td scope="col">EXPERTISE</td>
                                <td scope="col">PRC</td>
                                <td scope="col">VALID</td>
                                <td scope="col">FIELD OF PRACTICE</td>
                                <td scope="col">SCHOOL</td>
                                <td scope="col">PROGRAM</td>
                                <td scope="col">PAYMENT</td>
                                <td scope="col">IMAGE</td>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
        
                        require_once 'update.php';


                            $servername = "localhost";
                            $username = "u480472038_ivanroir";
                            $password = "Ivan.Roir090493";
                            $database = "u480472038_ndap";
                            
                            //$conn = mysqli_connect('localhost', 'root', '', 'ndap'); //dev
                            $conn = mysqli_connect($servername, $username, $password, $database);
        
                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }


                            $sql = "SELECT * FROM registration";
                            $result = $conn->query($sql);
                            $ctr = 1;

                            if($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {

                                    echo"
                                            <tr>                                         
                                                <th scope='row'>" . $ctr++ . "</th>
                                                <td>
                                                    <a href='index.php?update=" . $row['id'] . "' class='btn btn-primary'>UPDATE</button>
                                                </td>
                                                <td>" . $row['unique_code'] . "</td>
                                                <td>" . $row['reference_number'] . "</td>
                                                <td>" . $row['first_name'] . "</td>
                                                <td>" . $row['middle_name'] . "</td>
                                                <td>" . $row['last_name'] . "</td>
                                                <td>" . $row['gender'] . "</td>
                                                <td>" . $row['birthday'] . "</td>
                                                <td>" . $row['address'] . "</td>
                                                <td>" . $row['country'] . "</td>
                                                <td>" . $row['province'] . "</td>
                                                <td>" . $row['zip'] . "</td>
                                                <td>" . $row['contact'] . "</td>
                                                <td>" . $row['email_address'] . "</td>
                                                <td>" . $row['expertise'] . "</td>
                                                <td>" . $row['prc'] . "</td>
                                                <td>" . $row['valid'] . "</td>
                                                <td>" . $row['field'] . "</td>
                                                <td>" . $row['school'] . "</td>
                                                <td>" . $row['program'] . "</td>
                                                <td>" . $row['payment'] . "</td>
                                                <td><a href='../images/" . $row['image'] . "' download> <img src='../images/" . $row['image'] . "' style='width: 150px; height: 150px' > </a></td>
                                            </tr>
                                        ";
                                }
                            }
                            else {
                                echo "
                                    <tr>
                                        <td>Empty</td>
                                    </tr>
                                ";
                            }
                            $conn->close();
                            ?>
                        </tbody>
                    </table>                    
                </div>
                <div class="container p-5 text-center ">
                    <input type='hidden' class='form-control' name='id' value="<?php echo $id; ?>" />
                    <label for="first_name" class="form-label">Name</label>
                    <input type='text' class='form-control' name='first_name' id="first_name" value="<?php echo $first_name; ?>" readonly/>
                    <label for="reference_number" class="form-label">Reference Number</label>
                    <input type='text' class='form-control' name='reference_number' id="reference_number" value="<?php echo $reference_number; ?>" readonly/>
                    <label for="unique_code" class="form-label">Unique Code</label>
                    <input type='text' class='form-control' name='unique_code' id="unique_code" value="<?php echo $unique_code; ?>" maxlength="5"/>
                    <button type='submit' class='btn btn-primary mt-3' name='save'>SAVE</button>
                </div>
            </form>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.22/datatables.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>    

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jq-3.3.1/jszip-2.5.0/dt-1.10.23/b-1.6.5/b-colvis-1.6.5/b-flash-1.6.5/b-html5-1.6.5/b-print-1.6.5/datatables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#table_id').DataTable( {
                dom: 'Bfrtip',
                buttons: [
                    {
                        extend: 'excelHtml5',
                        title: 'NDAP-ANCON',
                        exportOptions: {
                            columns: ':not(.donotexport)'
                        }
                    },
                    {
                        extend: 'csvHtml5',
                        title: 'NDAP-ANCON',
                        exportOptions: {
                            columns: ':not(.donotexport)'
                        }
                    }                    
                ]
            });
        });
    </script>
</body>
</html>