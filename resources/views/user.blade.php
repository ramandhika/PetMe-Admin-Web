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
            <div class="flex justify-end mb-7">
                <button
                    class="bg-purple-custom text-pastel-custom p-3 font-semibold rounded-xl hover:bg-pastel-custom hover:text-purple-custom me-7">Import
                    from Excel</button>
                <button
                    class="bg-pastel-custom text-purple-custom p-3 font-semibold rounded-xl hover:bg-purple-custom hover:text-pastel-custom px-7">Export
                    to PDF</button>
            </div>

            <table class="table-auto border-collapse w-full">
                <thead>
                    <tr class="capitalize text-base leading-normal border-b-4 text-center">
                        <th class="py-3 px-6">Nama</th>
                        <th class="py-3 px-6">Username</th>
                        <th class="py-3 px-6">Email</th>
                        <th class="py-3 px-6">Password</th>
                        <th class="py-3 px-6">Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600 text-base font-medium text-center">
                    <tr class="border-b-4 border-gray-200 hover:bg-gray-100">
                        <td class="py-3 px-6 whitespace-nowrap">
                                <span class="font-medium">Andi</span>
                        </td>
                        <td class="py-3 px-6">
                                <span>Andi</span>
                        </td>
                        <td class="py-3 px-6">
                                <span>andi@gmail.com</span>
                        </td>
                        <td class="py-3 px-6">
                            <span class="bg-green-200 text-green-600 py-1 px-3 rounded-full text-xs">Aktif</span>
                        </td>
                        <td class="py-3 px-6">
                            <div class="flex item-center justify-center">
                                <button class="bg-blue-500 text-white px-4 py-2 rounded-md"><i class="fas fa-edit"></i> Edit</button>
                                <button class="bg-red-500 text-white px-4 py-2 rounded-md ml-2"><i class="fas fa-trash"></i> Hapus</button>
                            </div>
                        </td>
                    </tr>
                    <tr class="border-b-4 border-gray-200 hover:bg-gray-100">
                        <td class="py-3 px-6 whitespace-nowrap">
                                <span class="font-medium">Andi</span>
                        </td>
                        <td class="py-3 px-6">
                                <span>Andi</span>
                        </td>
                        <td class="py-3 px-6">
                                <span>andi@gmail.com</span>
                        </td>
                        <td class="py-3 px-6">
                            <span class="bg-green-200 text-green-600 py-1 px-3 rounded-full text-xs">Aktif</span>
                        </td>
                        <td class="py-3 px-6">
                            <div class="flex item-center justify-center">
                                <button class="bg-blue-500 text-white px-4 py-2 rounded-md"><i class="fas fa-edit"></i> Edit</button>
                                <button class="bg-red-500 text-white px-4 py-2 rounded-md ml-2"><i class="fas fa-trash"></i> Hapus</button>
                            </div>
                        </td>
                    </tr>
                    <tr class="border-b-4 border-gray-200 hover:bg-gray-100">
                        <td class="py-3 px-6 whitespace-nowrap">
                                <span class="font-medium">Andi</span>
                        </td>
                        <td class="py-3 px-6">
                                <span>Andi</span>
                        </td>
                        <td class="py-3 px-6">
                                <span>andi@gmail.com</span>
                        </td>
                        <td class="py-3 px-6">
                            <span class="bg-green-200 text-green-600 py-1 px-3 rounded-full text-xs">Aktif</span>
                        </td>
                        <td class="py-3 px-6">
                            <div class="flex item-center justify-center">
                                <button class="bg-blue-500 text-white px-4 py-2 rounded-md"><i class="fas fa-edit"></i> Edit</button>
                                <button class="bg-red-500 text-white px-4 py-2 rounded-md ml-2"><i class="fas fa-trash"></i> Hapus</button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
