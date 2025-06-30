<?php

$URL= $_SERVER["REQUEST_URI"];
$Module= strtolower( trim($URL, "/"));



switch ($Module) {
    case '/':
        require_once "./modules/LandingPage/index.php";
        break;

    case 'home':
        require_once "./modules/LandingPage/index.php";
        break;
    
    case 'admin':
        require_once "./modules/AdminPanel/admin.php";
        break;

    case 'cartelera':
        require_once "./modules/LandingPage/cartelera.php";
        break;

    case 'extrenos':
        require_once "./modules/LandingPage/extrenos.php";
        break;

    case 'proximamente':
        require_once "./modules/LandingPage/proximamente.php";
        break;

    case 'precios':
        require_once "./modules/LandingPage/precios.php";
        break;

    case 'contacto':
        require_once "./modules/LandingPage/contacto.php";
        break;

   
    default:
        echo "<h1>Pagina no encontrada.......ERROR 404</h1>";
        break;
}