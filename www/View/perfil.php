<?php

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
    <title>Perfil</title>
</head>
<body>
    <div class="Container">
        <div class="Top">
            <h1>
                Perfil
            </h1>
            <i class="Sino">
                <img src="../images/icons8-bell-30.png" alt="ícone">
            </i>
            <i class="Config">
                <img src="../images/icons8-settings-30.png" alt="">
            </i>
        </div>
        <div class="Middle">
            <form method="post" enctype="multipart/form-data" action="">
                <label for="">Alterar foto</label>
                <input name="arquivo" type="file">
                <button type="submit">Enviar arquivo</button>
            </form>
        </div>
    </div>
</body>
</html>