<div class="p-4 bg-white rounded-lg shadow-sm space-y-4">
    <div>
        <h1 class="text-xl font-bold">Daftar Siswa</h1>
        <p>Menampilkan daftar seluruh siswa.</p>
    </div>

    <a href="/students/create"
        class="inline-block mb-4 px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Tambah Siswa</a>

    <div class="overflow-x-auto bg-white rounded-lg shadow">
        <table class="min-w-full border border-gray-200">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-4 py-3 text-sm font-semibold text-left text-gray-700 border-b">No</th>
                    <th class="px-4 py-3 text-sm font-semibold text-left text-gray-700 border-b">Nama</th>
                    <th class="px-4 py-3 text-sm font-semibold text-left text-gray-700 border-b">NIS</th>
                    <th class="px-4 py-3 text-sm font-semibold text-left text-gray-700 border-b">Kelas</th>
                    <th class="px-4 py-3 text-sm font-semibold text-left text-gray-700 border-b">No. Telepon</th>
                </tr>
            </thead>

            <tbody class="divide-y divide-gray-200">
                <?php foreach ($students as $index => $student): ?>
                    <tr class="hover:bg-gray-50 transition">
                        <td class="px-4 py-2 text-sm text-gray-700">
                            <?= $index + 1 ?>
                        </td>
                        <td class="px-4 py-2 text-sm font-medium text-gray-900">
                            <?= $student['name'] ?>
                        </td>
                        <td class="px-4 py-2 text-sm text-gray-700">
                            <?= $student['nis'] ?>
                        </td>
                        <td class="px-4 py-2 text-sm text-gray-700">
                            <?= $student['class'] ?>
                        </td>
                        <td class="px-4 py-2 text-sm text-gray-700">
                            <?= $student['phone_number'] ?>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>

</div>