<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>
    <?php require_once './app/views/components/header.php' ?>
    <main class="p-4 bg-gray-100">
        <?php require_once $content ?>
    </main>
    <?php require_once './app/views/components/footer.php' ?>
</body>

</html>