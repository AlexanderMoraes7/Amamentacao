<?php

$Info = "../images/icons8-about-64.png";
$Doadora = "../images/icons8-love-64.png";
$Feed = "../images/icons8-home-64.png";
$Unidade = "../images/icons8-hospital-64.png";
$Perfil = "../images/icons8-user-64.png";
$Subtitulo = "";
$Setting = "../images/icons8-settings-30.png";
$Bell = "../images/icons8-bell-30.png";
$Usuario = "../images/icons8-female-profile-100.png";

$currentPage = basename($_SERVER['PHP_SELF']);
if ($currentPage == "info.php") {
    $Info = "../images/icons8-about-64-white.png";
    $Subtitulo = "Infomações";
} else if ($currentPage == "sejadoadora.php") {
    $Doadora = "../images/icons8-love-64-white.png";
    $Subtitulo = "Formulário";
} else if ($currentPage == 'paginaprincipal.php') {
    $Feed = "../images/icons8-home-64-white.png";
    $Subtitulo = "Apoio á Amamentação";
} else if ($currentPage == "unidades.php") {
    $Unidade = "../images/icons8-hospital-64-white.png";
    $Subtitulo = "Unidades";
} else if ($currentPage == "perfil.php") {
    $Perfil = "../images/icons8-user-64-white.png";
    $Subtitulo = "Perfil";
} else if ($currentPage == "config.php") {
    $Setting = "../images/icons8-settings-30-margenta-amarelo.png";
    $Subtitulo = "Configuração";
} else if ($currentPage == "configsistema.php") {
    $Subtitulo = "Configuração do sistema";
}

$Topo = 
'<div class="Top">
<h1>
    '.$Subtitulo.'
</h1>
<button class="Sino"><img src="'.$Bell.'" alt="Notificações"></button>
<a class="Config" href="config.php"><img src="'.$Setting.'" alt="Configurações"></a>
</div>';

$Bottom =
'<div class="Bottom">
    <a class="Info" href="info.php"><img src="'.$Info.'" alt="Informações"></a>
    <a class="Doadora" href="sejadoadora.php"><img src="'.$Doadora.'" alt="Seja Doadora"></a>
    <a class="Feed" href="paginaprincipal.php"><img src="'.$Feed.'" alt="Página Principal"></a>
    <a class="Unidades" href="unidades.php"><img src="'.$Unidade.'" alt="Unidades de doação de leite materno"></a>
    <a class="Perfil" href="perfil.php"><img src="'.$Perfil.'" alt="Perfil do usuário"></a>
    <!-- Conteúdo da seção de baixo -->
</div>';
