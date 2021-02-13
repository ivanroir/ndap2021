<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>REGISTRATION</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/bs-stepper.min.css" />
    <link rel="stylesheet" type="text/css" href="css/all.css" />

    <style>
        div > a > img {
            display: none;
        }
        
        input {
            
            font-size: 12px;
        }
        
        .bs-stepper-content {
            padding: 0;
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
            font-size: 24px;
            font-weight: bold;
        }
        .center-alignment{
            flex: 1;
            display: flex;
            justify-content: center;
        }

        .footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 60px;
            line-height: 60px;
        }
        .error {
            color: #FF0000;
        }
        .page1 {
           
        }
        .page2 {
            display: none;
        }
        .page3 {
            display: none;
        }
    </style>
</head>

<body>
    <div class="container" id="container" style="background-color: rgb(184, 228, 250); height: 100%; padding-left: 0px; padding-right: 0px; overflow-x: hidden;">
        <div style="display: flex; flex: 1; justify-content: center; width: 100%; height: 145px;">
            <img class="img-responsive" src="img/logo.png" style="height: auto; width: 100%;" />
        </div>
        <form method="POST" action="success.php" id="registrationForm" name="registrationForm" autocomplete="off" enctype="multipart/form-data">
            <div class="page1" id="page1">
                <div class="text-center text-white banner">
                    <label>Personal Information</label>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="mb-3 row">
                            <div class="col-4 text-end">
                                <label for="lastname" class="form-label ">Last Name</label>
                            </div>
                            <div class="col-7">
                                <input type="text" class="form-control" name="lastname" id="lastname" />
                            </div>
                            <div class="col-1">
                                <label id="lastname_required" style="color: red;  display: none;">*</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-3 row">
                            <div class="col-4 text-end">
                                <label for="firstname" class="form-label">First Name</label>
                            </div>
                            <div class="col-7">
                                <input type="text" class="form-control" name="firstname" id="firstname" />
                            </div>
                            <div class="col-1">
                                <label id="firstname_required" style="color: red;  display: none;">*</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-3 row">
                            <div class="col-4 text-end">
                                <label for="middlename" class="form-label">Middle Name</label>
                            </div>
                            <div class="col-7">
                                <input type="text" class="form-control" name="middlename" id="middlename" />
                            </div>
                            <div class="col-1">
                                <label id="middlename_required" style="color: red;  display: none;">*</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 ">
                        <div class="mb-3 row">
                            <div class="col-lg-4 col-4 text-end">
                                <label for="gender" class="form-label">Gender</label>
                            </div>
                            <div class="col-lg-7 col-7">
                                <select class="form-select" name="gender" id="gender">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="mb-3 row">
                            <div class="col-4 text-end">
                                <label class="form-label">Birthday</label>
                            </div>
                            <div class="col-3">
                                <select name="month" id="month">
                                    <?php for( $m=1; $m<=12; ++$m ) { 
                                        $month_label = date('F', mktime(0, 0, 0, $m, 1));
                                    ?>
                                    <option value="<?php echo $month_label; ?>"><?php echo $month_label; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-1" style="margin-right: 20px">
                                <select name="day" id="day">
                                    <?php 
                                        $start_date = 1;
                                        $end_date   = 31;
                                        for( $j=$start_date; $j<=$end_date; $j++ ) {
                                            echo '<option value='.$j.'>'.$j.'</option>';
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="col-3">
                                <select name="year" id="year">
                                    <?php 
                                        $year = date('Y');
                                        $min = $year - 100;
                                        $max = $year;
                                    for( $i=$max; $i>=$min; $i-- ) {
                                        echo '<option value='.$i.'>'.$i.'</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-1"></div>

                    <div class="col-12">
                        <div class="mb-3 row">
                            <div class="col-4 text-end">
                                <label for="address" class="form-label">Complete Address</label>
                            </div>
                            <div class="col-7">
                                <input type="text" class="form-control" name="address" id="address" />
                            </div>
                            <div class="col-1">
                                <label id="address_required" style="color: red;  display: none;">*</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-3 row">
                            <div class="col-4 text-end">
                                <label for="country" class="form-label">Country</label>
                            </div>
                            <div class="col-7">
                                <select class="form-select" name="country" id="country" onchange="select_country()">
                                    <?php 

                                    $country_list = array("Philippines", "Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antigua & Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bonaire", "Bosnia & Herzegovina", "Botswana", "Brazil", "British Indian Ocean Ter", "Brunei", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Canary Islands", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Channel Islands", "Chile", "China", "Christmas Island", "Cocos Island", "Colombia", "Comoros", "Congo", "Cook Islands", "Costa Rica", "Cote DIvoire", "Croatia", "Cuba", "Curacao", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands", "Faroe Islands", "Fiji", "Finland", "France", "French Guiana", "French Polynesia", "French Southern Ter", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Great Britain", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guyana", "Haiti", "Hawaii", "Honduras", "Hong Kong", "Hungary", "Iceland", "Indonesia", "India", "Iran", "Iraq", "Ireland", "Isle of Man", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea North", "Korea South", "Kuwait", "Kyrgyzstan", "Laos", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia", "Madagascar", "Malaysia", "Malawi", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Midway Islands", "Moldova", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Nambia", "Nauru", "Nepal", "Netherland Antilles", "Netherlands (Holland", "Europe)", "Nevis", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Norway", "Oman", "Pakistan", "Palau Island", "Palestine", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Pitcairn Island", "Poland", "Portugal", "Puerto Rico", "Qatar", "Republic of Montenegro", "Republic of Serbia", "Reunion", "Romania", "Russia", "Rwanda", "St Barthelemy", "St Eustatius", "St Helena", "St Kitts-Nevis", "St Lucia", "St Maarten", "St Pierre & Miquelon", "St Vincent & Grenadines", "Saipan", "Samoa", "Samoa American", "San Marino", "Sao Tome & Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "Spain", "Sri Lanka", "Sudan", "Suriname", "Swaziland", "Sweden", "Switzerland", "Syria", "Tahiti", "Taiwan", "Tajikistan", "Tanzania", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad & Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks & Caicos Is", "Tuvalu", "Uganda", "United Kingdom", "Ukraine", "United Arab Emirates", "United States of America", "Uruguay", "Uzbekistan", "Vanuatu", "Vatican City State", "Venezuela", "Vietnam", "Virgin Islands (Brit)", "Virgin Islands (USA)", "Wake Island", "Wallis & Futana Is", "Yemen", "Zaire", "Zambia", "Zimbabwe");
                                    $country = "";
                                    echo $country_list[1];
                                    
                                    for( $c=0; $c < count($country_list); $c++ ) { 
                                        $country = $country_list[$c];
                                    ?>
                                    <option value="<?php echo $country; ?>"><?php echo $country; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-1"></div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-3 row">
                            <div class="col-4 text-end">
                                <label for="province" class="form-label">Province</label>
                            </div>
                            <div class="col-7">
                                <select class="form-select" name="province" id="province">
                                    <?php 

                                    $province_list = array("", "Abra",  "Agusan del Norte",  "Agusan del Sur",  "Aklan",  "Albay",  "Antique",  "Apayao",  "Aurora",  "Basilan",  "Bataan",  "Batanes",  "Batangas",  "Benguet",  "Biliran",  "Bohol",  "Bukidnon",  "Bulacan",  "Cagayan",  "Caloocan City (North)",  "Caloocan City (South)",  "Camarines Norte",  "Camarines Sur",  "Camiguin",  "Capiz",  "Catanduanes",  "Cavite",  "Cebu",  "Cotabato",  "Davao de Oro",  "Davao del Norte",  "Davao del Sur",  "Davao Occidental",  "Davao Oriental",  "Dinagat Islands",  "Eastern Samar",  "Guimaras",  "Ifugao",  "Ilocos Norte",  "Ilocos Sur",  "Iloilo",  "Isabela",  "Kalinga",  "La Union",  "Laguna",  "Lanao del Norte",  "Lanao del Sur",  "Las Piñas",  "Leyte",  "Maguindanao",  "Makati",  "Malabon",  "Mandaluyong",  "Manila",  "Marikina",  "Marinduque",  "Masbate",  "Misamis Occidental",  "Misamis Oriental",  "Mountain Province",  "Muntinlupa",  "Navotas",  "Negros Occidental",  "Negros Oriental",  "Northern Samar",  "Nueva Ecija",  "Nueva Vizcaya",  "Occidental Mindoro",  "Oriental Mindoro",  "Palawan",  "Pampanga",  "Pangasinan",  "Parañaque",  "Pasay City",  "Pasig",  "Pateros",  "Quezon",  "Quezon City (districts/streets)",  "Quezon City (postal codes)",  "Quirino",  "Rizal",  "Romblon",  "Samar",  "San Juan",  "Sarangani",  "Siquijor",  "Sorsogon",  "South Cotabato",  "Southern Leyte",  "Sultan Kudarat",  "Sulu",  "Surigao del Norte",  "Surigao del Sur",  "Taguig",  "Tarlac",  "Tawi-Tawi",  "Valenzuela",  "Zambales",  "Zamboanga del Norte",  "Zamboanga del Sur",  "Zamboanga Sibugay");
                                    $province = "";
                                    echo $province_list[1];
                                    
                                    for( $c=0; $c < count($province_list); $c++ ) { 
                                        $province = $province_list[$c];
                                    ?>
                                    <option value="<?php echo $province; ?>"><?php echo $province; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-1"></div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-3 row">
                            <div class="col-4 text-end">
                                <label for="zip" class="form-label">ZIP Code</label>
                            </div>
                            <div class="col-7">
                                <input type="number" class="form-control" name="zip" id="zip" />
                            </div>
                            <div class="col-1">                                
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-3 row">
                            <div class="col-4 text-end">
                                <label for="contact" class="form-label">Contact Number</label>
                            </div>
                            <div class="col-7">
                                <input type="text" class="form-control" name="contact" id="contact" />
                            </div>
                            <div class="col-1">
                                <label id="contact_required" style="color: red;  display: none;">*</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-3 row">
                            <div class="col-4 text-end">
                                <label for="email_address" class="form-label">Email Address</label>
                            </div>
                            <div class="col-7">
                                <input type="text" class="form-control" name="email_address" id="email_address" />
                            </div>
                            <div class="col-1">
                                <label id="email_required" style="color: red;  display: none;">*</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-11 text-end pb-5">
                        <button type="button" class="btn btn-primary" onclick="next('page1')">Next</button>
                    </div>
                    <div class="col-1"></div>
                </div>
            </div>

            <div class="page2" id="page2">
                <div class="text-center text-white banner">
                    <label>Work Information</label>
                </div>
                <div class="form-check">
                    <div class="row">
                        <div class="col-2"></div>
                        <div class="col-10 mb-4" style="font-size: 18px; font-weight: bold">
                            <label>Are you a Nutritionist-Dietitian ?</label>
                        </div>
                        <div class="col-6 center-alignment">
                            <input class="form-check-input" type="radio" name="nutritionist" id="nutritionist-yes" value="yes" onclick="nutritionistValue()" checked>
                            <label class="form-check-label" for="Yes">Yes</label>
                        </div>
                        <div class="col-5 center-alignment">
                            <div class="mb-3 row">
                                <div class="col-10">
                                    <label>Area of Expertise:</label>
                                </div>
                                <div class="col-1">
                                    <label id="area_required" style="color: red; display: none; ">*</label>
                                </div>
                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value="Academe" name="expertise" id="academe" onclick="expertise()">
                                        <label class="form-check-label" for="academe">
                                            Academe
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value="Clinical" name="expertise" id="clinical" onclick="expertise()">
                                        <label class="form-check-label" for="clinical">
                                            Clinical
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value="Food Service" name="expertise" id="food-service" onclick="expertise()">
                                        <label class="form-check-label" for="food-service">
                                            Food Service
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value="Industry" name="expertise" id="industry" onclick="expertise()">
                                        <label class="form-check-label" for="industry">
                                            Industry
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value="Health" name="expertise" id="health" onclick="expertise()">
                                        <label class="form-check-label" for="health">
                                            Public Health
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3 row">
                                        <div class="col-12">
                                            <label for="prc">PRC License Number:</label>
                                        </div>
                                        <div class="col-10">
                                            <input type="text" class="form-control" name="prc" id="prc" onkeyup="prc_input()"/>
                                        </div>
                                        <div class="col-1">
                                            <label id="prc_required" style="color: red; display: none; ">*</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-6 text-end">
                                            <label for="valid">Valid until:</label>
                                        </div>
                                        <div class="col-6">
                                            <select name="valid" id="valid">
                                                <option value=""></option>
                                                <?php 
                                                    $year_valid = date('Y');
                                                    $min1 = 1990;
                                                    $max1 = 2030;
                                                for( $i=$max1; $i>=$min1; $i-- ) {
                                                    echo '<option value='.$i.'>'.$i.'</option>';
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-check">
                    <div class="row">
                        <div class="col-6 center-alignment">
                            <input class="form-check-input" type="radio" name="nutritionist" id="nutritionist-no" value="no" onclick="nutritionistValue()">
                            <label class="form-check-label" for="No">No</label>
                        </div>
                        <div class="col-6">
                            <div class="mb-3 row">
                                <div class="col-12">
                                    <label for="field">Please state current field of practice:</label>
                                </div>
                                <div class="col-10">
                                    <input type="text" class="form-control" name="field" id="field" onkeyup="practice()" disabled/>
                                </div>
                                <div class="col-1">
                                    <label id="field_required" style="color: red; display: none; ">*</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-center text-white banner">
                    <label>School Information</label>
                </div>

                <div class="form-check">
                    <div class="row">
                        <div class="col-12 mb-5 text-center">
                            <label style="color: red; font-size: 14px; font-weight: bold">(FOR BACCALAUREATE DEGREE STUDENTS ONLY)</label>
                        </div>
                        <div class="col-12">
                            <div class="mb-3 row">
                                <div class="col-4 text-end">
                                    <label for="school" class="form-label">Name of School</label>
                                </div>
                                <div class="col-7">
                                    <input type="text" class="form-control" name="school" id="school" onkeyup="academic()" />
                                </div>
                                <div class="col-1">
                                    <label id="school_required" style="color: red;  display: none;">*</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3 row">
                                <div class="col-4 text-end">
                                    <label for="program" class="form-label">Program</label>
                                </div>
                                <div class="col-7">
                                    <input type="text" class="form-control" name="program" id="program" onkeyup="academic()" />
                                </div>
                                <div class="col-1">
                                    <label id="program_required" style="color: red;  display: none;">*</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6 text-start">
                            <button type="button" class="btn btn-primary" onclick="prev('page2')">Previous</button>
                        </div>

                        <div class="col-5 text-end pb-5">
                            <button type="button" class="btn btn-primary" onclick="next('page2')">Next</button>
                        </div>
                        <div class="col-1"></div>
                    </div>
                </div>
            </div>

            <div class="page3" id="page3">
            
                <div class="text-center text-white banner">
                    <label>Payment Information</label>
                </div>

                <div class="form-check">
                    <div class="row">
                        <div class="col-2"></div>
                        <div class="col-10">
                            <label>LOCAL DELEGATES</label>
                        </div>
                        <div class="col-3"></div>
                        <div class="col-9">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="Dragon Pay" name="payment" id="dragon-pay" checked>
                                <label class="form-check-label" for="dragon-pay">
                                    DRAGON PAY (NDAP Website)
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="Bank Deposit" name="payment" id="bank-deposit">
                                <label class="form-check-label" for="bank-deposit">
                                    BANK DEPOSIT
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="PayMaya" name="payment" id="paymaya">
                                <label class="form-check-label" for="paymaya">
                                    PAYMAYA
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="GCash" name="payment" id="gcash">
                                <label class="form-check-label" for="gcash">
                                    GCASH
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-check">
                    <div class="row">
                        <div class="col-2"></div>
                        <div class="col-10">
                            <label>INTERNATIONAL DELEGATES</label>
                        </div>
                        <div class="col-3"></div>
                        <div class="col-9">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="Swift Code" name="payment" id="swiftcode">
                                <label class="form-check-label" for="swiftcode">
                                    SWIFTCODE
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="PayPal" name="payment" id="paypal">
                                <label class="form-check-label" for="paypal">
                                    PAYPAL
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-10">
                            <label for="reference" class="form-label">Please provide reference number</label>
                        </div>
                    <div class="col-3"></div>
                    <div class="col-9">
                        <div class="mb-3 row">
                            <div class="col-7">
                                <input type="text" class="form-control" name="reference" id="reference"/>
                            </div>
                            <div class="col-1">
                                <label id="reference_required" style="color: red;  display: none;">*</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-10">
                            <label for="reference" class="form-label">Upload Proof of Payment</label>
                        </div>
                    <div class="col-3"></div>
                    <div class="col-9">
                        <div class="mb-3 row">
                            <div class="col-7">
                            <input type="hidden" name="size" value="1000000">
                            <div>
                                <input type="file" name="image">
                            </div>
                            </div>
                            <div class="col-1">
                                <!--<label id="reference_required" style="color: red;  display: none;">*</label>-->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-check">

                    <div class="row">
                        <div class="col-6 text-start">
                            <button type="button" class="btn btn-primary" onclick="prev('page3')">Previous</button>
                        </div>
                        <div class="col-5 text-end pb-5">
                            <button type="button" class="btn btn-primary" onclick="next('submit')">Submit</button>
                        </div>
                        <div class="col-1"></div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    
    
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.4.1.slim.min.js"></script>
    <script>
    
        function next(page){
            var lastname = firstname = middlename = address = contact = email_address = true;
            var school = program = true;
            var expertise = prc = valid = true;
            if (page == 'page1'){
                if (!document.getElementById('lastname').value.length){
                    document.getElementById('lastname_required').style.display = "inline";
                    lastname = false;
                }
                else {
                    document.getElementById('lastname_required').style.display = "none";
                    lastname = true;
                }


                if (!document.getElementById('firstname').value.length){
                    document.getElementById('firstname_required').style.display = "inline";
                    firstname = false;
                }
                else {
                    document.getElementById('firstname_required').style.display = "none";
                    firstname = true;
                }

                
                if (!document.getElementById('middlename').value.length){
                    document.getElementById('middlename_required').style.display = "inline";
                    middlename = false;
                }
                else {
                    document.getElementById('middlename_required').style.display = "none";
                    middlename = true;
                }

                
                if (!document.getElementById('address').value.length){
                    document.getElementById('address_required').style.display = "inline";
                    address = false;
                }
                else {
                    document.getElementById('address_required').style.display = "none";
                    address = true;
                }


                if (!document.getElementById('contact').value.length){
                    document.getElementById('contact_required').style.display = "inline";
                    contact = false;
                }
                else {
                    document.getElementById('contact_required').style.display = "none";
                    contact = true;
                }


                if (!document.getElementById('email_address').value.length){
                    document.getElementById('email_required').style.display = "inline";
                    email_address = false;
                }     
                else {
                    document.getElementById('email_required').style.display = "none";
                    email_address = true;
                }


                if (lastname && firstname && middlename && address && contact && email_address) {
                    document.getElementById('page1').style.display = 'none';
                    document.getElementById('page2').style.display = 'block';
                    document.getElementById('page3').style.display = 'none';
                }
            }
            else if (page == 'page2'){

                if (document.getElementById('school').value.length || document.getElementById('program').value.length) {
                    if (!document.getElementById('school').value.length){
                        document.getElementById('school_required').style.display = "inline";
                        school = false;
                    }
                    else {
                        document.getElementById('school_required').style.display = "none";
                        school = true;
                    }


                    if (!document.getElementById('program').value.length){
                        document.getElementById('program_required').style.display = "inline";
                        program = false;
                    }
                    else {
                        document.getElementById('program_required').style.display = "none";
                        program = true;
                    }

                    if (school && program) {
                        document.getElementById('page1').style.display = 'none';
                        document.getElementById('page2').style.display = 'none';
                        document.getElementById('page3').style.display = 'block';
                    }

                }
                else {
                    var nutritionist = document.getElementsByName('nutritionist'); 
              
                    for(i = 0; i < nutritionist.length; i++) { 
                        if(nutritionist[i].checked){
                            if (nutritionist[i].value === "yes") {
                                if (document.getElementById("academe").checked || document.getElementById("clinical").checked 
                                    || document.getElementById("food-service").checked || document.getElementById("industry").checked 
                                    || document.getElementById("health").checked ){

                                    document.getElementById('field_required').style.display = "none";
                                    expertise = true;
                                }

                                else {
                                    document.getElementById('area_required').style.display = "inline";
                                    expertise = false;
                                }

                                if (!document.getElementById('prc').value.length){
                                    document.getElementById('prc_required').style.display = "inline";
                                    prc = false;
                                }
                                else {
                                    document.getElementById('prc_required').style.display = "none";
                                    prc = true;
                                }
                                if ( document.getElementById('valid').selectedIndex == 0 ) {
                                    valid = false;
                                }
                                else {
                                    valid = true;
                                }

                                if (expertise && prc && valid) {
                                    document.getElementById('page1').style.display = 'none';
                                    document.getElementById('page2').style.display = 'none';
                                    document.getElementById('page3').style.display = 'block';
                                }

                            }

                            if (nutritionist[i].value === "no") {
                                if (!document.getElementById('field').value.length){
                                    document.getElementById('field_required').style.display = "inline";
                                    field = false;
                                }
                                else {
                                    document.getElementById('field_required').style.display = "none";
                                    field = true;
                                }

                                if (field) {
                                    document.getElementById('page1').style.display = 'none';
                                    document.getElementById('page2').style.display = 'none';
                                    document.getElementById('page3').style.display = 'block';
                                }
                            }
                        }
                    }
                }
            }
            else if (page == 'submit'){
                if (!document.getElementById('reference').value.length){
                    document.getElementById('reference_required').style.display = "inline";
                }
                else {
                    document.getElementById("registrationForm").submit();
                }
            }

        }

        function prev(page){   
            if (page == 'page2'){
                document.getElementById('page1').style.display = 'block';
                document.getElementById('page2').style.display = 'none';
                document.getElementById('page3').style.display = 'none';
            }
            if (page == 'page3'){
                document.getElementById('page1').style.display = 'none';
                document.getElementById('page2').style.display = 'block';
                document.getElementById('page3').style.display = 'none';
            }
        }
        

        function expertise() {
            if (document.getElementById("academe").checked || document.getElementById("clinical").checked 
            || document.getElementById("food-service").checked || document.getElementById("industry").checked 
            || document.getElementById("health").checked ) {
                document.getElementById('school').value = "";
                document.getElementById('program').value = "";
                document.getElementById('school').disabled = true;
                document.getElementById('program').disabled = true;
            }
            else {
                document.getElementById('school').disabled = false;
                document.getElementById('program').disabled = false;
            }
        }
        
        
        function academic() {
            var nutritionist = document.getElementsByName('nutritionist'); 

            for(i = 0; i < nutritionist.length; i++) { 
                if ((document.getElementById('school').value.length || document.getElementById('program').value.length) || (nutritionist[i].value === "no" && nutritionist[i].value === "yes")) {
                    document.getElementById("academe").disabled = true; 
                    document.getElementById("clinical").disabled = true;
                    document.getElementById("food-service").disabled = true;
                    document.getElementById("industry").disabled = true;
                    document.getElementById("health").disabled = true;

                    document.getElementById('academe').checked = false;
                    document.getElementById('clinical').checked = false;
                    document.getElementById('food-service').checked = false;
                    document.getElementById('industry').checked = false;
                    document.getElementById('health').checked = false;

                    document.getElementById('field').disabled = true;

                    document.getElementById('prc').disabled = true;
                    document.getElementById('valid').disabled = true;
                    document.getElementById('valid').value = 0;
                    
                    document.getElementById('nutritionist-yes').checked = false;
                    document.getElementById('nutritionist-no').checked = false;

                }
                else {
                    var nutritionist = document.getElementsByName('nutritionist'); 
              
                    for(i = 0; i < nutritionist.length; i++) { 
                        if(nutritionist[i].checked){
                            if (nutritionist[i].value === "yes") {
                                document.getElementById("academe").disabled = false;
                                document.getElementById("clinical").disabled = false;
                                document.getElementById("food-service").disabled = false;
                                document.getElementById("industry").disabled = false;
                                document.getElementById("health").disabled = false;
                                document.getElementById('prc').disabled = false;
                                document.getElementById('valid').disabled = false;
                            }

                            else if (nutritionist[i].value === "no") {
                                document.getElementById('field').disabled = false;

                            }
                        }
                    }
                    
                    
                }
            }
        }

        function practice(){
            if (document.getElementById('field').value.length) {
                document.getElementById('school').value = "";
                document.getElementById('program').value = "";
                document.getElementById('school').disabled = true;
                document.getElementById('program').disabled = true;
            }
            else {
                document.getElementById('school').disabled = false;
                document.getElementById('program').disabled = false;
            }
        }

        function prc_input() {
            if (document.getElementById('prc').value.length) {
                document.getElementById('school').value = "";
                document.getElementById('program').value = "";
                document.getElementById('school').disabled = true;
                document.getElementById('program').disabled = true;
            }
            else {
                document.getElementById('school').disabled = false;
                document.getElementById('program').disabled = false;
            }
        }

        function select_country() {
            if (document.getElementById('country').value == "Philippines"){
                document.getElementById('province').disabled = false;
            }
            else {
                document.getElementById('province').disabled = true;
                document.getElementById('province').value = 0;
            }
            
        }
        
        function nutritionistValue() { 
            var nutritionist = document.getElementsByName('nutritionist'); 
              
            for(i = 0; i < nutritionist.length; i++) { 
                if(nutritionist[i].checked){
                    if (nutritionist[i].value === "yes") {
                        document.getElementById('academe').disabled = false;
                        document.getElementById('clinical').disabled = false;
                        document.getElementById('food-service').disabled = false;
                        document.getElementById('industry').disabled = false;
                        document.getElementById('health').disabled = false;
                        document.getElementById('field').disabled = true;

                        document.getElementById('prc').disabled = false;
                        document.getElementById('valid').disabled = false;

                        document.getElementById('field').value = "";
                        document.getElementById('school').value = "";
                        document.getElementById('program').value = "";
                        document.getElementById('school').disabled = false;
                        document.getElementById('program').disabled = false;

                        document.getElementById('field_required').style.display = "none";
                        document.getElementById('area_required').style.display = "none";
                        document.getElementById('school_required').style.display = "none";
                        document.getElementById('program_required').style.display = "none";

                    }
                    else if (nutritionist[i].value === "no"){
                        document.getElementById('academe').disabled = true;
                        document.getElementById('clinical').disabled = true;
                        document.getElementById('food-service').disabled = true;
                        document.getElementById('industry').disabled = true;
                        document.getElementById('health').disabled = true;
                        document.getElementById('field').disabled = false;
                        document.getElementById('prc').disabled = true;
                        document.getElementById('valid').disabled = true;
                        
                        document.getElementById('academe').checked = false;
                        document.getElementById('clinical').checked = false;
                        document.getElementById('food-service').checked = false;
                        document.getElementById('industry').checked = false;
                        document.getElementById('health').checked = false;

                        document.getElementById('school').value = "";
                        document.getElementById('program').value = "";
                        document.getElementById('school').disabled = false;
                        document.getElementById('program').disabled = false;

                        document.getElementById('field_required').style.display = "none";
                        document.getElementById('area_required').style.display = "none";
                        document.getElementById('school_required').style.display = "none";
                        document.getElementById('program_required').style.display = "none";
                    }
                }
            }
        }

        $(window).on('resize', function () {

            if ($(this).width() >= 600) {   
                console.log("Large");
                document.getElementById("container").style.width = '60vh';
                
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