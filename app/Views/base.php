<!doctype html>
<html lang="en">

<head>
    <?= $this->include('layouts/head') ?>
</head>

<body>
    <?= $this->include('layouts/header') ?>

    <main role="main " class="container">

    <?= $this->renderSection('content') ?>
    </main>

    <?= $this->include('layouts/footer') ?>
    <?= $this->include('layouts/scripts') ?>
</body>
</html>