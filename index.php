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
        <form method="post" action='controller/signup.php'>
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
            <div class="mb-4">
                <select class="mt-1 p-2 w-full border rounded-md" name="role">
                    <option value="1">Admin</option>
                    <option value="2">Client</option>
                </select>
            </div>
            <input type="submit" name="RegisterBtn" value="Register" id="Register"
                class="bg-[#184F07] text-white p-2 rounded-md cursor-pointer">
        </form>
        <a class="text-sm underline pt-15px" href="login.php">Already have an account click here to log in</a>
    </section>



</body>

</html>