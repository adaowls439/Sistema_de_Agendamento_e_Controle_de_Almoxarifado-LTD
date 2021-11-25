<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Aplicação</title>

    <link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>


</head>
<div class="wrapper">
    <!-- Sidebar  -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3>Sistema Geral</h3>
            <strong>SG</strong>
        </div>

        <ul class="list-unstyled components">
            <li class="active">
                <a href="?i=painel" class="dropdown-toggle">
                    <i class="fas fa-home"></i>
                    Painel
                </a>
            </li>
            <li>
                <a href="#agendamentoSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="fas fa-copy"></i>
                    Agendamento
                </a>
                <ul class="collapse list-unstyled" id="agendamentoSubmenu">
                    <li>
                        <a href="?i=agdLab">Labóratorio</a>
                    </li>
                    <li>
                        <a href="?i=agdEquip">Equipamentos</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="?i=acpAgenda">
                    <i class="fas fa-image"></i>
                    Meus Agendamentos
                </a>
            </li>

            <li>
                <a href="#cadastroSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="fas fa-copy"></i>
                    Cadastro
                </a>
                <ul class="collapse list-unstyled" id="cadastroSubmenu">
                    <li>
                        <a href="?i=cadLab">Labóratorio</a>
                    </li>
                    <li>
                        <a href="?i=cadEquip">Equipamentos</a>
                    </li>
                    <li>
                        <a href="?i=cadUsuario">Usuário</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="?i=login">
                    <i class="fas fa-image"></i>
                    Login #Apenas para test
                </a>
            </li>
        </ul>
    </nav>

    <!-- Page Content  -->
    <div id="content">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">

                <button type="button" id="sidebarCollapse" class="btn btn-info">
                    <i class="fas fa-align-left"></i>
                </button>

            </div>
        </nav>