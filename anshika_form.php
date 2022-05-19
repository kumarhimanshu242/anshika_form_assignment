<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN UP PAGE</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital@1&family=Oswald:wght@200&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0px;
            padding: 0px;
        }

        body {
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-size: 150% 150%;
            background: rgb(244, 246, 248);
        }

        .container {
            background-color: #b060319e;
            width: auto;
            height: 900px;
        }

        header {
            margin: auto;
            background-color: rgb(28 22 32 / 85%);
            padding: 20px 20px;
            color: white;
        }

        .head-text {
            font-family: 'Lora', serif;
            width: fit-content;
            font-size: 32px;
            padding: 0px 37%;
            color: #f5d8a8;
            text-shadow: 2px 2px 5px orange;
            font-family: 'Oswald', sans-serif;
        }

        .form-area {
            width: 100%;
            height: 600px;
            color: white;
        }

        .survey-form {
            width: 60%;
            height: 1000px;
            margin: 30px auto;
            background-color: #122035ad;
            border-radius: 10px;
        }

        .fields input,
        select {
            width: 315px;
            height: 30px;
            margin: 10px 10%;
            border-radius: 5px;
            border-color: snow;
        }

        .btn button {
            width: 200px;
            height: 40px;
            margin: 10px 10%;
            padding: 2px 10px;
            font-size: 20px;
            font-weight: bolder;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            background-color: black;
            color: beige;
            border-radius: 10px;
            border-color: rgb(245, 234, 87);
            cursor: pointer;
        }

        .login {
            background-color: #0c0cd34a;
            width: auto;
            height: 30px;
            font-family: 'Lobster', cursive;
            font-size: 20px;
            color: aliceblue;
            text-align: center;
            margin-top: 60px;
        }

        .login a {
            text-decoration: none;
            color: aliceblue;
            text-shadow: 2px 2px 5px rgb(255, 0, 212);
        }

        .main {
            margin: auto;
            width: 60%;

            padding: 40px;
        }

        .radio,
        .radio-lvl {
            display: inline-block;

        }

        .rd {
            position: relative;
            bottom: 165px;
        }

        .rd-lvl {
            position: relative;
            bottom: 130px;
        }
        input[type="checkbox"]{
            accent-color: red;
        }
        input[type="radio"]{
            accent-color: green;
        }
    </style>
</head>

<body>
    <div class="container">
        <header>
            <div class="head-text" width="50" font-family="Lora, serif">Survey Form for students</div>
        </header>
        <div class="form-area">
            <div class="survey-form">
                <form action="anshika_form.php" method="POST">


                    <div class="main">
                        <div class="fields">
                            What is Your Name?
                            <input type="text" size="25" name="name" placeholder="Enter your name" required>
                        </div>
                        <div class="fields">
                            What is Your Mobile Number?
                            <input type="number" size="10" name="phone" placeholder="Enter your phone number" required>
                        </div>

                        <div class="fields">
                            Write your Email Address
                            <input type="email" size="25" name="email" placeholder="Your Email" required>
                        </div>
                        <div class="fields">
                            <label for="Age">Age</label>
                            <select name="Age" id="age">
                                <option value="0">Choose your age</option>
                                <option value="1">Child </option>
                                <option value="2">Teen</option>
                                <option value="3">Early adulthood</option>
                                <option value="4">Middle adulthood</option>
                                <option value="5">Old age</option>

                            </select><br><br>
                        </div>
                        <div class="radio-lvl rd-lvl">
                            <p>Your Education Level : </p>
                        </div>
                        <div class="radio-lvl " style="margin-left:105px;">
                            <input type="radio" name="edu" id=""><span>Under Graduate</span> <br><br>
                            <input type="radio" name="edu" id=""><span>Graduate</span> <br><br>
                            <input type="radio" name="edu" id=""><span>Under Postgraduate</span> <br><br>
                            <input type="radio" name="edu" id=""><span>Post graduate</span> <br><br>
                        </div><br><br>
                        <div class="radio rd">
                            <p>Your other Certification :</p>
                        </div>
                        <div class="radio" style="margin-left:90px;">
                            <input type="radio" name="cert" id=""><span>Full Stack</span> <br><br>
                            <input type="radio" name="cert" id=""><span>Python programming</span> <br><br>
                            <input type="radio" name="cert" id=""><span>Artificial Intelligence</span> <br><br>
                            <input type="radio" name="cert" id=""><span>Data science</span> <br><br>
                            <input type="radio" name="cert" id=""><span>Cyber Security</span> <br><br>

                        </div> <br><br>

                        <!-- checkboxes for languages -->
                        <div class="checkbox-lang">
                            What languages do you know?
                        </div>
                        <div class="checkbox-lang">
                            <input type="checkbox" name="language" id="check-lang1" value="Hindi">
                            <label for="check-lang1">Hindi</label><br>
                            <input type="checkbox" name="language" id="check-lang2" value="English">
                            <label for="check-lang2">English</label><br>
                            <input type="checkbox" name="language" id="check-lang3" value="French">
                            <label for="check-lang3">French</label>
                        </div><br><br>
                        <center>
                            <div class="btn" id="contactbutton">
                                <button type="submit" name="submit">Completion</button>
                            </div>
                        </center>
                    </div>

                </form>
            </div>
        </div>
    </div>
</body>

</html>

<?php error_reporting (E_ALL ^ E_NOTICE);

    $server = "localhost";
    $username = "root";
    $password = "root";
    $db_name = "anshika_form";
    $conn = mysqli_connect($server, $username, $password, $db_name);

    if($conn){
        echo"Database connection successful";
    }
    else{
        die("Connection Failure ".mysqli_connect_error());
    }

    if(isset($_POST['name'])){
        $name =  $_POST['name'];
        $mobile =  $_POST['phone'];
        $email = $_POST['email'];
        $age = $_POST['Age'];
        $education = $_POST['edu'];
        $certificate = $_POST['cert'];
        $lang = $_POST['language'];
        $l = "";

        foreach($lang as $a){
            $l .= .$a",";
        }

        $sql = "INSERT INTO `survey_form` (`Name`, `Mobile`, `Email`, `Age`, `Education`, `Certification`, `Language`) VALUES ('$name', '$mobile', '$email', '$age', '$education', '$certificate', '$l')";

        $query = mysqli_query($conn, $sql);

        if($query){
            echo'<script>alert("Form Submitted")</script>';
        }
        else{
            echo'<script>alert("Something Went Wrong")</script>';
        }
    
    
    }
?> 
