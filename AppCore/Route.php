<?php

$URL= $_SERVER["REQUEST_URI"];
$Module= strtolower( trim($URL, "/"));





switch ($Module) {

    // Landing Page
    case 'home':
        require_once "./modules/LandingPage/index.php";
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

    // Admin panel
     case 'admin':
        require_once "./modules/AdminPanel/admin.php";
        break;

     case 'agregar':
        require_once "./modules/AdminPanel/agregar.php";
        break;

     case 'publicados':
        require_once "./modules/AdminPanel/publicados.php";
        break;

     case 'portada':
        require_once "./modules/AdminPanel/portada.php";
        break;

    case 'error':
        require_once "./modules/AdminPanel/error.php";
        break;
   
    default:
       require_once "./modules/AdminPanel/error.php";
        break;
}