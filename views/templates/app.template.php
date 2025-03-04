<!DOCTYPE html>
<html lang="pt-br" class="scroll-smooth">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Asap:ital,wght@0,100..900;1,100..900&family=Inconsolata:wght@200..900&family=Maven+Pro:wght@400..900&display=swap" rel="stylesheet">

  <!-- CSS and TailwindCSS -->
  <link rel="stylesheet" href="/CSS/global.css">

  <script src="https://cdn.tailwindcss.com"></script>
  <script src="/JS/tailwindCustom.js"></script>

  <!-- Phosphor Icons -->
  <script src="https://unpkg.com/@phosphor-icons/web"></script>
  <!-- Library for Animations -->
  <script src="https://unpkg.com/scrollreveal"></script>

  <link rel="shortcut icon" sizes="32x32" href="/assets/icons/fav.png" type="image/png">
  <title>KK Portfólio</title>
</head>

<body class="bg-gray-200Custom text-gray-500Custom">
  <?php require base_path("/views/{$view}.view.php"); ?>

  <script src="JS/script.js"></script>
</body>
</html>