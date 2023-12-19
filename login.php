

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
            <form method="post" action="controller/log-in.php">
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