<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/registro.css">
    <script src="https://kit.fontawesome.com/e05c1d4d14.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body>
    <!--ESTA CLASE VA A SERVIR PARA NO COPIAR Y PEGAR EL NAV, ADEMAS VA A IMPORTAR LOS ESTILOS DE BOOSTRAP-->
    <h1 class="text-center">Mypage</h1>
    
    <div class="hamburger-menu">
      <input id="menu__toggle" type="checkbox" />
      <label class="menu__btn" for="menu__toggle">
        <span></span>
      </label>
    
        <ul class="menu__box">
          <li><a class="menu__item" href="index.php?pagina=inicio">Inicio</a></li>
          <li><a class="menu__item" href="index.php?pagina=registro">Registro</a></li>
          <li><a class="menu__item" href="index.php?pagina=ingreso">Ingreso</a></li>
          <li class="bg-danger"><a class="menu__item" href="index.php?pagina=salir">Salir</a></li>
        </ul>
      </div>

    <div>
        <?php
        
        //isset determina si hay una variable o no

        if (isset($_GET["pagina"])){

        
        if($_GET["pagina"] == "registro" || 
        $_GET["pagina"] == "ingreso" ||
        $_GET["pagina"] == "inicio" ||
        $_GET["pagina"] == "salir" ){


         include "paginas/".$_GET["pagina"].".php";   

        }else {
            include "paginas/error404.php";
        }
    }else {
        include "paginas/registro.php";
    }

    ?>

    </div>
    </div>
</body>
</html>