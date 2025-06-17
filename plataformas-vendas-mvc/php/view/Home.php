<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>

    <link rel="stylesheet" type="text/css" href="./../../css/container-layout/cabecalho.css">
    <link rel="stylesheet" type="text/css" href="./../../css/componentes/carrosel.css">
</head>
<body>
    <!-- cabeçalho -->
     <?php
     include '../view/Cabecalho.php';
     ?>
    <main class="container-principal">
        <div class="carrosel">
            <div class="slides">
            
                <img src="./../../src/img/destaques/pastilha.jfif" alt="Pastilha de freios Gol 1996">
                <img src="./../../src/img/destaques/mocinetica.jfif" alt="Homocinética">
                <img src="./../../src/img/destaques/parabrisa.jfif" alt="Parabrisa pálio 2003">
                <img src="./../../src/img/destaques/gol.jfif" alt="Bico Injetor Gol 1996-01">
            </div>
            <button class="prev" onclick="mudarSlide(-1)"></button>
            <button class="next" onclick="mudarSlide(1)"></button>
        </div>
    </main>
    <script src="./../../js/carrosel.js"></script>
</body>
</html>
