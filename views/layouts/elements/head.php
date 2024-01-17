<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title><?php echo str_replace('.php', '', basename($_SERVER['SCRIPT_NAME'])); ?></title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;600;700;900&display=swap">

  <link href="/resources/assets/css/var.css" rel="stylesheet" />
  <link href="/resources/assets/css/default.css" rel="stylesheet" />
  <link href="/resources/assets/css/common.css" rel="stylesheet" />
  <link href="/resources/assets/css/style.css" rel="stylesheet" />
  <?php
    $dir = basename(dirname($_SERVER['SCRIPT_FILENAME'])); // Get the current directory name
    echo ($dir === 'agency' || $dir === 'admin') ? '<link href="/resources/assets/css/theme-' . $dir . '.css" rel="stylesheet" />' . "\n" : '';
  ?>
  <link href="/resources/assets/css/media.css" rel="stylesheet" />

</head>