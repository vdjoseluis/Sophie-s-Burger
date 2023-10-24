<?php 
require('views/headerPage.php');

# MUESTRA EL CONTENIDO PRINCIPAL DE LA PÁGINA 

if (isset($_GET['content'])) {
    switch ($_GET['content']) {
        case 'carta':
            include('views/carta.php');
            break;
        case 'menus':
            include('views/menus.php');
            break;
        case 'pedidos':
            include('views/pedidos.php');
            break;
        case 'login':
            include('views/login.php');
            break;
        case 'formUser':
            include('views/formUser.php');
            break;
        default:
            include('views/main-content.php');
            break;
    }
} else {
    include('views/main-content.php');
}

require('views/footerPage.php');

?>