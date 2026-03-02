<div class="space-y-4">
    <div class="bg-white rounded-lg shadow p-6">
        <div class="flex items-center justify-between">
            <div>
                <h1 class="text-2xl font-bold text-gray-800">Daftar Siswa</h1>
                <p class="text-gray-500">Total: <?= count($students) ?> siswa terdaftar</p>
            </div>
            <a href="/students/create" class="bg-blue-600 text-white px-4 py-2 rounded font-medium hover:bg-blue-700">
                + Tambah Siswa
            </a>
        </div>
    </div>

    <div class="bg-white rounded-lg shadow overflow-hidden">
        <table class="min-w-full">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-4 py-3 text-left text-sm font-semibold text-gray-600">No</th>
                    <th class="px-4 py-3 text-left text-sm font-semibold text-gray-600">Nama</th>
                    <th class="px-4 py-3 text-left text-sm font-semibold text-gray-600">NIS</th>
                    <th class="px-4 py-3 text-left text-sm font-semibold text-gray-600">Kelas</th>
                    <th class="px-4 py-3 text-left text-sm font-semibold text-gray-600">No. Telepon</th>
                    <th class="px-4 py-3 text-center text-sm font-semibold text-gray-600">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                <?php foreach ($students as $index => $student): ?>
                    <tr class="hover:bg-gray-50">
                        <td class="px-4 py-3 text-gray-600"><?= $index + 1 ?></td>
                        <td class="px-4 py-3 font-medium text-gray-800"><?= $student['name'] ?></td>
                        <td class="px-4 py-3 text-gray-600"><?= $student['nis'] ?></td>
                        <td class="px-4 py-3">
                            <span class="bg-blue-100 text-blue-700 px-2 py-1 rounded text-sm">
                                <?= $student['class'] ?>
                            </span>
                        </td>
                        <td class="px-4 py-3 text-gray-600"><?= $student['phone_number'] ?></td>
                        <td class="px-4 py-3">
                            <div class="flex justify-center space-x-2">
                                <a href="/students/<?= $student['id'] ?>"
                                    class="text-blue-600 hover:underline text-sm">Lihat</a>
                                <a href="/students/<?= $student['id'] ?>/edit"
                                    class="text-yellow-600 hover:underline text-sm">Edit</a>

                                <form onsubmit="confirm('Apakah Anda yakin Ingin Menghapus Data Siswa Ini?')"
                                    class="flex items-center" action="/students/<?= $student['id'] ?>" method="POST">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="text-red-600 hover:underline text-sm">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>