<?php
session_start();
if (isset($_SESSION["user"])) {
   header("Location: home.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Here!</title>
    <link rel="icon" type="image/x-icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQhB7Um_OuYJJd3zTlxstYTm3vNWEkcvDhlTw&usqp=CAU">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/register.css">
</head>
<body>
<h1 align="center" class="mt-2" style="color: aqua;"> Login Here!</h1>
    <div class="container">
        <?php
        if (isset($_POST["login"])) {
           $email = $_POST["email"];
           $password = $_POST["password"];

           require_once "connection.php";

           $sql = "SELECT * FROM register WHERE email = '$email' and password='$password'";
           $result = mysqli_query($conn, $sql);
           $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
           if ($user) {
                session_start();
               $_SESSION["user"] = "yes";
               $_SESSION['email'] = $email;
               header("Location: home.php");
               die();
           }else{
               echo "<div class='alert alert-danger'>Details not match!</div>";
           }

        //    if (count($errors)>0) {
        //     foreach ($errors as  $error) {
        //         // echo "<div class='alert alert-danger'>$error</div>";
        //         echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">'. $error .'
        //                     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        //                         <span aria-hidden="true">&times;</span>
        //                     </button>
        //             </div>';
        //     }
        //    }else{
            
        //     $sql = "INSERT INTO register (first_name, last_name, email, contact, b_date, school, college, blood_group, education, gender, address, password)
        //             VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? )";
        //     $stmt = mysqli_stmt_init($conn);
        //     $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
        //     if ($prepareStmt) {
        //         mysqli_stmt_bind_param($stmt,"ssssssssssss",$fName, $lName, $email, $contact, $bdate, $school, $college, $bgroup, $education, $gender, $address, $passwordHash);
        //         mysqli_stmt_execute($stmt);
        //         echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        //                     You are registered successfully..!
        //                     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        //                         <span aria-hidden="true">&times;</span>
        //                     </button>
        //             </div>';
        //         // echo "<div class='alert alert-success'>You are registered successfully.</div>";
        //     }else{
        //         die("Something went wrong");
        //     }
        //    }
        }
        ?>
        <form action="login.php" method="post">
            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Email:">
            </div>
            
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password:">
            </div>
            
            <div class="form-btn">
                <input type="submit" class="btn btn-primary" value="Login" name="login">
            </div>
        </form>
        <div>
        <div><p>Not a Member? <a href="register.php" style="text-decoration: none;">SignUp Here..!</a></p></div>
      </div>
    </div>
</body>
</html>