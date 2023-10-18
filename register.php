<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Here!</title>
    <link rel="icon" type="image/x-icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQhB7Um_OuYJJd3zTlxstYTm3vNWEkcvDhlTw&usqp=CAU">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/register.css">
</head>
<body>
<h1 align="center" class="mt-2" style="color: aqua;"> Register Here!</h1>
    <div class="container">
        <?php
        if (isset($_POST["submit"])) {
           $fName = $_POST["firstname"];
           $lName = $_POST["lastname"];
           $email = $_POST["email"];
           $contact = $_POST["contact"];
           $bdate = $_POST["bdate"];
           $school = $_POST["school"];
           $college = $_POST["college"];
           $bgroup = $_POST["bgroup"];
           $education = $_POST["education"];
           $gender = $_POST["gender"];
           $address = $_POST["address"];
           $password = $_POST["password"];
           $passwordRepeat = $_POST["repeat_password"];
           
        //    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

           $errors = array();
           
        //    if (empty($fullName) OR empty($email) OR empty($contact) OR empty($bdate) OR empty($school) OR empty($college) OR empty($bgroup) OR empty($education) OR empty($gender) OR empty($password) OR empty($passwordRepeat)) {
        //     array_push($errors,"All fields are required");
        //    }
           if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            array_push($errors, "Email is not valid");
           }
           if (strlen($password)<8) {
            array_push($errors,"Password must be at least 8 charactes long");
           }
           if ($password!==$passwordRepeat) {
            array_push($errors,"Password does not match");
           }
           require_once "connection.php";
           $sql = "SELECT * FROM register WHERE email = '$email'";
           $result = mysqli_query($conn, $sql);
           $rowCount = mysqli_num_rows($result);
           if ($rowCount>0) {
            array_push($errors,"Email already exists!");
           }
           if (count($errors)>0) {
            foreach ($errors as  $error) {
                // echo "<div class='alert alert-danger'>$error</div>";
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">'. $error .'
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                    </div>';
            }
           }else{
            
            $sql = "INSERT INTO register (first_name, last_name, email, contact, b_date, school, college, blood_group, education, gender, address, password)
                    VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? )";
            $stmt = mysqli_stmt_init($conn);
            $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
            if ($prepareStmt) {
                mysqli_stmt_bind_param($stmt,"ssssssssssss",$fName, $lName, $email, $contact, $bdate, $school, $college, $bgroup, $education, $gender, $address, $password);
                mysqli_stmt_execute($stmt);
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                            You are registered successfully..!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                    </div>';
                // echo "<div class='alert alert-success'>You are registered successfully.</div>";
            }else{
                die("Something went wrong");
            }
           }
        }
        ?>
        <form action="register.php" method="post">
            <div class="form-group">
                <input type="text" class="form-control" name="firstname" placeholder="First Name:">
            </div>
            
            <div class="form-group">
                <input type="text" class="form-control" name="lastname" placeholder="Last Name:">
            </div>
            
            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Email:">
            </div>
            
            <div class="form-group">
                <input type="number" class="form-control" name="contact" placeholder="Contact:">
            </div>
            
            <div class="form-group">
                <input type="date" class="form-control" name="bdate" placeholder="Birth Date:">
            </div>
            
            <div class="form-group">
                <input type="text" class="form-control" name="school" placeholder="School:">
            </div>
            
            <div class="form-group">
                <input type="text" class="form-control" name="college" placeholder="College:">
            </div>
            
            <div class="form-group">
                <input type="text" class="form-control" name="bgroup" placeholder="Blood Group:">
            </div>
            
            <div class="form-group">
                <input type="text" class="form-control" name="education" placeholder="Education:">
            </div>
            
            <div class="form-group">
                <input type="text" class="form-control" name="gender" placeholder="Gender:">
            </div>
            
            <div class="form-group">
                <input type="text" class="form-control" name="address" placeholder="Address:">
            </div>
            
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password:">
            </div>
            
            <div class="form-group">
                <input type="password" class="form-control" name="repeat_password" placeholder="Repeat Password:">
            </div>
            
            <div class="form-btn">
                <input type="submit" class="btn btn-primary" value="Sign Up" name="submit">
            </div>
        </form>
        <div>
        <div><p>Already Registered Member? <a href="login.php" style="text-decoration: none;">Login Here..!</a></p></div>
      </div>
    </div>
</body>
</html>