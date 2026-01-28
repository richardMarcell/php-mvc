<div class="p-4 bg-white rounded-lg shadow-sm space-y-4">
    <div>
        <h1 class="text-xl font-bold">Tambah Siswa</h1>
        <p>Menambahkan data siswa ke dalam sistem</p>
    </div>

    <form action="" method="post" class="space-y-4">
        <div class="grid grid-cols-2 gap-4">
            <div>
                <label for="name" class="block font-medium">Nama</label>
                <input type="text" name="name" id="name" class="w-full border rounded px-3 py-2 mt-1" required>
            </div>
            <div>
                <label for="nis" class="block font-medium">NIS</label>
                <input type="text" name="nis" id="nis" class="w-full border rounded px-3 py-2 mt-1" required>
            </div>
        </div>
        <div class="grid grid-cols-2 gap-4">
            <div>
                <label for="class" class="block font-medium">Kelas</label>
                <input type="text" name="class" id="class" class="w-full border rounded px-3 py-2 mt-1" required>
            </div>
            <div>
                <label for="phone_number" class="block font-medium">Nomor Telepon</label>
                <input type="text" name="phone_number" id="phone_number" class="w-full border rounded px-3 py-2 mt-1"
                    required>
            </div>
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Tambah Siswa</button>
        <a href="/students" class="bg-gray-300 text-gray-700 px-4 py-2 rounded">Batal</a>
    </form>
</div>