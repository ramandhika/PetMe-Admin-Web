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
            <div class="flex justify-end mb-5">
                <button class="bg-purple-custom text-pastel-custom p-3 font-semibold rounded-xl hover:bg-pastel-custom hover:text-purple-custom me-7">Import from Excel</button>
                <button class="bg-pastel-custom text-purple-custom p-3 font-semibold rounded-xl hover:bg-purple-custom hover:text-pastel-custom px-7">Export to  PDF</button>
            </div>
        </div>
    </div>
</div>
