<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran kursus Sacode</title>

    <!-- Tailwind css - cdn  -->
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body class="bg-gray-100>
    
<!-- HEADER STAR -->

<HEADER class="border-2 m-5 p-5  shadow-md bg-white" >
    <h1 class="text-3x1 font-bold text-grasy-700mb-3">Pendaftaran kursus Sacode </h1>

<p class="text-xs text-gray-500">silakan lengkapi formulir dengan baik dan benar.</p>
</HEADER>

<!-- HEADER END -->

<!-- MAIN CONTENT STAR-->

<section class="border-2  m-5 p-5 shadow-md bg-white">

<?php
    // integrasi form tambah
    include ('form-tambah.php')

    ?>


</section>
<!-- MAIN CONTENT END-->

<!-- FOOTER  STAR-->
<footer class="border-2  m-5 p-5  shadow-md bg-white">
    <p class="text-gray-500 text-xs">Copyright & copy 2023 desanght by <b> Alpenus

</footer>
<!-- FOOTER  END-->

</body>
</html>