<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test</title>
    @vite('./resources/css/app.css')
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">

    <!-- Left Side: Image -->
    <div class="hidden md:block md:w-1/2">
        <img src="./assets/img/img-login.png" alt="Background Image" class="object-cover w-full h-1/2">
    </div>

    <!-- Right Side: Login Form -->

    <div class="md:w-1/2 p-8">
        <!-- Logo -->
        {{-- <div class="mb-8 text-right">
            <img src="./assets/img/logo.png" alt="Logo" class="w-1/4 h-auto">
        </div> --}}

        <!-- Login Form -->
        <form class="px-32">
            <h1 class="mb-4 text-4xl font-bold text-center">Login</h1>
            <p class="mb-4 mt-4 text-center text-xl text-gray-400">Enter your username and password</p>
            <div class="mb-4">
                <input type="text" id="username" name="username" class="w-full px-3 py-2 border rounded-md" placeholder="Username">
            </div>

            <div class="mb-4">
                <input type="password" id="password" name="password" class="w-full px-3 py-2 border rounded-md" placeholder="Password">
            </div>

            <div class="mb-10 flex items-center">
                <input type="checkbox" id="remember" name="remember" class="mr-2 h-5 w-5">
                <label for="remember" class="text-xl text-gray-400 pb-1">Remember me</label>
            </div>

            <button type="submit" class="w-full md:w-1/2 bg-purple-custom text-white mx-32 font-bold text-xl py-2 rounded-md">Login</button>
        </form>
    </div>

</body>
</html>
