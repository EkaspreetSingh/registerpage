
<!-- // if(isset($_POST['Register'])){
//     $name = $_POST['name'];
//     $email = $_POST['email'];
//     $grad_year = $_POST['grad_year'];
//     $mob_no = $_POST['mob_no'];
//     $wa_no = $_POST['wa_no'];
//     $tech_skill = $_POST['tech_skill'];
//     $intro = $_POST['intro'];
//     $resume = $_POST['resume'];
//     $dt = $_POST['dt'];
//     $conn = mysqli_connect("localhost","root","","register_task");
//     $sql = "INSERT INTO `register`(`name`, `email`, `grad_year`, `mob_no`, `wa_no`, `tech_skill`, `intro`, `resume`, `dt`) VALUES ('$name','$email','$grad_year','$mob_no','$wa_no','$tech_skill','$intro','$resume','$dt')";
//     $result = mysqli_query($conn,$sql);
//     if($result){
//         echo "Data inserted successfully";
//     }
//     else{
//         echo "Data not inserted";
//     }
//     // Database configuration
//     $servername = "localhost";
//     $username = "root";
//     $password = "";
//     $dbname = "register_task";
    
//     // Create database connection
//     $conn = new mysqli($servername, $username, $password, $dbname);
    
//     // Check connection
//     if ($conn->connect_error) {
//         die("Connection failed: " . $conn->connect_error);
//     }
    
//     echo "Connected successfully!";
    
//     // Get form data
//     $name = $_POST['name'];
//     $email = $_POST['email'];
//     $password = $_POST['password'];
    
//     // Insert data into the database
//     $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
    
//     if ($conn->query($sql) === TRUE) {
//             echo "Registration successful!";
//         } else {
//                 echo "Error: " . $sql . "<br>" . $conn->error;
//             }
            
//             // Close the database connection
//             $conn->close();
//     } -->



