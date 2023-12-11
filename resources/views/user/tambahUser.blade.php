@include('layout.main')

<!-- Content Area -->
<div class="flex-1 h-screen p-10 pt-20">
    <h1 class="text-pastel-custom text-5xl font-medium">Tambah User</h1>
    <div class="flex justify-between mt-10">
        <a href="/user"><button class="font-bold bg-pastel-custom text-purple-custom rounded-xl p-2.5 px-4 hover:text-black">Back to Daftar User</button></a>
    </div>
    <div class="flex w-full bg-white mt-5 pt-10 px-10 h-fit rounded-3xl">
        <div class="container mx-80 mt-7 mb-7">
            <form action="/user" method="POST">
                @csrf
                <div class="flex flex-col">
                    <label for="name" class="text-xl font-semibold">Nama</label>
                    <input type="text" name="name" id="name" class="border border-gray-300 rounded-md p-2.5 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="Nama Lengkap">
                </div>
                <div class="flex flex-col mt-5">
                    <label for="username" class="text-xl font-semibold">Username</label>
                    <input type="text" name="username" id="username" class="border border-gray-300 rounded-md p-2.5 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="Username">
                </div>
                <div class="flex flex-col mt-5">
                    <label for="email" class="text-xl font-semibold">Email</label>
                    <input type="email" name="email" id="email" class="border border-gray-300 rounded-md p-2.5 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="Email">
                </div>
                <div class="flex flex-col mt-5">
                    <label for="password" class="text-xl font-semibold">Password</label>
                    <input type="password" name="password" id="password" class="border border-gray-300 rounded-md p-2.5 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="Password">
                </div>
                <div class="flex flex-col mt-5">
                    <label for="role" class="text-xl font-semibold">Role</label>
                    <select name="role" id="role" class="border border-gray-300 rounded-md p-2.5 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent w-1/2">
                        <option value="1">User</option>
                        <option value="2">Admin</option>
                    </select>
                </div>
                <div class="flex justify-end mt-5">
                    <button type="submit" class="bg-purple-custom text-pastel-custom p-3 font-semibold rounded-xl hover:bg-pastel-custom hover:text-purple-custom px-7">Tambah User</button>
                </div>
            </form>
        </div>
    </div>
</div>
