@include('layout.main')

<!-- Content Area -->
<div class="flex-1 h-screen p-10 pt-20">
    <div class="flex justify-between">
    <h1 class="text-pastel-custom text-5xl font-medium w-1/2">Daftar Approval</h1>
    @if (session('success'))
    <div id="successMessage" class="bg-green-200 p-3 rounded-md shadow-sm mb-5 w-1/4">
        <div class="flex">
            <div class="flex-shrink-0">
                <svg class="h-5 w-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M2.293 8.293a1 1 0 010-1.414l6-6a1 1 0 011.414
                        0l6 6a1 1 0 01-1.414 1.414L11 4.414V16a1 1
                        0 01-2 0V4.414L3.707 8.707a1 1 0 01-1.414
                        0z" clip-rule="evenodd" />
                </svg>
            </div>
            <div class="ml-3">
                <p class="text-sm leading-5 font-medium text-green-500">
                    {{ session('success') }}
                </p>
            </div>
        </div>
    </div>
    @endif
    </div>
    <div class="flex justify-end mt-10">
        <input type="text" id="liveSearchInput"
            class="w-1/4 border border-gray-300 rounded-md p-2.5 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
            placeholder="Search...">
    </div>
    <div class="flex w-full bg-white mt-5 px-10 h-95 rounded-3xl">
        <div class="container mx-auto">
            <div class="flex justify-end mb-5 pt-5">
                <a href="{{ route('pet.index') }}" class="px-4 py-2 mx-2 bg-pastel-custom text-purple-custom rounded-xl hover:bg-purple-custom hover:text-pastel-custom font-semibold text-xl">All</a>
                <a href="{{ route('pet.index', ['type' => 'cat']) }}" class="px-4 py-2 mx-2 bg-pastel-custom text-purple-custom rounded-xl hover:bg-purple-custom hover:text-pastel-custom font-semibold text-xl">Cats</a>
                <a href="{{ route('pet.index', ['type' => 'dog']) }}" class="px-4 py-2 mx-2 bg-pastel-custom text-purple-custom rounded-xl hover:bg-purple-custom hover:text-pastel-custom font-semibold text-xl">Dogs</a>
            </div>
            <table class="table-auto border-collapse w-full mb-3">
                <thead>
                    <tr class="capitalize text-base leading-normal border-b-4 text-center">
                        <th class="py-3 px-1 text-left">#</th>
                        <th class="py-3 px-9 text-left">Nama</th>
                        <th class="py-3 px-2">Kategori</th>
                        <th class="py-3 px-6">Breed</th>
                        <th class="py-3 px-2">Status</th>
                        <th class="py-3 px-6">Aksi</th>
                    </tr>
                </thead>
                <?php $id = $posts->firstItem(); ?>
                @foreach ($posts as $post)
                <form action="{{ route('pet.update', $post->id) }}" method="POST">
                    <tbody class="text-gray-600 text-base font-medium">
                        <tr class="border-b-4 text-center border-gray-200 hover:bg-gray-100">
                            <td class="py-1.5 px-1 whitespace-nowrap text-left">
                                <span class="font-normal">{{ $id }}</span>
                            </td>
                            <td class="py-1.5 px-6 text-left">
                                <span>{{ $post->title }}</span>
                            </td>
                            <td class="py-1.5 px-6">
                                @if ($post->type === 'cat')
                                    <span class="bg-pastel-custom text-amber-500 py-1 px-3 rounded-full text-base">Cat</span>
                                @elseif ($post->type === 'dog')
                                    <span class="bg-purple-200 text-purple-custom py-1 px-3 rounded-full text-base">Dog</span>
                                @else
                                    <span>{{ $post->type }}</span>
                                @endif
                            </td>
                            <td class="py-1.5 px-6">
                                <span>{{ $post->breed }}</span>
                            </td>
                            <td class="py-1.5 px-2">
                                <select name="status" id="status" class="rounded-xl py-1 px-2 focus:outline-none font-bold bg-pastel-custom text-purple-custom">
                                    <option value="1" {{ $post->status == 1 ? 'selected' : '' }}>Not approved</option>
                                    <option value="2" {{ $post->status == 2 ? 'selected' : '' }}>Approved</option>
                                </select>
                            </td>
                            <td class="py-1.5 px-6">
                                <div class="flex item-center justify-center">
                                    <form method="POST" action="{{ route('pet.update', $post->id) }}">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit" class="border border-blue-500 text-blue-500 px-3.5 py-0.5 rounded-md hover:bg-blue-500 hover:text-white">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                    </form>
                                    <a href="{{ route('pet.index', $post->id) }}" class="border border-blue-500 text-blue-500 px-3.5 py-0.5 rounded-md ml-1 hover:bg-blue-500 hover:text-white">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <form method="POST" action="{{ route('pet.destroy', $post->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="border border-red-500 text-red-500 px-3.5 py-0.5 rounded-md ml-1 hover:bg-red-500 hover:text-white">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        <?php $id++; ?>
                        @if ($posts->isEmpty())
                            <tr>
                                <td colspan="5" class="py-1.5 px-6 text-center border-4 border-red-500 text-red-500">
                                    <span class="font-bold text-xl">Tidak ada data</span>
                                </td>
                            </tr>
                        @endif
                    </tbody>
                </form>
                @endforeach
                </form>
            </table>
            {{ $posts->links() }}
        </div>
    </div>
</div>

<script>
    // Live Search
    const liveSearchInput = document.getElementById('liveSearchInput');
    const tableRows = document.querySelectorAll('.table-auto tbody tr');

    liveSearchInput.addEventListener('keyup', function(e) {
        const searchString = e.target.value.toLowerCase();

        tableRows.forEach(row => {
            const rowText = row.innerText.toLowerCase();

            if (rowText.indexOf(searchString) > -1) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
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