<?php
$insert = false;
if(isset($_POST['name'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "register_task";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password, $dbname);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";

    // Collect post variables
$name = $_POST['name'];
$email = $_POST['email'];
$grad_year = $_POST['grad_year'];
$mob_no = $_POST['mob_no'];
$wa_no = $_POST['wa_no'];
$tech_skill = $_POST['tech_skill'];
$intro = $_POST['intro'];
$resume = $_POST['resume'];

// Insert data into the database
$sql = "INSERT INTO `register`(`name`, `email`, `grad_year`, `mob_no`, `wa_no`, `tech_skill`, `intro`, `resume`, `dt`) VALUES ('$name','$email','$grad_year','$mob_no','$wa_no','$tech_skill','$intro','$resume', current_timestamp())";

// echo $sql;

// Execute the query
if($con->query($sql) == true){
    // echo "Successfully inserted";

    // Flag for successful insertion
    $insert = true;
}
else{
    echo "ERROR: $sql <br> $con->error";
}

// Close the database connection
$con->close();

}

?>




<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <style>
        body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            /* font-family: sans-serif; */
            font-family: 'Roboto',sans-serif;
            background-color: transparent;
            letter-spacing: 1px;
            font-size:1rem;
        }
        
        .bg {
            width: 100%;
            height: 100%;
            position: fixed;
            z-index: -1;
            filter: blur(4px);
    `-webkit-filter: blur(4px);

        }

        .title {
            width: 40%;
            margin: auto;
            padding: 50px;
            text-align: center;
            margin-bottom: 10px;
            color: white;
            text-shadow: 2px 2px 4px #575960;
        }

        .title img {
            width: 180px;
            height: 100px;
        }

        .box {
            background-color: white;
            margin-bottom: 20px;
        }
        
        .box2 {
            
            text-align: center;
        }

        .container {
        width: 55%;
        max-width: 800px;
        margin: 0 auto;
        padding: 0px;
        background-color: transparent;
        border: none;
       
        }


        .container h2 {
        text-align: center;
        }

        .container label {
            padding: 20px;
            background-color: #634224;
            color: white;
        display: block;
        margin-bottom: 10px;
            font-size: 1.2rem;
        }

        .container input[type="text"],
        .container input[type="email"],
        .container input[type="password"],
        .container input[type="date"],
        .container input[type="file"] {
            outline: none;
            background: white;
        width: 90%;
        padding: 5px;
        margin: 20px 6% 40px 4%;
        }

        .container input[type="checkbox"] {
            margin: 5px 5px 10px 20px;
        }

        .container input[type="submit"] {
            font-size: 1.1rem;
            letter-spacing: 1px;
            border-radius: 5px;
        width: 100px;
        padding: 10px 20px;
        background-color: #634224;
        color: white;
        border: none;
        cursor: pointer;
        margin-bottom: 120px;
        width: 200px;
        }
        .footer {
            padding: 10px;
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: #634224;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 5vh;
            
         }    
         .answered{
            padding: 2px 20px;
            background-color: white;
            /* width:10%; */
            text-align:center;
            line-height: 2rem;
            border-radius: 10px;
            font-size: 0.8rem;
            color: #575960;
         }
         .submitMsg{
            border: 2px solid yellowgreen;
            color: white;
            text-align: center;
            margin-bottom: 40px;
            padding: 20px 0;
            font-size: 20px;
            font-weight: bold;
            text-shadow: 2px 2px 4px #575960;
            box-shadow: 0 0 10px 0 yellowgreen;
         }
    </style>
</head>
<body>
    <img class="bg" src="./images/background.jpg" alt="" srcset="">
    <h1 class="title">
        <div style="text-align: center; margin-bottom: 20px">
            <img src="./images/logo.png" alt="" srcset="">
        </div>
        Cogent Developers Network Registration Form
    </h1>

    <?php
        if($insert == true){
        echo "<p class='submitMsg'>Thanks for submitting your form.</p>";
        }
    ?>

    <div class="container">
        <form method="post" action="index.php" name="register_form" >

            <div class="box">
                <label for="name">1. Name:</label>
                <input  class="input-field" type="text" name="name" required>
            </div>
                
            <div class="box">
                <label for="email">2. Email:</label>
                <input class="input-field" type="email" name="email" required>
            </div>

            <div class="box">
                <label for="grad_year">3. Graduation Year:</label>
                <input  class="input-field" type="date" name="grad_year" required>
            </div>

            <div class="box">
                <label for="mob_no">4. Mobile Number:</label>
                <input class="input-field" type="text" name="mob_no" required>
            </div>

            <div class="box">
                <label for="wa_no">5. Whatsapp Number:</label>
                <input class="input-field" type="text" name="wa_no" required>
            </div>

            <div class="box">
                <label for="tech_skill">6. Technical Skills:</label>
                <input class="input-field"  type="text" name="tech_skill" required>
                <input   type="checkbox" id="ts1" name="ts1" value="Flutter">
                Flutter<br>
                <input  type="checkbox" id="ts2" name="ts2" value="React">
                React<br>
                <input   type="checkbox" id="ts3" name="ts3" value="Java">
                Java<br>
                <input  type="checkbox" id="ts4" name="ts4" value="PHP">
                PHP<br>
                <input   type="checkbox" id="ts5" name="ts5" value="HTML/CSS">
                HTML/CSS<br>
                <input  type="checkbox" id="ts6" name="ts6" value="Javascript">
                Javascript<br><br>
            </div>

            <div class="box">
                <label  for="intro">7. Short Introduction About Me:</label>          
                <input  class="input-field" type="text" name="intro" required>
            </div>

            <div class="box">
                <label for="resume">8. Resume:</label>
                <input class="input-field" type="file" name="resume" required>
            </div>

            <div class="box2">
                <input class="input-field" type="submit" value="SUBMIT &#10004;">
            </div>
            <div class="footer" >
                <div class="answered" id="counters">
                    Answered <b><span  id="counter"></span></b> of 10
                </div>
            </div>
        </form>
    </div>

<script >

    let n = 0;
    let counter = document.getElementById('counter');
    counter.innerHTML = 0;


   const i1 = document.getElementById('i1');
   const inputs = document.getElementsByClassName("input-field");
   for (let i = 0; i < inputs.length; i++) {
      inputs[i].addEventListener("click", (event) => {
        n++;
        console.log(n);
        counter.innerHTML = n;
    });
    }

</script>

</body>
</html>

