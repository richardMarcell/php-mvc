<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa</title>
    <link rel="stylesheet" href="/css/output.css">
</head>

<body class="bg-gray-100 min-h-screen flex flex-col">
    <header class="bg-blue-500 text-white">
        <div class="flex justify-between mx-auto container py-4 items-center">
            <a href="/" class="font-bold text-2xl">Sistem Sekolah</a>
            <a href="/students/create" class="bg-white text-blue-600 px-4 py-2 rounded-lg">+ Tambah Siswa</a>
        </div>
    </header>

    <main class="space-y-4 flex-grow">
        <div class="mt-8 p-6 container mx-auto bg-white shadow rounded-lg">
            <h1 class="font-bold text-2xl">Daftar Siswa</h1>
            <p>Menampilkan daftar siswa yang sudah terdaftar</p>
        </div>

        <div class="container mx-auto bg-white shadow rounded-lg">
            <table class="w-full">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="py-2 px-4">No</th>
                        <th class="py-2 px-4">Nama</th>
                        <th class="py-2 px-4">NIS</th>
                        <th class="py-2 px-4">Kelas</th>
                        <th class="py-2 px-4">No. Telepon</th>
                        <th class="py-2 px-4">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td class="py-2 px-4 text-center">1</td>
                        <td class="py-2 px-4 text-center">Richard</td>
                        <td class="py-2 px-4 text-center">1234</td>
                        <td class="py-2 px-4 text-center">XI TKJ 3</td>
                        <td class="py-2 px-4 text-center">081554098919</td>
                        <td class="py-2 px-4 text-center">
                            <div class="space-x-2">
                                <a href="#" class="text-green-500 font-medium">Detail</a>
                                <a href="#" class="text-yellow-500 font-medium">Edit</a>
                                <a href="#" class="text-red-500 font-medium">Hapus</a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>

    <footer>
        <div class="bg-gray-600 text-center text-white p-4">
            &copy 2026 Sistem Sekolah - SMK Kristen Immanuel Pontianak
        </div>
    </footer>
</body>

</html>