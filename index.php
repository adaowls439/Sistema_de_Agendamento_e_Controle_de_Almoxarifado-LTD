<?php
/* Define a página atual pela URL */
$pagina = 'painel';

if (isset($_GET['i'])) {
    $pagina = $_GET['i'];
}

/* Carrega o header.php */
include 'public/header.php';

/* Carrega a página escolhida pelo usuário */
switch ($pagina) {
    case 'login':
        include 'public/view/login.php';
        break;

    case 'agdLab':
        include 'public/view/agdLab.php';
        break;

    case 'agdEquip':
        include 'public/view/agdEquip.php';
        break;

    case 'cadLab':
        include 'public/view/cadLab.php';
        break;

    case 'cadEquip':
        include 'public/view/cadEquip.php';
        break;

    case 'cadUsuario':
        include 'public/view/cadUser.php';
        break;

    case 'acpMeu':
        include 'public/view/acpMeu.php';
        break;

    case 'acpGeral':
        include 'public/view/acpGeral.php';
        break;

    case 'gerLab':
        include 'public/view/gerLab.php';
        break;

    case 'gerEquip':
        include 'public/view/gerEquip.php';
        break;

    case 'gerUser':
        include 'public/view/gerUser.php';
        break;

    default:
        include 'public/view/painel.php';
        break;
}

/* Carrega o footer.php */
include 'public/footer.php';
