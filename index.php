<?php
include 'config.php';

if (@$_POST['RegisterBtn']) {
    $Fname = $_POST['Fname'];
    $Usrname = $_POST['Usrname'];
    $Email = $_POST['Email'];
    $Pwd = $_POST['Pwd'];

    $sqlcheck = "SELECT * from users where Email = '$Email'";

    $req = mysqli_query($conn, $sqlcheck);
    $log = mysqli_fetch_row($req);

    if ($log){
        echo 'You already have an account';
    }else{   
        $sql = "INSERT into users (Fullname, Username, Email, Pwd) values('$Fname', '$Usrname', '$Email', '$Pwd')";
        $req = mysqli_query($conn, $sql);
        $sql2 = "SELECT LAST_INSERT_ID()";
        $req2 = mysqli_query($conn, $sql2);
        $row = mysqli_fetch_row($req2);
        session_start();
        $_SESSION['id'] = $row[0];
        header('Location: role.php');
    }

}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <script src="https://cdn.tailwindcss.com"> </script>
    <title>Sign up</title>
</head>
<style>
    body{
        background-image: url("images/signup-image.jpg");
        background-size: cover;

    }
</style>

<body class="h-screen flex items-center justify-center">

    <section class="bg-[#4ABB29] p-8 rounded shadow-md w-96">
        <h1 class="text-2xl font-bold mb-4">Sign up</h1>
        <form method="post" action=''>
            <div class="mb-4">
                <label class="block text-sm font-semibold text-gray-600">Full Name</label>
                <input type="text" name="Fname" class="mt-1 p-2 w-full border rounded-md" placeholder="">
            </div>
            <div class="mb-4">
                <label class="block text-sm font-semibold text-gray-600">Username</label>
                <input type="text" name="Usrname" class="mt-1 p-2 w-full border rounded-md" placeholder="">
            </div>
            <div class="mb-4">
                <label class="block text-sm font-semibold text-gray-600">Email</label>
                <input type="email" name="Email" class="mt-1 p-2 w-full border rounded-md" placeholder="">
            </div>
            <div class="mb-4">
                <label class="block text-sm font-semibold text-gray-600">Password</label>
                <input type="password" name="Pwd" class="mt-1 p-2 w-full border rounded-md" placeholder="">
            </div>
            <input type="submit" name="RegisterBtn" value="Register" id="Register"
                class="bg-[#184F07] text-white p-2 rounded-md cursor-pointer">
        </form>
        <a class="text-sm underline pt-15px" href="login.php">Already have an account click here to log in</a>
    </section>



</body>

</html>