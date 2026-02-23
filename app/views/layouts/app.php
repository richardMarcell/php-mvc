<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?> - Sistem Sekolah</title>
    <link rel="stylesheet" href="/css/output.css">
</head>

<body class="bg-gray-100 min-h-screen flex flex-col">
    <?php require_once '../app/views/components/header.php' ?>
    <main class="flex-grow container mx-auto px-4 py-6 max-w-6xl">
        <?php require_once $content ?>
    </main>
    <?php require_once '../app/views/components/footer.php' ?>
</body>

</html>