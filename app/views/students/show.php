<div class="p-4 bg-white rounded-lg shadow-sm space-y-4">
    <div>
        <h1 class="text-xl font-bold">Detail Siswa</h1>
        <p>Menampilkan detail siswa</p>
    </div>

    <div class="space-y-4">
        <div class="grid grid-cols-2 gap-4">
            <div>
                <label for="name" class="block font-medium">Nama</label>
                <input readonly type="text" name="name" id="name" class="w-full border rounded px-3 py-2 mt-1" required>
            </div>
            <div>
                <label for="nis" class="block font-medium">NIS</label>
                <input readonly type="text" name="nis" id="nis" class="w-full border rounded px-3 py-2 mt-1" required>
            </div>
        </div>
        <div class="grid grid-cols-2 gap-4">
            <div>
                <label for="class" class="block font-medium">Kelas</label>
                <input readonly type="text" name="class" id="class" class="w-full border rounded px-3 py-2 mt-1"
                    required>
            </div>
            <div>
                <label for="phone_number" class="block font-medium">Nomor Telepon</label>
                <input readonly type="text" name="phone_number" id="phone_number"
                    class="w-full border rounded px-3 py-2 mt-1" required>
            </div>
        </div>
        <a href="/students" class="bg-gray-300 text-gray-700 px-4 py-2 rounded">Kembali</a>
    </div>
</div>