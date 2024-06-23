<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Test PHP</title>
</head>

<body class="h-full">
    <div class="min-h-full">

        <?php require("partials/nav.php") ?>
        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-bold tracking-tight text-white"><?= $heading ?></h1>
            </div>
        </main>
    </div>
</body>

</html>