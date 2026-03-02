<div class="max-w-xl mx-auto">
    <div class="bg-white rounded-lg shadow p-6">
        <div class="mb-6">
            <h1 class="text-2xl font-bold text-gray-800">Tambah Siswa</h1>
            <p class="text-gray-500">Masukkan data siswa baru</p>
        </div>

        <form action="/students" method="post" class="space-y-4">
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap</label>
                <input type="text" name="name" id="name" placeholder="Masukkan nama"
                    class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    required>
            </div>

            <div>
                <label for="nis" class="block text-sm font-medium text-gray-700 mb-1">NIS</label>
                <input type="text" name="nis" id="nis" placeholder="Contoh: 12345"
                    class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    required>
            </div>

            <div>
                <label for="class" class="block text-sm font-medium text-gray-700 mb-1">Kelas</label>
                <input type="text" name="class" id="class" placeholder="Contoh: 11 TKJ 1"
                    class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    required>
            </div>

            <div>
                <label for="phone_number" class="block text-sm font-medium text-gray-700 mb-1">Nomor Telepon</label>
                <input type="text" name="phone_number" id="phone_number" placeholder="Contoh: 081234567890"
                    class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    required>
            </div>

            <div class="flex space-x-3 pt-4">
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded font-medium hover:bg-blue-700">
                    Simpan
                </button>
                <a href="/students" class="bg-gray-200 text-gray-700 px-4 py-2 rounded font-medium hover:bg-gray-300">
                    Batal
                </a>
            </div>
        </form>
    </div>
</div>