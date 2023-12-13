@include('layout.main')

<!-- Content Area -->
<div class="flex-1 h-screen p-10 pt-20">
    <h1 class="text-pastel-custom text-5xl font-medium">Daftar User</h1>
    <div class="flex justify-between mt-10">
        <a href="{{ route('user.create') }}"
            class="font-bold bg-pastel-custom text-purple-custom rounded-xl p-2.5 px-4 hover:text-black">Tambah
            User</a>
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
            @if (session('success'))
            <div id="successMessage" class="bg-green-500 p-3 rounded-md shadow-sm mb-5">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <svg class="h-5 w-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M2.293 8.293a1 1 0 010-1.414l6-6a1 1 0 011.414
                                0l6 6a1 1 0 01-1.414 1.414L11 4.414V16a1 1
                                0 01-2 0V4.414L3.707 8.707a1 1 0 01-1.414
                                0z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="ml-3">
                        <p class="text-sm leading-5 font-medium text-white">
                            {{ session('success') }}
                        </p>
                    </div>
                </div>
            </div>
            @endif
            <table class="table-auto border-collapse w-full">
                <thead>
                    <tr class="capitalize text-base leading-normal border-b-4 text-center">
                        <th class="py-3 px-1 text-left">Nama</th>
                        <th class="py-3 px-6 text-left">Username</th>
                        <th class="py-3 px-6">Email</th>
                        <th class="py-3 px-6">Role</th>
                        <th class="py-3 px-6">Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600 text-base font-medium">
                    @forelse ($users as $user)
                    <tr class="border-b-4 text-center border-gray-200 hover:bg-gray-100">
                        <td class="py-3 px-1 whitespace-nowrap text-left">
                            <span class="font-medium">{{ $user->name }}</span>
                        </td>
                        <td class="py-3 px-6 text-left">
                            <span>{{ $user->username }}</span>
                        </td>
                        <td class="py-3 px-6">
                            <span>{{ $user->email }}</span>
                        </td>
                        <td class="py-3 px-6">
                            <span class="bg-green-200 text-green-600 py-1 px-3 rounded-full text-base">
                                @if ($user->role == 1)
                                User
                                @else
                                {{ $user->role }}
                                @endif
                            </span>
                        </td>
                        <td class="py-3 px-6">
                            <div class="flex item-center justify-center">
                                <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                    action="{{ route('user.destroy', $user->id) }}" method="POST">
                                    <a href="{{ route('user.edit', $user->id) }}"
                                        class="border border-blue-500 text-blue-500 px-4 py-2 rounded-md hover:bg-blue-500 hover:text-white"><i
                                            class="fas fa-edit"></i>Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button
                                        class="border border-red-500 text-red-500 px-4 py-2 rounded-md ml-2 hover:bg-red-500 hover:text-white"><i
                                            class="fas fa-trash"></i> Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="py-3 px-6 text-center border-4 border-red-500 text-red-500">
                            <span class="font-bold text-xl">Tidak ada data</span>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
            {{ $users->links() }}
        </div>
    </div>
</div>

<script>
    // Live Search
    const liveSearchInput = document.getElementById("liveSearchInput");
    const tables = document.querySelectorAll("table");

    liveSearchInput.addEventListener("keyup", function (e) {
        const searchString = e.target.value.toLowerCase();

        tables.forEach((table) => {
            const tableRows = table.querySelectorAll("tbody tr");

            tableRows.forEach((row) => {
                const nama = row
                    .querySelector("td:nth-child(1)")
                    .textContent.toLowerCase();
                const username = row
                    .querySelector("td:nth-child(2)")
                    .textContent.toLowerCase();
                const email = row
                    .querySelector("td:nth-child(3)")
                    .textContent.toLowerCase();

                if (
                    nama.includes(searchString) ||
                    username.includes(searchString) ||
                    email.includes(searchString)
                ) {
                    row.style.display = "";
                } else {
                    row.style.display = "none";
                }
            });
        });
    });

    // Notification Success
    setTimeout(function() {
        var successMessage = document.getElementById('successMessage');
        successMessage.style.opacity = '0';
        successMessage.style.transition = 'opacity 0.5s ease-in-out';

        setTimeout(function() {
            successMessage.style.display = 'none';
        }, 500);
    }, 5000);
</script>
