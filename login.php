<?php
include 'config.php';
session_start();

if (@$_POST['Loginbtn']) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * from users WHERE Email = '$email' AND Pwd = '$password'";
    $req = mysqli_query($conn, $sql);
    $log = mysqli_fetch_row($req);

    if ($log == 0) {
        echo "Email ou mot de passe incorecte";
    } else {
        if ($log['5'] == 1) {
            header('Location: client.php');
            $id = $log['0'];
            $sql1 = "SELECT form panier where id_user = '$id'";
            $req1 = mysqli_query($conn, $sql1);
            $result = mysqli_fetch_row($req1);
            $_SESSION['panier'] = $result[0];
            $_SESSION['status'] = 'client';
            $_SESSION['id'] = $id;
        } else if ($log['5'] == 2) {
            header('Location: nav-admin.php');
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"> </script>

    <title>Log in</title>
    <style>
        body{
            background-image: url("images/login-image.jpg");
            background-size: cover;
        }
    </style>
</head>

<body>
    <div class="flex items-center justify-center min-h-screen">
        <div class="bg-[#4ABB29] px-8 py-6 mt-4 text-left">

            <h3 class="text-2xl font-bold text-center">Login to your account</h3>
            <form method="post" action="">
                <div class="mt-4 ">
                    <div>
                        <label class="block" for="email">Email<label>
                                <input type="text" placeholder="Email" name="email"
                                    class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">                    </div>
                    <div class="mt-4">
                        <label class="block">Password<label>
                                <input type="password" placeholder="Password" name="password"
                                    class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                    </div>
                    <div class="flex items-baseline justify-between">
                        <input type="submit" value="Login" name="Loginbtn"
                            class="bg-[#184F07] px-6 py-2 mt-4 text-white rounded-lg hover:bg-blue-900">
                    </div>
                </div>
            </form>
        </div>
    </div>

</body>

</html>