<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PetMe Admin Dashboard</title>
    @vite('./resources/css/app.css')
</head>

<body class="bg-gray-100 -z-20">
    <div class="w-full h-12 bg-purple-custom absolute -z-10 py-32">

    </div>
    <div class="flex text-center z-50">
        <!-- Sidebar -->
        <div class="w-1/5 bg-white p-8 pt-14 pb-14 ml-20 mt-20 rounded-xl text-xl font-bold">
            <!-- Logo -->
            <div class="mb-8 flex items-center justify-center">
                <img src="assets/img/logo.svg" alt="Logo" class="w-3/4">
            </div>
            <!-- Menu -->
            <nav>
                <ul>
                    <li class="mb-4">
                        <a href="#" class="p-2.5 text-purple-custom hover:bg-pastel-custom hover:rounded-xl"><i
                                class="fa-solid fa-house-chimney-window"></i> Dashboard</a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="p-2.5 text-purple-custom hover:bg-pastel-custom hover:rounded-xl"><i
                                class="fas fa-users"></i> Daftar User</a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="p-2.5 text-purple-custom hover:bg-pastel-custom hover:rounded-xl"><i
                                class="fa-solid fa-bug"></i> Approval Pet</a>
                    </li>
                </ul>
            </nav>
            <!-- Logout -->
            <div class="mt-96">
                <a href="#" class="p-2.5 text-red-700 hover:text-red-900 hover:bg-pastel-custom hover:rounded-xl"><i
                        class="fa fa-sign-out-alt"></i> Logout</a>
            </div>
        </div>

        <!-- Content Area -->
        <div class="flex-1 p-10">
            <!-- Your main content goes here -->
        </div>
    </div>

</body>

</html>

<script src="https://kit.fontawesome.com/984a8c9bbd.js" crossorigin="anonymous"></script>
