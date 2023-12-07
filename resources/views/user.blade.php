@include('layout.main')

<!-- Content Area -->
<div class="flex-1 h-screen p-10 pt-20">
    <h1 class="text-pastel-custom text-5xl font-medium">Daftar User</h1>
    <div class="flex justify-between mt-10">
        <button class="font-bold bg-pastel-custom text-purple-custom rounded-xl p-2.5 px-4 hover:text-black">Tambah
            User</button>
        <input type="text" id="liveSearchInput"
            class="w-1/4 border border-gray-300 rounded-md p-2.5 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
            placeholder="Search...">
    </div>
    <div class="flex w-full bg-white mt-5 pt-10 px-10 h-5/6 rounded-3xl">
        <div class="container mx-auto">
            <div class="mb-4 flex justify-between items-center">
                <div class="flex space-x-2">
                    <label for="search" class="sr-only">Search:</label>
                    <input type="text" id="search" placeholder="Search..." class="p-2 border border-gray-300 rounded">
                    <button class="p-2 bg-blue-500 text-white rounded">Search</button>
                </div>
                <div class="flex space-x-2">
                    <label for="perPage" class="mr-2">Show:</label>
                    <select id="perPage" class="p-2 border border-gray-300 rounded">
                        <option>10</option>
                        <option>25</option>
                        <option>50</option>
                    </select>
                </div>
            </div>

            <table class="min-w-full bg-white border border-gray-300">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border-b">Nama</th>
                        <th class="py-2 px-4 border-b">Username</th>
                        <th class="py-2 px-4 border-b">Email</th>
                        <th class="py-2 px-4 border-b">Password</th>
                        <th class="py-2 px-4 border-b">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Data rows go here -->
                    <tr>
                        <td class="py-2 px-4 border-b">John Doe</td>
                        <td class="py-2 px-4 border-b">john_doe123</td>
                        <td class="py-2 px-4 border-b">john.doe@example.com</td>
                        <td class="py-2 px-4 border-b">********</td>
                        <td class="py-2 px-4 border-b">
                            <button class="bg-blue-500 text-white px-2 py-1 rounded">Edit</button>
                            <button class="bg-red-500 text-white px-2 py-1 rounded">Delete</button>
                        </td>
                    </tr>
                    <!-- More rows go here -->
                </tbody>
            </table>

            <div class="mt-4 flex justify-between items-center">
                <div class="text-sm text-gray-600">
                    Showing 1 to 10 of 50 entries
                </div>
                <div class="flex space-x-2">
                    <button class="p-2 bg-blue-500 text-white rounded">Previous</button>
                    <button class="p-2 bg-blue-500 text-white rounded">Next</button>
                </div>
            </div>
        </div>
    </div>
</div>

