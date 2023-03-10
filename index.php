<?php include __DIR__ . '/html_header.php' ?>
<link rel="stylesheet" href="/css/index.css">

<body>
  <?php include __DIR__ . '/header.php' ?>

  <?= createBackgroundAnimation() ?>
  <main id="content">
    <h1 class="heading"><?= animatedChars('Hallihallo') ?></h1>
    <p>Ich bin der <?= animatedChars('Ludwig') ?>.</p>
  </main>

  <?php $displayJSPopup = true; ?>
  <?php include __DIR__ . '/footer.php' ?>
</body>

<?php include __DIR__ . '/html_footer.php' ?>