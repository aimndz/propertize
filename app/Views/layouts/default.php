<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    <script defer type="module" src="<?= base_url('js/index.js') ?>"></script>
    <title><?= $this->renderSection('title') ?></title>

    <link rel="stylesheet" href="<?= base_url('output.css') ?>">
</head>

<body class="bg-primary-900 font-montserrat">
    <?= $this->renderSection('content') ?>
    <?= $this->renderSection('footer') ?>

</body>

</html>