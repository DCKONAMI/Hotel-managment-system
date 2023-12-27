<?php
if (isset($_POST['submit'])) {
    $con = mysqli_connect("localhost", "root", "", "hotel");
    if (!$con) {
        echo "Unable to connect to the database!";
        exit; 
    }

    $email = $_POST['email'];
    $password = $_POST['password'];

   
    $stmt = mysqli_prepare($con, "SELECT * FROM admin WHERE email = ? AND password = ?");
    mysqli_stmt_bind_param($stmt, "ss", $email, $password);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    $rows = mysqli_num_rows($result);
    if ($rows == 1) {
       
        header("Location: ");
        exit; 
    } else {
        echo "email and password not found!";
    }
}
?>