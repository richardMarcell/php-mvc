<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa</title>
    <link rel="stylesheet" href="/css/output.css">
</head>

<body class="flex flex-col min-h-screen">
    <header class="bg-blue-600 text-white">
        <div class="container mx-auto p-4">
            <div class="flex justify-between items-center">
                <a href="/students" class="font-bold text-xl">Sistem Sekolah</a>
                <a href="/students/create" class="bg-white py-2 px-4 rounded-lg text-blue-600 font-semibold">+ Tambah
                    Siswa</a>
            </div>
        </div>
    </header>

    <main class="bg-gray-100 grow">
        <div class="container mx-auto p-4 space-y-4">
            <div class="bg-white shadow rounded-lg p-4">
                <h1 class="font-bold text-xl">Daftar Siswa</h1>
                <p>Menampilkan daftar siswa yang terdaftar</p>
            </div>

            <div class="bg-white shadow rounded-lg">
                <table class="min-w-full">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-4 py-2 text-left text-gray-600">No</th>
                            <th class="px-4 py-2 text-left text-gray-600">Nama</th>
                            <th class="px-4 py-2 text-left text-gray-600">NIS</th>
                            <th class="px-4 py-2 text-left text-gray-600">Kelas</th>
                            <th class="px-4 py-2 text-left text-gray-600">Nomor Telepon</th>
                            <th class="px-4 py-2 text-gray-600">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td class="px-4 py-2 ">1</td>
                            <td class="px-4 py-2 ">Andi</td>
                            <td class="px-4 py-2 ">1234</td>
                            <td class="px-4 py-2 ">11 TKJ 3</td>
                            <td class="px-4 py-2 ">08124523234</td>
                            <td class="px-4 py-2">
                                <div class="flex justify-center items-center gap-2">
                                    <a href="#" class="text-green-500 font-semibold">Detail</a>
                                    <a href="#" class="text-yellow-500 font-semibold">Edit</a>
                                    <a href="#" class="text-red-500 font-semibold">Hapus</a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>

    <footer class="bg-gray-800 text-white">
        <div class="container mx-auto p-4 text-center font-semibold">
            &copy <?= date('Y') ?> Sistem Sekolah - SMK Kristen Immanuel
        </div>
    </footer>
</body>

</html>