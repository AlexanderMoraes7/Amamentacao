<?php

include("protect.php");
include("../Model/unClasseConfig.php");

if(!isset($_SESSION["nome"])) {
    die("Você não está autorizado a acessar essa página.<p><a href=\"index.html\">Logar</a></p>");
}

if(isset($_FILES["arquivo"])){
    $arquivo = $_FILES["arquivo"];
    
    if($arquivo["size"] > 2097152){
        die("Arquivo muito grande! Max: 2MB");
    }

    if($arquivo["error"]){
        die("Erro ao enviar o arquivo");
    }

    $pasta = "../Fotos_perfil/";
    $nomeArquivo = uniqid();
    $extensao = strtolower(pathinfo($arquivo["name"], PATHINFO_EXTENSION));

    date_default_timezone_set('America/Sao_Paulo');
    $time = date('Y-m-d H:i:s');

    // var_dump($_FILES["arquivo"]);
    // print_r(nl2br($extensao.PHP_EOL));

    $enviado = move_uploaded_file($arquivo["tmp_name"], $pasta . $nomeArquivo . "." . $extensao);
    $path = $pasta . $nomeArquivo . "." . $extensao;
    if($enviado){
        $mysqli->query("INSERT INTO fotos_perfil (idusuario, nome, data_upload, path) VALUES (25, '$nomeArquivo', '$time', '$path')") or die($mysqli->error);
    } else {
        die("Falha ao enviar a foto!");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/perfil.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <title>Configurações de perfil</title>
</head>
<body>
    <div class="Container">
        <div class="Top">
            <h1>
                Perfil
            </h1>
            <button class="Sino"><img src="../images/icons8-bell-30.png" alt="Notificações"></button>
            <a class="Config" href="config.php"><img src="../images/icons8-settings-30.png" alt="Configurações"></a>
        </div>
        <div class="Middle">
            <form method="post" enctype="multipart/form-data" action="">
                <label for="">Alterar foto</label>
                <input name="arquivo" type="file">
                <button type="submit">Enviar arquivo</button>
            </form>
        </div>
        <div class="Bottom">
        <a class="Info" href="info.php"><img src="../images/icons8-info-64.png" alt="Informações"></a>
        <a class="Doadora" href="sejadoadora.php"><img src="../images/icons8-love-64.png" alt="Seja Doadora"></a>
        <a class="Feed" href="paginaprincipal.php"><img src="../images/icons8-home-64.png" alt="Página Principal"></a>
        <a class="Unidades" href="unidades.php"><img src="../images/icons8-hospital-64.png" alt="Unidades de doação de leite materno"></a>
        <a class="Perfil" href="perfil.php"><img src="../images/icons8-user-64-white.png" alt="Perfil do usuário"></a>
        <!-- Conteúdo da seção de baixo -->
        </div>
    </div>
</body>
</html>