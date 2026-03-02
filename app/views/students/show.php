<div class="max-w-xl mx-auto">
    <div class="bg-white rounded-lg shadow p-6">
        <div class="mb-6">
            <h1 class="text-2xl font-bold text-gray-800">Detail Siswa</h1>
            <p class="text-gray-500">Informasi lengkap siswa</p>
        </div>

        <div class="space-y-4">
            <div class="border-b pb-3">
                <p class="text-sm text-gray-500">Nama Lengkap</p>
                <p class="text-lg font-medium text-gray-800">
                    <?= $student['name'] ?>
                </p>
            </div>

            <div class="border-b pb-3">
                <p class="text-sm text-gray-500">NIS</p>
                <p class="text-lg font-medium text-gray-800">
                    <?= $student['nis'] ?>
                </p>
            </div>

            <div class="border-b pb-3">
                <p class="text-sm text-gray-500">Kelas</p>
                <p class="text-lg font-medium text-gray-800">
                    <?= $student['class'] ?>
                </p>
            </div>

            <div class="pb-3">
                <p class="text-sm text-gray-500">Nomor Telepon</p>
                <p class="text-lg font-medium text-gray-800">
                    <?= $student['phone_number'] ?>
                </p>
            </div>
        </div>

        <div class="flex space-x-3 pt-4 mt-4 border-t">
            <a href="/students" class="bg-gray-200 text-gray-700 px-4 py-2 rounded font-medium hover:bg-gray-300">
                Kembali
            </a>
        </div>
    </div>
</div>