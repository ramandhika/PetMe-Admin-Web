<body class="bg-gray-100 -z-20">
    <div class="w-full h-12 bg-purple-custom absolute -z-10 py-40"></div>
    <div class="flex z-50">
        <div class="w-1/5 bg-white p-8 pt-14 pb-14 ml-20 mt-20 rounded-t-3xl text-xl font-bold text-center shadow-xl">
            <!-- Logo -->
            <div class="mb-8 flex items-center justify-center">
                <img src="assets/img/logo.svg" alt="Logo" class="w-3/4">
            </div>
            <!-- Menu -->
            <nav>
                <ul>
                    <li class="mb-4">
                        <a href="/" class="p-2.5 text-purple-custom hover:bg-pastel-custom hover:rounded-xl"><i
                                class="fa-solid fa-house-chimney-window"></i> Dashboard</a>
                    </li>
                    <li class="mb-4">
                        <a href="/user" class="p-2.5 text-purple-custom hover:bg-pastel-custom hover:rounded-xl"><i
                                class="fas fa-users"></i> Daftar User</a>
                    </li>
                    <li class="mb-4">
                        <a href="/pet" class="p-2.5 text-purple-custom hover:bg-pastel-custom hover:rounded-xl"><i
                                class="fa-solid fa-bug"></i> Approval Pet</a>
                    </li>
                </ul>
            </nav>
            <!-- Logout -->
            <div class="mt-96">
                <a href="/login" class="p-2.5 text-red-700 hover:text-red-900 hover:bg-pastel-custom hover:rounded-xl"><i
                        class="fa fa-sign-out-alt"></i> Logout</a>
            </div>
        </div>
