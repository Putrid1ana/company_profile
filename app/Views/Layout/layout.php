<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->renderSection('title') ?>Healthy Milk</title>
    <link rel="stylesheet" href="/css/navbar.css">
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="stylesheet" href="/css/layout.css">
    <?= $this->renderSection('styles') ?> <!-- Additional styles for specific pages -->
</head>

<body>

    <!-- Navbar Section -->
    <?= view('Partials/navbar-new') ?>

    <!-- Main Content Section -->
    <main>
        <?= $this->renderSection('content') ?>
    </main>

    <!-- Footer Section -->
    <?= view('Partials/footer') ?>
    <!-- Link untuk FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- Optional Scripts for Layout -->
    <script src="/js/navbar.js"></script>
    <?= $this->renderSection('scripts') ?> <!-- Additional JS for specific pages -->

</body>

</html>